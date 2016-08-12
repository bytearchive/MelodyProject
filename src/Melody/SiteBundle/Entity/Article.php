<?php

namespace Melody\SiteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Melody\FoundationBundle\Entity\FoundationPost;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="Melody\SiteBundle\Repository\ArticleRepository")
 */
class Article extends FoundationPost
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Melody\SiteBundle\Entity\ArticleCategory")
     */
    protected $categories;
}
