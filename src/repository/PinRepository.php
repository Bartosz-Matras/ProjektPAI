<?php

require_once 'Repository.php';
require_once  __DIR__.'/../models/Pins.php';


class PinRepository extends Repository {

    public function addPin(Pins $pins){
        $stmt = $this->database->connect()->prepare('
            INSERT INTO pins (id_user, x, y, title, description, photo_path, tags)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $pins->getIdUser(),
            $pins->getX(),
            $pins->getY(),
            $pins->getTitle(),
            $pins->getDescription(),
            $pins->getImage(),
            $pins->getTags()
        ]);
    }

}