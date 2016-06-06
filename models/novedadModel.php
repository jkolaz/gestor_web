<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of novedadModel
 *
 * @author VMC-D02
 */
class novedadModel extends Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function listarNovedad(){
        $sql = "SELECT * FROM gc_novedad WHERE nov_estado = 1 AND nov_sed_id = ".SEDE;
        $query = $this->_db->query($sql);
        
        return $query->fetchAll();
    }
    
    public function getNovedad($id){
        $sql = "SELECT * FROM gc_novedad WHERE nov_estado = 1 AND nov_sed_id = ".SEDE." and nov_id='{$id}'";
        
        $query = $this->_db->query($sql);
        
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
