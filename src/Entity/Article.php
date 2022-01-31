<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Article
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $title;

    /**
     * @ORM\Column(type="string")
     */
    private string $resume;

    /**
     * @ORM\Column(type="string")
     */
    private string $author;

    /**
     * @ORM\Column(type="string")
     */
    private string $editor;

    /**
     * @ORM\Column(type="integer" length=13)
     */
    private int $ISBN;

    public function __construct(int $title, string $resume, string $author, string $editor, int $ISBN)
    {
        $this->title = $title;
        $this->resume = $resume;
        $this->author = $author;
        $this->editor = $editor;
        $this->ISBN = $ISBN;
    }

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of resume
     */
    public function getResume(): string
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */
    public function setResume($resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor($author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of editor
     */
    public function getEditor(): string
    {
        return $this->editor;
    }

    /**
     * Set the value of editor
     *
     * @return  self
     */
    public function setEditor($editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get the value of ISBN
     */
    public function getISBN(): int
    {
        return $this->ISBN;
    }

    /**
     * Set the value of ISBN
     *
     * @return  self
     */
    public function setISBN($ISBN): self
    {
        $this->ISBN = $ISBN;

        return $this;
    }

}
