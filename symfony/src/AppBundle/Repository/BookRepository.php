<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BookRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT b FROM AppBundle:Book b ORDER BY b.title ASC'
            )
            ->getResult();
    }
}