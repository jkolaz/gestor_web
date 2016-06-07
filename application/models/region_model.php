<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of region
 *
 * @author julio
 */
class Region_model extends CI_Model{
    //put your code here
    private static $_region;
    public function __construct() {
        parent::__construct();
        $this->load->database();
        self::$_region = 'gc_region';
    }
    
    public function getAll(){
        $aRegion = array();
        $sql = "select * from gc_region where reg_estado=1";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            $aRegion = $query->result();
            foreach($aRegion as $index=>$value){
                $sql1 = "select * from gc_sede where sed_estado = 1 and sed_reg_id=".$value->reg_id;
                $query1 = $this->db->query($sql1);
                $aSede = array();
                if($query1->num_rows() > 0){
                    $aSede = $query1->result();
                }
                $aRegion[$index]->sedes = $aSede;
            }
            
        }
        return $aRegion;
    }
}
