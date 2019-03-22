<?php

namespace QandABundle\Controller;

use AppBundle\Entity\QClouds;
use AppBundle\Entity\QQuestions;
use AppBundle\Entity\QReply;
use QandABundle\Form\QCloudsType;
use QandABundle\Form\QReplyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReplyController extends Controller
{
    public function replyQuestionAction(Request $request, $idq){
        // declare entity manager
        $em=$this->getDoctrine()->getManager();
        // reception de l'objet avec id
        $quest=$em->getRepository(QQuestions::class)->find($idq);

        $reply=new QReply();
       $fr=$this->createForm(QReplyType::class,$reply);
        $fr=$fr->handleRequest($request);

        $cloud=new QClouds();
        $fc=$this->createForm(QCloudsType::class,$cloud);
        $fc=$fc->handleRequest($request);

       if($fr->isValid()){
           if($fc->isValid()){
               $cloud->setPosted(new \DateTime('now'));
               $em->persist($cloud);
               $reply->setIdc($cloud->getId());
           }
           $reply->setIdq($idq);
           $reply->setIdu($this->container->get('security.token_storage')->getToken()->getUser());
           $reply->setReplydate(new \DateTime('now'));
           $reply->setScore(0);
           $em->persist($reply);
           $em->flush();
           return $this->redirectToRoute('reply_question',array('idq'=>$idq));
       }
       $responses=$this->getDoctrine()->getRepository(QReply::class)->responses($idq);
    return $this->render('@QandA/Reply/replyQuestion.html.twig',array('fr'=>$fr->createView()
    ,'cl'=>$fc->createView(),'responses'=>$responses,'quest'=>$quest));

    }

    public function updateReplyAction(Request $request,$idr){
        $em=$this->getDoctrine()->getManager();
        $reply=$em->getRepository(QReply::class)->find($idr);
        $fr=$this->createForm(QReplyType::class,$reply);
        $fr=$fr->handleRequest($request);
if($reply->getIdc()==null) {
    $cloud = new QClouds();
}else {
    $cloud= $em->getRepository(QClouds::class)->find($reply->getIdc());
}
        $fc=$this->createForm(QCloudsType::class,$cloud);
        $fc=$fc->handleRequest($request);

        if($fr->isSubmitted()&&$fr->isValid()){
            if($fc->isSubmitted()&&$fc->isValid()){
                if($cloud->getPosted()==null) {
                    $cloud->setPosted(new \DateTime('now'));
                    $em->persist($cloud);
                }
                $reply->setIdc($cloud);
            }
            $em->flush();
            return $this->redirectToRoute('show_myreplies');
        }
        return $this->renderView('@QandA/Reply/updateReply.html.twig',array('form'=>$fr->createView(),'cl'=>$fc->createView()));
    }


}
