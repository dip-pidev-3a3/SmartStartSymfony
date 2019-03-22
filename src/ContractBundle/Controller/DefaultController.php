<?php

namespace ContractBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $contracts = $this->getDoctrine()->getRepository(Contract::class)->getMyContracts();
        return $this->render('@Contract/Default/index.html.twig');
    }
}
