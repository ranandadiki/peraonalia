<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('home_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = "Home Personalia";
        $data['database'] = $this->home_model->innerJoin();
        $data['data1'] = $this->db->get('jeniskelamin')->result_array();
        $data['data2'] = $this->db->get('penanggung')->result_array();
        $data['data3'] = $this->db->get('poliklinik')->result_array();

        $dariIDB = $this->home_model->noTransaksi();
        $nourut = $dariIDB + 1;
        $data['urut'] = $nourut;

        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $this->home_model->tambahTransaksi();
        redirect('home');
    }
    public function edit($id)
    {
        $data['title'] = "Edit Data";
        $data['baris'] = $this->db->get_where('transaksi', ['id' => $id])->row_array();
        $data['db'] = $this->db->get_where('transaksi', ['id' => $id])->row();
        $data['jenis'] = $this->db->get('jeniskelamin')->result_array();
        $data['tanggung'] = $this->db->get('penanggung')->result_array();
        $data['poli'] = $this->db->get('poliklinik')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('edit', $data);
        $this->load->view('templates/footer');
    }
    public function editdata()
    {
        $this->home_model->editTransaksi();
        redirect('home/index');
    }

    public function hapus($id)
    {
        $this->db->delete('transaksi', ['id' => $id]);
        redirect('home/index');
    }
    public function cari()
    {
        $data['title'] = "Home Personalia";

        $data['hasil'] = $this->home_model->cari();
        $data['data1'] = $this->db->get('jeniskelamin')->result_array();
        $data['data2'] = $this->db->get('penanggung')->result_array();
        $data['data3'] = $this->db->get('poliklinik')->result_array();

        $dariIDB = $this->home_model->noTransaksi();
        $nourut = $dariIDB + 1;
        $data['urut'] = $nourut;

        $this->load->view('templates/header', $data);
        $this->load->view('cari', $data);
        $this->load->view('templates/footer');
    }
    public function penanggung()
    {
        $data['title'] = "Home Penanggung";
        $data['database'] = $this->db->get('penanggung')->result();
        $data['data1'] = $this->db->get('penanggung')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('penanggung', $data);
        $this->load->view('templates/footer');
    }
    public function tambahPenanggung()
    {
        $input = $this->input->post('Penanggung');

        $this->db->set('Penanggung', $input);
        $this->db->insert('penanggung');
        redirect('home/penanggung');
    }
    public function editPg($id)
    {
        $data['title'] = "Edit Penanggung";
        $data['baris'] = $this->db->get_where('penanggung', ['id_pg' => $id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('editPg', $data);
        $this->load->view('templates/footer');
    }
    public function editdataPg()
    {
        $this->home_model->editPenanggung();
        redirect('home/penanggung');
    }
    public function hapusPenanggung($id)
    {
        $this->db->delete('penanggung', ['id_pg' => $id]);
        redirect('home/penanggung');
    }
    public function poliklinik()
    {
        $data['title'] = "Home Poliklinik";
        $data['database'] = $this->db->get('poliklinik')->result();
        $data['data1'] = $this->db->get('poliklinik')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('poliklinik', $data);
        $this->load->view('templates/footer');
    }
    public function tambahPoliklinik()
    {
        $input = $this->input->post('Poliklinik');

        $this->db->set('Poliklinik', $input);
        $this->db->insert('poliklinik');
        redirect('home/poliklinik');
    }
    public function hapusPoliklinik($id)
    {
        $this->db->delete('poliklinik', ['id_pk' => $id]);
        redirect('home/poliklinik');
    }
    public function login()
    {
        $data['title'] = "Login Page";

        $this->load->view('templates/header', $data);
        $this->load->view('login');
        $this->load->view('templates/footer');
    }
    public function ceklogin()
    {
        $password = $this->input->post('Password');
        $username = $this->input->post('Username');

        $cek = $this->db->get_where('login', ['username' => $username])->row_array();
        if (password_verify($password, $cek['password'])) {
            $newdata = array(
                'username'  => $username,
                'status' => TRUE
            );
            $this->session->set_userdata($newdata);
            redirect('home');
        } else {
            redirect('home/login');
        }
    }
    public function register()
    {
        $password = $this->input->post('Password');
        $username = $this->input->post('Username');

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $data = array(
            'username' => $username,
            'password' => $hash
        );
        $input = $this->db->insert('login', $data);
        if ($input) {
            redirect('home/login');
        } else {
            redirect('home/register');
        }
    }
    public function logout()
    {
        unset($_SESSION['userdata'],
        $_SESSION['status']);
        redirect('home');
    }
    public function cek()
    {
        $data['title'] = "Cek";

        $this->load->view('templates/header', $data);
        $this->load->view('cek', $data);
        $this->load->view('templates/footer', $data);
    }
}
