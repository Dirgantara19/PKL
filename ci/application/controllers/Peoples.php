<?php
class Peoples extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peoples_model');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = 'Lists Of Peoples';
        

        

        if($this->input->post('submit')){
           $data['keyword'] = $this->input->post('keyword');
           $this->session->set_userdata('keyword', $data['keyword']);
        }else{
            $data['keyword'] = null;

            $data['keyword'] = $this->session->userdata('keyword');
        }
        $this->db->like('nama', $data['keyword']);
        $this->db->from('peoples');

    
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;
        

        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->Peoples_model->getPeoples($config['per_page'],$data['start'],$data['keyword'] );
        
        
       
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {   $data['judul'] = 'Insert Data';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('peoples/tambah', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Peoples_model->tambahdataPeople();
            $this->session->set_flashdata('flash', 'add');
            redirect('peoples');
        }
    }

    public function ubah($id)
    {   $data['judul'] = 'Insert Data';
        $data['people'] = $this->Peoples_model->getdataPeopleById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('peoples/ubah', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Peoples_model->ubahdataPeople();
            $this->session->set_flashdata('flash', 'change');
            redirect('peoples');
        }
    }

    public function hapus($id){
        $data['people'] = $this->Peoples_model->hapusdataPeople($id);
        $this->session->set_flashdata('flash', 'delete');
        redirect('peoples');


    }

    public function detail($id){
        $data['judul'] = 'Detail People';
        $data['people'] = $this->Peoples_model->getdataPeopleById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/detail', $data);
        $this->load->view('templates/footer');
    }
}
?>