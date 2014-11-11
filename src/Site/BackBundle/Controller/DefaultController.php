<?php

namespace Site\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteBackBundle:Default:index.html.twig', array('name' => $name));
    }
}
