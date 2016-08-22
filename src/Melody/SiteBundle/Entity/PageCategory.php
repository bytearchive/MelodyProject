<?php

namespace Melody\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Melody\FoundationBundle\Entity\FoundationCategory;

/**
 * PageCategory.
 *
 * @ORM\Table(name="page_category")
 * @ORM\Entity(repositoryClass="Melody\SiteBundle\Repository\PageCategoryRepository")
 */
class PageCategory extends FoundationCategory
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
