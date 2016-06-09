<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index
 *
 * @author VMC-D02
 */
class Index extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->model('region_model', 'region');
        $this->load->model('banner_model', 'banner');
        
        $objBanner1 = $this->banner->getBanner(1);
        $objBanner2 = $this->banner->getBanner(2);
        $objBanner3 = $this->banner->getBanner(3);
        
        $objRegion = $this->region->getAll();
        
        $this->smartyci->maintpl = 'mainClear';
        $this->smartyci->assign('objBanner1', $objBanner1);
        $this->smartyci->assign('objBanner2', $objBanner2);
        $this->smartyci->assign('objBanner3', $objBanner3);
        $this->smartyci->assign('objRegion', $objRegion);
        $this->smartyci->show_page();
    }
}
