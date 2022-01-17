<?php

class Pins{
    private $idPin;
    private $idUser;
    private $x;
    private $y;
    private $title;
    private $description;
    private $isUploaded;

    /**
     * @return mixed
     */
    public function getIdPin()
    {
        return $this->idPin;
    }

    /**
     * @param mixed $idPin
     */
    public function setIdPin($idPin)
    {
        $this->idPin = $idPin;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
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

    public function getIsUploaded()
    {
        return $this->isUploaded;
    }

    public function setIsUploaded($isUploaded)
    {
        $this->isUploaded = $isUploaded;
    }



}