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
    }
    
    public function index($sede=""){
        if($sede == ""){
            redirect();
        }
        $where['sed_url'] = $sede;
        $this->sede->getRowByCols($where);
        if($this->sede->sed_id > 0){
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
            $this->smartyci->menu($this->sede->sed_id, uniqid());
            $this->novedades($this->sede->sed_id);
            $this->smartyci->show_page();
        }else{
            redirect();
        }
    }
    
    public function novedades($sede){
        $objNovedad = $this->novedad->listarNovedad($sede);
        $this->smartyci->assign('objNovedad', $objNovedad);
        $this->smartyci->include_template('novedades','index_novedades');
    }
}
