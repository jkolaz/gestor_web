<?php /* Smarty version 3.1.27, created on 2016-07-01 07:01:52
         compiled from "C:\xampp\htdocs\gestor_web\application\views\templates\index_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:117195775f940527601_90206308%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5817031e14773d69c6084c8ff346b0334a3f7a77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestor_web\\application\\views\\templates\\index_index.tpl',
      1 => 1466045094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117195775f940527601_90206308',
  'variables' => 
  array (
    'SERVER_APP_ASSETS' => 0,
    'objBanner1' => 0,
    'SERVER_ADMIN_IMG' => 0,
    'objBanner2' => 0,
    'objBanner3' => 0,
    'objRegion' => 0,
    'SERVER_APP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5775f9406215b1_20089189',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5775f9406215b1_20089189')) {
function content_5775f9406215b1_20089189 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '117195775f940527601_90206308';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<!--<META HTTP-EQUIV="REFRESH" CONTENT="5">-->
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_ASSETS']->value;?>
index/img/ico.png">
    <title>.:: ORDEN HOSPITALARIA SAN JUAN DE DIOS ::.</title>	
	<!--<link href="css/site.css" rel="stylesheet" type="text/css">-->

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_ASSETS']->value;?>
index/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_ASSETS']->value;?>
index/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	
	<link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_ASSETS']->value;?>
index/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_ASSETS']->value;?>
index/css/site.css">
	
	
    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_ASSETS']->value;?>
index/css/css.css" rel="stylesheet">
	
	


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><?php echo '<script'; ?>
 src="../../assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_ASSETS']->value;?>
index/js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>

  <body role="document" class="fondo">

    <div class="fondologo">
		<img class="img-responsive pull-right" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_ASSETS']->value;?>
index/img/bg_prehome.png">
	</div>	
    <div class="container">
      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
		<div class="masthead logo"></div>
		<!-- Example row of columns -->
		<div class="row">			
			<div class="redessociales">
				<a href="https://www.facebook.com/ohsjdperuvenezuelayecuador" title="Facebook" target="_blank"><i class="icon-facebook-sign"></i></a>
				<a href="https://twitter.com/ohsjd" title="Twitter" target="_blank"><i class="icon-twitter-sign"></i></a>
				<a href="http://www.youtube.com/user/ohsjdseptentrional" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
				<a href="https://picasaweb.google.com/comunicacionesohsjd" title="Picasa" target="_blank"><i class="icon-picasa-sign"></i></a>
				<a href="http://issuu.com/septentrional" title="issuu" target="_blank"><i class="icon-sign-blank"></i></a>
				<a href="http://www.linkedin.com/company/3121795?trk=tyah&trkInfo=tas%3Aorden%20hospital" title="Linkedin" target="_blank"><i class="icon-linkedin-sign"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-lg-6 bloquesleft">
                            <?php if (count($_smarty_tpl->tpl_vars['objBanner1']->value) > 3) {?>
                            <div class="col-xs-6 col-md-6 bloqueimg">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['objBanner1']->value[0]->ban_url;?>
" target="_blank">
                                    <img class="img-responsive pull-right" style="width: 286px; height: 177px;"  src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN_IMG']->value;
echo $_smarty_tpl->tpl_vars['objBanner1']->value[0]->ban_img;?>
">
                                </a>	
                            </div>
                            <div class="col-xs-6 col-md-6 bloqueimg">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['objBanner1']->value[1]->ban_url;?>
" target="_blank">
                                    <img class="img-responsive pull-right" style="width: 286px; height: 177px;" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN_IMG']->value;
echo $_smarty_tpl->tpl_vars['objBanner1']->value[1]->ban_img;?>
">
                                </a>	
                            </div>
                            <div class="col-xs-6 col-md-6 bloqueimg">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['objBanner1']->value[2]->ban_url;?>
" target="_blank">
                                    <img class="img-responsive pull-right" style="width: 286px; height: 177px;" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN_IMG']->value;
echo $_smarty_tpl->tpl_vars['objBanner1']->value[2]->ban_img;?>
">
                                </a>	
                            </div>				
                            <div class="col-xs-6 col-md-6 bloqueimg">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['objBanner1']->value[3]->ban_url;?>
" target="_blank">
                                    <img class="img-responsive pull-right" style="width: 286px; height: 177px;" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN_IMG']->value;
echo $_smarty_tpl->tpl_vars['objBanner1']->value[3]->ban_img;?>
">
                                </a>
                            </div>
                            <?php }?>
                            <?php if (count($_smarty_tpl->tpl_vars['objBanner2']->value) > 0) {?>
                            <div class="col-xs-6 col-md-6 bloqueimg">
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objBanner2']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
                                <div class="col-xs-6 col-md-6" style="padding: 0px; padding-right: 2px;">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['objBanner2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->ban_url;?>
">
                                        <img class="img-responsive pull-right" style="width: 141px; height: 175px;" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN_IMG']->value;
echo $_smarty_tpl->tpl_vars['objBanner2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->ban_img;?>
">
                                    </a>						
                                </div>
                                <?php endfor; endif; ?>
                            </div>
                            <?php }?>
                            
                            <div class="col-xs-6 col-md-6" style="padding: 0px; padding-right: 8px; padding-bottom: 6px;">
                                <a href="#">
                                    <img class="img-responsive pull-right" style="width: 286px; height: 177px;" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN_IMG']->value;
echo $_smarty_tpl->tpl_vars['objBanner1']->value[4]->ban_img;?>
">
                                </a>
                            </div>
			</div>
                        <?php if (count($_smarty_tpl->tpl_vars['objBanner3']->value) > 0) {?>
			<div class="col-xs-12 col-lg-6 bloquesright">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objBanner3']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
                                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['id']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['id']['index'] == 0) {?>class="active"<?php }?>></li>
                                    <?php endfor; endif; ?>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objBanner3']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
                                    <div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['id']['index'] == 0) {?>active<?php }?>">
                                        <a href="#">
                                            <img class="img-responsive pull-right" style="width: 578px; height: 543px;" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN_IMG']->value;
echo $_smarty_tpl->tpl_vars['objBanner3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->ban_img;?>
">	
                                        </a>	
                                    </div>
                                    <?php endfor; endif; ?>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
			</div>
                        <?php }?>
		</div>
                <?php if (count($_smarty_tpl->tpl_vars['objRegion']->value) > 0) {?>
		<div class="row">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objRegion']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
                    <div class="col-xs-6 col-lg-3 pais">
                        <div class="pais-color">
                            <?php if (count($_smarty_tpl->tpl_vars['objRegion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->sedes) > 0) {?>
                            <div class="col-xs-12 col-lg-12">
                                <label>
                                    <div class="col-xs-6 col-lg-6 pais-bandera">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN_IMG']->value;
echo $_smarty_tpl->tpl_vars['objRegion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->reg_bandera;?>
" class="left block">
                                    </div>
                                    <div class="col-xs-6 col-lg-6 cuerpo-texto-bandera">
                                        <p><?php if ($_smarty_tpl->getVariable('smarty')->value['section']['id']['index'] == 3) {?>Orden en el<?php } else { ?>Centros en<?php }?><br><h2 style="padding: 0px; margin: 0px; width: 180px;"><?php echo $_smarty_tpl->tpl_vars['objRegion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->reg_nombre;?>
</h2></p>
                                    </div>
                                </label>
                            </div>
                            <div class="pais-pie">
                                <select class="form-control mb-md cbo_sede">
                                    <option selected="" disabled="">Seleccione un Centro</option>
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sed'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sed']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['name'] = 'sed';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objRegion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->sedes) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sed']['total']);
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['objRegion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->sedes[$_smarty_tpl->getVariable('smarty')->value['section']['sed']['index']]->sed_url;?>
"><?php echo $_smarty_tpl->tpl_vars['objRegion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->sedes[$_smarty_tpl->getVariable('smarty')->value['section']['sed']['index']]->sed_nombre;?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <?php endfor; endif; ?>
		</div>
                <?php }?>
			

      <!-- Site footer -->
    <footer class="footer pie-index">
		<div class="col-xs-12 col-lg-12" style="padding: 0px;">
			<p>Curia Provincial<br> Av. Nicolás Arriola #3250 | San Luis | Lima | Perú | Tfno. 319 - 1400 - anexo 1419 | comunicaciones@sanjuandediosoh.com</p>
			
		</div>		
    </footer>
	</div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="../../assets/js/vendor/jquery.min.js"><\/script>')<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_ASSETS']->value;?>
index/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../assets/js/docs.min.js"><?php echo '</script'; ?>
>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            var base_url = "<?php echo $_smarty_tpl->tpl_vars['SERVER_APP']->value;?>
";
        <?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_ASSETS']->value;?>
index/js/index.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
?>