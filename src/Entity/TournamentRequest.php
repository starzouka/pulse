<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'tournament_requests')]
class TournamentRequest
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'request_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $requestId = null;
    
    #[ORM\Column(name: 'organizer_user_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $organizerUserId;
    
    #[ORM\Column(name: 'game_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $gameId;
    
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
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 8, options: ['default' => 'PENDING'])]
    private string $status = 'PENDING';
    
    #[ORM\Column(name: 'admin_response_note', type: Types::TEXT, nullable: true)]
    private ?string $adminResponseNote = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'reviewed_by_admin_id', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $reviewedByAdminId = null;
    
    #[ORM\Column(name: 'reviewed_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $reviewedAt = null;

    public function getRequestId(): ?int
    {
        return $this->requestId;
    }

    public function setRequestId(?int $requestId): static
    {
        $this->requestId = $requestId;

        return $this;
    }

    public function getOrganizerUserId(): int
    {
        return $this->organizerUserId;
    }

    public function setOrganizerUserId(int $organizerUserId): static
    {
        $this->organizerUserId = $organizerUserId;

        return $this;
    }

    public function getGameId(): int
    {
        return $this->gameId;
    }

    public function setGameId(int $gameId): static
    {
        $this->gameId = $gameId;

        return $this;
    }

    public function getTitle(): string
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

    public function getStartDate(): \DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): \DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getRegistrationDeadline(): ?\DateTimeInterface
    {
        return $this->registrationDeadline;
    }

    public function setRegistrationDeadline(?\DateTimeInterface $registrationDeadline): static
    {
        $this->registrationDeadline = $registrationDeadline;

        return $this;
    }

    public function getMaxTeams(): int
    {
        return $this->maxTeams;
    }

    public function setMaxTeams(int $maxTeams): static
    {
        $this->maxTeams = $maxTeams;

        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setFormat(string $format): static
    {
        $this->format = $format;

        return $this;
    }

    public function getRegistrationMode(): string
    {
        return $this->registrationMode;
    }

    public function setRegistrationMode(string $registrationMode): static
    {
        $this->registrationMode = $registrationMode;

        return $this;
    }

    public function getPrizePool(): string
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

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getAdminResponseNote(): ?string
    {
        return $this->adminResponseNote;
    }

    public function setAdminResponseNote(?string $adminResponseNote): static
    {
        $this->adminResponseNote = $adminResponseNote;

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

    public function getReviewedByAdminId(): ?int
    {
        return $this->reviewedByAdminId;
    }

    public function setReviewedByAdminId(?int $reviewedByAdminId): static
    {
        $this->reviewedByAdminId = $reviewedByAdminId;

        return $this;
    }

    public function getReviewedAt(): ?\DateTimeInterface
    {
        return $this->reviewedAt;
    }

    public function setReviewedAt(?\DateTimeInterface $reviewedAt): static
    {
        $this->reviewedAt = $reviewedAt;

        return $this;
    }
}
