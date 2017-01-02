<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="pages")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PageRepository")
 */
class Page
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="page_title", type="string", length=255)
     */
    public $pageTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="page_slug", type="string", length=255, unique=true)
     */
    public $pageSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="page_image", type="string", length=255)
     */
    public $pageImage;

    /**
     * @var string
     *
     * @ORM\Column(name="page_content", type="text")
     */
    public $pageContent;

    /**
     * @var bool
     *
     * @ORM\Column(name="page_status", type="boolean")
     */
    public $pageStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="page_mt", type="string", length=255)
     */
    public $pageMt;

    /**
     * @var string
     *
     * @ORM\Column(name="page_md", type="string", length=255)
     */
    public $pageMd;

    /**
     * @var string
     *
     * @ORM\Column(name="page_mk", type="string", length=255)
     */
    public $pageMk;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    public $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    public $updatedAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     *
     * @return Page
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set pageSlug
     *
     * @param string $pageSlug
     *
     * @return Page
     */
    public function setPageSlug($pageSlug)
    {
        $this->pageSlug = $pageSlug;

        return $this;
    }

    /**
     * Get pageSlug
     *
     * @return string
     */
    public function getPageSlug()
    {
        return $this->pageSlug;
    }

    /**
     * Set pageImage
     *
     * @param string $pageImage
     *
     * @return Page
     */
    public function setPageImage($pageImage)
    {
        $this->pageImage = $pageImage;

        return $this;
    }

    /**
     * Get pageImage
     *
     * @return string
     */
    public function getPageImage()
    {
        return $this->pageImage;
    }

    /**
     * Set pageContent
     *
     * @param string $pageContent
     *
     * @return Page
     */
    public function setPageContent($pageContent)
    {
        $this->pageContent = $pageContent;

        return $this;
    }

    /**
     * Get pageContent
     *
     * @return string
     */
    public function getPageContent()
    {
        return $this->pageContent;
    }

    /**
     * Set pageStatus
     *
     * @param boolean $pageStatus
     *
     * @return Page
     */
    public function setPageStatus($pageStatus)
    {
        $this->pageStatus = $pageStatus;

        return $this;
    }

    /**
     * Get pageStatus
     *
     * @return bool
     */
    public function getPageStatus()
    {
        return $this->pageStatus;
    }

    /**
     * Set pageMt
     *
     * @param string $pageMt
     *
     * @return Page
     */
    public function setPageMt($pageMt)
    {
        $this->pageMt = $pageMt;

        return $this;
    }

    /**
     * Get pageMt
     *
     * @return string
     */
    public function getPageMt()
    {
        return $this->pageMt;
    }

    /**
     * Set pageMd
     *
     * @param string $pageMd
     *
     * @return Page
     */
    public function setPageMd($pageMd)
    {
        $this->pageMd = $pageMd;

        return $this;
    }

    /**
     * Get pageMd
     *
     * @return string
     */
    public function getPageMd()
    {
        return $this->pageMd;
    }

    /**
     * Set pageMk
     *
     * @param string $pageMk
     *
     * @return Page
     */
    public function setPageMk($pageMk)
    {
        $this->pageMk = $pageMk;

        return $this;
    }

    /**
     * Get pageMk
     *
     * @return string
     */
    public function getPageMk()
    {
        return $this->pageMk;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Page
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Page
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

