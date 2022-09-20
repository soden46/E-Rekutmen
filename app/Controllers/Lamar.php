<?php
namespace App\Controllers;

use App\Models\lamaran;
use CodeIgniter\BaseModel;

class Lamar extends BaseController {

	public function __construct() {

		$this->lamaran = new lamaran();
	}
	
	public function index(){
        $lamaran = new lamaran();
        $data['lamaran'] = $lamaran->orderBy('id', 'DESC')->findAll();
        return view('/main/user/lamar/index',$data);
    }

	public function create() {
        $data = [
           'title'=>'Form Pengajuan Lamaran',
        ];
		return view('/main/user/lamar/index',$data);
	}

	public function save() {
	    
	   $validationRule = [
            'foto' => ['uploaded[foto]|max_size[foto,10000]|is_image[foto]
            |mime_in[cv,image/jpg,image/jpeg,image/png]',
            'errors'=>[
                    'uploaded'=> 'Pilih Foto Terlebih Dahulu',
                    'max_size'=> 'File Terlalu Besar, Batas File Adalah 10MB',
                    'ext_in' => 'File Harus Beformat jpg,jpeg,png',
                    'mime_in' => 'File Harus Beformat jpg,jpeg,png'
            ]],
            'cv' => [
                'rules'=>'uploaded[cv]|max_size[cv,10000]|ext_in[cv]|mime_in[cv,application/docx,application/doc,application/pdf]',
                'errors'=>[
                  'uploaded'=> 'Pilih CV Terlebih Dahulu',
                    'max_size'=> 'File Terlalu Besar, Batas File Adalah 10MB',
                    'ext_in' => 'File Harus Beformat docx,doc,pdf',
                    'mime_in' => 'File Harus Beformat docx,doc,pdf'
                
            ]],
            'surat_lamaran' => ['uploaded[surat_lamaran]|max_size[surat_lamaran,10000]|ext_in[suart_lamaran]|mime_in[surat_lamaran ,application/docx,application/doc,application/pdf]',
                'errors'=>[
                  'uploaded'=> 'Pilih Surat Lamaran Terlebih Dahulu',
                    'max_size'=> 'File Terlalu Besar, Batas File Adalah 10MB',
                    'ext_in' => 'File Harus Beformat docx,doc,pdf',
                    'mime_in' => 'File Harus Beformat docx,doc,pdf'
            ]],
        ];
        
        //ambil data dari form
        $nama = $this->request->getVar('nama');
        $foto = $this->request->getFile('foto');
        $cv = $this->request->getFile('cv');
        $surat_lamaran = $this->request->getFile('surat_lamaran');
        
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('create', $data);
        }

        if (! $foto->hasMoved()) {
            $filepath = WRITEPATH . 'assets/upload/foto' . $foto->store();

            $data = ['uploaded_flleinfo' => new File($filepath)];

            return view('upload_success', $data);
        }
        $data = ['errors' => 'The file has already been moved.'];
        if (! $cv->hasMoved()) {
            $filepath = WRITEPATH . 'assets/upload/cv' . $cv->store();

            $data = ['uploaded_flleinfo' => new File($filepath)];

            return view('upload_success', $data);
        }
        $data = ['errors' => 'The file has already been moved.'];
        if (! $foto->hasMoved()) {
            $filepath = WRITEPATH . 'assets/upload/surat_lamaran' . $surat_lamaran->store();

            $data = ['uploaded_flleinfo' => new File($filepath)];

            return view('upload_success', $data);
        }
        $data = ['errors' => 'The file has already been moved.'];
        $lamaran = new lamaran();
 
                $data = [
                    'nama' => $nama,
                    'foto' => $foto,
                    'cv' => $cv,
                    'surat_lamaran' => $surat_lamaran
                ];
 
                $lamaran->save($data);
 
        return view('/main/user/lamar/index');
    }
}