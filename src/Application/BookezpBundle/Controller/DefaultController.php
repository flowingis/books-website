<?php

namespace Application\BookezpBundle\Controller;

use Symfony\Framework\FoundationBundle\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BookezpBundle:Default:index');
    }

    public function pageAction($page)
    {
        return $this->render('BookezpBundle:Default:'.$page);
    }
}
