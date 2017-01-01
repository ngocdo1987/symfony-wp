<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TagRepository")
 */
class Tag
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
     * @ORM\Column(name="tag_name", type="string", length=255)
     */
    public $tagName;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_slug", type="string", length=255, unique=true)
     */
    public $tagSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_description", type="string", length=255)
     */
    public $tagDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_mt", type="string", length=255)
     */
    public $tagMt;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_md", type="string", length=255)
     */
    public $tagMd;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_mk", type="string", length=255)
     */
    public $tagMk;

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
     * Set tagName
     *
     * @param string $tagName
     *
     * @return Tag
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;

        return $this;
    }

    /**
     * Get tagName
     *
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Set tagSlug
     *
     * @param string $tagSlug
     *
     * @return Tag
     */
    public function setTagSlug($tagSlug)
    {
        $this->tagSlug = $tagSlug;

        return $this;
    }

    /**
     * Get tagSlug
     *
     * @return string
     */
    public function getTagSlug()
    {
        return $this->tagSlug;
    }

    /**
     * Set tagDescription
     *
     * @param string $tagDescription
     *
     * @return Tag
     */
    public function setTagDescription($tagDescription)
    {
        $this->tagDescription = $tagDescription;

        return $this;
    }

    /**
     * Get tagDescription
     *
     * @return string
     */
    public function getTagDescription()
    {
        return $this->tagDescription;
    }

    /**
     * Set tagMt
     *
     * @param string $tagMt
     *
     * @return Tag
     */
    public function setTagMt($tagMt)
    {
        $this->tagMt = $tagMt;

        return $this;
    }

    /**
     * Get tagMt
     *
     * @return string
     */
    public function getTagMt()
    {
        return $this->tagMt;
    }

    /**
     * Set tagMd
     *
     * @param string $tagMd
     *
     * @return Tag
     */
    public function setTagMd($tagMd)
    {
        $this->tagMd = $tagMd;

        return $this;
    }

    /**
     * Get tagMd
     *
     * @return string
     */
    public function getTagMd()
    {
        return $this->tagMd;
    }

    /**
     * Set tagMk
     *
     * @param string $tagMk
     *
     * @return Tag
     */
    public function setTagMk($tagMk)
    {
        $this->tagMk = $tagMk;

        return $this;
    }

    /**
     * Get tagMk
     *
     * @return string
     */
    public function getTagMk()
    {
        return $this->tagMk;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Tag
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
     * @return Tag
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

