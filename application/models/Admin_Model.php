<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_Model
 *
 * @author Rafatsuvro
 */
class Admin_Model extends CI_Model{
    public function save_service_info($data){
        $this->db->insert('tbl_service_location',$data);
    }
   public function manage_service_info(){
       $this->db->select('*');
       $this->db->from('tbl_service_location');
       $query= $this->db->get();
       $result=$query->result();
       return  $result;
       
   }
   public function details_fixed_timer_info($date_name){
       $this->db->select('*');
       $this->db->from('tbl_fixed_timer');
       $this->db->where('date_name',$date_name);
       $query= $this->db->get();
       $result=$query->row();
       return  $result;
       
   }
   public function save_fixed_timer_info($data){
       $this->db->insert('tbl_fixed_timer',$data);
   }
}
