<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menu_model
 *
 * @author Usuario
 */
class Menu_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function permiso($sede){
        $obPadre = array();
        $sql = "SELECT
                    gc_menu.men_padre,
                    (SELECT a.men_nombre FROM gc_menu a WHERE a.men_id=gc_menu.men_padre) as men_padre_nombre,
                    (SELECT b.men_ruta FROM gc_menu b WHERE b.men_id=gc_menu.men_padre) as men_padre_ruta
                FROM 
                    gc_menu, 
                    gc_menu_web 
                WHERE 
                    gc_menu.men_id=gc_menu_web.mw_men_id 
                        AND gc_menu.men_estado = 1 
                        AND gc_menu_web.mw_estado = 1 
                        AND gc_menu_web.mw_sed_id = '".$sede."'
                        AND (SELECT b.men_estado FROM gc_menu b WHERE b.men_id=gc_menu.men_padre) = 1
                GROUP BY gc_menu.men_padre
                ORDER BY men_padre_nombre";
        $query = $this->db->query($sql);
        if($query->num_rows()){
            $obPadre = $query->result();
            foreach ($obPadre as $index=>$value){
                $sql1 = "SELECT 
                            gc_menu.men_id, 
                            gc_menu.men_nombre, 
                            gc_menu.men_ruta
                        FROM 
                            gc_menu, 
                            gc_menu_web 
                        WHERE 
                            gc_menu.men_id=gc_menu_web.mw_men_id 
                                AND gc_menu.men_estado = 1 
                                AND gc_menu_web.mw_estado = 1 
                                AND gc_menu_web.mw_sed_id = '".$sede."'
                                AND gc_menu.men_padre = {$value->men_padre}
                        ORDER BY gc_menu.men_nombre";
                $query1 = $this->db->query($sql1);
                $obPadre[$index]->sub_menu = $query1->result();
            }
        }
        return $obPadre;
    }
    
    public function verificar_permiso($sede, $menu){
        $sql = "select 
                    * 
                from 
                    gc_menu 
                inner join gc_menu_web on gc_menu_web.mw_men_id=gc_menu.men_id 
                inner join gc_sede on gc_sede.sed_id=gc_menu_web.mw_sed_id 
                where 
                    gc_menu.men_ruta = '$menu'  
                        and gc_sede.sed_url='$sede' ";
        
        $where['men_estado'] = 1;
        $where['sed_estado'] = 1;
        $where['mw_estado'] = 1;
        $where['men_ruta'] = $menu;
        $where['sed_url'] = $sede;
        
    }
}
