<?php

namespace App\Controllers;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Controller;
use CodeIgniter\Session\Session;
use \Myth\Auth\Models\UsersModel;
use \App\Models\lamaran;

class Admin extends BaseController
{
    
   protected $session;
   
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
        return view('main/admin/lamaran', $data);
    }
    
    public function terima(){
        
        $data = array(
        'status'  => 'Selamat Lamaran Anda Diterima, akan dilanjut ke proses interview.',
      );

      $where = array(
        'id' => $this->request->getVar('id'),
      );
        $lamaran = new lamaran();
      if($lamaran->update_by_id($where, $data)){
        echo "success";
        return redirect()->to('Rekrutmen');
      } else{
        echo "error";
        return redirect()->to('Rekrutmen');
        
      }
    }
    
     public function tolak(){
        
        $data = array(
        'status'  => 'Lamaran Anda Ditolak.',
      );

      $where = array(
        'id' => $this->request->getVar('id'),
      );
        $lamaran = new lamaran();
      if($lamaran->update_by_id($where, $data)){
        echo "success";
        return redirect()->to('Rekrutmen');
      } else{
        echo "error";
        return redirect()->to('Rekrutmen');
        
      }
    }
}
