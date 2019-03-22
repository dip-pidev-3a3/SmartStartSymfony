<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 2019-03-20
 * Time: 14:35
 */

namespace QandABundle\Repository;


class QuestionRepository extends \Doctrine\ORM\EntityRepository
{
    public function getNewestQuestions(){
        $query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions q ORDER BY `q.postedDate` DESC");
        return $query->getResult();
    }

    public function anwserQuestion($idq){

    $now=new \DateTime('now');
      $query=$this->getEntityManager()->createQuery("UPDATE QandABundle:QQuestions q SET q.answered='$now' WHERE id='$idq' ");
    }
public function isFoundQuestion($q, $d, $s){
$query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions q WHERE q.question='$q' AND q.description='$d' AND q.subject='$s' ");
return $query->getResult();
    }

    public function getMyQuestions(){
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        $query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions q WHERE `q.idu.id`='$user' ");
        return $query->getResult();
    }

    public function getUserQuestions($idu){
        $query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions q WHERE q.idu='$idu' ");
        return $query->getResult();
    }

    public function getNAUserQuestions($idu){
        $query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions q WHERE q.answered IS null AND q.idu='$idu' ");
        return $query->getResult();
    }
    public function getAUserQuestions($idu){
        $query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions q WHERE q.answered IS NOT null AND q.idu='$idu' ");
        return $query->getResult();
    }

public function getAnseweredQuestions(){
    $query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions WHERE q.answered IS NOT null ORDER BY q.postedDate DESC");
        return $query->getResult();
}
    public function getNotAnseweredQuestions(){
        $query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions WHERE q.answered IS null ORDER BY q.postedDate DESC");
        return $query->getResult();
    }

public function getAnseweredQuestionsBySubject($sub){
    $query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions WHERE q.answered IS NOT null AND q.subject='$sub' ORDER BY q.postedDate DESC");
        return $query->getResult();
}
    public function getNotAnseweredQuestionsBySubject($sub){
        $query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions WHERE q.answered IS null AND q.subject='$sub' ORDER BY q.postedDate DESC");
        return $query->getResult();
    }
public function getAQBySubject($user, $sub){
    $query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions WHERE q.answered IS NOT null AND q.idu='$user' AND q.subject='$sub' ORDER BY q.postedDate DESC");
    return $query->getResult();
}
    public function getNotAQBySubject($user, $sub){
        $query=$this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions WHERE q.answered IS null AND q.idu='$user' AND q.subject='$sub' ORDER BY q.postedDate DESC");
        return $query->getResult();
    }

public function getQuestionsBySubject($sub){
    $query = $this->getEntityManager()->createQuery("SELECT q FROM QandABundle:QQuestions WHERE q.subject='$sub' ORDER BY q.postedDate DESC");
    return $query->getResult();
}

}