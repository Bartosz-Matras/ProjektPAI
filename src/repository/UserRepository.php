<?php

require_once 'Repository.php';
require_once  __DIR__.'/../models/User.php';

class UserRepository extends Repository {

    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (login, password, email, name, surname, phone)
            VALUES (?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $user->getLogin(),
            $user->getPassword(),
            $user->getEmail(),
            $user->getName(),
            $user->getSurname(),
            $user->getPhone()
        ]);
    }

    public function updateUser(User $user){

        $data = [
            'email' => $user->getEmail(),
            'name' => $user->getName(),
            'surname' => $user->getSurname(),
            'phone' => $user->getPhone(),
            'address' => $user->getAddress(),
            'id_user' => $user->getIdUser()
        ];

        $stmt = $this->database->connect()->prepare('
            UPDATE users SET email=:email, name=:name, surname=:surname, phone=:phone, address=:address WHERE id_user = :id_user
        ');

        $stmt->execute($data);
    }

    public function getUser(string $login): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE login = :login
        ');

        $stmt->bindParam(':login', $login);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        $returnUser = new User(
            $user['login'],
            $user['password'],
            $user['email'],
            $user['name'],
            $user['surname'],
            $user['phone'],
            $user['address'],
        );

        $returnUser->setIdUser($user['id_user']);

        return $returnUser;
    }


    public function getUserById($id_user): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE id_user = :id_user
        ');
        $stmt->bindParam(':id_user', $id_user);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['login'],
            $user['password'],
            $user['email'],
            $user['name'],
            $user['surname'],
            $user['phone'],
            $user['address'],
        );
    }
}