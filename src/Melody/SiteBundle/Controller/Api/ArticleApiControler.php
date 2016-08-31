<?php

namespace Melody\SiteBundle\Controller\Web;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Melody\SiteBundle\Entity\Article;

/**
 * Article Api controller.
 *
 * @Route("/api/article")
 */
class ArticleApiControler extends FOSRestController
{
    /**
     * Lists all Article entities.
     *
     * @Route("/", name="article_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('MelodySiteBundle:Article')->findAll();

        return $this->render('MelodySiteBundle:article:index.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * Finds and displays a Article entity.
     *
     * @Route("/{id}", name="article_show")
     * @Method("GET")
     */
    public function showAction(Article $article)
    {
        return $this->render('MelodySiteBundle:article:show.html.twig', array(
            'article' => $article,
        ));
    }
}
