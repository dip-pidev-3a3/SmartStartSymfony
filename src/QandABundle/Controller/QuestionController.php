<?php

namespace QandABundle\Controller;

use AppBundle\Entity\QClouds;
use AppBundle\Entity\QQuestions;
use QandABundle\Form\QCloudsType;
use QandABundle\Form\QQuestionsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
    public function addQuestionAction(Request $request){
        $quest=new QQuestions();
        $cloud=new QClouds();
        $fq=$this->createForm(QQuestionsType::class,$quest);
        $cl=$this->createForm(QCloudsType::class,$cloud);
        $fq=$fq->handleRequest($request);
        $cl=$cl->handleRequest($request);

        if($fq->isValid()){
            $quest->setPostdate(new \DateTime('now'));
            $quest->setIdu($this->container->get('security.token_storage')->getToken()->getUser());
           if($cl->isValid()) {
               $cloud->setPosted(new \DateTime('now'));
               $quest->setIdc($cloud->getId());
           }
            $em= $this->getDoctrine()->getManager();
            $em->persist($quest);
            $em->flush();
            return $this->redirectToRoute('qand_a_homepage');
        }
        return $this->render('@QandA/Crud/addQuestion.html.twig',array('form'=>$fq->createView(),'cl'=>$cl->createView()));
    }



    public function updateQuestionAction(Request $request,$id){
        $em=$this->getDoctrine()->getManager();
        $question=$em->getRepository(QQuestions::class)->find($id);
        $fq=$this->createForm(QQuestionsType::class,$question);
        $fq=$fq->handleRequest($request);

        if($question->getIdc()!= null) {
            $cloud = $em->getRepository(QClouds::class)->find($question->getIdc());
        }else{
            $cloud= new QClouds();
        }
        $fc=$this->createForm(QCloudsType::class,$cloud);
        $fc=$fc->handleRequest($request);

        if($fq->isValid()){
            if($fc->isValid()) {
                $cloud->setPosted(new \DateTime('now'));
                $question->setIdc($cloud->getId());
            }
            $em->flush();
            return $this->redirectToRoute('show_myquestions');
        }
        return $this->render('@QandA/Crud/updateQuestion.html.twig',array('form'=>$fq->createView(),'cl'=>$fc->createView()));
    }

    public function deleteQuestionAction(Request $request,$id){
    $em=$this->getDoctrine()->getManager();
        $question=$em->getRepository(QQuestions::class)->find($id);
        if($question->getIdc()!= null){
            $cloud= $em->getRepository(QClouds::class)->find($question->getIdc());
        $em->remove($cloud);
        }
        $em->remove($question);
        $em->flush();
        return $this->redirectToRoute('show_myquestions');
    }

    public function showMyQuestionsAction(){
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        $quest=$this->getDoctrine()->getRepository(QQuestions::class)
            ->findAll();
        return $this->render('@QandA/Crud/showMyQuestions.html.twig',array('quest'=>$quest));
    }

}
