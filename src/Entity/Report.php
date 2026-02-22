<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\ReportRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReportRepository::class)]
#[ORM\Table(name: 'reports')]
class Report
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'report_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $reportId = null;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'reporter_user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Le reporter est obligatoire.')]
    private User $reporterUserId;
    
    #[ORM\Column(name: 'target_type', type: Types::STRING, length: 7)]
    #[Assert\Choice(choices: ['POST', 'COMMENT', 'USER', 'TEAM'], message: 'Type cible invalide.')]
    private string $targetType;
    
    #[ORM\Column(name: 'target_id', type: Types::BIGINT, options: ['unsigned' => true])]
    #[Assert\NotBlank(message: "L'identifiant cible est obligatoire.")]
    #[Assert\Regex(pattern: '/^[1-9][0-9]*$/', message: "L'identifiant cible doit etre positif.")]
    private string $targetId;
    
    #[ORM\Column(name: 'reason', type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Le motif est obligatoire.')]
    #[Assert\Length(max: 5000)]
    private string $reason;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 9, options: ['default' => 'OPEN'])]
    #[Assert\Choice(choices: ['OPEN', 'IN_REVIEW', 'CLOSED'], message: 'Statut invalide.')]
    private string $status = 'OPEN';
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'handled_by_admin_id', referencedColumnName: 'user_id', nullable: true, onDelete: 'SET NULL')]
    private ?User $handledByAdminId;
    
    #[ORM\Column(name: 'handled_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $handledAt = null;
    
    #[ORM\Column(name: 'admin_note', type: Types::TEXT, nullable: true)]
    #[Assert\Length(max: 5000)]
    private ?string $adminNote = null;

    public function getReportId(): ?int
    {
        return $this->reportId;
    }

    public function setReportId(?int $reportId): static
    {
        $this->reportId = $reportId;

        return $this;
    }

    public function getReporterUserId(): ?User
    {
        return $this->reporterUserId;
    }

    public function setReporterUserId(?User $reporterUserId): static
    {
        $this->reporterUserId = $reporterUserId;

        return $this;
    }

    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    public function setTargetType(string $targetType): static
    {
        $this->targetType = $targetType;

        return $this;
    }

    public function getTargetId(): ?string
    {
        return $this->targetId;
    }

    public function setTargetId(string $targetId): static
    {
        $this->targetId = $targetId;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): static
    {
        $this->reason = $reason;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getHandledByAdminId(): ?User
    {
        return $this->handledByAdminId;
    }

    public function setHandledByAdminId(?User $handledByAdminId): static
    {
        $this->handledByAdminId = $handledByAdminId;

        return $this;
    }

    public function getHandledAt(): ?\DateTime
    {
        return $this->handledAt;
    }

    public function setHandledAt(?\DateTime $handledAt): static
    {
        $this->handledAt = $handledAt;

        return $this;
    }

    public function getAdminNote(): ?string
    {
        return $this->adminNote;
    }

    public function setAdminNote(?string $adminNote): static
    {
        $this->adminNote = $adminNote;

        return $this;
    }
}
