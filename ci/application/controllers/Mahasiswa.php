<?php
class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] =$this->Mahasiswa_model->getAllMahasiswa();
        
        if($this->input->post('keyword')){
            $data['mahasiswa'] =$this->Mahasiswa_model->caridataMahasiswa();
        }
        // if($this->input->post('submit')){
        //    $data['keyword'] =  $this->input->post('keyword');
        // }else{
        //     $data['keyword'] = null;
        // }

        // $this->db->like('nama', $data['keyword']);
        // $this->db->from('mahasiswa');
        // $config['total_rows'] = $this->db->count_all_results();
        // $data['total_rows'] = $config['total_rows'];
        // $config['per_page']= 2;
        // $config['base_url'] = 'http://localhost/ci/mahasiwa/index';
        // $config['num_links'] = 5;

        // $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
        // $config['full_tag_close'] = '</ul></nav>';

        // $config['first_link'] = 'First'; 
        // $config['first_tag_open'] ='<li class="page-item">';
        // $config['first_tag_close'] ='</li>';

        // $config['last_link'] = 'Last'; 
        // $config['last_tag_open'] ='<li class="page-item">';
        // $config['last_tag_close'] ='</li>';

        // $config['next_link'] = '&gt'; 
        // $config['next_tag_open'] ='<li class="page-item">';
        // $config['next_tag_open'] ='</li>';

        // $config['prev_link'] = '&lt'; 
        // $config['prev_tag_open'] ='<li class="page-item">';
        // $config['prev_tag_close'] ='</li>';

        // $config['cur_tag_open'] ='<li class="page-item active" aria-current="page"><a class="page-link" href="#">
        // ';
        // $config['cur_tag_close'] ='</a></li>
        // ';
        // $config['num_tag_close'] ='<li class="page-item" >
        // ';
        // $config['num_tag_close'] ='</li">
        // ';

        // $config['attributes']= array('class'=>'page-link');

        // $this->pagination->initialize($config);
        // $data['start'] = $this->uri->segment(3);
        // $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswa($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {

        $data['judul'] = 'Tambah Data Mahasiswa';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Mahasiswa_model->tambahdataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('mahasiswa');
        }
        
    } 

    public function hapus($id){
        $this->Mahasiswa_model->hapusdataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }

    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['kejuruan'] = ['RPL','TKJ','MM'];
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Mahasiswa_model->ubahdataMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mahasiswa');
        }
        
    }
}
?>