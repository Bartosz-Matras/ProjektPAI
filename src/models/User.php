<?php

class User{
    private $idUser;
    private $login;
    private $password;
    private $email;
    private $name;
    private $surname;
    private $phone;
    private $profilePhotoPath;


    public function __construct($login, $password, $email, $name, $surname, $phone, $profilePhotoPath)
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->profilePhotoPath = $profilePhotoPath;
    }


    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getProfilePhotoPath()
    {
        return $this->profilePhotoPath;
    }

    public function setProfilePhotoPath($profilePhotoPath): void
    {
        $this->profilePhotoPath = $profilePhotoPath;
    }

    public function getIdUser()
    {
        return $this->idUser;
    }

    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }


}