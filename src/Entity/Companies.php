<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompaniesRepository")
 */
class Companies
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
    private $Paslauga;

      /**
     * @ORM\Column(type="text")
     */
    private $Specialistas;
      /**
     * @ORM\Column(type="text")
     */
    private $Pavadinimas;
      /**
     * @ORM\Column(type="text")
     */
    private $Miestas;
      /**
     * @ORM\Column(type="text")
     */
    private $Adresas;
      /**
     * @ORM\Column(type="integer")
     */
    private $Telefono_numeris;
    /**
     * @ORM\Column(type="time")
     */
    private $Darbo_pradzia;
    /**
     * @ORM\Column(type="time")
     */
    private $Darbo_pabaiga;
    /**
     * @ORM\Column(type="time")
     */
    private $Paslaugos_trukme;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaslauga(): ?string
    {
        return $this->Paslauga;
    }

    public function setPaslauga(string $Paslauga): self
    {
        $this->Paslauga = $Paslauga;

        return $this;
    }

    public function getSpecialistas(): ?string
    {
        return $this->Specialistas;
    }

    public function setSpecialistas(string $Specialistas): self
    {
        $this->Specialistas = $Specialistas;

        return $this;
    }

    public function getPavadinimas(): ?string
    {
        return $this->Pavadinimas;
    }

    public function setPavadinimas(string $Pavadinimas): self
    {
        $this->Pavadinimas = $Pavadinimas;

        return $this;
    }

    public function getMiestas(): ?string
    {
        return $this->Miestas;
    }

    public function setMiestas(string $Miestas): self
    {
        $this->Miestas = $Miestas;

        return $this;
    }

    public function getAdresas(): ?string
    {
        return $this->Adresas;
    }

    public function setAdresas(string $Adresas): self
    {
        $this->Adresas = $Adresas;

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

    public function getDarboPradzia(): ?\DateTimeInterface
    {
        return $this->Darbo_pradzia;
    }

    public function setDarboPradzia(\DateTimeInterface $Darbo_pradzia): self
    {
        $this->Darbo_pradzia = $Darbo_pradzia;

        return $this;
    }

    public function getDarboPabaiga(): ?\DateTimeInterface
    {
        return $this->Darbo_pabaiga;
    }

    public function setDarboPabaiga(\DateTimeInterface $Darbo_pabaiga): self
    {
        $this->Darbo_pabaiga = $Darbo_pabaiga;

        return $this;
    }

    public function getPaslaugosTrukme(): ?\DateTimeInterface
    {
        return $this->Paslaugos_trukme;
    }

    public function setPaslaugosTrukme(\DateTimeInterface $Paslaugos_trukme): self
    {
        $this->Paslaugos_trukme = $Paslaugos_trukme;

        return $this;
    }

   

    
}
