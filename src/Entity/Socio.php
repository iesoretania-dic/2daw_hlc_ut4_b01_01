<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="socio")
 */
class Socio
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
     * @ORM\Column(type="string", length=9, nullable=true)
     * @var string|null
     */
    private $dni;

    // NOTA: Cuando la propiedad es booleana lo adecuado (si no nos dicen otra cosa) es
    // poner directamente lo que es, sin preceder de "es" o "tiene". En autor no lo
    // hemos hecho porque el enunciado pedía específicamente que la propiedad se llame
    // con el "es" delante

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $estudiante;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $docente;
}
