<?php
    class Queries extends CI_Model{

        public function chkAdminExist(){
            $chkAdmin = $this->db->where(['user_id' => '1'])
                        ->get('tbl_users');
                if($chkAdmin->num_rows() > 0){
                    return $chkAdmin->num_rows();
                }
        }

        public function getRoles(){
            $roles = $this->db->get('tbl_roles');
            if($roles->num_rows() > 0){
              return $roles->result();
            }
        }

        public function getLeaders(){
            $leader = $this->db->get('tbl_leader');
            if($leader->num_rows() > 0){
              return $leader->result();
            }
        }

        public function getMinistry(){
            $ministry = $this->db->get('tbl_ministry');
            if($ministry->num_rows() > 0){
              return $ministry->result();
            }
        }

          public function registerAdmin($data){
              return $this->db->insert('tbl_users', $data);
        }

          public function adminExist($username, $password){
            $chkAdmin = $this->db->where(['username' => $username, 'password' => $password])
                                   ->get('tbl_users');
            if($chkAdmin->num_rows() > 0){
              return $chkAdmin->row();
            }
        }

          public function makeMinistry($data){
              return $this->db->insert('tbl_ministry', $data);
      }

          public function makeLeader($data){
              return $this->db->insert('tbl_leader', $data);
          }

          public function viewLeaders(){
                $this->db->select(['tbl_leader.id', 'tbl_leader.name','tbl_leader.min_id',
                                   'tbl_leader.gender','tbl_leader.birthday', 'tbl_leader.age', 'tbl_leader.address', 'tbl_leader.contact', 'tbl_ministry.ministry']);
                $this->db->from('tbl_leader');
                $this->db->join('tbl_ministry','tbl_ministry.min_id = tbl_leader.min_id');
                $leaders = $this->db->get();
                return $leaders->result();
          }

          public function insertMember($data){
              return $this->db->insert('tbl_members', $data);
          }

          public function getMembers($min_id){
                $this->db->select(['tbl_ministry.min_id','tbl_ministry.ministry','tbl_members.name', 'tbl_members.member_id', 'tbl_members.gender','tbl_members.birthday', 'tbl_members.age', 'tbl_members.address', 'tbl_members.contact', 'tbl_members.image']);
                $this->db->from('tbl_members');
                $this->db->join('tbl_ministry', 'tbl_ministry.min_id = tbl_members.min_id');
                $this->db->where(['tbl_members.min_id' => $min_id]);
                $members = $this->db->get();
                return $members->result();
          }

          public function getMemberRecord($member_id){
                $this->db->select(['tbl_ministry.min_id', 'tbl_ministry.ministry', 'tbl_members.name', 'tbl_members.member_id', 'tbl_members.age', 'tbl_members.gender', 'tbl_members.address', 'tbl_members.contact', 'tbl_members.birthday', 'tbl_members.image']);
                $this->db->from('tbl_members');
                $this->db->join('tbl_ministry', 'tbl_ministry.min_id = tbl_members.min_id');
                $this->db->where(['tbl_members.member_id' => $member_id]);
                $student = $this->db->get();
                return $student->row();

          }

          public function updateMember($data, $member_id){
                return $this->db->where('member_id', $member_id)
                                ->update('tbl_members', $data);

           }

           public function removeMember($member_id){
                return $this->db->delete('tbl_members', ['member_id' => $member_id]);
           }
          
           public function removeMinistry($min_id){
             return $this->db->delete('tbl_ministry', ['min_id' => $min_id]);
           }



  }
 ?>
