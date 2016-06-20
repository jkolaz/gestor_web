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
    
    public function index($sede=""){
        if($sede == ""){
            redirect();
        }
        $where['sed_url'] = $sede;
        $this->sede->getRowByCols($where);
        if($this->sede->sed_id > 0){
            $this->load->library('pagination');
            $pages=1;
            $config['base_url'] = base_url().'sede/index/'.$this->sede->sed_url.'/pagina/';
            $config['total_rows'] = $this->novedad->filas($this->sede->sed_id);
            $config['per_page'] = $pages;
            $config['num_links'] = 20;
            $config['first_link'] = '<span class="current">1</span>';
            $config['last_link'] = '<a class="next" href="#"></a>';
            $config["uri_segment"] = 3;
            $config['next_link'] = '<a class="next" href="#">Siguiente</a>';
            $config['prev_link'] = '<a class="next" href="#">Anterior</a>';
            $this->pagination->initialize($config);
            $this->smartyci->menu($this->sede->sed_id, uniqid());
            $objNovedad = $this->novedad->listarNovedadAll($sede, $config['per_page'], $this->uri->segment(5));
            $this->smartyci->show_page();
        }
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
