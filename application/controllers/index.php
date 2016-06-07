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
        $objRegion = $this->region->getAll();
        
        $this->smartyci->maintpl = 'mainClear';
        $this->smartyci->assign('objRegion', $objRegion);
        $this->smartyci->show_page();
    }
}
