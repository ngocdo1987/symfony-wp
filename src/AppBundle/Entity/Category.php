<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Category
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 * @UniqueEntity(
 *      "categorySlug",
 *      message = "Category slug has already been taken."
 * )
 */
class Category
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
     * @ORM\Column(name="category_name", type="string", length=255)
     * @Assert\NotBlank(
     *      message = "Category name is required."
     * )
     */
    public $categoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="category_slug", type="string", length=255, unique=true)
     * @Assert\NotBlank(
     *      message = "Category slug is required."
     * )
     */
    public $categorySlug;

    /**
     * @var string
     *
     * @ORM\Column(name="category_description", type="string", length=255)
     */
    public $categoryDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer")
     */
    public $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="category_mt", type="string", length=255)
     */
    public $categoryMt;

    /**
     * @var string
     *
     * @ORM\Column(name="category_md", type="string", length=255)
     */
    public $categoryMd;

    /**
     * @var string
     *
     * @ORM\Column(name="category_mk", type="string", length=255)
     */
    public $categoryMk;

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
     * Many Categories have Many Posts.
     * @ManyToMany(targetEntity="Post")
     * @JoinTable(name="categories_posts",
     *      joinColumns={@JoinColumn(name="category_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="post_id", referencedColumnName="id")}
     *      )
     */
    private $posts;

    public function __construct() {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addPost(Post $post)
    {
        $this->posts[] = $post;
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
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set categorySlug
     *
     * @param string $categorySlug
     *
     * @return Category
     */
    public function setCategorySlug($categorySlug)
    {
        $this->categorySlug = $categorySlug;

        return $this;
    }

    /**
     * Get categorySlug
     *
     * @return string
     */
    public function getCategorySlug()
    {
        return $this->categorySlug;
    }

    /**
     * Set categoryDescription
     *
     * @param string $categoryDescription
     *
     * @return Category
     */
    public function setCategoryDescription($categoryDescription)
    {
        $this->categoryDescription = $categoryDescription;

        return $this;
    }

    /**
     * Get categoryDescription
     *
     * @return string
     */
    public function getCategoryDescription()
    {
        return $this->categoryDescription;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return Category
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set categoryMt
     *
     * @param string $categoryMt
     *
     * @return Category
     */
    public function setCategoryMt($categoryMt)
    {
        $this->categoryMt = $categoryMt;

        return $this;
    }

    /**
     * Get categoryMt
     *
     * @return string
     */
    public function getCategoryMt()
    {
        return $this->categoryMt;
    }

    /**
     * Set categoryMd
     *
     * @param string $categoryMd
     *
     * @return Category
     */
    public function setCategoryMd($categoryMd)
    {
        $this->categoryMd = $categoryMd;

        return $this;
    }

    /**
     * Get categoryMd
     *
     * @return string
     */
    public function getCategoryMd()
    {
        return $this->categoryMd;
    }

    /**
     * Set categoryMk
     *
     * @param string $categoryMk
     *
     * @return Category
     */
    public function setCategoryMk($categoryMk)
    {
        $this->categoryMk = $categoryMk;

        return $this;
    }

    /**
     * Get categoryMk
     *
     * @return string
     */
    public function getCategoryMk()
    {
        return $this->categoryMk;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Category
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
     * @return Category
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

