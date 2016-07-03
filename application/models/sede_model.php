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
    public $sed_correo;
    
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
            $this->sed_correo = $arreglo[0]->sed_correo;
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
    
    public function datosSede($sede){
        $aDatos = new stdClass();
        $aDatos->nombre = '';
        $aDatos->url = '';
        $aDatos->direccion = '';
        $aDatos->correo = '';
        $aDatos->num_telefono = '';
        $aDatos->region = '';
        
        $region = 0;
        /*datos generales*/
        $query1 = $this->db->where('sed_id', $sede)->get(self::$_table, 1);
        if($query1->num_rows() > 0){
            $respuesta1 = $query1->row();
            $aDatos->nombre = $respuesta1->sed_nombre;
            $aDatos->url = $respuesta1->sed_url;
            $aDatos->direccion = $respuesta1->sed_direccion;
            $aDatos->correo = $respuesta1->sed_correo;
            $region = $respuesta1->sed_reg_id;
        }
        
        /*Números telefónicos*/
        $query2 = $this->db->where('st_sed_id', $sede)
                    ->where('st_estado', 1)
                    ->get('gc_sede_telefono', 1);
        if($query2->num_rows() > 0){
            $respuesta2 = $query2->row();
            $aDatos->num_telefono = $respuesta2->st_num;
        }
        
        if($region > 0){
            $query3 = $this->db->where('reg_id', $region)->get('gc_region', 1);
            if($query3->num_rows() > 0){
                $respuesta3 = $query3->row();
                $aDatos->region = $respuesta3->reg_nombre;
            }
        }
        
        return $aDatos;
    }
}
