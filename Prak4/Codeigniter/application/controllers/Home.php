<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this ->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('form_validation', 'session'));
    }

	public function index()
	{
		$this->load->view('login');
    }
    
    public function loginAction()
    {
        $this ->form_validation ->set_rules('username','Username','required',array('required' => 'Username wajib diisi'));
        $this ->form_validation ->set_rules('password','Password','required|trim',array('required' => 'Password wajib diisi'));

        if ($this ->form_validation ->run() == true){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $where = [ 
                'username'  => $username,
            ];

            if($cekQuery){
            
                $data = $cekQuery;
                $truePass       = false;

                if($data->password == $password){
                    $truePas = true;
                }
    
                $roleAccess     = $data->role;
    
                if($truePass){
    
                    $sess_data['id']        = $data->id;
                    $sess_data['username']  = $data->username;
                    $sess_data['email']     = $data->email;
                    $sess_data['role']      = $data->role;
                    $sess_data['status']    = "login";

                    // $sess_data[
                    //     'id'    =   $data->id;
                    //     'username'  =   $data->username;
                    //     'email'     =   $data->email;
                    //     'role'      =   $data->role;
                    //     'status'    =   "login";
                    // ]
    
                    $this->session->set_userdata($sess_data);
    
                    if($roleAccess == 1002){
                        redirect('home/article');
                        return 0;
                    } else if($roleAccess == 1001){
                        redirect('home/article');
                        return 0;
                    }
                } else {
                    $this->session->set_flashdata("danger", "Password yang anda Masukkan Salah, Coba kembali.");
                    redirect('home');
                    return 0;
                }
                //return article
            } else {
                $this->session->set_flashdata("danger", "Akun Tidak ada, Silakan Buat Akun Terlebih Dahulu.");
                redirect('home');
                return 0;
            }  
        }
    }
}
