<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pastoral_model
 *
 * @author Usuario
 */
class Pastoral_model extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getPastoral($sede, $tipo){
        $where['ss_estado'] = 1;
        $where['ss_sed_id'] = $sede;
        $where['ss_tc_id'] = $tipo;
        $query = $this->db->where($where)
                ->get('gc_salud_social', 1);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
    public function getAllPastoral($sede, $tipo = 0){
        $where['ss_estado'] = 1;
        $where['ss_sed_id'] = $sede;
        $where['ss_tc_id !='] = 1;
        if($tipo > 0){
            $where['ss_tc_id'] = $tipo;
        }
        $query = $this->db->where($where)
                ->order_by('ss_orden')
                ->get('gc_salud_social');
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
    public function getVocacional($sede, $tipo){
        $where['voc_estado'] = 1;
        $where['voc_sed_id'] = $sede;
        $where['voc_tc_id'] = $tipo;
        $query = $this->db->where($where)
                ->get('gc_vocacional', 1);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
    public function getAllVocacional($sede, $tipo = 0){
        $where['ss_estado'] = 1;
        $where['ss_sed_id'] = $sede;
        $where['ss_tc_id !='] = 1;
        if($tipo > 0){
            $where['ss_tc_id'] = $tipo;
        }
        $query = $this->db->where($where)
                ->order_by('ss_orden')
                ->get('gc_salud_social');
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
}
