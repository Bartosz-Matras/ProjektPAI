<?php

require_once 'Repository.php';

class PinTagsRepository extends Repository {

    public function addPinTag($id_tag, $id_pin){
        $stmt = $this->database->connect()->prepare('
            INSERT INTO pins_tags (id_tag, id_pin) VALUES (?, ?)
        ');


        $stmt->execute([
            $id_tag,
            $id_pin
        ]);
    }
}