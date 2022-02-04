<?php

require_once 'AppController.php';
require_once  __DIR__.'/../models/Pins.php';
require_once  __DIR__.'/../models/User.php';
require_once  __DIR__.'/../models/Tag.php';
require_once __DIR__.'/../repository/PinRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/TagRepository.php';
require_once __DIR__.'/../repository/PinTagsRepository.php';


class ProjectController extends AppController{

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $messages = [];

    private PinRepository $pinRepository;
    private UserRepository $userRepository;
    private TagRepository  $tagRepository;
    private PinTagsRepository $pinTagsRepository;

    public function __construct()
    {
        parent::__construct();
        $this->pinRepository = new PinRepository();
        $this->userRepository = new UserRepository();
        $this->tagRepository = new TagRepository();
        $this->pinTagsRepository = new PinTagsRepository();
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

            $userSession = Session::getInstance();
            $id_user = $userSession->id;

            $pin = new Pins($id_user, $_POST['coordinates'] ,$_POST['title'], $_POST['pin-desc'], $imageUrl, $_POST['address']);
            $this->pinRepository -> addPin($pin);

            $id_pin = $this->pinRepository->getPinByTitle($_POST['title']);

            $tags = explode(',', $_POST['tags3']);

            $max = sizeof($tags);

            for ($i = 0; $i < $max-1; $i++){
                $this->pinTagsRepository->addPinTag((int) $tags[$i], $id_pin);
            }

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
            $address = $_POST["input-address"];
            $phone = $_POST["input-phone"];

            $userSession = Session::getInstance();

            $user = $this->userRepository->getUserById($userSession->id);

            $user->setIdUser($userSession->id);

            $user->setName($name);
            $user->setSurname($surname);
            $user->setEmail($email);
            $user->setAddress($address);
            $user->setPhone($phone);

            $userSession->email = $email;
            $userSession->name = $name;
            $userSession->surname = $surname;
            $userSession->phone = $phone;
            $userSession->address = $address;

            $this->userRepository->updateUser($user);

            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/project");

            $this->render("project");
        }
    }

    public function account2(){
        if ($this->isPost()){

            $name = $_POST["input-name2"];
            $surname = $_POST["input-surname2"];
            $email = $_POST["input-email2"];
            $address = $_POST["input-address2"];
            $phone = $_POST["input-phone2"];

            $userSession = Session::getInstance();

            $user = $this->userRepository->getUserById($userSession->id);

            $user->setIdUser($userSession->id);

            $user->setName($name);
            $user->setSurname($surname);
            $user->setEmail($email);
            $user->setAddress($address);
            $user->setPhone($phone);

            $userSession->email = $email;
            $userSession->name = $name;
            $userSession->surname = $surname;
            $userSession->phone = $phone;
            $userSession->address = $address;

            $this->userRepository->updateUser($user);

            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/project");

            $this->render("project");
        }
    }

    public function logout(){
        $userSession = Session::getInstance();

        $userSession->destroy();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");

        $this->render("login");
    }

    public function search(){
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->pinRepository->getProjectByTitle($decoded['search']));
        }
    }

}