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
     * @var text
     *
     * @ORM\Column(name="page_content", type="text")
     */
    public $pageContent;

    
}