<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

    public function dashboard(){

      if(!$this->session->userdata("user_id")){
        redirect("welcome/login");
}
        $this->load->model('queries');
        $college_id = $this->session->userdata('college_id');
        $students = $this->queries->getStudents($college_id);
        $this->load->view('users', ['students' => $students]);

    }

    public function coAdminCreateStudent(){
      $this->form_validation->set_rules('studentname','Student Name','required|is_unique[tbl_students.studentname]');
      $this->form_validation->set_rules('college_id','College Name','required');
      $this->form_validation->set_rules('email','Email','required|is_unique[tbl_students.email]');
      $this->form_validation->set_rules('gender','Gender','required');
      $this->form_validation->set_rules('course','Course','required');

      $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

      if($this->form_validation->run()){
         $data = $this->input->post();
         $this->load->model('queries');
         if($this->queries->insertStudent($data)){
            $this->session->set_flashdata('message', 'Student added successfully!');
         }else{
            $this->session->set_flashdata('message', 'Failed to add student!');
         }
            return redirect('users/coAdminAddStudent');
      }else{
        $this->coAdminAddStudent();
      }
    }

    // public function coAdminAddStudent(){
    //     if(!$this->session->userdata("user_id")){
    //       redirect("welcome/login");
    //       }
    //       $this->load->model('queries');
    //       $colleges = $this->queries->getColleges();
    //       $this->load->view('coAdminAddStudent', ['colleges' => $colleges]);
    //       }



}
