<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
#[UniqueEntity(fields: ['email'], message: 'Cet email est deja utilise.')]
#[UniqueEntity(fields: ['username'], message: 'Ce username est deja utilise.')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    public const DOMAIN_ROLE_PLAYER = 'PLAYER';
    public const DOMAIN_ROLE_CAPTAIN = 'CAPTAIN';
    public const DOMAIN_ROLE_ORGANIZER = 'ORGANIZER';
    public const DOMAIN_ROLE_ADMIN = 'ADMIN';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'user_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $userId = null;

    #[ORM\Column(name: 'username', type: Types::STRING, length: 50)]
    #[Assert\NotBlank(message: 'Le username est obligatoire.')]
    #[Assert\Length(min: 3, max: 50)]
    private string $username = '';

    #[ORM\Column(name: 'email', type: Types::STRING, length: 190)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'email n'est pas valide.")]
    #[Assert\Length(max: 190)]
    private string $email = '';

    #[ORM\Column(name: 'password_hash', type: Types::STRING, length: 255)]
    #[Assert\NotBlank(message: 'Le mot de passe est obligatoire.')]
    #[Assert\Length(min: 8, max: 255)]
    private string $passwordHash = '';

    #[ORM\Column(name: 'role', type: Types::STRING, length: 9, options: ['default' => self::DOMAIN_ROLE_PLAYER])]
    #[Assert\NotBlank(message: 'Le role est obligatoire.')]
    #[Assert\Choice(choices: [self::DOMAIN_ROLE_PLAYER, self::DOMAIN_ROLE_CAPTAIN, self::DOMAIN_ROLE_ORGANIZER, self::DOMAIN_ROLE_ADMIN], message: 'Role invalide.')]
    private string $role = self::DOMAIN_ROLE_PLAYER;

    #[ORM\Column(name: 'display_name', type: Types::STRING, length: 80)]
    #[Assert\NotBlank(message: 'Le display name est obligatoire.')]
    #[Assert\Length(min: 2, max: 80)]
    private string $displayName = '';

    #[ORM\Column(name: 'bio', type: Types::TEXT, nullable: true)]
    #[Assert\Length(max: 2000)]
    private ?string $bio = null;

    #[ORM\Column(name: 'phone', type: Types::STRING, length: 30, nullable: true)]
    #[Assert\Length(max: 30)]
    #[Assert\Regex(pattern: '/^$|^[0-9+\-\s().]{6,30}$/', message: 'Telephone invalide.')]
    private ?string $phone = null;

    #[ORM\Column(name: 'country', type: Types::STRING, length: 80, nullable: true)]
    #[Assert\Length(max: 80)]
    private ?string $country = null;

    #[ORM\Column(name: 'birth_date', type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\LessThan('today', message: 'La date de naissance doit etre dans le passe.')]
    private ?\DateTimeInterface $birthDate = null;

    #[ORM\Column(name: 'gender', type: Types::STRING, length: 7, nullable: true, options: ['default' => 'UNKNOWN'])]
    #[Assert\Choice(choices: ['UNKNOWN', 'MALE', 'FEMALE', 'OTHER'], message: 'Genre invalide.')]
    private ?string $gender = 'UNKNOWN';

    #[ORM\Column(name: 'email_verified', type: Types::BOOLEAN, options: ['default' => false])]
    private bool $emailVerified = false;

    #[ORM\Column(name: 'is_active', type: Types::BOOLEAN, options: ['default' => true])]
    private bool $isActive = true;

    #[ORM\Column(name: 'last_login_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lastLoginAt = null;

    #[ORM\ManyToOne(targetEntity: Image::class)]
    #[ORM\JoinColumn(name: 'profile_image_id', referencedColumnName: 'image_id', nullable: true, onDelete: 'SET NULL')]
    private ?Image $profileImageId = null;

    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $updatedAt;

    #[ORM\Column(name: 'reset_password_token_hash', type: Types::STRING, length: 64, nullable: true)]
    private ?string $resetPasswordTokenHash = null;

    #[ORM\Column(name: 'reset_password_expires_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $resetPasswordExpiresAt = null;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = strtolower(trim($email));

        return $this;
    }

    public function getPasswordHash(): ?string
    {
        return $this->passwordHash;
    }

    public function setPasswordHash(string $passwordHash): static
    {
        $this->passwordHash = $passwordHash;

        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $normalized = strtoupper(trim($role));
        if (!in_array($normalized, [
            self::DOMAIN_ROLE_PLAYER,
            self::DOMAIN_ROLE_CAPTAIN,
            self::DOMAIN_ROLE_ORGANIZER,
            self::DOMAIN_ROLE_ADMIN,
        ], true)) {
            $normalized = self::DOMAIN_ROLE_PLAYER;
        }

        $this->role = $normalized;

        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName): static
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): static
    {
        $this->bio = $bio;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(?\DateTimeInterface $birthDate): static
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function isEmailVerified(): bool
    {
        return $this->emailVerified;
    }

    public function setEmailVerified(bool $emailVerified): static
    {
        $this->emailVerified = $emailVerified;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->emailVerified;
    }

    public function setIsVerified(bool $verified): static
    {
        $this->emailVerified = $verified;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getLastLoginAt(): ?\DateTimeInterface
    {
        return $this->lastLoginAt;
    }

    public function setLastLoginAt(?\DateTimeInterface $lastLoginAt): static
    {
        $this->lastLoginAt = $lastLoginAt;

        return $this;
    }

    public function getProfileImageId(): ?Image
    {
        return $this->profileImageId;
    }

    public function setProfileImageId(?Image $profileImageId): static
    {
        $this->profileImageId = $profileImageId;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getResetPasswordTokenHash(): ?string
    {
        return $this->resetPasswordTokenHash;
    }

    public function setResetPasswordTokenHash(?string $resetPasswordTokenHash): static
    {
        $this->resetPasswordTokenHash = $resetPasswordTokenHash;

        return $this;
    }

    public function getResetPasswordExpiresAt(): ?\DateTimeInterface
    {
        return $this->resetPasswordExpiresAt;
    }

    public function setResetPasswordExpiresAt(?\DateTimeInterface $resetPasswordExpiresAt): static
    {
        $this->resetPasswordExpiresAt = $resetPasswordExpiresAt;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = ['ROLE_PLAYER'];

        if ($this->role === self::DOMAIN_ROLE_CAPTAIN) {
            $roles[] = 'ROLE_CAPTAIN';
        }

        if ($this->role === self::DOMAIN_ROLE_ORGANIZER) {
            $roles[] = 'ROLE_ORGANIZER';
        }

        if ($this->role === self::DOMAIN_ROLE_ADMIN) {
            $roles[] = 'ROLE_ADMIN';
        }

        return array_values(array_unique($roles));
    }

    public function getPassword(): string
    {
        return $this->passwordHash;
    }

    public function setPassword(string $password): static
    {
        $this->passwordHash = $password;

        return $this;
    }

    public function eraseCredentials(): void
    {
        // No temporary sensitive data is stored on this entity.
    }
}
