<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of novedades
 *
 * @author Usuario
 */
class Novedades extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('sede_model', 'sede');
        $this->load->model('novedad_model', 'novedad');
    }
    
    public function index(){
        
    }
    
    public function detalle($sede, $id){
        if($sede == ""){
            redirect();
        }
        $where['sed_url'] = $sede;
        $this->sede->getRowByCols($where);
        if($this->sede->sed_id > 0){
            $this->novedad->getRow($id);
            if($this->novedad->nov_id > 0){
                $this->smartyci->menu($this->sede->sed_id, uniqid());
                $this->smartyci->show_page();
            }else{
                redirect('sede/index/'.$sede);
            }
        }else{
            redirect();
        }
    }
}
