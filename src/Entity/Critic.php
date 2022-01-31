<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Critic
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumn(name="Article_Title", referencedColumnName="title")
     */
    private Article $title;

    /**
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumn(name="Article_resume", referencedColumnName="resume")
     */
    private Article $resume;

    /**
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumn(name="Article_author", referencedColumnName="author")
     */
    private Article $author;

    /**
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumn(name="Article_editor", referencedColumnName="editor")
     */
    private Article $editor;

    /**
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumn(name="Article_ISBN", referencedColumnName="ISBN")
     */
    private Article $ISBN;

    /**
     * @ORM\Column(type="integer")
     */
    private int $note;

    /**
     * @ORM\Column(type="string")
     */
    private string $comment;

    public function __construct(Article $title, Article $resume, Article $author, Article $editor, Article $ISBN, int $note, string $comment)
    {
        $this->title = $title;
        $this->resume = $resume;
        $this->author = $author;
        $this->editor = $editor;
        $this->ISBN = $ISBN;
        $this->note = $note;
        $this->comment = $comment;
    }

    /**
     * Get the value of id
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */
    public function getTitle() : Article
    {
        return $this->title;
    }

    /**
     * Get the value of resume
     */
    public function getResume() : Article
    {
        return $this->resume;
    }

    /**
     * Get the value of author
     */
    public function getAuthor() : Article
    {
        return $this->author;
    }

    /**
     * Get the value of editor
     */
    public function getEditor() : Article
    {
        return $this->editor;
    }

    /**
     * Get the value of ISBN
     */
    public function getISBN() : Article
    {
        return $this->ISBN;
    }

    /**
     * Get the value of note
     */
    public function getNote(): int
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @return  self
     */
    public function setNote($note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of comment
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @return  self
     */
    public function setComment($comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
