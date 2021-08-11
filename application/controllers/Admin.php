<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function dashboard(){
      if(!$this->session->userdata("user_id")){
        redirect("welcome/login");
        }
        $this->load->model('queries');
        $leaders = $this->queries->viewLeaders();
        $this->load->view('dashboard', ['leaders' => $leaders]);
        }


    public function addMinistry(){
      if(!$this->session->userdata("user_id")){
        redirect("welcome/login");
        }
        $this->load->model('queries');
        $ministries = $this->queries->getMinistry();
        $this->load->view('viewMinistry', ['ministries' => $ministries]);

        }

      public function addLeader(){
          if(!$this->session->userdata("user_id")){
            redirect("welcome/login");
        }
        $this->load->model('queries');
        $ministries = $this->queries->getMinistry();
    		$this->load->view('addLeader', ['ministries' => $ministries]);
      }

    public function addMember(){
        if(!$this->session->userdata("user_id")){
          redirect("welcome/login");
          }
          $this->load->model('queries');
          $ministries = $this->queries->getMinistry();
          $name = $this->queries->getLeaders();
          $this->load->view('addMember', ['ministries' => $ministries, 'name' => $name]);
          }

    public function createMinistry(){
        $this->form_validation->set_rules('ministry','Ministry', 'required|is_unique[tbl_ministry.ministry]');

        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

        if($this->form_validation->run()){
            $data = $this->input->post();
            $this->load->model('queries');
            if($this->queries->makeMinistry($data)) {
               $this->session->set_flashdata('message', 'Ministry added successfully!');
             }else{
               $this->session->set_flashdata('message', 'Failed to add college');
             }
                redirect("admin/addMinistry");
          }else{
              $this->addMinistry();
        }
    }

    public function createLeader(){
        $this->form_validation->set_rules('name','Full Name','required|is_unique[tbl_leader.name]');
        $this->form_validation->set_rules('min_id','Ministry', 'required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('birthday','Birthday','required');
        $this->form_validation->set_rules('age','Age','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('contact','Contact','required');

        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

        if($this->form_validation->run()){
    				$data = $this->input->post();
    				$this->load->model('queries');
    				if($this->queries->makeLeader($data)){
    					 $this->session->set_flashdata('message', 'Leader registered successfully!');
    					 redirect("admin/addLeader");
    				}else{
    					$this->session->set_flashdata('message', 'Failed to register! Try Again');
    				 redirect("admin/addLeader");
    				}
    		}else{
    				$this->addLeader();
  		}
    }

    public function createMember(){
      $this->form_validation->set_rules('name','Full Name','required|is_unique[tbl_members.name]');
      $this->form_validation->set_rules('min_id','Ministry','required');
      $this->form_validation->set_rules('gender','Gender','required');
      $this->form_validation->set_rules('birthday','Birthday','required');
      $this->form_validation->set_rules('age','Age','required');
      $this->form_validation->set_rules('address','Address','required');
      $this->form_validation->set_rules('contact','Contact','required');

      $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

      if($this->form_validation->run()){
         $data = $this->input->post();
         $this->load->model('queries');
         if($this->queries->insertMember($data)){
            $this->session->set_flashdata('message', 'Member added successfully!');
         }else{
            $this->session->set_flashdata('message', 'Failed to add member!');
         }
            return redirect('admin/addMember');
      }else{
        $this->addMember();
      }
    }

      public function viewMembers($min_id){
        $this->load->model('queries');
        $members = $this->queries->getMembers($min_id);
        $this->load->view('viewMembers', ['members' => $members]);

      }


       public function editMember($member_id){
          $this->load->model('queries');
          $ministries = $this->queries->getMinistry();
          $memberData = $this->queries->getMemberRecord($member_id);
          $this->load->view('editMember', ['ministries' => $ministries, 'memberData' => $memberData]);

       }

       public function modifyMember($member_id){
         $this->form_validation->set_rules('name','Full Name','required');
         $this->form_validation->set_rules('min_id','Ministry');
         $this->form_validation->set_rules('gender','Gender','required');
         $this->form_validation->set_rules('birthday','Birthday','required');
         $this->form_validation->set_rules('age','Age','required');
         $this->form_validation->set_rules('address','Address','required');
         $this->form_validation->set_rules('contact','Contact','required');

           $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

           if($this->form_validation->run()){
               $data = $this->input->post();
               $this->load->model('queries');
               if($this->queries->updateMember($data, $member_id)){
                  $this->session->set_flashdata('message', 'Member updated successfully!');

                  redirect("admin/editMember/{$member_id}");
               }else{
                 $this->session->set_flashdata('message', 'Failed to update member! Try Again');
                redirect("admin/editMember/{$member_id}");
               }
           }else{
               $this->modifyMember($member_id);
         }
       }

       public function deleteMember($member_id){
            $this->load->model('queries');
            if ($this->queries->removeMember($member_id)){
              $this->session->set_flashdata('message', 'Member deleted successfully!');
                return redirect("admin/dashboard");
            }

       }

       public function deleteCoadmin($user_id){
         $this->load->model('queries');
         if ($this->queries->removeCoadmin($user_id)){
           $this->session->set_flashdata('message', 'Co-admin deleted successfully!');
             return redirect("admin/dashboard");
         }
       }

}
