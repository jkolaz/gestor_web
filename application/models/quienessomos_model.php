<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of quienessomos_model
 *
 * @author Usuario
 */
class Quienessomos_model extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getPresentacion($sede){
        $where['pre_sed_id'] = $sede;
        $where['pre_estado'] = 1;
        
        $query = $this->db->where($where)->get('gc_presentacion', 1);
        
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getEspecialidad($sede){
        $where['se_sed_id'] = $sede;
        $where['se_estado'] = 1;
        $where['esp_estado'] = 1;
        
        $query = $this->db->where($where)
                    ->join('gc_especialidad', 'gc_especialidad.esp_id=gc_sede_especialidad.se_esp_id')
                    ->order_by('esp_nombre')
                    ->get('gc_sede_especialidad');
        
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getMedico($se){
        $arreglo = array();
        $where['med_se_id'] = $se;
        $where['med_estado'] = 1;
        $query = $this->db->where($where)
                    ->order_by('med_nombre')
                    ->get('gc_medico');
        
        if($query->num_rows() > 0){
            $arreglo = $query->result();
        }
        return $arreglo;
    }
}
