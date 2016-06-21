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
    private static $_table;
    private static $_PK;
    public $nov_id;
    public $nov_titulo;
    public $nov_subtitulo;
    public $nov_youtube;
    public $nov_issuu;
    public $nov_destacada;
    public $nov_imagen;
    public $nov_contenido;
    public function __construct() {
        parent::__construct();
        $this->load->database();
        self::$_table = 'gc_novedad';
        self::$_PK = 'nov_id';
    }
    
    public function listarNovedadAll($sede,$por_pagina, $segmento){
        $where['nov_estado'] = 1; 
        $where['nov_sed_id'] = $sede; 
        $query = $this->db->where($where)->get(self::$_table, $por_pagina, $segmento);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function listarNovedad($sede){
        $where['nov_estado'] = 1; 
        $where['nov_sed_id'] = $sede; 
        $query = $this->db->where($where)->get(self::$_table, 3);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
    
    public function getRow($id){
        $where[self::$_PK] = $id;
        $where['nov_estado'] = 1;
        $query = $this->db->where($where)->get(self::$_table);
        if($query->num_rows() > 0){
            $arreglo = $query->result();
            $this->nov_id = $arreglo[0]->nov_id;
            $this->nov_titulo = $arreglo[0]->nov_titulo;
            $this->nov_subtitulo = $arreglo[0]->nov_subtitulo;
            $this->nov_youtube = $arreglo[0]->nov_youtube;
            $this->nov_issuu = $arreglo[0]->nov_issuu;
            $this->nov_destacada = $arreglo[0]->nov_destacada;
            $this->nov_imagen = $arreglo[0]->nov_imagen;
            $this->nov_contenido = $arreglo[0]->nov_contenido;
            $this->nov_estado = $arreglo[0]->nov_estado;
            $this->nov_sed_id = $arreglo[0]->nov_sed_id;
        }
    }
    
    public function getRowByCols($where = array()){
        $where['nov_estado'] = 1;
        $query = $this->db->where($where)->get(self::$_table);
        if($query->num_rows() > 0){
            $arreglo = $query->result();
            $this->nov_id = $arreglo[0]->nov_id;
            $this->nov_titulo = $arreglo[0]->nov_titulo;
            $this->nov_subtitulo = $arreglo[0]->nov_subtitulo;
            $this->nov_youtube = $arreglo[0]->nov_youtube;
            $this->nov_issuu = $arreglo[0]->nov_issuu;
            $this->nov_destacada = $arreglo[0]->nov_destacada;
            $this->nov_imagen = $arreglo[0]->nov_imagen;
            $this->nov_contenido = $arreglo[0]->nov_contenido;
            $this->nov_estado = $arreglo[0]->nov_estado;
            $this->nov_sed_id = $arreglo[0]->nov_sed_id;
        }
    }
    
    public function filas($sede){
        $consulta = $this->db->where('nov_sed_id', $sede)->get(self::$_table);
        return  $consulta->num_rows() ;
    }
}
