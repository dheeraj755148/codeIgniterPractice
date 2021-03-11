<?php

    class query extends CI_Model{
        public function getRoles(){
            $roles = $this->db->get('roles');
            
            if($roles -> num_rows() >0){
                 $roles->result();
                 return($roles->result());
            }
        }

        public function insertData($data){
            return $this->db->insert('users',$data);
        }


        public function adminExist($email, $password){
            $check = $this->db->where(['email'=>$email, 'password'=>$password])->get('users');
            if($check->num_rows()>0){
                return $check->row();
            }
        }

        public function insertCollege($data){
            return $this->db->insert('college',$data);
        }

        public function getColleges(){
            $colleges = $this->db->get('college');
            
            if($colleges -> num_rows() >0){
                 $colleges->result();
                 return($colleges->result());
            }
        }
    }
