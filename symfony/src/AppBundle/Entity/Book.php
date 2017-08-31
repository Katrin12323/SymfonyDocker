<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity(repositoryClass="AppBundle\Repository\BookRepository")
* @ORM\Table(name="books")
*/
class Book
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="`title`", type="string", length=100, nullable=false)
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @ORM\Column(name="`author_id`", type="integer", length=100, nullable=false)
     * @Assert\NotBlank()
     */
    private $authorId;

    /**
     * @ORM\Column(name="`extract_text`", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    private $extractText;

    /**
     * @ORM\Column(name="`description`", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    private $description;

    /**
     * @ORM\Column(name="`publishing_date`", type="datetime", nullable=false)
     * @Assert\NotBlank()
     */
    private $publishingDate;

    /**
     * @ORM\Column(name="`page_count`", type="integer", nullable=false)
     * @Assert\NotBlank()
     */
    private $pageCount;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param mixed $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * @return mixed
     */
    public function getExtractText()
    {
        return $this->extractText;
    }

    /**
     * @param mixed $extractText
     */
    public function setExtractText($extractText)
    {
        $this->extractText = $extractText;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPublishingDate()
    {
        return $this->publishingDate;
    }

    /**
     * @param mixed $publishingDate
     */
    public function setPublishingDate($publishingDate)
    {
        $this->publishingDate = $publishingDate;
    }

    /**
     * @return mixed
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @param mixed $pageCount
     */
    public function setPageCount($pageCount)
    {
        $this->pageCount = $pageCount;
    }
}