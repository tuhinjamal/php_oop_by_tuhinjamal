<?php
namespace App\Controllers;
use App\Models\User;

class RegisterController {
    public function index()
    {
        //  require_once('pages/register.php');
        view('register');
    }

    public function register(){
        if($_SERVER['REQUEST_METHOD' ] == 'POST')
        {
            $user = new User();
            $user->name = $_POST['name'];
            $user->email = $_POST['email'];
            $user->password = $_POST['password'];
            if($user-> register()){
                  $_SESSION['user_id'] = $user->id; 
                  $_SESSION['user_name'] = $user->name;  
             redirect('/dashboard');
            
            }else{
            
            
            $error = $user->error;
            echo  $error;

            }
        }
    }
}