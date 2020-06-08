<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $d = strtotime("today");
        $da = date("Y-m-d", $d);
       
      
        $data = array();
        $data['title'] = 'Appointment System';
        $data['service'] = $this->Welcome_Model->service_info();
        $this->Welcome_Model->update_info($da);
        $data['main_content'] = $this->load->view('page/service_page', $data, TRUE);


        $this->load->view('master_page', $data);
    }

    public function timer() {
        $result = $this->Welcome_Model->details_information();
        $data = array();
        $data['title'] = 'Appointment System';
        $data['time'] = $this->Welcome_Model->time_information();
        $data['location'] = $this->input->post('location', TRUE);

        $data['times'] = $result->time;
        $data['dates'] = $result->date;
        $data['main_content'] = $this->load->view('page/timer_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function details($date_id) {


        $data = array();
        $data['title'] = 'Appointment System';
        $data['id'] = $date_id;
        $data['location'] = $this->input->post('location', TRUE);
        $data['time'] = $this->input->post('time', TRUE);
        $data['date'] = $this->input->post('date', TRUE);
        $data['main_content'] = $this->load->view('page/detials_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function save_details() {

        $data = array();
        $data['location'] = $this->input->post('location', TRUE);
        $data['id'] = $this->input->post('id', TRUE);
        $data['time'] = $this->input->post('time', TRUE);
        $data['date'] = $this->input->post('date', TRUE);
        $data['name'] = $this->input->post('name', TRUE);
        $data['phone'] = $this->input->post('phone', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['number_person'] = $this->input->post('number_person', TRUE);
        $data['passport_number'] = $this->input->post('passport_number', TRUE);
        $data['birth_date'] = $this->input->post('birth_date', TRUE);
        $data['notes'] = $this->input->post('notes', TRUE);
        $this->Welcome_Model->save_details_info($data);

        $timerr = $this->input->post('time', TRUE);
        $date_id = $this->input->post('id', TRUE);
        $re = $this->Welcome_Model->time_info($date_id);
        $timer_1 = $re->timer_1;
        $timer_2 = $re->timer_2;
        $timer_3 = $re->timer_3;
        $timer_4 = $re->timer_4;
        $timer_5 = $re->timer_5;
        $timer_6 = $re->timer_6;
        $timer_7 = $re->timer_7;
        $timer_8 = $re->timer_8;
        $this->Welcome_Model->update_timer_info($timerr, $date_id, $timer_1, $timer_2, $timer_3, $timer_4, $timer_5, $timer_6, $timer_7, $timer_8);
        redirect('Welcome/done');
    }

//        public function remove($id){
//                $result= $this->Welcome_Model->details_information_id($id);
//                $timerr=$result->time;
//                $date_id=$result->id;
//                $re=  $this->Welcome_Model->time_info($date_id);
//                $timer_1=$re->timer_1;
//                $timer_2=$re->timer_2;
//                $timer_3=$re->timer_3;
//                $timer_4=$re->timer_4;
//                $timer_5=$re->timer_5;
//                $timer_6=$re->timer_6;
//                $timer_7=$re->timer_7;
//                $timer_8=$re->timer_8;
//                $this->Welcome_Model->update_timer_info($timerr,$date_id,$timer_1,$timer_2,$timer_3,$timer_4,$timer_5,$timer_6,$timer_7,$timer_8);
//               redirect('Welcome/done');
//        }







    public function done() {

        $data = array();
        $data['title'] = 'Appointment System';
        $data['main_content'] = $this->load->view('page/done_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

}
