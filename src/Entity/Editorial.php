<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="editorial")
 */
class Editorial
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
     * @ORM\Column(type="string", unique=true)
     * @var string
     */
    private $cif;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @var string|null
     */
    private $direccionPostal;
}
