<?php

namespace App\Entity;

use App\Repository\EmpleadosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpleadosRepository::class)]
class Empleados
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Nombre;

    #[ORM\Column(type: 'string', length: 255)]
    private $Apellidos;

    #[ORM\Column(type: 'string', length: 255)]
    private $Email;

    #[ORM\Column(type: 'string', length: 255)]
    private $Telefono;

    #[ORM\Column(type: 'string', length: 255)]
    private $Direccion;

    #[ORM\Column(type: 'string', length: 255)]
    private $Codigo_Postal;

    #[ORM\Column(type: 'date')]
    private $Fecha_Nacimiento;

    #[ORM\Column(type: 'string', length: 255)]
    private $NIF;

    #[ORM\Column(type: 'string', length: 255)]
    private $Localidad;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->Apellidos;
    }

    public function setApellidos(string $Apellidos): self
    {
        $this->Apellidos = $Apellidos;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    public function setTelefono(string $Telefono): self
    {
        $this->Telefono = $Telefono;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }

    public function setDireccion(string $Direccion): self
    {
        $this->Direccion = $Direccion;

        return $this;
    }

    public function getCodigoPostal(): ?string
    {
        return $this->Codigo_Postal;
    }

    public function setCodigoPostal(string $Codigo_Postal): self
    {
        $this->Codigo_Postal = $Codigo_Postal;

        return $this;
    }

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->Fecha_Nacimiento;
    }

    public function setFechaNacimiento(\DateTimeInterface $Fecha_Nacimiento): self
    {
        $this->Fecha_Nacimiento = $Fecha_Nacimiento;

        return $this;
    }

    public function getNIF(): ?string
    {
        return $this->NIF;
    }

    public function setNIF(string $NIF): self
    {
        $this->NIF = $NIF;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->Localidad;
    }

    public function setLocalidad(string $Localidad): self
    {
        $this->Localidad = $Localidad;

        return $this;
    }
}
