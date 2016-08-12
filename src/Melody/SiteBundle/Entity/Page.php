<?php

namespace Melody\SiteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Melody\FoundationBundle\Entity\FoundationPost;

/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity(repositoryClass="Melody\SiteBundle\Repository\PageRepository")
 */
class Page extends FoundationPost
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
     * @ORM\ManyToMany(targetEntity="Melody\SiteBundle\Entity\PageCategory")
     */
    protected $categories;
}
