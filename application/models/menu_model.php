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
        $aIdPadre = array();
        $sql = "SELECT
                    gc_menu.men_padre,
                    (SELECT a.men_nombre FROM gc_menu a WHERE a.men_id=gc_menu.men_padre) as men_padre_nombre,
                    (SELECT b.men_ruta FROM gc_menu b WHERE b.men_id=gc_menu.men_padre) as men_padre_ruta,
                    (SELECT c.men_orden FROM gc_menu c WHERE c.men_id=gc_menu.men_padre) as men_padre_order
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
                ORDER BY men_padre_order";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
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
        $where['men_estado'] = 1;
        $where['sed_estado'] = 1;
        $where['mw_estado'] = 1;
        $where['men_ruta'] = $menu;
        $where['sed_url'] = $sede;
        
        $query = $this->db->where($where)
                    ->join('gc_menu_web', 'gc_menu_web.mw_men_id=gc_menu.men_id')
                    ->join('gc_sede', 'gc_sede.sed_id=gc_menu_web.mw_sed_id')
                    ->from('gc_menu')->count_all_results();
        return $query;
        
    }
    
    public function getSlider($sede, $seccion = "index"){
        $arreglo = array();
        if ($seccion == 'index'){
            $where['sli_estado'] = 1;
            $where['sli_sed_id'] = $sede;
            $query = $this->db->where($where)->get('gc_slider');
            if($query->num_rows() > 0){
                foreach ($query->result() as $value){
                    $arreglo[] = $value->sli_imagen;
                }
            }
        }else{
            $where['men_estado'] = 1;
            $where['men_ruta'] = $seccion;
            $where['mw_estado'] = 1;
            $where['mw_sed_id'] = $sede;
            $where['mw_imagen !='] = "";
            $query = $this->db->where($where)
                        ->join('gc_menu', 'gc_menu.men_id=gc_menu_web.mw_men_id')
                        ->get('gc_menu_web');
            if($query->num_rows() > 0){
                foreach ($query->result() as $value){
                    $arreglo[] = $value->mw_imagen;
                }
            }
        }
        return $arreglo;
    }
}
