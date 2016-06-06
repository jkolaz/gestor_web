<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menuModel
 *
 * @author julio
 */
class menuModel extends Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function permiso(){
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
                        AND gc_menu_web.mw_sed_id = '".SEDE."'
                        AND (SELECT b.men_estado FROM gc_menu b WHERE b.men_id=gc_menu.men_padre) = 1
                GROUP BY gc_menu.men_padre
                ORDER BY men_padre_nombre";
        $query = $this->_db->query($sql);
        $query->execute();
        $obPadre = $query->fetchAll(PDO::FETCH_OBJ);
        if($obPadre){
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
                                AND gc_menu_web.mw_sed_id = '".SEDE."'
                                AND gc_menu.men_padre = {$value->men_padre}
                        ORDER BY gc_menu.men_nombre";
                $query1 = $this->_db->query($sql1);
                $query1->execute();
                $obHijo = $query1->fetchAll(PDO::FETCH_OBJ);
                $obPadre[$index]->sub_menu = $obHijo;
            }
        }
        return $obPadre;
    }
}
