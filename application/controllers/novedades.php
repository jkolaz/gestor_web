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
        $this->load->model('region_model', 'region');
    }
    
    public function index($sede=""){
        if($sede == ""){
            redirect();
        }
        $where['sed_url'] = $sede;
        $this->sede->getRowByCols($where);
        if($this->sede->sed_id > 0){
            $this->smartyci->slider($this->sede->sed_id);
            $this->smartyci->datos_sede($this->sede->datosSede($this->sede->sed_id));
            $this->load->library('pagination');
            $pages=4;
            $url_paginacion = base_url().'novedades/index/'.$this->sede->sed_url.'/pagina/';
            $config['base_url'] = $url_paginacion;
            $config['total_rows'] = $this->novedad->filas($this->sede->sed_id);
            $config['per_page'] = $pages;
            $config['num_links'] = 2;
            $config["uri_segment"] = 3;
            $this->pagination->initialize($config);
            $this->smartyci->menu($this->sede->sed_id, $this->sede->sed_url, uniqid());
            $objNovedad = $this->novedad->listarNovedadAll($this->sede->sed_id, $config['per_page'], $this->uri->segment(5));
            if($objNovedad){
                foreach ($objNovedad as $index=>$value){
                    $dia_texto = date_text($value->nov_fecha_publicacion);
                    $objNovedad[$index]->dia_texto = $dia_texto;
                }
            }
            $this->smartyci->assign('region', $this->region->getNombreRegion($this->sede->sed_reg_id));
            $this->smartyci->assign('url_sede', $this->sede->sed_url);
            $this->smartyci->assign('objNovedad', $objNovedad);
            $this->smartyci->assign('paginacion', $this->pagination->create_links());
            $this->smartyci->show_page(NULL, uniqid());
        }
    }
    
    public function detalle($sede, $id){
        if($sede == ""){
            redirect();
        }
        $where['sed_url'] = $sede;
        $this->sede->getRowByCols($where);
        if($this->sede->sed_id > 0){
            $this->smartyci->slider($this->sede->sed_id, 'index');
            $this->smartyci->datos_sede($this->sede->datosSede($this->sede->sed_id));
            $objBuscador = $this->novedad->getTresUltimas($this->sede->sed_id);
            $this->smartyci->buscador($objBuscador, $this->sede->sed_url);
            $where1['nov_sed_id'] = $this->sede->sed_id;
            $where1['nov_id'] = $id;
            $this->novedad->getRowByCols($where1);
            if($this->novedad->nov_id > 0){
                $this->smartyci->assign('stdNovedades', $this->novedad);
                $this->smartyci->menu($this->sede->sed_id, $this->sede->sed_url, uniqid());
                $this->smartyci->show_page(NULL, $sede);
            }else{
                redirect('sede/index/'.$sede);
            }
        }else{
            redirect();
        }
    }
}
