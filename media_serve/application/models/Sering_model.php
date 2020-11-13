<?php 

class Sering_model extends CI_Model{
    public function tampil_data(){
        return $this->db->get('sering');
    }
    public function detail_srg($id){
        $result= $this->db->where('id',$id)->get('sering');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
}