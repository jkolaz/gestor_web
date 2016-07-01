<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('imprimir')) {
    function imprimir($objeto) {
        echo '<pre>';
        print_r($objeto);
        echo '</pre>';
    }
}

if(!function_exists('date_text')){
    function date_text($dia){
        $unix = strtotime($dia);
        $year = date('Y', $unix);
        $month = date('m', $unix);
        $day = date('d', $unix);
        $month_text = '';
        switch ($month){
            case '01':
                $month_text = 'enero';
                break;
            case '02':
                $month_text = 'febrero';
                break;
            case '03':
                $month_text = 'marzo';
                break;
            case '04':
                $month_text = 'abril';
                break;
            case '05':
                $month_text = 'mayo';
                break;
            case '06':
                $month_text = 'junio';
                break;
            case '07':
                $month_text = 'julio';
                break;
            case '08':
                $month_text = 'agosto';
                break;
            case '09':
                $month_text = 'septiembre';
                break;
            case '10':
                $month_text = 'octubre';
                break;
            case '11':
                $month_text = 'noviembre';
                break;
            case '12':
                $month_text = 'diciembre';
                break;
        }
        
        return $day.' de '.$month_text.' de '.$year;
    }
}