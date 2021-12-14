<?php

require_once 'AppController.php';

class DefaultController extends AppController{


    public function project(){
        // TODO display project.php
        $this->render('project');
    }
}