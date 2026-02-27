<?php

declare(strict_types=1);

namespace App\Doctrine;

use App\Entity\Game;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\String\Slugger\SluggerInterface;

final class GameSlugSubscriber implements EventSubscriber
{
    public function __construct(
        private readonly SluggerInterface $slugger,
    ) {
    }

    public function getSubscribedEvents(): array
    {
        return [
            Events::prePersist,
            Events::postPersist,
            Events::preUpdate,
        ];
    }

    public function prePersist(LifecycleEventArgs $event): void
    {
        $entity = $event->getObject();
        if (!$entity instanceof Game) {
            return;
        }

        if (trim($entity->getSlug()) !== '') {
            return;
        }

        $entity->setSlug($this->buildTemporarySlug((string) $entity->getName()));
    }

    public function postPersist(LifecycleEventArgs $event): void
    {
        $entity = $event->getObject();
        if (!$entity instanceof Game) {
            return;
        }

        $gameId = $entity->getGameId();
        if (!is_int($gameId) || $gameId <= 0) {
            return;
        }

        $finalSlug = $this->buildFinalSlug((string) $entity->getName(), $gameId);
        if ($entity->getSlug() === $finalSlug) {
            return;
        }

        $event->getObjectManager()->getConnection()->update(
            'games',
            ['slug' => $finalSlug],
            ['game_id' => $gameId],
        );

        $entity->setSlug($finalSlug);
    }

    public function preUpdate(PreUpdateEventArgs $event): void
    {
        $entity = $event->getObject();
        if (!$entity instanceof Game) {
            return;
        }

        $gameId = $entity->getGameId();
        if (!is_int($gameId) || $gameId <= 0) {
            return;
        }

        $finalSlug = $this->buildFinalSlug((string) $entity->getName(), $gameId);
        if ($entity->getSlug() === $finalSlug) {
            return;
        }

        $entity->setSlug($finalSlug);
        $manager = $event->getObjectManager();
        $manager->getUnitOfWork()->recomputeSingleEntityChangeSet(
            $manager->getClassMetadata(Game::class),
            $entity,
        );
    }

    private function buildTemporarySlug(string $name): string
    {
        $base = $this->slugifyName($name);

        return sprintf('%s-%d', $base, random_int(100000, 999999));
    }

    private function buildFinalSlug(string $name, int $id): string
    {
        return sprintf('%s-%d', $this->slugifyName($name), $id);
    }

    private function slugifyName(string $name): string
    {
        $slug = strtolower($this->slugger->slug(trim($name) !== '' ? $name : 'game')->toString());

        return $slug !== '' ? $slug : 'game';
    }
}
