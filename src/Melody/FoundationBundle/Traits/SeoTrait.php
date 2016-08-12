<?php

namespace Melody\FoundationBundle\Traits;

/**
 * Class SeoTrait.
 */
trait SeoTrait
{
    /**
     * @var string
     *
     * @ORM\Column(name="seo_title", type="string", length=255, nullable=true)
     */
    protected $seoTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_description", type="text", nullable=true)
     */
    protected $seoDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_keywords", type="text", nullable=true)
     */
    protected $seoKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_canonical", type="string", nullable=true)
     */
    protected $seoCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_rel_alternate", type="string", nullable=true)
     */
    protected $seoRelAlternate;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_meta_robot", type="string", nullable=true)
     */
    protected $seoMetaRobot;

    /**
     * Set seoTitle.
     *
     * @param string $seoTitle
     *
     * @return $this
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle.
     *
     * @return string
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * Set seoDescription.
     *
     * @param string $seoDescription
     *
     * @return $this
     */
    public function setSeoDescription($seoDescription)
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    /**
     * Get seoDescription.
     *
     * @return string
     */
    public function getSeoDescription()
    {
        return $this->seoDescription;
    }

    /**
     * Set seoKeywords.
     *
     * @param string $seoKeywords
     *
     * @return $this
     */
    public function setSeoKeywords($seoKeywords)
    {
        $this->seoKeywords = $seoKeywords;

        return $this;
    }

    /**
     * Get seoKeywords.
     *
     * @return string
     */
    public function getSeoKeywords()
    {
        return $this->seoKeywords;
    }

    /**
     * Set seoCanonical.
     *
     * @param string $seoCanonical
     *
     * @return $this
     */
    public function setSeoCanonical($seoCanonical)
    {
        $this->seoCanonical = $seoCanonical;

        return $this;
    }

    /**
     * Get seoCanonical.
     *
     * @return string
     */
    public function getSeoCanonical()
    {
        return $this->seoCanonical;
    }

    /**
     * Set seoRelAlternate.
     *
     * @param string $seoRelAlternate
     *
     * @return $this
     */
    public function setSeoRelAlternate($seoRelAlternate)
    {
        $this->seoRelAlternate = $seoRelAlternate;

        return $this;
    }

    /**
     * Get seoRelAlternate.
     *
     * @return string
     */
    public function getSeoRelAlternate()
    {
        return $this->seoRelAlternate;
    }

    /**
     * Set seoMetaRobot.
     *
     * @param string $seoMetaRobot
     *
     * @return $this
     */
    public function setSeoMetaRobot($seoMetaRobot)
    {
        $this->seoMetaRobot = $seoMetaRobot;

        return $this;
    }

    /**
     * Get seoMetaRobot.
     *
     * @return string
     */
    public function getSeoMetaRobot()
    {
        return $this->seoMetaRobot;
    }
}
