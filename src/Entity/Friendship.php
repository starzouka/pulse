<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\FriendshipRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FriendshipRepository::class)]
#[ORM\Table(name: 'friendships')]
class Friendship
{
    
    #[ORM\Id]
    #[ORM\Column(name: 'user_id1', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $userId1;
    
    #[ORM\Id]
    #[ORM\Column(name: 'user_id2', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $userId2;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    public function getUserId1(): int
    {
        return $this->userId1;
    }

    public function setUserId1(int $userId1): static
    {
        $this->userId1 = $userId1;

        return $this;
    }

    public function getUserId2(): int
    {
        return $this->userId2;
    }

    public function setUserId2(int $userId2): static
    {
        $this->userId2 = $userId2;

        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
