<?php
declare(strict_types=1);

class User {
    function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public string $username;
    public string $email;
    public ?string $sex;
    public ?int $age;
    public bool $isActive = true;

    function getUsername(): string
    {
        return $this->username ?? 'unknown';
    }

}