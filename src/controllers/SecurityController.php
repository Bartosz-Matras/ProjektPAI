<?php

require_once  'AppController.php';
require_once  __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../service/Session.php';

class SecurityController extends AppController
{

    private UserRepository $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }


    public function login(){
       if(!$this->isPost()){
           return $this->render('login');
       }

        $login = $_POST["login"];
        $password = md5(md5($_POST["password"]));


        $user = $this -> userRepository -> getUser($login);


        if (!$user){
            return $this->render('login', ['messages' => ["User not exist!"]]);
        }

        if ($user->getLogin() !== $login){
            return $this->render('login', ['messages' => ['User with this login not exist!']]);
        }

        if ($user->getPassword() !== $password){
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $userSession = Session::getInstance();
        $userSession->id = $user->getIdUser();
        $userSession->login = $user->getLogin();
        $userSession->password = $user->getPassword();
        $userSession->email = $user->getEmail();
        $userSession->name = $user->getName();
        $userSession->surname = $user->getSurname();
        $userSession->phone = $user->getPhone();
        $userSession->address = $user->getAddress();
        $userSession->profilePhotoPath = $user->getProfilePhotoPath();


        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/project");

//       return $this->render('project');
    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('login');
        }

        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $email = $_POST['email'];
        $numerTelefonu = $_POST['numerTelefonu'];


        if ($login == null || $haslo == null || $email == null){
            return $this->render('login', ['messages' => ['Login, Password, Email can\'t be null']]);
        }

        $user = new User($login, md5(md5($haslo)), $email, $imie, $nazwisko, $numerTelefonu);

        $this -> userRepository -> addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }


}