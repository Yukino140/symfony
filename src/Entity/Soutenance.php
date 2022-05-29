<?php

namespace App\Entity;

use App\Repository\SoutenanceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SoutenanceRepository::class)
 */
class Soutenance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numjury;

    /**
     * @ORM\Column(type="date")
     */
    private $date_soutenance;

    /**
     * @ORM\Column(type="float")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity=Etudiant::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $etudiant;

    /**
     * @ORM\ManyToOne(targetEntity=Enseignant::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $enseignant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumjury(): ?int
    {
        return $this->numjury;
    }

    public function setNumjury(int $numjury): self
    {
        $this->numjury = $numjury;

        return $this;
    }

    public function getDateSoutenance(): ?\DateTimeInterface
    {
        return $this->date_soutenance;
    }

    public function setDateSoutenance(\DateTimeInterface $date_soutenance): self
    {
        $this->date_soutenance = $date_soutenance;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(float $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getEtudiant(): ?Etudiant
    {
        return $this->etudiant;
    }

    public function setEtudiant(?Etudiant $etudiant): self
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    public function getEnseignant(): ?Enseignant
    {
        return $this->enseignant;
    }

    public function setEnseignant(?Enseignant $enseignant): self
    {
        $this->enseignant = $enseignant;

        return $this;
    }
}
