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

    public function getPins() : array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM pins
        ');

        $stmt->execute();

        $pins = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($pins as $pin){
            $result[] = new Pins(
                $pin['id_user'],
                $pin['x'],
                $pin['y'],
                $pin['title'],
                $pin['description'],
                $pin['photo_path'],
                $pin['tags']
            );
        }

        return $result;
    }

}