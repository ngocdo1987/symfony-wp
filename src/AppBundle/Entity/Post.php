<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;

/**
 * Post
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 */
class Post
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
     * @ORM\Column(name="post_title", type="string", length=255)
     */
    public $postTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="post_slug", type="string", length=255, unique=true)
     */
    public $postSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="post_image", type="string", length=255)
     */
    public $postImage;

    /**
     * @var string
     *
     * @ORM\Column(name="post_content", type="text")
     */
    public $postContent;

    /**
     * @var bool
     *
     * @ORM\Column(name="post_status", type="boolean")
     */
    public $postStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="post_mt", type="string", length=255)
     */
    public $postMt;

    /**
     * @var string
     *
     * @ORM\Column(name="post_md", type="string", length=255)
     */
    public $postMd;

    /**
     * @var string
     *
     * @ORM\Column(name="post_mk", type="string", length=255)
     */
    public $postMk;

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
     * Many Posts have Many Categories.
     * @ManyToMany(targetEntity="Category")
     * @JoinTable(name="categories_posts",
     *      joinColumns={@JoinColumn(name="post_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="category_id", referencedColumnName="id")}
     *      )
     */
    private $categories;

    /**
     * Many Posts have Many Tags.
     * @ManyToMany(targetEntity="Tag")
     * @JoinTable(name="posts_tags",
     *      joinColumns={@JoinColumn(name="post_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="tag_id", referencedColumnName="id")}
     *      )
     */
    private $tags;

    public function __construct() {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addCategory(Category $category)
    {
        $category->addPost($this);
        $this->categories[] = $category;
    }

    public function addTag(Tag $tag)
    {
        $tag->addPost($this);
        $this->tags[] = $tag;
    }

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
     * Set postTitle
     *
     * @param string $postTitle
     *
     * @return Post
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set postSlug
     *
     * @param string $postSlug
     *
     * @return Post
     */
    public function setPostSlug($postSlug)
    {
        $this->postSlug = $postSlug;

        return $this;
    }

    /**
     * Get postSlug
     *
     * @return string
     */
    public function getPostSlug()
    {
        return $this->postSlug;
    }

    /**
     * Set postImage
     *
     * @param string $postImage
     *
     * @return Post
     */
    public function setPostImage($postImage)
    {
        $this->postImage = $postImage;

        return $this;
    }

    /**
     * Get postImage
     *
     * @return string
     */
    public function getPostImage()
    {
        return $this->postImage;
    }

    /**
     * Set postContent
     *
     * @param string $postContent
     *
     * @return Post
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;

        return $this;
    }

    /**
     * Get postContent
     *
     * @return string
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * Set postStatus
     *
     * @param boolean $postStatus
     *
     * @return Post
     */
    public function setPostStatus($postStatus)
    {
        $this->postStatus = $postStatus;

        return $this;
    }

    /**
     * Get postStatus
     *
     * @return bool
     */
    public function getPostStatus()
    {
        return $this->postStatus;
    }

    /**
     * Set postMt
     *
     * @param string $postMt
     *
     * @return Post
     */
    public function setPostMt($postMt)
    {
        $this->postMt = $postMt;

        return $this;
    }

    /**
     * Get postMt
     *
     * @return string
     */
    public function getPostMt()
    {
        return $this->postMt;
    }

    /**
     * Set postMd
     *
     * @param string $postMd
     *
     * @return Post
     */
    public function setPostMd($postMd)
    {
        $this->postMd = $postMd;

        return $this;
    }

    /**
     * Get postMd
     *
     * @return string
     */
    public function getPostMd()
    {
        return $this->postMd;
    }

    /**
     * Set postMk
     *
     * @param string $postMk
     *
     * @return Post
     */
    public function setPostMk($postMk)
    {
        $this->postMk = $postMk;

        return $this;
    }

    /**
     * Get postMk
     *
     * @return string
     */
    public function getPostMk()
    {
        return $this->postMk;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Post
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
     * @return Post
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

