<?php /* Smarty version 3.1.27, created on 2016-07-01 05:49:04
         compiled from "C:\xampp\htdocs\gestor_web\application\views\templates\sede_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:46355775e830c28847_50761227%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c250855fe2cbe933c6b6c3ab61ee8b51ea6fae9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestor_web\\application\\views\\templates\\sede_index.tpl',
      1 => 1466049525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46355775e830c28847_50761227',
  'variables' => 
  array (
    'objNumTelf' => 0,
    'consultalv' => 0,
    'consultas' => 0,
    'objSede' => 0,
    'farmacialv' => 0,
    'farmacias' => 0,
    'novedades' => 0,
    'SERVER_APP_IMG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5775e830c7d786_86960743',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5775e830c7d786_86960743')) {
function content_5775e830c7d786_86960743 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46355775e830c28847_50761227';
?>
<article>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-md-push-9">
                    <aside class="mas-datos">
                        <?php if (count($_smarty_tpl->tpl_vars['objNumTelf']->value) > 0) {?>
                        <h3>Central Telefónica</h3>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objNumTelf']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <a class="telefono" href="#">+51 <span><?php echo $_smarty_tpl->tpl_vars['objNumTelf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]->st_num;?>
</span></a>
                            <?php endfor; endif; ?>
                        <hr class="blanca-corta">
                        <?php }?>
                        <h3>Horarios</h3>
                        <ul class="bullet2">
                            <li><a><strong>Consulta Externa</strong></a></li>
                            <table style="width:100%" class="table-horario">
                                <?php if (count($_smarty_tpl->tpl_vars['consultalv']->value) > 0) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['con'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['con']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['name'] = 'con';
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['consultalv']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total']);
?>
                                <tr>
                                    <td><?php if ($_smarty_tpl->getVariable('smarty')->value['section']['con']['index'] == 0) {?>Lunes a Viernes<?php }?></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultalv']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']];?>
</td> 
                                </tr>
                                    <?php endfor; endif; ?>
                                <?php }?>
                                <?php if (count($_smarty_tpl->tpl_vars['consultas']->value) > 0) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['con'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['con']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['name'] = 'con';
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['consultas']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total']);
?>
                                <tr>
                                    <td><?php if ($_smarty_tpl->getVariable('smarty')->value['section']['con']['index'] == 0) {?>Sábados<?php }?></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']];?>
</td> 
                                </tr>
                                    <?php endfor; endif; ?>
                                <?php }?>
                            </table>
                            <br>
                            <?php if ($_smarty_tpl->tpl_vars['objSede']->value->sed_visita != '') {?>
                            <li><a><strong>Visita Hospitalización</strong></a></li>
                            <p style="margin-left: 1em; color: #fff;"><?php echo $_smarty_tpl->tpl_vars['objSede']->value->sed_visita;?>
</p><br>
                            <?php }?>
                            <li><a><strong>Farmacia</strong></a></li>
                            <table style="width:100%" class="table-horario">
                                <?php if (count($_smarty_tpl->tpl_vars['farmacialv']->value) > 0) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['farm'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['name'] = 'farm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['farmacialv']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['total']);
?>
                                <tr>
                                    <td><?php if ($_smarty_tpl->getVariable('smarty')->value['section']['farm']['index'] == 0) {?>Lunes a Viernes<?php }?></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['farmacialv']->value[$_smarty_tpl->getVariable('smarty')->value['section']['farm']['index']];?>
</td> 
                                </tr>        
                                    <?php endfor; endif; ?>
                                <?php }?>
                                <?php if (count($_smarty_tpl->tpl_vars['farmacias']->value) > 0) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['farm'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['name'] = 'farm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['farmacias']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['farm']['total']);
?>
                                <tr>
                                    <td><?php if ($_smarty_tpl->getVariable('smarty')->value['section']['farm']['index'] == 0) {?>Sábados<?php }?></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['farmacias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['farm']['index']];?>
</td> 
                                </tr>        
                                    <?php endfor; endif; ?>
                                <?php }?>
                            </table>
                        </ul>
                    </aside>
                    <?php if ($_smarty_tpl->tpl_vars['objSede']->value->sed_direccion != '') {?>
                    <aside class="direccion">
                        <h3>Dirección</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['objSede']->value->sed_direccion;?>
</p>
                    </aside>
                    <?php }?>
                    <section class="redes">
                        <div class="siguenos clearfix">
                            <h3 class="pull-left">SÍGUENOS</h3>
                            <ul class="pull-right">
                                <li class="fb">
                                    <a href="https://www.facebook.com/centroderepososjdpiura" target="_blank" title="Síguenos en Facebook"></a>
                                </li>
                                <li class="tw">
                                    <a href="https://twitter.com/crsjdpiura" target="_blank" title="Síguenos en Twitter"></a>
                                </li>
                                <li class="yt">
                                    <a href="https://www.youtube.com/channel/UCtGJmRisNLhgpvR8qxt28oA" target="_blank" title="Síguenos en YouTube"></a>
                                </li>
                                <li class="in">
                                    <a href="https://www.linkedin.com/company/3121795?trk=tyah&trkInfo=tas%3Aorden%20hospital" target="_blank" title="Síguenos en Linked In"></a>
                                </li>
                                <li class="issuu">
                                    <a href="https://issuu.com/septentrional" target="_blank" title="Síguenos en Issuu"></a>
                                </li>
                            </ul>
                        </div>								
                    </section>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['novedades']->value;?>

            </div>								
        </div>
    </section>
    <section class="multimedia">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="videos clearfix">
                        <a class="titulo pull-left" href="multimedia-videos.html">Videos</a>
                        <a class="youtube pull-right" href="https://www.youtube.com/channel/UCtGJmRisNLhgpvR8qxt28oA" target="_blank" title=""><span>Canal de youtube</span></a>
                        <div class="marco">
                            <iframe width="100%" height="272" src="https://www.youtube.com/embed/-CbDvz-_MME" frameborder="0" allowfullscreen style="display:compact;"></iframe>
                        </div>
                        <p>Corporativo Centro de reposo San Juan de Dios</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="fotos clearfix text-center">
                        <a class="titulo pull-left" href="multimedia-fotos.html">Fotos</a>
                        <a class="picassa pull-right" href="multimedia-fotos.html" target="_blank" title=""><span>Picassa</span></a>
                        <div id="picassa_home" class="fotos__picassa"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="row">
                        <div class="col-xs-12 col-md-4 text-center">
                            <div class="modulo-home">
                                <a href="servicios-principales-convenios.html" target="_blank">
                                    <div class="modulo-home__imagen">
                                        <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
Resp_Social.jpg" alt="">
                                        <span class="punta"></span>
                                    </div>
                                    <div class="modulo-home__texto">
                                        <h4 class="text-left">Convenios</h4>
                                        <hr class="gris-corta">
                                        <p class="text-left">IESS, ISFFA, ISSPOL<br>
                                                A través de los convenios con estas instituciones, brindamos servicios de atención de la más alta calidad a los usuarios de estas instituciones del Perú.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 text-center">
                            <div class="modulo-home">
                                <a>
                                    <div class="modulo-home__imagen">
                                        <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
Resp_Social.jpg" alt="">
                                        <span class="punta"></span>
                                    </div>
                                    <div class="modulo-home__texto">
                                        <h4 class="text-left">Instalaciones</h4>
                                        <hr class="gris-corta">
                                        <p class="text-left">Estrenamos modernas instalaciones para Terapia Física, tratamientos en: Estimulación Eléctrica, Ultrasonido, Magnetoterapia, Terapia Láser, Preso terapia, Crioterapia, Termoterapia</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 text-center">
                            <div class="modulo-home">
                                <a>
                                    <div class="modulo-home__imagen">
                                        <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
Resp_Social.jpg" alt="">
                                        <span class="punta"></span>
                                    </div>
                                    <div class="modulo-home__texto">
                                        <h4 class="text-left">Cuidados Paliativos</h4>
                                        <hr class="gris-corta">
                                        <p class="text-left">Contamos con un equipo de profesionales capacitados para mejorar la calidad de vida nuestros pacientes oncológicos y no oncológicos, física, psicosocial y espiritualmente.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>  
<section class="mapa-home">
</section><?php }
}
?>