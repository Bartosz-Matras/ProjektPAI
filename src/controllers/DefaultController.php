<?php

require_once 'AppController.php';

class DefaultController extends AppController{

    public function login(){
        // TODO display login.html
        $this->render('login');
    }

    public function project(){
        // TODO display project.html
        $this->render('project');
    }
}