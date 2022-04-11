<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Relawan_model");
        $this->load->model("Aksikegiatan_model");
        $this->load->model("Flora_model");
        $this->load->model("Fauna_model");
         $this->load->model("Hhbk_model");
         $this->load->model("Alamat_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
	public function index()
	{
        $data['data']=$this->Alamat_model->getAll();
        // print_r($data);
        // die();
        $this->load->view('tampilanuser/header');
        $this->load->view('tampilanuser/home',$data);
        $this->load->view('tampilanuser/footer',$data);
        
		
	}

	public function nama_kegiatan(){
        $data['hasil']=$this->Aksikegiatan_model->getAll();
        $data['data']=$this->Alamat_model->getAll();
        $this->load->view('tampilanuser/header');
		$this->load->view('tampilanuser/namakegiatan',$data);
        $this->load->view('tampilanuser/footer',$data);
	}

    public function detail_namakegiatan($id)
    {
        $data['data']=$this->Alamat_model->getAll();
        $data['hasil']=$this->Aksikegiatan_model->getById($id);
        $this->load->view('tampilanuser/header');
        $this->load->view('tampilanuser/detail_namakegiatan',$data);      
        $this->load->view('tampilanuser/footer',$data);

    }

    public function ensiklopediaff(){
        $data['data']=$this->Alamat_model->getAll();
        $data['hasil']=$this->Flora_model->getAll();
        $this->load->view('tampilanuser/header');
        $this->load->view('tampilanuser/ensiklopediaff',$data);   
        $this->load->view('tampilanuser/footer',$data);
    }

    public function ensiklopediafauna(){
        $data['data']=$this->Alamat_model->getAll();
        $data['hasil']=$this->Fauna_model->getAll();
        $this->load->view('tampilanuser/header');
        $this->load->view('tampilanuser/fauna',$data);   
        $this->load->view('tampilanuser/footer',$data);
    }

    public function detail_ensiklopediaff($id)
    {
        $data['data']=$this->Alamat_model->getAll();
        $data['hasil']=$this->Flora_model->getById($id);
        $this->load->view('tampilanuser/header');
        $this->load->view('tampilanuser/detail_ensiklopediaff',$data);      
        $this->load->view('tampilanuser/footer',$data);

    }

    public function detail_ensiklopediafauna($id)
    {
        $data['data']=$this->Alamat_model->getAll();
        $data['hasil']=$this->Fauna_model->getById($id);
        $this->load->view('tampilanuser/header');
        $this->load->view('tampilanuser/detail_fauna',$data);      
        $this->load->view('tampilanuser/footer',$data);

    }

    public function hasil_hutan(){
        $data['data']=$this->Alamat_model->getAll();
     $data['hasil']=$this->Hhbk_model->getAll();
        $this->load->view('tampilanuser/header');
        $this->load->view('tampilanuser/hasil_hutan',$data);      
        $this->load->view('tampilanuser/footer',$data);
    }

    public function detail_hasilhutan($id)
    {
        $data['data']=$this->Alamat_model->getAll();
        $data['hasil']=$this->Hhbk_model->getById($id);
        $this->load->view('tampilanuser/header');
        $this->load->view('tampilanuser/detail_hasilhutan',$data);      
        $this->load->view('tampilanuser/footer',$data);

    }

    public function pesan($id){
        
        $data=$this->db->query("select * from tabel_data_produk_hasil_hutan_bukan_kayu where id_produk='$id'")->row();

        $text1 ="Hallo Kak, Saya Mau order";
        $style="----------------------------";
        $text2="".$data->nama;
        
         $url="https://api.whatsapp.com/send?phone=".$data->no_wa."&text1=".$text1."%0A".$text2."%0AApakah Produk Tersedia?";
         redirect($url);

        

        
    }
    

    public function daftar_relawan(){
        $data['data']=$this->Alamat_model->getAll();
        $this->load->view('tampilanuser/header');
    	$this->load->view('tampilanuser/daftar_relawan',$data);
        $this->load->view('tampilanuser/footer',$data);
    }

    public function kontak(){
      
     
      
            $mail = new PHPMailer(true);
 
            $name         = $this->input->post('name');
  
            $email              = $this->input->post('email');
            $subject              = $this->input->post('subject');
            $message              = $this->input->post('message');
 
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();     
            $mail->SMTPSecure='tls';                                       // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'rktajam36@gmail.com';                     // SMTP username
            $mail->Password   = '@123456789rk';                               // SMTP password
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
 
            //Recipients
            $mail->setFrom($email);
            $mail->addAddress('rktajam36@gmail.com');     // Add a recipient
 
            $mail->addReplyTo($email);
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
 
            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Email dari '.$name;
            $mail->Body    = '<h3>Subject : '.$subject.'</h3><p>Hallo Admin</p> <p>Ada pesanan baru  ' . $message . '</p> ';
 
            if ($mail->send()) {
                echo 'Email Telah terkirim,Terimakasih';
            } else {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        
    

    }


    public function fungsitambah()
    {
        $relawan = $this->Relawan_model;       
            $relawan->saveuser();
            if($this->db->affected_rows()>0)
        {
            echo "<script>alert('data berhasil tambah');</script>";
            // redirect(base_url("home/daftar_relawan"));
            echo "<script>window.location='".site_url('home/daftar_relawan')."';</script>";
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Terimakasih sudah mendaftar,nanti kamu akan dihbungi kembali melalui nomor telepon atau email ya,Salam Konservasi</div>');
            
        }else{
            redirect(base_url("home/daftar_relawan"));
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Terimakasih sudah mendaftar,nanti kamu akan dihbungi kembali melalui nomor telepon atau email ya,Salam Konservasi</div>');
        }
        // echo "<script>window.location='".site_url('home/daftar_relawan')."';</script>";
       
			//redirect(site_url('admin/relawan'));
            //$this->session->set_flashdata('success', 'Berhasil disimpan');

        // $this->load->view("admin/product/new_form");
    }
}
