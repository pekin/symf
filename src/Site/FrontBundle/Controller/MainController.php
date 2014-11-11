<?php

namespace Site\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends Controller
{

    public function indexAction($name)
    {
    	//$slug = $this->staticPageAction($slug);
        return $this->render('SiteFrontBundle:Main:index.html.twig', array('name' => $name));
    }
    
     /**
     * @Route("/{slug}.html", name="slug")
     */
     public function staticPageAction($slug) {
        $page = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\Main')->findOneBy(array('slug' => $slug));
        
        if (is_null($page) || empty($page)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontBundle:Main:staticPage.html.twig', array('page' => $page));
        }
    }
}
