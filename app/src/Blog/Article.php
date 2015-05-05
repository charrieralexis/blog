<?php

namespace Blog;

class Article
{
    private $id;
    private $title;
    private $teaser;
    private $content;
    private $created;
    private $updated;
    private $isActive = true;
    private $category;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getTeaser()
    {
        return $this->teaser;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function isActive()
    {
        return $this->isActive;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setId($id)
    {
        $this->id = (int) $id;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = (string) $title;
        return $this;
    }

    public function setTeaser($teaser)
    {
        $this->teaser = (string) $teaser;
        return $this;
    }

    public function setContent($content)
    {
        $this->content = (string) $content;
        return $this;
    }

    public function setCreated($created)
    {
        $this->created = (string) $created;
        return $this;
    }

    public function setUpdated($updated)
    {
        $this->updated = (string) $updated;
        return $this;
    }

    public function setActive($isActive)
    {
        $this->isActive = (bool) $isActive;
        return $this;
    }

    public function setCategory(\Blog\Category $category)
    {
        $this->category = $category;
        return $this;
    }
}
