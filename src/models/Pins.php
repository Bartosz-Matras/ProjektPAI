<?php

class Pins{
    private $idPin;
    private $idUser;
    private $x;
    private $y;
    private $title;
    private $description;
    private $image;
    private $tags;


    public function __construct($idUser, $x, $y, $title, $description, $image, $tags)
    {
        $this->idUser = $idUser;
        $this->x = $x;
        $this->y = $y;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->tags = $tags;
    }



    public function getIdPin()
    {
        return $this->idPin;
    }

    public function setIdPin($idPin)
    {
        $this->idPin = $idPin;
    }

    public function getIdUser()
    {
        return $this->idUser;
    }

    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags($tags): void
    {
        $this->tags = $tags;
    }
}