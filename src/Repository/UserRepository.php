<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPasswordHash($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    public function findOneByValidResetPasswordTokenHash(string $tokenHash, \DateTimeInterface $now): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.resetPasswordTokenHash = :tokenHash')
            ->andWhere('u.resetPasswordExpiresAt IS NOT NULL')
            ->andWhere('u.resetPasswordExpiresAt >= :now')
            ->setParameter('tokenHash', $tokenHash)
            ->setParameter('now', $now)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @return list<User>
     */
    public function searchUsers(?User $excludeUser, ?string $query, ?string $role, ?string $country, int $limit = 30): array
    {
        $builder = $this->createQueryBuilder('user')
            ->orderBy('user.updatedAt', 'DESC')
            ->setMaxResults($limit);

        if ($excludeUser instanceof User && $excludeUser->getUserId() !== null) {
            $builder
                ->andWhere('user.userId != :excludeUserId')
                ->setParameter('excludeUserId', $excludeUser->getUserId());
        }

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere('(LOWER(user.username) LIKE :query OR LOWER(user.displayName) LIKE :query)')
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $roleValue = strtoupper(trim((string) $role));
        if (in_array($roleValue, [User::DOMAIN_ROLE_PLAYER, User::DOMAIN_ROLE_CAPTAIN, User::DOMAIN_ROLE_ORGANIZER, User::DOMAIN_ROLE_ADMIN], true)) {
            $builder
                ->andWhere('user.role = :role')
                ->setParameter('role', $roleValue);
        }

        $countryValue = trim((string) $country);
        if ($countryValue !== '') {
            $builder
                ->andWhere('LOWER(COALESCE(user.country, \'\')) = :country')
                ->setParameter('country', mb_strtolower($countryValue));
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @param list<int> $userIds
     * @return list<User>
     */
    public function findByUserIds(array $userIds): array
    {
        $filteredIds = array_values(array_unique(array_filter($userIds, static fn (mixed $id): bool => is_int($id) && $id > 0)));
        if ($filteredIds === []) {
            return [];
        }

        return $this->createQueryBuilder('user')
            ->andWhere('user.userId IN (:userIds)')
            ->setParameter('userIds', $filteredIds)
            ->orderBy('user.displayName', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<User>
     */
    public function searchForAdmin(
        ?string $query,
        ?string $role,
        ?bool $isActive,
        ?bool $emailVerified,
        string $sortBy = 'created_at',
        string $direction = 'desc',
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('user')
            ->leftJoin('user.profileImageId', 'profileImage')
            ->addSelect('profileImage')
            ->setMaxResults($limit);

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere(
                    'LOWER(user.username) LIKE :query
                    OR LOWER(user.email) LIKE :query
                    OR LOWER(user.displayName) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($search) . '%');
        }

        $roleValue = strtoupper(trim((string) $role));
        if (in_array($roleValue, [
            User::DOMAIN_ROLE_PLAYER,
            User::DOMAIN_ROLE_CAPTAIN,
            User::DOMAIN_ROLE_ORGANIZER,
            User::DOMAIN_ROLE_ADMIN,
        ], true)) {
            $builder
                ->andWhere('user.role = :role')
                ->setParameter('role', $roleValue);
        }

        if ($isActive !== null) {
            $builder
                ->andWhere('user.isActive = :isActive')
                ->setParameter('isActive', $isActive);
        }

        if ($emailVerified !== null) {
            $builder
                ->andWhere('user.emailVerified = :emailVerified')
                ->setParameter('emailVerified', $emailVerified);
        }

        $sortMap = [
            'id' => 'user.userId',
            'username' => 'user.username',
            'email' => 'user.email',
            'role' => 'user.role',
            'active' => 'user.isActive',
            'verified' => 'user.emailVerified',
            'country' => 'user.country',
            'created_at' => 'user.createdAt',
            'last_login_at' => 'user.lastLoginAt',
        ];

        $sortKey = strtolower(trim($sortBy));
        $sortField = $sortMap[$sortKey] ?? 'user.createdAt';
        $sortDirection = strtoupper(trim($direction)) === 'ASC' ? 'ASC' : 'DESC';

        $builder->orderBy($sortField, $sortDirection);
        if ($sortField !== 'user.userId') {
            $builder->addOrderBy('user.userId', 'DESC');
        }

        return $builder->getQuery()->getResult();
    }
}
