<?php
declare(strict_types=1);
require_once './controllers/MenuController.php';


class View
{
    private string $viewName;
    private array $data;

    public function __construct(string $viewName, ?array $data = null)
    {
        $cssPath = "./views/$viewName/styles.css";
        require_once './views/head.php';
        if(isset($data)) {
            $this->data = $data;
        }
        $this->viewName = $viewName;
        $menu = new MenuController($this->data['isAuth']);
        require_once './views/'.$viewName.'/index.php';
    }

    function addHTML(string $viewName)
    {
        require_once "./views/$this->viewName/$viewName.php";
    }

    function getUsername():?string {
        if(isset($_SESSION['user'])) return $_SESSION['user']->getUsername();
        else return null;
    }

    function addJS(string $JSName)
    {
        echo "<script type='text/javascript' src='./views/$this->viewName/$JSName.js'></script>";
    }

}