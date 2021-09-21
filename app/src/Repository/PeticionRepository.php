<?php

namespace App\Repository;

use App\Entity\Peticion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Peticion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Peticion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Peticion[]    findAll()
 * @method Peticion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PeticionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Peticion::class);
    }



    public function findByNombre($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.nombre_simulador = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findSumRecorrido(){
      $results=self::findByNombre("nuptic-43");
      $sum_recorrido=0;
      foreach($results as $result){
         $sum_recorrido+=$result->getRecorrido();
      }
      return $sum_recorrido;
    }

    public function findDireccionFrequente($value){
      $qb = $this->createQueryBuilder('p');

      $query = $qb->select($qb->expr()->countDistinct('p.direccion'))
          ->andWhere('p.nombre_simulador = :val')
          ->setParameter('val', $value)
          ->orderBy('p.id', 'ASC')
          ->getQuery()
          ->getResult()
      ;

      return $query;
    }

  
}
