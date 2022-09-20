<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendingemail extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function kirimemail()
    {                
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com', // atau smptp lainnya                
            'smtp_user' => 'demo123.jogjatech@gmail.com',  // Email gmail admin aplikasi
            'smtp_pass'   => 'misalnya: abcdefg',  // Password Gmail atau Sandi Aplikasi Gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];        
        $this->load->library('email', $config); // panggil library email
        $this->email->from('demo123.jogjatech@gmail.com','Verifikasi Email Dengan Library Email Codeigniter');
        $this->email->to('');            
        $this->email->subject('Email Notifikasi');
        $this->email->message('Halo ini adalah email dari demo Jogjatech.com');
        if($this->email->send()){
            echo 'Sukses, email berhasil dikirimkan, coba deh cek email kamu ada surat cinta dari aku :)';
        }else{
            echo 'Error, Gagal melakukan kirim email, cek koneksi jaringan dan lainnya.';
        }
    }
    
}