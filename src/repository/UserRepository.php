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

        return new User(
            $user['login'],
            $user['password'],
            $user['email'],
            $user['name'],
            $user['surname'],
            $user['phone'],
            $user['isUploaded']
        );
    }

}