<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of novedades_model
 *
 * @author Usuario
 */
class Novedad_model extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function listarNovedad($sede){
        $sql = "SELECT * FROM gc_novedad WHERE nov_estado = 1 AND nov_sed_id = ".$sede;
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
}
