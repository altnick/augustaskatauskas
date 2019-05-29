<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RegistrationsRepository")
 */
class Registrations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="text")
     */
    private $Vardas;
    /**
     * @ORM\Column(type="text")
     */
    private $Pavarde;
    /**
     * @ORM\Column(type="integer")
     */
    private $Telefono_numeris;
    /**
     * @ORM\Column(type="integer")
     */
    private $compid;
    /**
     * @ORM\Column(type="text")
     */
    private $reztime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVardas(): ?string
    {
        return $this->Vardas;
    }

    public function setVardas(string $Vardas): self
    {
        $this->Vardas = $Vardas;

        return $this;
    }

    public function getPavarde(): ?string
    {
        return $this->Pavarde;
    }

    public function setPavarde(string $Pavarde): self
    {
        $this->Pavarde = $Pavarde;

        return $this;
    }

    public function getTelefonoNumeris(): ?int
    {
        return $this->Telefono_numeris;
    }

    public function setTelefonoNumeris(int $Telefono_numeris): self
    {
        $this->Telefono_numeris = $Telefono_numeris;

        return $this;
    }

    public function getCompid(): ?int
    {
        return $this->compid;
    }

    public function setCompid(int $compid): self
    {
        $this->compid = $compid;

        return $this;
    }

    public function getReztime(): ?string
    {
        return $this->reztime;
    }

    public function setReztime(string $reztime): self
    {
        $this->reztime = $reztime;

        return $this;
    }
}