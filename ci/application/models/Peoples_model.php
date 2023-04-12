<?php


class Peoples_model extends CI_model
{
    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }
    public function getPeoples($limit, $start, $keyword = null)
    {
        if($keyword){
            $this->db->like('nama', $keyword);
            $this->db->or_like('email', $keyword);
        }
        return $this->db->get('peoples', $limit, $start)->result_array();
    }

    public function countAllPeoples()
    {
        return $this->db->get('peoples')->num_rows();
    }

    public function tambahdataPeople()
    {
        $data = [
            "nama" =>$this->input->post('nama', true),
            "alamat" =>$this->input->post('alamat', true),
            "email" =>$this->input->post('email', true),
        ];
        $this->db->insert('peoples', $data);
    }

    public function getdataPeopleById($id)
    {
       
        return $this->db->get_where('peoples', ['id' => $id])->row_array();
    }

    public function ubahdataPeople()
    {
        $data = [
            "nama" =>$this->input->post('nama', true),
            "alamat" =>$this->input->post('alamat', true),
            "email" =>$this->input->post('email', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('peoples', $data);
    }

    public function hapusdataPeople($id){
        $this->db->where('id',$id);
        $this->db->delete('peoples');
    }


 }
?>