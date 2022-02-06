<?php

require_once 'Repository.php';
require_once  __DIR__.'/../models/Pins.php';



class PinRepository extends Repository {

    public function addPin(Pins $pins){
        $stmt = $this->database->connect()->prepare('
            INSERT INTO pins (id_user, coordinates, title, description, photo_path, address)
            VALUES (?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $pins->getIdUser(),
            $pins->getCoordinates(),
            $pins->getTitle(),
            $pins->getDescription(),
            $pins->getImage(),
            $pins->getAddress()
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
                $pin['coordinates'],
                $pin['title'],
                $pin['description'],
                $pin['photo_path'],
                $pin['address']
            );
        }

        return $result;
    }


    public function getPinByTitle($title){


        $stmt = $this->database->connect()->prepare('
            SELECT * FROM pins WHERE title = :title;
        ');

        $stmt->bindParam(':title', $title);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data['idPin'];
    }

    public function getProjectByTitle(string $searchString, array $tags){
        if (empty($tags)) {
            $searchString = '%' . strtolower($searchString) . '%';

            $stmt = $this->database->connect()->prepare('
                SELECT * FROM pins WHERE LOWER(title) LIKE :search OR LOWER(description) LIKE :search
            ');

            $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $searchString = '%' . strtolower($searchString) . '%';

            $stmt = $this->database->connect()->prepare('
                select distinct pins.*  from pins join pins_tags pt on pins."idPin" = pt.id_pin
                WHERE (LOWER(title) LIKE :search OR LOWER(description) LIKE :search or pt.id_tag = :tags)
            ');

            $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
            $stmt->bindParam(':tags', $tags[0], PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function getPins2() : array
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM pins
        ');

        $stmt->execute();


        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}