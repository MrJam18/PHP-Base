<?php
declare(strict_types=1);


class Header
{
    public function __construct($name, $key)
    {
        $this->name = $name;
        $this->key = $key;
    }
    public string $name;
    public string $key;
}