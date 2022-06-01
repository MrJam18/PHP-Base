<?php
declare(strict_types=1);


class MenuController extends Controller
{

    private string $location;

    private function checkActive(string $link): ?string
    {
        if($this->location === $link) return 'link_active';
        else return null;
    }


    public function __construct(bool $isAuth)
    {
        $this->isAuth = $isAuth;
        $this->location = ltrim($_SERVER['REQUEST_URI'], '/');
        require './views/menu/index.php';
    }
}