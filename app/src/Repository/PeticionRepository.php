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

    public function findGrupByNombre($nombre_simulador,$id_sim)
    {
        return $this->createQueryBuilder('p')
            ->where('p.nombre_simulador=:sim AND p.id_simulacion = :id_sim')
            ->setParameter('sim', $nombre_simulador)
            ->setParameter('id_sim', $id_sim)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findSumRecorrido($value){
      $results= $this->createQueryBuilder('p')
          ->andWhere('p.nombre_simulador = :val')
          ->setParameter('val', "nuptic-43")
          ->andWhere('p.id_simulacion = :val2')
          ->setParameter('val2', $value)
          ->orderBy('p.id', 'ASC')
          ->getQuery()
          ->getResult();

      $sum_recorrido=0;
      foreach($results as $result){
         $sum_recorrido+=$result->getRecorrido();
      }
      return $sum_recorrido;
    }

    public function findDireccionFrequente($nombre_simulador,$id_sim){
      $qb = $this->createQueryBuilder('p');

      $query =   $qb->select('p.direccion, COUNT(p.direccion) as c')
           ->where('p.nombre_simulador=:sim AND  p.id_simulacion = :id_sim')
           ->setParameter('sim', $nombre_simulador)
           ->setParameter('id_sim', $id_sim)
           ->groupBy('p.direccion')
           ->orderBy('c', 'DESC')
           ->getQuery()
           ->getResult();

      return $query;
    }


}
