<?php

namespace App\Repository;

use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Post|null find($id, $lockMode = null, $lockVersion = null)
 * @method Post|null findOneBy(array $criteria, array $orderBy = null)
 * @method Post[]    findAll()
 * @method Post[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    // /**
    //  * @return Post[] Returns an array of Post objects
    //  */
    
    public function MaxArticle()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function ArtCatFr($entity)
    {
        //dump('Select e from $entity e where category_id = 1');die;

        return $this->getEntityManager()->createQuery("
        Select e from $entity e JOIN e.category c where c.id = 1  
            ")
            ->getResult()
        ;
    }

    public function ArtCatUs($entity)
    {
        //dump('Select e from $entity e where category_id = 1');die;

        return $this->getEntityManager()->createQuery("
        Select e from $entity e JOIN e.category c where c.id = 2  
            ")
            ->getResult()
        ;
    }

    public function ArtCatLife($entity)
    {
        //dump('Select e from $entity e where category_id = 1');die;

        return $this->getEntityManager()->createQuery("
        Select e from $entity e JOIN e.category c where c.id = 3  
            ")
            ->getResult()
        ;
    }

    public function ArtCatInter($entity)
    {
        //dump('Select e from $entity e where category_id = 1');die;

        return $this->getEntityManager()->createQuery("
        Select e from $entity e JOIN e.category c where c.id = 4  
            ")
            ->getResult()
        ;
    }
    

    public function ArtCat2()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.category_id = 1')
            ->setMaxResults(6)
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Post
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
