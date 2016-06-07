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