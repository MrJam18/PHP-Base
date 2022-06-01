<?php
declare(strict_types=1);
require_once 'models/UserProvider.php';

class SecurityController extends Controller {
    function index(){
        $error = null;
        if (isset($_POST['username'], $_POST['password'])) {
        ['username' => $username, 'password' => $password] = $_POST;

        $userProvider = new UserProvider();
        $user = $userProvider->getByUsernameAndPassword($username, $password);

        if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
        }
        else {
            $_SESSION['user'] = $user;
        }
        }
        if (isset($_SESSION['user'])) {
            $this->locate('/');
        }
        $this->generate('signin');
    }
    function logout(){
        if(isset($_SESSION['user'])) unset($_SESSION['user']);
        $this->locate('/security');
    }

}

