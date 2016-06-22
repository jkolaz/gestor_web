<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of seccion_model
 *
 * @author VMC-D02
 */
class Seccion_model extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getServicio($sede, $url){
        $where['ser_url'] = $url;
        $where['ser_sed_id'] = $sede;
        $where['ser_estado'] = 1;
        $query = $this->db->where($where)->get('gc_servicio', 1);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return null;
    }
    public function getConvocatoria($sede, $url){
        $where['con_url'] = $url;
        $where['con_sed_id'] = $sede;
        $where['con_estado'] = 1;
        $query = $this->db->where($where)->get('gc_convocatorias', 1);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return null;
    }
}
