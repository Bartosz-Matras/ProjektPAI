<?php

require_once 'AppController.php';
require_once  __DIR__.'/../models/Pins.php';
require_once __DIR__.'/../repository/PinRepository.php';


class ProjectController extends AppController{

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $messages = [];

    private PinRepository $pinRepository;

    public function __construct()
    {
        parent::__construct();
        $this->pinRepository = new PinRepository();
    }

    public function addPin(){

        if($this->isPost() && is_uploaded_file($_FILES['upload-input']['tmp_name']) && $this->validate($_FILES['upload-input'])){
            move_uploaded_file(
                $_FILES['upload-input']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['upload-input']['name']
            );

            $imageUrl = dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['upload-input']['name'];


            //TODO
            $pin = new Pins(7, 255, 255, $_POST['title'], $_POST['pin-desc'], $imageUrl, $_POST['tags']);
            $this->pinRepository -> addPin($pin);

            return $this->render("project", ['messages' => $this->messages]);
        }

        $this->render("project");
    }

    private function validate(array $file) : bool
    {
        if($file['size'] > self::MAX_FILE_SIZE){
            $this->messages[] = 'File is to large for destination file system.';
            return false;
        }

        if (!isset($file['type']) && !in_array($file['type'], self::SUPPORTED_TYPES)){
            $this->messages[] = 'File type is not supported.';
            return false;
        }

        return true;
    }

}