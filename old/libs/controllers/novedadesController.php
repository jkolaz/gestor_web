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
        $this->_menu = $this->loadModel('menu');
    }
    
    public function index($pagina = false){
        $objNovedad = $this->_novedad->listarNovedad();
        if(!$this->filtrarInt($pagina)){
                $pagina = false;
        }
        else{
                $pagina = (int) $pagina;
        }
        $this->getLibrary('paginador');
        $paginador = new Paginador();
        $pag = $paginador->paginar($objNovedad, $pagina);
        $html_paginador = $paginador->getView('prueba', 'index_novedades');
        
        $this->_view->assign('objNovedad', $pag);
        $this->_view->assign('paginacion', $html_paginador);
        $this->_view->show_page();
    }
    
    public function detalle($id){
        $objNovedad = $this->_novedad->getNovedad($id);
        if($objNovedad){
            $objMenu = $this->_menu->permiso();
            echo "<pre>";
            print_r($objMenu);
            echo "</pre>";
            exit;
            $this->_view->show_page();
        }else{
            
        }
        
    }
}
