<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="autor")
 */
class Autor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $nombre;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $apellidos;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $esNacional;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return Autor
     */
    public function setNombre(string $nombre): Autor
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     * @return Autor
     */
    public function setApellidos(string $apellidos): Autor
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFechaNacimiento(): ?\DateTime
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param \DateTime|null $fechaNacimiento
     * @return Autor
     */
    public function setFechaNacimiento(?\DateTime $fechaNacimiento): Autor
    {
        $this->fechaNacimiento = $fechaNacimiento;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEsNacional(): bool
    {
        return $this->esNacional;
    }

    /**
     * @param bool $esNacional
     * @return Autor
     */
    public function setEsNacional(bool $esNacional): Autor
    {
        $this->esNacional = $esNacional;
        return $this;
    }
}