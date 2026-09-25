<?php

namespace App\Repository;

use App\Entity\Civility;
use App\Entity\Identity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Identity>
 */
class IdentityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Identity::class);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function findByGender():Identity
    {
        $identity = new Identity();
        $gender = $this->getEntityManager()->find(Civility::class,Civility::FEMME);
        $identity->setCivility($gender);
        return $identity;
    }
}
