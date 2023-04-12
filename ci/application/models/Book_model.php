<?php 


class Book_model extends CI_model{
    public function getAllBook(){
        return $this->db->get('book')->result_array();
    }

    public function getBookById($id){
        return $this->db->get_where('book',['id'=> $id])->row_array();

    }

}


?>