<?php

namespace Site\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class NewsController extends Controller
{

    public function indexAction($name)
    {
    	//$slug = $this->staticPageAction($slug);
        return $this->render('SiteFrontBundle:News:news.html.twig', array('name' => $name));
    }
    
     /**
     * @Route("/news", name="news")
     */
    public function newsAction() {
        $page = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\News')->findAll();
        
        if (is_null($page) || empty($page)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontBundle:News:news.html.twig', array('page' => $page));
        }
    }

     /**
     * @Route("/news/{slug}", name="onenews")
     */
    public function onenewsAction($slug) {
        $page = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\News')->findOneBy(array('slug' => $slug));
        
        if (is_null($page) || empty($page)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontBundle:News:onenews.html.twig', array('page' => $page));
        }
    }
}
