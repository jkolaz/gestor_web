<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of banner_mdel
 *
 * @author Usuario
 */
class Banner_model extends CI_Model{
    //put your code here
    private static $_table;
    private static $_PK;
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        self::$_table = 'gc_banner';
        self::$_PK = 'ban_id';
    }
    
    public function getBanner($tipo, $limit = 0){
        $sql = "SELECT * FROM gc_banner WHERE ban_tb_id={$tipo} and ban_sed_id=0 and ban_estado=1";
        if($limit > 0){
            $sql .= ' LIMIT '.$limit;
        }
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return NULL;
    }
}
