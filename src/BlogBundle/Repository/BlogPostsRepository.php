<?php
/**
 * Created by PhpStorm.
 * User: acmou
 * Date: 3/11/2019
 * Time: 5:01 PM
 */

namespace BlogBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class BlogPostsRepository extends EntityRepository
{
    public function findByPage($page = 1, $max = 10)
    {
        $dql = $this->createQueryBuilder('blogpost');
        $dql->orderBy('blogpost.postDate', 'DESC');

        $firstResult = ($page - 1) * $max;

        $query = $dql->getQuery();
        $query->setFirstResult($firstResult);
        $query->setMaxResults($max);

        $paginator = new Paginator($query);

        if(($paginator->count() <=  $firstResult) && $page != 1) {
            throw new NotFoundHttpException('Page not found');
        }

        return $paginator;
    }
    public function ComsCountAdd($id)
    {
        $qb=$this->createQueryBuilder('blogpost')
            ->update()
            ->set('blogpost.postCommentCount','blogpost.postCommentCount + 1')
            ->where('blogpost.postId='.$id);
        echo $qb;
        return $qb->getQuery()
            ->getResult();
    }
    public function ComsCountReduce($id)
    {
        $qb=$this->createQueryBuilder('blogpost')
            ->update()
            ->set('blogpost.postCommentCount','blogpost.postCommentCount - 1')
            ->where('blogpost.postId='.$id);
        echo $qb;
        return $qb->getQuery()
            ->getResult();
    }
    public function LikeCountAdd($id)
    {
        $qb=$this->createQueryBuilder('blogpost')
            ->update()
            ->set('blogpost.postLikesCount','blogpost.postLikesCount  + 1')
            ->where('blogpost.postId='.$id);

        return $qb->getQuery()
            ->getResult();
    }
    public function LikeCountReduce($id)
    {
        $qb=$this->createQueryBuilder('blogpost')
            ->update()
            ->set('blogpost.postLikesCount','blogpost.postLikesCount - 1')
            ->where('blogpost.postId='.$id);

        return $qb->getQuery()
            ->getResult();
    }
    public function findEntitiesByString($str){
        return $this->getEntityManager()->createQuery( 'SELECT e
                FROM AppBundle:Blogposts e
                WHERE e.foo LIKE :str')
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }


}