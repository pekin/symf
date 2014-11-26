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
        $page2 = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\Category')->findAll();
        if (is_null($page) || empty($page)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontBundle:News:news.html.twig', array('page' => $page, 'page2' => $page2));
        }
    }

     /**
     * @Route("/news/{slug}", name="onenews")
     */
    public function onenewsAction($slug) {
        $page = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\News')->findOneBy(array('slug' => $slug));
        $page2 = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\Category')->findAll();
        if (is_null($page) || empty($page)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontBundle:News:onenews.html.twig', array('page' => $page, 'page2' => $page2));
        }
    }
    
     /**
     * @Route("/news/category/{category}", name="newslist")
     */
    public function newslistAction($category) {
        $page = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\News')->findBy(array('category' => $category));
        $page2 = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\Category')->findAll();
        #$page = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\News')->findAll();
        
        if (is_null($page) || empty($page)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontBundle:News:newslist.html.twig', array('page' => $page, 'page2' => $page2));
        }
    }
}
