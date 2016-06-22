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
            $permiso = $this->menu_model->verificar_permiso($sede, $cuerpo);
            if($permiso > 0){
                $this->smartyci->menu($this->sede->sed_id, $this->sede->sed_url, uniqid());
                switch ($seccion){
                    case 'servicios':
                        $this->servicios();
                        break;
                    case 'quienessomos':
                        $this->quienessomos();
                        break;
                    case 'uneteanosotros':
                        $this->uneteanosotros();
                        break;
                    case 'pastoral';
                        $this->pastoral();
                        break;
                    case 'multimedia':
                        $this->multimedia();
                        break;
                    default :
                        redirect();
                }
            }else{
                redirect();
            }
        }else{
            redirect();
        }
    }
    
    public function servicios(){
        $this->smartyci->show_page('seccion_servicios.tpl');
    }
    
    public function quienessomos(){
        $this->smartyci->show_page('seccion_quienessomos.tpl');
    }
    
    public function uneteanosotros(){
        $this->smartyci->show_page('seccion_uneteanosotros.tpl');
    }
    
    public function pastoral(){
        $this->smartyci->show_page('seccion_pastoral.tpl');
    }
    
    public function multimedia(){
        $this->smartyci->show_page('seccion_multimedia.tpl');
    }
}
