<?php

namespace ContractBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Contract;
use AppBundle\Entity\FosUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user=new FosUser();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $contracts = $this->getDoctrine()->getRepository(Contract::class)->getMyContracts($user->getId());
        $j=0;
        return $this->render('@Contract/Default/index.html.twig',array('con'=>$contracts,'j'=>$j));
    }
}
