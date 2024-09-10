<?php

declare(strict_types=1);

namespace App;
use PDO;
class Session
{
    public function getUser()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        return null;
    }

    public function getName()
    {
        if (isset($this->getUser()['username'])) {
            return $this->getUser()['username'];
        }

        return '';
    }

    public function getId()
    {
        if (isset($this->getUser()['id'])) {
            return $this->getUser()['id'];
        }

        return '';
    }

    public function getNumber(): array
    {
        $pdo = DB::connect();
        $id = $this->getId();

        $query = 'SELECT * FROM users WHERE id = :id';
        $stmt = $pdo->prepare($query);
        $stmt->execute(['id' => $id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEmail()
    {
        $pdo = DB::connect();
        $id = $this->getId();

        $query = 'SELECT * FROM users WHERE id = :id';
        $stmt = $pdo->prepare($query);
        $stmt->execute(['id' => $id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRoleId()
    {
        if (isset($this->getUser()['role_id'])) {
            return $this->getUser()['role_id'];
        }

        return '';
    }
}