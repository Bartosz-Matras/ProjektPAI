<?php

require_once 'AppController.php';
require_once  __DIR__.'/../models/Pins.php';
require_once  __DIR__.'/../models/User.php';
require_once  __DIR__.'/../models/Tag.php';
require_once __DIR__.'/../repository/PinRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/TagRepository.php';


class ProjectController extends AppController{

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $messages = [];

    private PinRepository $pinRepository;
    private UserRepository $userRepository;
    private TagRepository  $tagRepository;

    public function __construct()
    {
        parent::__construct();
        $this->pinRepository = new PinRepository();
        $this->userRepository = new UserRepository();
        $this->tagRepository = new TagRepository();
    }

    public function project(){
        $pins = $this->pinRepository->getPins();
        $tags = $this->tagRepository->getTags();
        $this->render('project', ['pins' => $pins, 'tags' => $tags]);
    }

    public function addPin(){

        if($this->isPost() && is_uploaded_file($_FILES['upload-input']['tmp_name']) && $this->validate($_FILES['upload-input'])){
            move_uploaded_file(
                $_FILES['upload-input']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['upload-input']['name']
            );

            $imageUrl = self::UPLOAD_DIRECTORY.$_FILES['upload-input']['name'];

            var_dump($_COOKIE["project"]);

            $pin = new Pins(7, $_POST['coordinates'] ,$_POST['title'], $_POST['pin-desc'], $imageUrl, $_POST['tags'], $_POST['address']);
            $this->pinRepository -> addPin($pin);

            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/project");

            return $this->render("project", [
                'pins' => $this->pinRepository->getPins(),
                'messages' => $this->messages
            ]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/project");

        return $this->render("project");
    }

    public function places(){
        header('Content-type: application/json');
        http_response_code(200);

        echo json_encode($this->pinRepository->getPins2());
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

    public function account(){
        if ($this->isPost()){

            $name = $_POST["input-name"];
            $surname = $_POST["input-surname"];
            $email = $_POST["input-email"];
            $town = $_POST["input-addres1"];
            $street = $_POST["input-addres2"];
            $phone = $_POST["input-phone"];
            $address = $town."/".$street;

            $user = $this->userRepository->getUserById(7);

            $user->setIdUser(7);

            $user->setName($name);
            $user->setSurname($surname);
            $user->setEmail($email);
            $user->setAddress($address);
            $user->setPhone($phone);

            $this->userRepository->updateUser($user);

            $this->render("project");

        }
    }

}