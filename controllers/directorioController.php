<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of directorioController
 *
 * @author julio
 */
class directorioController extends Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->_view->show_page();
    }
}
