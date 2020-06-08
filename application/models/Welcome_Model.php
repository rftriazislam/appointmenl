<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome_Model
 *
 * @author Rafatsuvro
 */
class Welcome_Model  extends CI_Model{
    public function service_info(){
       $this->db->select('*');
       $this->db->from('tbl_service_location');
       $this->db->where('publication_status',1);
       $query= $this->db->get();
       $result=$query->result();
       return  $result;
    }
    public function time_information(){
       $this->db->select('*');
       $this->db->from('tbl_fixed_timer');
       $this->db->where('publication_status',1);
       $query= $this->db->get();
       $result=$query->result();
       return  $result;
    }
    public function update_info($da){
       $this->db->set('date_over',0);
       $this->db->where('date_name',$da);
       $this->db->update('tbl_fixed_timer');
    }
    public function time_info($date_id){
       $this->db->select('*');
       $this->db->from('tbl_fixed_timer');
       $this->db->where('date_id',$date_id);
       $query= $this->db->get();
       $result=$query->row();
       return  $result;
    }
    public function update_timer_info($timerr,$date_id,$timer_1,$timer_2,$timer_3,$timer_4,$timer_5,$timer_6,$timer_7,$timer_8){
      if($timerr==$timer_1){
        $this->db->set('timer_1',0);
      }elseif ($timerr==$timer_2) {
          $this->db->set('timer_2',0);   
        
      }elseif ($timerr==$timer_3) {
          $this->db->set('timer_3',0);   
        }
      elseif ($timerr==$timer_4) {
          $this->db->set('timer_4',0);   
        }
      elseif ($timerr==$timer_5) {
          $this->db->set('timer_5',0);   
        }
      elseif ($timerr==$timer_6) {
          $this->db->set('timer_6',0);   
        }
      elseif ($timerr==$timer_7) {
          $this->db->set('timer_7',0);   
        }
      elseif ($timerr==$timer_8) {
          $this->db->set('timer_8',0);   
        }
        $this->db->where('date_id',$date_id);
        $this->db->update('tbl_fixed_timer');
    }
    public function details_information(){
       $this->db->select('*');
       $this->db->from('tbl_details');
       $this->db->where('publication_status',0);
       $query= $this->db->get();
       $result=$query->row();
       return  $result;
    }
    public function details_information_id($id){
       $this->db->select('*');
       $this->db->from('tbl_details');
       $this->db->where('publication_status',0);
       $this->db->where('id',$id);
       $query= $this->db->get();
       $result=$query->row();
       return  $result;
    }
    public function save_details_info($data){
        $this->db->insert('tbl_details',$data);
    }
}
