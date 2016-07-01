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
        $this->load->model('quienessomos_model', 'quienes_somos');
        $this->load->model('directorio_model', 'directorio');
        $this->load->model('pastoral_model', 'pastoral');
        $this->load->model('novedad_model', 'novedad');
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
                $objBuscador = $this->novedad->getTresUltimas($this->sede->sed_id);
                $this->smartyci->buscador($objBuscador, $this->sede->sed_url);
                $this->smartyci->slider($this->sede->sed_id, $seccion);
                $this->smartyci->menu($this->sede->sed_id, $this->sede->sed_url, uniqid());
                switch ($seccion){
                    case 'servicios':
                        $this->servicios($this->sede->sed_id, $cuerpo);
                        break;
                    case 'quienes-somos':
                        $this->quienessomos($this->sede->sed_id, $cuerpo);
                        break;
                    case 'unete-a-nosotros':
                    case 'donaciones':
                        $this->uneteanosotros($this->sede->sed_id, $cuerpo);
                        break;
                    case 'pastoral';
                        $this->pastoral($this->sede->sed_id, $cuerpo);
                        break;
                    case 'multimedia':
                        $this->multimedia($cuerpo);
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
        switch ($cuerpo){
            case 'presentacion':
                $objeto = $this->quienes_somos->getPresentacion($sede);
                if($objeto){
                    $this->smartyci->assign('stdPresentacion', $objeto);
                    $this->smartyci->show_page('seccion_quienessomos_presentacion.tpl');
                }else{
                    $this->redireccionar($sede);
                }
                break;
            case 'directorio':
                $objeto = $this->directorio->getDirectorio($sede);
                $this->smartyci->assign('objDirectorio', $objeto);
                $this->smartyci->assign('CLASS_BODY', 's_quienes_somos_directorio');
                $this->smartyci->show_page('seccion_quienessomos_directorio.tpl');
                break;
            case 'staffmedico':
            case 'staff-medico':
                $objeto = $this->quienes_somos->getEspecialidad($sede);
                if($objeto){
                    foreach($objeto as $id =>$value){
                        $objeto[$id]->medicos = $this->quienes_somos->getMedico($value->se_id);
                    }
                }
                $this->smartyci->assign('objEspecialidad', $objeto);
                $this->smartyci->assign('CLASS_BODY', 's_servicios_staff');
                $this->smartyci->show_page('seccion_quienessomos_staffmedico.tpl');
                break;
            case 'fundador':
                $objeto = $this->quienes_somos->getFundador($sede);
                if($objeto){
                    $this->smartyci->assign('objFundador', $objeto[0]);
                    $this->smartyci->assign('CLASS_BODY', 's_quienes_somos_fundador');
                    $this->smartyci->show_page('seccion_quienessomos_fundador.tpl');
                }else{
                    $this->redireccionar($sede);
                }
                break;
            case 'ordenhospitalaria':
            case 'orden-hospitalaria':
                /*Principal*/
                $objPrincipal = $this->quienes_somos->getOrdenes($sede, 1);
                $this->smartyci->assign('objPrincipal', $objPrincipal);
                /*Valores*/
                $objValores = $this->quienes_somos->getOrdenes($sede, 2);
                $this->smartyci->assign('objValores', $objValores);
                /*Principios*/
                $objPrincipios = $this->quienes_somos->getOrdenes($sede, 3);
                $this->smartyci->assign('objPrincipios', $objPrincipios);
                /*Estructura*/
                $objEstructura = $this->quienes_somos->getOrdenes($sede, 4);
                $this->smartyci->assign('objEstructura', $objEstructura);
                /*Provincia*/
                $objProvincia = $this->quienes_somos->getOrdenes($sede, 5);
                $this->smartyci->assign('objProvincia', $objProvincia);
                $this->smartyci->assign('CLASS_BODY', 's_quienes_somos_orden');
                $this->smartyci->show_page('seccion_quienessomos_ordenhospitalaria.tpl');
                break;
        }
    }
    
    public function uneteanosotros($sede, $cuerpo){
        $objeto = $this->seccion->getConvocatoria($sede, $cuerpo);
        if($objeto){
            $this->smartyci->assign('stdConvocatoria', $objeto[0]);
            switch ($cuerpo){
                case 'unete-a-nosotros':
                case 'convocatoria':
                    $this->smartyci->show_page('seccion_uneteanosotros_1.tpl');
                    break;
                case 'donaciones':
                case 'donaciones-en-especie':
                case 'colabora-con-nosotros':
                case 'programa-de-recaudacion':
                    $this->smartyci->show_page('seccion_uneteanosotros_3.tpl');
                    break;
                default :
                    $this->redireccionar($sede);
            }
        }else{
            $this->redireccionar($sede);
        }
    }
    
    public function pastoral($sede, $cuerpo){
        switch($cuerpo){
            case 'pastoraldelasaludysocial':
            case 'pastoral-de-la-salud-y-social':
                /*Principal*/
                $objPrincipal = $this->pastoral->getPastoral($sede, 1);
                /*Cuerpo*/
                $objCuerpo = $this->pastoral->getAllPastoral($sede);
                
                $this->smartyci->assign('objPrincipal', $objPrincipal);
                $this->smartyci->assign('objCuerpo', $objCuerpo);
                $this->smartyci->assign('CLASS_BODY', 's_quienes_somos_orden');
                $this->smartyci->show_page('seccion_pastoral_salud_social.tpl');
                break;
            case 'pastoralvocacional':
                /*Principal*/
                $objPrincipal = $this->pastoral->getVocacional($sede, 7);
                /*Proceso*/
                $objProceso = $this->pastoral->getVocacional($sede, 8);
                /*Apostolado*/
                $objApostolado = $this->pastoral->getVocacional($sede, 9);
                /*EstiloVida*/
                $objEstiloVida = $this->pastoral->getVocacional($sede, 10);
                /*Carisma*/
                $objCarisma = $this->pastoral->getVocacional($sede, 11);
                
                $this->smartyci->assign('objPrincipal', $objPrincipal);
                $this->smartyci->assign('objProceso', $objProceso);
                $this->smartyci->assign('objApostolado', $objApostolado);
                $this->smartyci->assign('objEstiloVida', $objEstiloVida);
                $this->smartyci->assign('objCarisma', $objCarisma);
                $this->smartyci->assign('CLASS_BODY', 's_quienes_somos_orden');
                $this->smartyci->show_page('seccion_pastoral_pastoral_vocacional.tpl');
                break;
            case 'voluntariado':
                $objeto = $this->seccion->getConvocatoria($sede, $cuerpo);
                if($objeto){
                    $this->smartyci->assign('stdConvocatoria', $objeto[0]);
                    $this->smartyci->show_page('seccion_uneteanosotros_2.tpl');
                }else{
                    $this->redireccionar($sede);
                }
                break;
            default :
                $this->redireccionar($sede);
        }
    }
    
    public function multimedia($cuerpo){
        switch ($cuerpo){
            case 'fotos':
                $this->smartyci->show_page('seccion_multimedia_fotos.tpl');
                break;
            case 'videos':
                $this->smartyci->show_page('seccion_multimedia_videos.tpl');
                break;
        }
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
