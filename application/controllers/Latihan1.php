<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function index()
    {
        // echo "SELAMAT BELAJAR WEB PROGRAMMING";
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/footer');
        $this->load->view('views_latihan');
        // $this->load->view('templates/sidebar');
    }

    public function penjumlahan ($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari" . $n1 . "+" . $n2 . "=" . $hasil;
    }
}











