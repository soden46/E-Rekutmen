<?php

namespace App\Controllers;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Controller;
use CodeIgniter\Session\Session;
use \Myth\Auth\Models\UsersModel;

class Staff extends BaseController
{
    
   protected $session;
   
   public function index(){
         $data['title'] = 'Staff';
        //  $db      = \Config\Database::connect();
        //  $builder = $db->table('lamaran');
        //  $builder->select('*');
        //  $query = $builder->get();
        
        // $data ['lamaran']= $query->getResult();
      return view('staff/index',$data);  
   }
   
   public function logout(){
        session_destroy();
        return redirect()->to('home/Home');
    }
    public function Rekrutmen()
    {
         $data['title'] = 'lamaran';
         $db      = \Config\Database::connect();
         $builder = $db->table('lamaran');
         $builder->select('*');
         $query = $builder->get();
        
        $data ['lamaran']= $query->getResult();
        return view('main/user/lamaran', $data);
    }
}
