<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sede_model
 *
 * @author VMC-D02
 */
class Sede_model extends CI_Model{
    //put your code here
    private static $_table;
    private static $_PK;
    public $sed_id;
    public $sed_nombre;
    public $sed_estado;
    public $sed_reg_id;
    public $sed_url;
    public $sed_consulta_lv;
    public $sed_consulta_s;
    public $sed_farmacia_lv;
    public $sed_farmacia_s;
    public $sed_visita;
    public $sed_direccion;
    
    public function __construct() {
        parent::__construct();
        parent::__construct(); 
        $this->load->database();
        self::$_table = 'gc_sede';
        self::$_PK = 'sed_id';
    }
    
    public function getRowByCols($where = array()){
        $where['sed_estado'] = 1;
        $query = $this->db->where($where)->get(self::$_table);
        if($query->num_rows() > 0){
            $arreglo = $query->result();
            $this->sed_id = $arreglo[0]->sed_id;
            $this->sed_nombre = $arreglo[0]->sed_nombre;
            $this->sed_estado = $arreglo[0]->sed_estado;
            $this->sed_reg_id = $arreglo[0]->sed_reg_id;
            $this->sed_url = $arreglo[0]->sed_url;
            $this->sed_consulta_lv = $arreglo[0]->sed_consulta_lv;
            $this->sed_consulta_s = $arreglo[0]->sed_consulta_s;
            $this->sed_farmacia_lv = $arreglo[0]->sed_farmacia_lv;
            $this->sed_farmacia_s = $arreglo[0]->sed_farmacia_s;
            $this->sed_visita = $arreglo[0]->sed_visita;
            $this->sed_direccion = $arreglo[0]->sed_direccion;
        }
    }
    
    public function num_telefonos($sede){
        $sql = "select * from gc_sede_telefono where st_sed_id=".$sede;
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
}
