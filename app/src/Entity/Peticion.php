<?php

namespace App\Entity;

use App\Repository\PeticionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PeticionRepository::class)
 */
class Peticion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre_simulador;

    /**
     * @ORM\Column(type="integer")
     */
    private $num;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $direccion;

    /**
     * @ORM\Column(type="integer")
     */
    private $recorrido;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreSimulador(): ?string
    {
        return $this->nombre_simulador;
    }

    public function setNombreSimulador(string $nombre_simulador): self
    {
        $this->nombre_simulador = $nombre_simulador;

        return $this;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getRecorrido(): ?int
    {
        return $this->recorrido;
    }

    public function setRecorrido(int $recorrido): self
    {
        $this->recorrido = $recorrido;

        return $this;
    }

    public function __construct($nombre_simulador, $num, $direccion, $recorrido) {
      $this->nombre_simulador = $nombre_simulador;
      $this->num = $num;
      $this->direccion = $direccion;
      $this->recorrido = $recorrido;
    }
}
