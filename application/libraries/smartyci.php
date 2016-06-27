<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of smartyci
 *
 * @author julio
 */
if ( ! defined('BASEPATH') )
    exit( 'No direct script access allowed' );

require_once( 'application/third_party/smarty-3.1.27/Smarty.class.php' );

class Smartyci extends Smarty{
    //put your code here
    var $maintpl = "main";
    var $pg_title = '';
    var $si_ajax;
    var $base_url;
    var $ci;
    var $sufix;
    var $listado = "Administrador";
    var $details = "";
    var $details1 = "";
    var $datatable = 0;
    var $fileupload = 0;
    var $wizard = 0;
    var $formulario = 0;
    var $form = 0;
    var $class_body = 's_home';
    
    public function __construct(){
        parent::__construct();
        $this->ci =& get_instance();
        $config =& get_config();
        $this->caching = 0;
        $this->si_ajax = false;
        $config['application_dir'] = APPPATH;
        $this->setTemplateDir( $config['application_dir'] . 'views/templates' );
        $this->setCompileDir( $config['application_dir'] . 'views/templates_c' );
        $this->setConfigDir( $config['application_dir'] . 'third_party/Smarty/configs' );
        $this->setCacheDir( $config['application_dir'] . 'cache' );
        $this->sufix = $config['url_suffix'];
        $this->assign("SERVER_ADMIN", SERVER_ADMIN);
        $this->assign("SERVER_APP", SERVER_APP);
        $this->assign("SERVER_APP_ASSETS", SERVER_APP_ASSETS);
        $this->assign("SERVER_APP_IMG", SERVER_APP_IMG);
        $this->assign("SERVER_APP_CSS", SERVER_APP_CSS);
        $this->assign("SERVER_APP_JS", SERVER_APP_JS);
        $this->assign("SERVER_ADMIN_IMG", SERVER_ADMIN_IMG);
        $this->assign("CLASS_BODY", $this->class_body);
        //$this->display_web();
    }

    //if specified template is cached then display template and exit, otherwise, do nothing.
    public function useCached( $tpl, $cacheId = null )
    {
        if ( $this->isCached( $tpl, $cacheId ) )
        {
            $this->display( $tpl, $cacheId );
            exit();
        }
    }
    
    function display_web() {
        if ($this->si_ajax == false) {
            $this->display($this->maintpl . '.tpl');
        }
    }
    
    public function show_page($page_html = NULL, $cache_id = ""){
       if($page_html == NULL){
           $page_html = $this->ci->_class.'_'.$this->ci->_method.'.tpl';
       }
        if ($this->si_ajax) {

            $this->resp_json($page_html);
        } else {
            
            $this->assign("sufix", $this->sufix);
            if($this->maintpl == "main"){
                //$this->menu($cache_id);
            }
            $html = $this->fetch($page_html, $cache_id);
            $this->assign("content_main", $html);
            $this->display($this->maintpl . '.tpl');
        }
    }
    
    function resp_json($aVars) {
        if (is_array($aVars)) {
            foreach ($aVars as $aVars_id => $aVars_val) {
                $aVars[$aVars_id] = $this->limpiarHtml($aVars_val);
            }
        } else {
            $aVars["html"] = $this->limpiarHtml($aVars);
        }
        echo json_encode($aVars);
        exit;
    }
    
    function limpiarHtml($html) {
        $busca = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
        $reemplaza = array('>', '<', '\\1');
        $html = str_replace("´", "", $html);
        //echo $html."<br>";
        return preg_replace($busca, $reemplaza, $html);
    }
    function include_template($var, $template, $cache_id = "") {
        $html = $this->fetch($template . ".tpl", $cache_id);
        //echo $html;
        $this->assign($var, $html);
    }
    function menu($sede, $url_sede, $cache_id){
        $objPermiso = $this->ci->menu_model->permiso($sede);
        $this->assign('objMenu', $objPermiso);
        $this->assign('url_sede', $url_sede);
        $this->include_template("menu", "inc/menu", $cache_id);
        $this->include_template("menu_footer", "inc/menu_footer", $cache_id);
    }
    
    function slider($sede, $seccion = 'index'){
        $objSlider = $this->ci->menu_model->getSlider($sede, $seccion);
        $this->assign('objSlider', $objSlider);
        $this->include_template("slider", "inc/slider", uniqid());
    }
}
