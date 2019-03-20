<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function ListpostsAction()
    {
        return $this->render('@Admin/Default/index.html.twig');
    }
}
