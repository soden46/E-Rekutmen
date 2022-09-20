<?php

namespace App\Controllers;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Controller;
use CodeIgniter\Session\Session;
use CodeIgniter\HTTP\Files\UploadedFile;
use \App\Models\lamaran;

class User extends BaseController
{
    
   protected $session;
   protected $db;
    public function __construct()
    {
        helper(['form', 'url','session']);
        session()->get('id');
    }
    
   public function index(){
         $data['title'] = 'Pelamar';
        //  $db      = \Config\Database::connect();
        //  $builder = $db->table('lamaran');
        //  $builder->select('*');
        //  $query = $builder->get();
        
        // $data ['lamaran']= $query->getResult();
      return view('user/index');  
   }
   
   public function Status(){
         $sesi = user()->id;
         $data['title'] = 'status lamaran';
         $db      = \Config\Database::connect();
         $builder = $db->table('lamaran');
         $builder->select('*');
         $builder->where('iduser',$sesi);
         $query = $builder->get();
        
        $data ['lamaran']= $query->getResult();
     
      return view('main/user/status/index',$data);  
   }
   
   public function Lamaran()
	{
        $data = [
           'title'=>'Form Pengajuan Lamaran',
           'validation'=>\Config\Services::validation(),
           'session'=> session()->get('id')
        ];
		return view('main/user/lamar/index',$data);
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
        return view('main/user/lamar/lamar', $data);
    }
    
    public function create()
    {
        $session=\Config\Services::session();
        $data = [
           'title'=>'Form Pengajuan Lamaran',
           'validation' => \Config\Services::validation()
        ];
		
        // tampilkan form create
        return view('main/user/lamar/lamar',$data,$session);
    }
    
    public function save(){
    session('id');
    $session=\Config\Services::session();
    $lamaran = new lamaran();
    if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan Isi Nama'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,5000]|mime_in[foto,image/jpg,image/jpeg,image/svg,image/webp,image/png]|is_image[foto]',
                'errors' => [
                    'uploaded' => 'Foto Harus Disi',
                    'max_size' => 'Ukuran Foto Terlalu besar, Foto Harus Dibawah 5MB',
                    'mime_in' => 'File Foto Tidak Valid',
                    'is_image' => 'File Foto Anda Tidak Didukung'
                ]
            ],
            'cv' => [
                'rules' => 'uploaded[cv]|max_size[cv,5000]|ext_in[cv,doc,docx,pdf]',
                'errors' => [
                    'uploaded' => 'CV Harus Diisi',
                    'max_size' => 'Ukuran CV terlalu besar, Surat Lamaran Harus Dibawah 5MB',
                    'ext_in' => 'Format Tidak Didukung, Format CV Lamaran Harus PDF',
                ]
            ],
            'surat_lamaran' => [
                'rules' => 'uploaded[surat_lamaran]|max_size[surat_lamaran,5000]|ext_in[surat_lamaran,doc,docx,pdf]',
                'errors' => [
                    'uploaded' => 'Surat Lamaran Harus Diisi',
                    'max_size' => 'Ukuran Surat Lamaran terlalu besar, Surat Lamaran Harus Dibawah 5MB',
                    'ext_in' => 'Format Tidak Didukung, Format Surat Lamaran Harus PDF',
                ]
            ]
        ])){

            return redirect()->to('/Lamaran')->withInput();
        }
        
            $filefoto = $this->request->getFile('foto');
            $namaFoto = $filefoto->getRandomName();
            $filefoto->move('assets/upload/foto',$namaFoto);
            $filecv = $this->request->getFile('cv');
            $namaCv = $filecv->getRandomName();
            $filecv->move('assets/upload/cv',$namaCv);
            $filesurat = $this->request->getFile('surat_lamaran');
            $namasurat = $filesurat->getRandomName();
            $filesurat->move('assets/upload/surat_lamaran',$namasurat);
            

          $sesi = user()->id;
          $data = [
 
            'nama' =>  $this->request->getVar('nama'),
            'foto'  => $namaFoto,
            'cv'  => $namaCv,
            'surat_lamaran'  => $namasurat,
            'iduser'=>  $sesi
          ];
 
          $lamaran->savedata($data,'user'); 
          return redirect()->to('Lamaran')->with('berhasil', 'Data Berhasil di Simpan');
    }      
        
}