<?php
declare(strict_types=1);



class HomeController extends Controller {
     protected string $pageHeader;

    function index(){
        $this->pageHeader = 'Добро пожаловать';
//        $this->username = null;
//        if(isset($_SESSION['user'])){
//            $this->username = $_SESSION['user']->getUsername();
////            $data = compact('pageHeader', 'username');
//
//        }
//
//        else {
//            $this->locate('/security');
//        }
        $this->generate('home');
    }

}

