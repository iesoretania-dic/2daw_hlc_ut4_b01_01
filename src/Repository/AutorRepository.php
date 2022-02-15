<?php

namespace App\Repository;

use App\Entity\Autor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AutorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $managerRegistry)
    {
        parent::__construct($managerRegistry, Autor::class);

    }

    public function create() : Autor
    {
        $autor = new Autor();
        $this->getEntityManager()->persist($autor);

        return $autor;
    }

    public function save() : void
    {
        $this->getEntityManager()->flush();
    }

    public function delete(Autor $autor) : void
    {
        $this->getEntityManager()->remove($autor);
        $this->save();
    }
}