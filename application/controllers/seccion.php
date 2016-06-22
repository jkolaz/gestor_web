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
        $this->load->model('seccion_model', 'seccion');
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
                        $this->servicios($this->sede->sed_id, $cuerpo);
                        break;
                    case 'quienessomos':
                        $this->quienessomos();
                        break;
                    case 'unete-a-nosotros':
                        $this->uneteanosotros($this->sede->sed_id, $cuerpo);
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
    
    public function servicios($sede, $cuerpo){
        $objeto = $this->seccion->getServicio($sede, $cuerpo);
        if($objeto){
            $this->smartyci->assign('stdServicio', $objeto[0]);
            $this->smartyci->show_page('seccion_servicios.tpl');
        }else{
             $this->redireccionar($sede);
        }
    }
    
    public function quienessomos($sede, $cuerpo){
        $this->smartyci->show_page('seccion_quienessomos.tpl');
    }
    
    public function uneteanosotros($sede, $cuerpo){
        $objeto = $this->seccion->getConvocatoria($sede, $cuerpo);
        if($objeto){
            $this->smartyci->assign('stdConvocatoria', $objeto[0]);
            switch ($cuerpo){
                case 'unete-a-nosotros':
                    $this->smartyci->show_page('seccion_uneteanosotros_convocatoria.tpl');
                    break;
            }
        }else{
            $this->redireccionar($sede);
        }
    }
    
    public function pastoral(){
        $this->smartyci->show_page('seccion_pastoral.tpl');
    }
    
    public function multimedia(){
        $this->smartyci->show_page('seccion_multimedia.tpl');
    }
    
    public function redireccionar($sede){
        $where['sed_id'] = $sede;
        $this->sede->getRowByCols($where);
        if($this->sede->sed_id > 0){
            redirect('sede/index/'.$this->sede->sed_url);
        }else{
            redirect();
        }
    }
}
