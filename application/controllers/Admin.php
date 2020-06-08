<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Rafatsuvro
 */
class Admin extends CI_Controller {
   public function index()
	{
		$data=array();
                $data['title']='Admin Appointment';
                $data['main_content']= $this->load->view('admin_master/admin_page/home_page','',TRUE);
            
            
                   $this->load->view('admin_master/admin_master_page',$data);
	}
   public function add_service()
	{
		$data=array();
                $data['title']='Admin Appointment';
                $data['main_content']= $this->load->view('admin_master/admin_page/add_service_page','',TRUE);
            
            
                   $this->load->view('admin_master/admin_master_page',$data);
	}
        
        
        public function save_service(){
            $data=array();
            $data['service_location_name']=$this->input->post('service_location_name' ,TRUE);
            
            
            $sdata=array();
            $sdata['message']='Save Information Successfully';
            $this->session->set_userdata($sdata);
            $this->Admin_Model->save_service_info($data);
            redirect('Admin/add_service');
        }
         public function manage_service()
	{
		$data=array();
                $data['title']='Admin Appointment';
                $data['service']= $this->Admin_Model->manage_service_info();
                $data['main_content']= $this->load->view('admin_master/admin_page/manage_service_page',$data,TRUE);
            
            
                $this->load->view('admin_master/admin_master_page',$data);
	}
         public function add_timer()
	{
		$data=array();
                $data['title']='Admin Appointment';
                $data['main_content']= $this->load->view('admin_master/admin_page/add_timer_page','',TRUE);
            
            
                   $this->load->view('admin_master/admin_master_page',$data);
	}
        public function save_timer(){
            $data=array();
            $data['date_name']=$this->input->post('date_name' ,TRUE);
            $data['timer_1']=$this->input->post('timer_1' ,TRUE);
            $data['timer_2']=$this->input->post('timer_2' ,TRUE);
            $data['timer_3']=$this->input->post('timer_3' ,TRUE);
            $data['timer_4']=$this->input->post('timer_4' ,TRUE);
            $data['timer_5']=$this->input->post('timer_5' ,TRUE);
            $data['timer_6']=$this->input->post('timer_6' ,TRUE);
            $data['timer_7']=$this->input->post('timer_7' ,TRUE);
            $data['timer_8']=$this->input->post('timer_8' ,TRUE);
            $d=strtotime("today");
           $da=date("Y-m-d", $d);
           $date_name=  $this->input->post('date_name' ,TRUE);
          $result= $this->Admin_Model->details_fixed_timer_info($date_name);
          $date_n=$result->date_name;
           if($date_n!=$date_name){
            if($da<$data['date_name']||$da==$data['date_name']){
            $sdata=array();
            $sdata['message']='Save Information Successfully';
            $this->session->set_userdata($sdata);
            $this->Admin_Model->save_fixed_timer_info($data);
            redirect('Admin/add_timer');
        }else{
             $sdata=array();
            $sdata['message']='Please fill current date current month ';
            $this->session->set_userdata($sdata);
             redirect('Admin/add_timer');
        }
           }
           else{
                $sdata=array();
            $sdata['message']='You All Reday Use On This Date....';
            $this->session->set_userdata($sdata);
             redirect('Admin/add_timer');  
           }
        }
        public function custom()
	{
		$data=array();
                $data['title']='Admin Appointment';
                $data['main_content']= $this->load->view('admin_master/admin_page/custom_page','',TRUE);
            
            
                   $this->load->view('admin_master/admin_master_page',$data);
	}
}
