<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="libro")
 */
class Libro
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
    private $editorial;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $titulo;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $autor;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $anioPublicacion;

    /**
     * @ORM\Column(type="string", unique=true)
     * @var string
     */
    private $isbn;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @var int
     */
    private $paginas;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $sinopsis;

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
    public function getEditorial(): string
    {
        return $this->editorial;
    }

    /**
     * @param string $editorial
     * @return Libro
     */
    public function setEditorial(string $editorial): Libro
    {
        $this->editorial = $editorial;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     * @return Libro
     */
    public function setTitulo(string $titulo): Libro
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * @param string $autor
     * @return Libro
     */
    public function setAutor(string $autor): Libro
    {
        $this->autor = $autor;
        return $this;
    }

    /**
     * @return int
     */
    public function getAnioPublicacion(): int
    {
        return $this->anioPublicacion;
    }

    /**
     * @param int $anioPublicacion
     * @return Libro
     */
    public function setAnioPublicacion(int $anioPublicacion): Libro
    {
        $this->anioPublicacion = $anioPublicacion;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     * @return Libro
     */
    public function setIsbn(string $isbn): Libro
    {
        $this->isbn = $isbn;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPaginas(): ?int
    {
        return $this->paginas;
    }

    /**
     * @param int|null $paginas
     * @return Libro
     */
    public function setPaginas(?int $paginas): Libro
    {
        $this->paginas = $paginas;
        return $this;
    }

    /**
     * @return string
     */
    public function getSinopsis(): string
    {
        return $this->sinopsis;
    }

    /**
     * @param string $sinopsis
     * @return Libro
     */
    public function setSinopsis(string $sinopsis): Libro
    {
        $this->sinopsis = $sinopsis;
        return $this;
    }
}
