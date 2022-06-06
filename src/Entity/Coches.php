<?php

namespace App\Entity;

use App\Repository\CochesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CochesRepository::class)]
class Coches
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Marca;

    #[ORM\Column(type: 'string', length: 255)]
    private $Modelo;

    #[ORM\Column(type: 'string', length: 255)]
    private $Color;

    #[ORM\Column(type: 'string', length: 255)]
    private $Numero_Bastidor;

    #[ORM\Column(type: 'date')]
    private $Fecha_ITV;

    #[ORM\Column(type: 'date')]
    private $Fecha_Matriculacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarca(): ?string
    {
        return $this->Marca;
    }

    public function setMarca(string $Marca): self
    {
        $this->Marca = $Marca;

        return $this;
    }

    public function getModelo(): ?string
    {
        return $this->Modelo;
    }

    public function setModelo(string $Modelo): self
    {
        $this->Modelo = $Modelo;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->Color;
    }

    public function setColor(string $Color): self
    {
        $this->Color = $Color;

        return $this;
    }

    public function getNumeroBastidor(): ?string
    {
        return $this->Numero_Bastidor;
    }

    public function setNumeroBastidor(string $Numero_Bastidor): self
    {
        $this->Numero_Bastidor = $Numero_Bastidor;

        return $this;
    }

    public function getFechaITV(): ?\DateTimeInterface
    {
        return $this->Fecha_ITV;
    }

    public function setFechaITV(\DateTimeInterface $Fecha_ITV): self
    {
        $this->Fecha_ITV = $Fecha_ITV;

        return $this;
    }

    public function getFechaMatriculacion(): ?\DateTimeInterface
    {
        return $this->Fecha_Matriculacion;
    }

    public function setFechaMatriculacion(\DateTimeInterface $Fecha_Matriculacion): self
    {
        $this->Fecha_Matriculacion = $Fecha_Matriculacion;

        return $this;
    }
}
