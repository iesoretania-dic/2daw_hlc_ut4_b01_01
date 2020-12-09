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
}
