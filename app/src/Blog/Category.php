<?php

namespace Blog;

class Category
{
    private $id;
    private $name;
    private $isActive = true;

    public function setId($id)
    {
        $this->id = (int) $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setActive($flag)
    {
        $this->isActive = (bool) $flag;
        return $this;
    }

    public function isActive()
    {
        return $this->isActive;
    }
}