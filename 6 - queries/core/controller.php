<?php
require_once './core/View.php';

class Controller {
	

    public bool $isAuth = false;
    private string $location;
    public ?View $view;


    function locate($url){
         header('Location: '.$url);
    }

    function generate(string $view, ?array $data = null)
    {
        $viewData = get_object_vars($this);
        if(isset($data)) $viewData = $viewData + $data;
        $this->view = new View($view, $viewData);
    }


}
