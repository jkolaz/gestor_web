<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * View.php
 * -------------------------------------
 */

require_once ROOT . 'libs/smarty-3.1.27/Smarty.class.php';

class View extends Smarty{
    var $maintpl = "main";
    var $pg_title = EMPRESA;
    var $si_ajax;
    var $base_url;
    var $_controlador;
    var $_metodo;
    var $sufix;
    var $path_css;
    var $path_js;
    var $path_images;
    
    public function __construct(Request $peticion){
        parent::__construct();
        $this->_controlador = strtolower($peticion->getControlador());
        $this->_metodo = strtolower($peticion->getMetodo());
        $this->caching = 0;
        $this->si_ajax = false;
        $this->sufix = url_sufix;
        $this->setTemplateDir( template );
        $this->setCompileDir( template_c );
        $this->setConfigDir( ROOT . 'libs/smarty/Smarty/configs' );
        $this->setCacheDir( ROOT. 'tmp/cache' );
        $this->base_url = BASE_URL;
        $this->path_css = CSS_PATH;
        $this->path_js = JS_PATH;
        $this->path_images = IMG_PATH;
        $this->assign('SERVER_NAME', $this->base_url);
        $this->assign('SERVER_CSS', $this->path_css);
        $this->assign('SERVER_JS', $this->path_js);
        $this->assign('SERVER_IMG', $this->path_images);
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
            $page_html = $this->_controlador.'_'.$this->_metodo.'.tpl';
        }
        if ($this->si_ajax) {

            $this->resp_json($page_html);
        } else {
            
            $this->assign("sufix", $this->sufix);
            if($this->maintpl == "main"){
                
            }
            $html = $this->fetch($page_html, $cache_id);
            $this->assign("content_main", $html);
            $this->display($this->maintpl . '.tpl');
        }
    }
    
    function include_template($var, $template, $cache_id = "") {
        $html = $this->fetch($template . ".tpl", $cache_id);
        //echo $html;
        $this->assign($var, $html);
    }
    
    function menu($objMenu){
        $this->assign('objMenu', $objMenu);
        $this->include_template("menu", "inc/menu");
        $this->include_template("menu_footer", "inc/menu_footer");
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
}

?>
