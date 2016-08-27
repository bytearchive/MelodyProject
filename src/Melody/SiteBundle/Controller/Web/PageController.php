<?php

namespace Melody\SiteBundle\Controller\Web;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Melody\SiteBundle\Entity\Page;

/**
 * Page controller.
 *
 * @Route("/page")
 */
class PageController extends Controller
{
    /**
     * Lists all Page entities.
     *
     * @Route("/", name="page_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pages = $em->getRepository('MelodySiteBundle:Page')->findAll();

        return $this->render('MelodySiteBundle:page:index.html.twig', array(
            'pages' => $pages,
        ));
    }

    /**
     * Finds and displays a Page entity.
     *
     * @Route("/{id}", name="page_show")
     * @Method("GET")
     * @param Page $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Page $page)
    {
        return $this->render('MelodySiteBundle:page:show.html.twig', array(
            'page' => $page,
        ));
    }
}
