<?php
namespace App\Controllers;

use App\Models\User;
use App\Core\Session;

class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = (new User())->findByEmail($_POST['email']);
            if ($user && password_verify($_POST['password'], $user->password)) {
                Session::set('user_id', $user->id);
                header('Location: /dashboard');
                exit;
            }
            // Tratar erro
        }
        require_once __DIR__ . '/../views/auth/login.php';
    }

    public function logout()
    {
        Session::destroy();
        header('Location: /login');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            $user->create([
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
            ]);
            header('Location: /login');
            exit;
        }
        require_once __DIR__ . '/../views/auth/register.php';
    }
}