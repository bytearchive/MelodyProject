<?php

namespace Melody\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Melody\FoundationBundle\Entity\FoundationCategory;

/**
 * ArticleCategory
 *
 * @ORM\Table(name="article_category")
 * @ORM\Entity(repositoryClass="Melody\SiteBundle\Repository\ArticleCategoryRepository")
 */
class ArticleCategory extends FoundationCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}

