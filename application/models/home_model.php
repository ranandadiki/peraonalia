<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function noTransaksi()
    {
        $this->db->select_max('id', 'max_id');
        $query = $this->db->get('transaksi');
        $hasil = $query->row();
        return $hasil->max_id;
    }
    public function tambahTransaksi()
    {
        $data = [
            'no_transaksi' => $this->input->post('NoTransaksi'),
            'nama' => $this->input->post('Nama'),
            'jeniskelamin' => $this->input->post('JenisKelamin'),
            'penanggung' => $this->input->post('Penanggung'),
            'poliklinik' => $this->input->post('Poliklinik')
        ];
        $this->db->insert('transaksi', $data);
    }
    public function editTransaksi()
    {
        $data = [
            'no_transaksi' => $this->input->post('NoTransaksi'),
            'nama' => $this->input->post('Nama'),
            'jeniskelamin' => $this->input->post('JenisKelamin'),
            'penanggung' => $this->input->post('Penanggung'),
            'poliklinik' => $this->input->post('Poliklinik')
        ];
        $this->db->where('id', $this->input->post('Id'));
        $this->db->update('transaksi', $data);
    }
    public function editPenanggung()
    {
        $data = [
            'Penanggung' => $this->input->post('Penanggung'),
        ];
        $this->db->where('id_pg', $this->input->post('Id'));
        $this->db->update('penanggung', $data);
    }
    public function cari()
    {
        $keyword = $this->input->post('cari');

        $this->db->from('transaksi');
        $this->db->join('jeniskelamin', 'jeniskelamin.id_jk = transaksi.jeniskelamin');
        $this->db->join('penanggung', 'penanggung.id_pg = transaksi.penanggung');
        $this->db->join('poliklinik', 'poliklinik.id_pk = transaksi.poliklinik');
        $this->db->like('nama', $keyword);
        $this->db->like('id', $keyword);
        $this->db->or_like('jeniskelamin.jen_kel', $keyword);
        $this->db->or_like('penanggung.Penanggung', $keyword);
        $this->db->or_like('poliklinik.Poliklinik', $keyword);

        $query = $this->db->get();
        return $query->result();
    }
    public function innerJoin()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('jeniskelamin', 'jeniskelamin.id_jk = transaksi.jeniskelamin');
        $this->db->join('penanggung', 'penanggung.id_pg = transaksi.penanggung');
        $this->db->join('poliklinik', 'poliklinik.id_pk = transaksi.poliklinik');
        $query = $this->db->get();
        return $query->result();
    }
}
