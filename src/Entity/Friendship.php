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
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id1', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private User $userId1;
    
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id2', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private User $userId2;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    public function getUserId1(): ?User
    {
        return $this->userId1;
    }

    public function setUserId1(?User $userId1): static
    {
        $this->userId1 = $userId1;

        return $this;
    }

    public function getUserId2(): ?User
    {
        return $this->userId2;
    }

    public function setUserId2(?User $userId2): static
    {
        $this->userId2 = $userId2;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
