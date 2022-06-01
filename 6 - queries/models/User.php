<?php
declare(strict_types=1);


class User
{
    private string $username;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function __construct(string $username)
    {
        $this->username = $username;
    }

}