<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sede
 *
 * @author VMC-D02
 */
class Sede extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('sede_model', 'sede');
        $this->load->model('novedad_model', 'novedad');
        $this->load->model('region_model', 'region');
    }
    
    public function index($sede=""){
        if($sede == ""){
            redirect();
        }
        $where['sed_url'] = $sede;
        $this->sede->getRowByCols($where);
        if($this->sede->sed_id > 0){
            $this->smartyci->assign('url_sede', $this->sede->sed_url);
            $this->smartyci->slider($this->sede->sed_id);
            $objNumTelf = $this->sede->num_telefonos($this->sede->sed_id);
            $aConsultasLV = array();
            if($this->sede->sed_consulta_lv != ""){
                $aConsultasLV = explode("\n", $this->sede->sed_consulta_lv);
            }
            $aConsultasS = array();
            if($this->sede->sed_consulta_s != ""){
                $aConsultasS = explode("\n", $this->sede->sed_consulta_s);
            }
            $aFarmaciaLV = array();
            if($this->sede->sed_farmacia_lv != ""){
                $aFarmaciaLV = explode("\n", $this->sede->sed_farmacia_lv);
            }
            $aFarmaciaS = array();
            if($this->sede->sed_farmacia_s != ""){
                $aFarmaciaS = explode("\n", $this->sede->sed_farmacia_s);
            }
            $this->smartyci->assign('consultalv', $aConsultasLV);
            $this->smartyci->assign('consultas', $aConsultasS);
            $this->smartyci->assign('farmacialv', $aFarmaciaLV);
            $this->smartyci->assign('farmacias', $aFarmaciaS);
            $this->smartyci->assign('objNumTelf', $objNumTelf);
            $this->smartyci->assign('objSede', $this->sede);
            $this->smartyci->menu($this->sede->sed_id, $this->sede->sed_url, uniqid());
            $this->novedades($this->sede->sed_id);
            $this->smartyci->show_page();
        }else{
            redirect();
        }
    }
    
    public function novedades($sede){
        $where['sed_id'] = $sede;
        $this->sede->getRowByCols($where);
        $objNovedad = $this->novedad->listarNovedad($sede);
        if($objNovedad){
            foreach ($objNovedad as $index=>$value){
                $dia_texto = date_text($value->nov_fecha_publicacion);
                $objNovedad[$index]->dia_texto = $dia_texto;
            }
        }
        $this->smartyci->assign('region', $this->region->getNombreRegion($this->sede->sed_reg_id));
        $this->smartyci->assign('objNovedad', $objNovedad);
        $this->smartyci->assign('url_sede', $this->sede->sed_url);
        $this->smartyci->include_template('novedades','index_novedades');
    }
}
