<?php

namespace Application\ProPhpBundle\Controller;

use Symfony\Framework\FoundationBundle\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProPhpBundle:Default:index');
    }

    public function pageAction($page)
    {
        return $this->render('ProPhpBundle:Default:'.$page);
    }
}
