<?php

    class query extends CI_Model{
        public function getRoles(){
            $roles = $this->db->get('roles');
            
            if($roles -> num_rows() >0){
                 $roles->result();
                 return($roles->result());
            }
        }
    }
?>