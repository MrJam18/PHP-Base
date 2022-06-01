<?php
declare(strict_types=1);
require_once 'User.php';

class UserProvider
{
    // Тут храним учетные данные
    private array $accounts = [
        'geekbrains' => 'password123'
    ];

    // Метод получения пользователя. Если данные не совпали, вернет null
    public function getByUsernameAndPassword(string $username, string $password): ?User
    {
        $expectedPassword = $this->accounts[$username] ?? null;
        if ($expectedPassword === $password) {
            return new User($username);
        }

        return null;
    }
    function getUser(string $username) {
        if(array_key_exists($username, $this->accounts))
        {
            return new User($username);
        }
        else return false;
    }
}