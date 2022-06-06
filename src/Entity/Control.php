<?php

namespace App\Entity;

use App\Repository\ControlRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ControlRepository::class)]
class Control
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Nombre_Taller;

    #[ORM\Column(type: 'string', length: 255)]
    private $Numero_Factura;

    #[ORM\Column(type: 'string', length: 255)]
    private $Precio_Factura;

    #[ORM\Column(type: 'string', length: 255)]
    private $Multas;

    #[ORM\Column(type: 'string', length: 255)]
    private $Numero_Multas;

    #[ORM\Column(type: 'string', length: 255)]
    private $Cantidad_Multas;

    #[ORM\Column(type: 'string', length: 255)]
    private $Equipamiento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreTaller(): ?string
    {
        return $this->Nombre_Taller;
    }

    public function setNombreTaller(string $Nombre_Taller): self
    {
        $this->Nombre_Taller = $Nombre_Taller;

        return $this;
    }

    public function getNumeroFactura(): ?string
    {
        return $this->Numero_Factura;
    }

    public function setNumeroFactura(string $Numero_Factura): self
    {
        $this->Numero_Factura = $Numero_Factura;

        return $this;
    }

    public function getPrecioFactura(): ?string
    {
        return $this->Precio_Factura;
    }

    public function setPrecioFactura(string $Precio_Factura): self
    {
        $this->Precio_Factura = $Precio_Factura;

        return $this;
    }

    public function getMultas(): ?string
    {
        return $this->Multas;
    }

    public function setMultas(string $Multas): self
    {
        $this->Multas = $Multas;

        return $this;
    }

    public function getNumeroMultas(): ?string
    {
        return $this->Numero_Multas;
    }

    public function setNumeroMultas(string $Numero_Multas): self
    {
        $this->Numero_Multas = $Numero_Multas;

        return $this;
    }

    public function getCantidadMultas(): ?string
    {
        return $this->Cantidad_Multas;
    }

    public function setCantidadMultas(string $Cantidad_Multas): self
    {
        $this->Cantidad_Multas = $Cantidad_Multas;

        return $this;
    }

    public function getEquipamiento(): ?string
    {
        return $this->Equipamiento;
    }

    public function setEquipamiento(string $Equipamiento): self
    {
        $this->Equipamiento = $Equipamiento;

        return $this;
    }
}
