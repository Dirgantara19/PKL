<?php 

class Mahasiswa_model extends CI_model
{
    public function getAllMahasiswa(){
       return $this->db->get('mahasiswa')->result_array();
    }

    public function getMahasiswa($limit, $start, $keyword =null){

        if($keyword){
            $this->db->like('nama', $keyword);
        }
        return $this->db->get('mahasiswa',$limit, $start)->result_array();
     }

     public function countAllMahasiswa(){
        return $this->db->get('mahasiswa')->num_rows();
     }

    public function tambahdataMahasiswa(){
        $data = [
            "nama" =>$this->input->post('nama', true),
            "nis" =>$this->input->post('nis', true),
            "email" =>$this->input->post('email', true),
            "kejuruan" =>$this->input->post('kejuruan', true)
        ];
        $this->db->insert('mahasiswa', $data);
    }
    public function hapusdataMahasiswa($id){
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
    public function getMahasiswaById($id){
       
       return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function ubahdataMahasiswa(){
        $data = [
            "nama" =>$this->input->post('nama', true),
            "nis" =>$this->input->post('nis', true),
            "email" =>$this->input->post('email', true),
            "kejuruan" =>$this->input->post('kejuruan', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    public function caridataMahasiswa(){
        $keyword =$this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        // $this->db->like('nis', $keyword);
        // $this->db->like('email', $keyword);
        // $this->db->like('kejuruan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}

?>