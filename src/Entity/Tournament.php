<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\TournamentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TournamentRepository::class)]
#[ORM\Table(name: 'tournaments')]
class Tournament
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'tournament_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $tournamentId = null;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'organizer_user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'RESTRICT')]
    private User $organizerUserId;
    
    #[ORM\ManyToOne(targetEntity: Game::class)]
    #[ORM\JoinColumn(name: 'game_id', referencedColumnName: 'game_id', nullable: false, onDelete: 'RESTRICT')]
    private Game $gameId;
    
    #[ORM\Column(name: 'title', type: Types::STRING, length: 180)]
    private string $title;
    
    #[ORM\Column(name: 'description', type: Types::TEXT, nullable: true)]
    private ?string $description = null;
    
    #[ORM\Column(name: 'rules', type: Types::TEXT, nullable: true)]
    private ?string $rules = null;
    
    #[ORM\Column(name: 'start_date', type: Types::DATE_MUTABLE)]
    private \DateTimeInterface $startDate;
    
    #[ORM\Column(name: 'end_date', type: Types::DATE_MUTABLE)]
    private \DateTimeInterface $endDate;
    
    #[ORM\Column(name: 'registration_deadline', type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $registrationDeadline = null;
    
    #[ORM\Column(name: 'max_teams', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $maxTeams;
    
    #[ORM\Column(name: 'format', type: Types::STRING, length: 3, options: ['default' => 'BO1'])]
    private string $format = 'BO1';

    #[ORM\Column(name: 'registration_mode', type: Types::STRING, length: 8, options: ['default' => 'OPEN'])]
    private string $registrationMode = 'OPEN';
    
    #[ORM\Column(name: 'prize_pool', type: Types::DECIMAL, precision: 12, scale: 2, options: ['default' => '0.00'])]
    private string $prizePool = '0.00';
    
    #[ORM\Column(name: 'prize_description', type: Types::STRING, length: 255, nullable: true)]
    private ?string $prizeDescription = null;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 9, options: ['default' => 'DRAFT'])]
    private string $status = 'DRAFT';

    #[ORM\Column(name: 'photo_path', type: Types::STRING, length: 255, nullable: true)]
    private ?string $photoPath = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $updatedAt;

    public function getTournamentId(): ?int
    {
        return $this->tournamentId;
    }

    public function setTournamentId(?int $tournamentId): static
    {
        $this->tournamentId = $tournamentId;

        return $this;
    }

    public function getOrganizerUserId(): ?User
    {
        return $this->organizerUserId;
    }

    public function setOrganizerUserId(?User $organizerUserId): static
    {
        $this->organizerUserId = $organizerUserId;

        return $this;
    }

    public function getGameId(): ?Game
    {
        return $this->gameId;
    }

    public function setGameId(?Game $gameId): static
    {
        $this->gameId = $gameId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getRules(): ?string
    {
        return $this->rules;
    }

    public function setRules(?string $rules): static
    {
        $this->rules = $rules;

        return $this;
    }

    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTime $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTime $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getRegistrationDeadline(): ?\DateTime
    {
        return $this->registrationDeadline;
    }

    public function setRegistrationDeadline(?\DateTime $registrationDeadline): static
    {
        $this->registrationDeadline = $registrationDeadline;

        return $this;
    }

    public function getMaxTeams(): ?int
    {
        return $this->maxTeams;
    }

    public function setMaxTeams(int $maxTeams): static
    {
        $this->maxTeams = $maxTeams;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): static
    {
        $this->format = $format;

        return $this;
    }

    public function getPrizePool(): ?string
    {
        return $this->prizePool;
    }

    public function setPrizePool(string $prizePool): static
    {
        $this->prizePool = $prizePool;

        return $this;
    }

    public function getPrizeDescription(): ?string
    {
        return $this->prizeDescription;
    }

    public function setPrizeDescription(?string $prizeDescription): static
    {
        $this->prizeDescription = $prizeDescription;

        return $this;
    }

    public function getRegistrationMode(): ?string
    {
        return $this->registrationMode;
    }

    public function setRegistrationMode(string $registrationMode): static
    {
        $this->registrationMode = $registrationMode;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getPhotoPath(): ?string
    {
        return $this->photoPath;
    }

    public function setPhotoPath(?string $photoPath): static
    {
        $this->photoPath = $photoPath;

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

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
