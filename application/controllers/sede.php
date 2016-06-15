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
            $this->smartyci->assign('objNumTelf', $objNumTelf);
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
