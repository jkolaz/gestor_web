<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of novedadesController
 *
 * @author VMC-D02
 */
class novedadesController extends Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->_novedad = $this->loadModel('novedad');
    }
    
    public function index(){
        $objNovedad = $this->_novedad->listarNovedad();
        $this->_view->assign('objNovedad', $objNovedad);
        $this->_view->show_page();
    }
    
    public function detalle($id){
        $this->_view->show_page();
    }
}
