<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of seccion
 *
 * @author VMC-D02
 */
class Seccion extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('sede_model', 'sede');
    }
    
    public function cuerpo($sede, $seccion, $cuerpo){
        if($sede == ""){
            redirect();
        }
        $where['sed_url'] = $sede;
        $this->sede->getRowByCols($where);
        if($this->sede->sed_id>0){
            
        }else{
            redirect();
        }
    }
}
