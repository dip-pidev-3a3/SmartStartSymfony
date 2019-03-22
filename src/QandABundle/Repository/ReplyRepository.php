<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 2019-03-20
 * Time: 14:36
 */

namespace QandABundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ReplyRepository extends EntityRepository
{
    public function responses($idq){
    $query=$this->getEntityManager()->createQuery("select r from QandABundle:QReply r where r.idq.id='$idq' ");
    return $query->getResult();
}

}