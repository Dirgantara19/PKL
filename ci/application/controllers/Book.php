<?php 


class Book extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Book_model');
    }

    public function index(){
        $data['judul'] = 'Daftar Buku';
        $data['book'] = $this->Book_model->getAllBook();
        $this->load->view('templates/header', $data);
        $this->load->view('book/index', $data);
        $this->load->view('templates/footer');

    }

    public function detail($id){
        $data['judul'] = 'Detail Buku';
        $data['book'] = $this->Book_model->getBookById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('book/detail', $data);
        $this->load->view('templates/footer');
    }
}


?>