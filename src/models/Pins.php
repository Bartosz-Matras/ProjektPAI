<?php

class Pins{
    private $idPin;
    private $idUser;
    private $coordinates;
    private $title;
    private $description;
    private $image;
    private $address;


    public function __construct($idUser, $coordinates, $title, $description, $image, $address)
    {
        $this->idUser = $idUser;
        $this->coordinates = $coordinates;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->address = $address;
    }


    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
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

    public function getCoordinates()
    {
        return $this->coordinates;
    }

    public function setCoordinates($coordinates): void
    {
        $this->coordinates = $coordinates;
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
}