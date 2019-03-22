<?php

namespace QandABundle\Controller;

use AppBundle\Entity\QQuestions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $questions=$this->getDoctrine()->getRepository(QQuestions::class)->findAll();
        return $this->render('@QandA/Default/index.html.twig',array('questions'=>$questions));
    }
}
