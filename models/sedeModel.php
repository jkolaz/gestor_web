<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sedeMolel
 *
 * @author julio
 */
class sedeModel extends Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function sedeDatos(){
        $sql = "select * from gc_sede where sed_id = ".SEDE;
        $query = $this->_db->query($sql);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    public function region($id){
        $sql = "select * from gc_region where reg_id='{$id}'";
        $query = $this->_db->query($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function num_telefonos(){
        $sql = "select * from gc_sede_telefono where st_sed_id=".SEDE;
        $query = $this->_db->query($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
