<?php

class indexController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->_novedad = $this->loadModel('novedad');
    }
    
    public function index(){
        $this->novedades();
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