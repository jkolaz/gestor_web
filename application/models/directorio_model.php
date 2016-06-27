<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of directorio_model
 *
 * @author Usuario
 */
class Directorio_model extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getDirectorio($sede){
        $where['dir_sed_id'] = $sede;
        $where['dir_estado'] = 1;
        $query = $this->db->where($where)->get('gc_directorio');
        
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
}
