<?php

namespace App\Controllers;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Controller;
use CodeIgniter\Session\Session;
use \Myth\Auth\Models\UsersModel;

class Main extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
   protected $session;
   
   public function index(){
         
        //  $db      = \Config\Database::connect();
        //  $builder = $db->table('lamaran');
        //  $builder->select('*');
        //  $query = $builder->get();
        
        // $data ['lamaran']= $query->getResult();
        //   return view('main/layout',$data);  
      
        if (in_groups('admin')) {
           $data['title'] = 'Admin';
            return view('main/admin/index', $data);
        }
        if (in_groups('user')){
            $data['title'] = 'User';
            return view('main/user/index', $data);
        }
        if (in_groups('staff')){
            $data['title'] = 'Staff';
            return view('main/staff/index', $data);
        }
   }
   
   public function User()
    {
        $data['title'] = 'User';

        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

         $db      = \Config\Database::connect();
         $builder = $db->table('lamaran');
         $builder->select('*');
         $query = $builder->get();
        
        $data ['lamaran']= $query->getResult();

        return view('main/user/user', $data);
    }
   
   public function logout(){
        session_destroy();
        return redirect()->to('home/Home');
    }
    
     public function cek_user()
    {
        dd(user());
    }
    
}