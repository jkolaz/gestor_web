<?php

class indexController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->_novedad = $this->loadModel('novedad');
        $this->_sede = $this->loadModel('sede');
    }
    
    public function index(){
        $this->novedades();
        $objSedeDatos = $this->_sede->sedeDatos();
        $objNumTelf = $this->_sede->num_telefonos();
        $this->_view->assign('objNumTelf', $objNumTelf);
        $this->_view->assign('titulo', 'Portada');
        $this->_view->show_page(NULL, uniqid());
    }
    
    public function novedades(){
        $objNovedad = $this->_novedad->listarNovedad();
        $this->_view->assign('objNovedad', $objNovedad);
        $this->_view->include_template('novedades','index_novedades');
    }
}

?>