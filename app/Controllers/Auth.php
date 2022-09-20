<?php

namespace App\Controllers;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Controller;
use CodeIgniter\Session\Session;

class Auth extends BaseController
{

   protected $session;
   
    public function register()
    {
        return view('auth/Register');
    }
    
    public function login()
    {
        return view('auth/Login');  
    }
    public function logout(){
        session_destroy();
        return redirect()->to('home/Home');
    }
    
    
}