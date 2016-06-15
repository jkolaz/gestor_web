<?php /* Smarty version 3.1.27, created on 2016-06-15 17:07:17
         compiled from "C:\xampp\htdocs\gestor_web\application\views\templates\main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:255875761d195333e32_86961517%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e9474903a07e0863c3139b5a87c8b9a880b5b68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestor_web\\application\\views\\templates\\main.tpl',
      1 => 1466019947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255875761d195333e32_86961517',
  'variables' => 
  array (
    'SERVER_APP_IMG' => 0,
    'SERVER_APP_CSS' => 0,
    'SERVER_APP_JS' => 0,
    'SERVER_APP' => 0,
    'menu' => 0,
    'content_main' => 0,
    'SERVER_ADMIN_IMG' => 0,
    'menu_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5761d19537b8f5_95075966',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5761d19537b8f5_95075966')) {
function content_5761d19537b8f5_95075966 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '255875761d195333e32_86961517';
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Inicio | Centro de reposo San Juan de Dios Piura | Perú</title>
        <meta name="keywords" content="San Juan de Dios, Centro Reposo Piura, Piura, Perú, Institución religiosa, católica, ayuda, necesitados">
        <meta name="description" content="Los Hermanos de San Juan de Dios somos una Institución religiosa de confesionalidad católica y sin ánimo de lucro, que promueve la ayuda a necesitados y enfermos en los ámbitos social y sanitario.">

        <meta property="og:title" content="Inicio | Centro de reposo San Juan de Dios Piura | Perú" />
        <meta property="og:site_name" content="Centro de reposo San Juan de Dios Piura | Perú"/>
        <meta name="og:description" content="Los Hermanos de San Juan de Dios somos una Institución religiosa de confesionalidad católica y sin ánimo de lucro, que promueve la ayuda a necesitados y enfermos en los ámbitos social y sanitario.">
        <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
img_redes310x310.html" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Inicio | Centro de reposo San Juan de Dios Piura | Perú" />
        <meta name="twitter:description" content="Los Hermanos de San Juan de Dios somos una Institución religiosa de confesionalidad católica y sin ánimo de lucro, que promueve la ayuda a necesitados y enfermos en los ámbitos social y sanitario." />
        <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
img_redes310x310.html" />

        <meta name="robots" content="all">
        <meta name=viewport content="width=device-width, initial-scale=1">

        <meta name="google-site-verification" content="" />

        <base >

        <link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
favicon.png" />
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
favicon.png" />

        <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_CSS']->value;?>
bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_CSS']->value;?>
styles-theme.css" rel="stylesheet">

        <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_CSS']->value;?>
font-awesome.min.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->

        <!-- CSS DE JQUERY -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_JS']->value;?>
jquery.bxslider/jquery.bxslider.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_JS']->value;?>
jquery.youmax/youmax.css"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_JS']->value;?>
jquery.pwi/css/pwi.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_JS']->value;?>
jquery.pwi/js/jquery.fancybox/source/jquery.fancybox8cbb.css?v=2.1.5" type="text/css" media="screen" />
    </head>

    <body id="top" role="document" class="s_home">

        <!--PLUGIN FACEBOOK-->
        <div id="fb-root"></div>
        
        <?php echo '<script'; ?>
>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "../connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        <?php echo '</script'; ?>
>
        <!--PLUGIN FACEBOOK-->

        <!--GOOGLE ANALYTICS-->
        <?php echo '<script'; ?>
>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-36852718-53', 'auto');
          ga('send', 'pageview');

        <?php echo '</script'; ?>
>
        
        <!--GOOGLE ANALYTICS-->

        <header class="cabecera">
            <nav class="navbar anim-suave" role="navigation">
                <div class="container">
                    <!-- El logotipo y el icono que despliega el menú se agrupan para mostrarlos mejor en los dispositivos móviles -->
                    <div class="col-xs-12 col-sm-3 clearfix">
                        <div class="navbar-header pull-right">
                            <a class="buscar hidden-md hidden-lg" href="#"><i class="fa fa-search"></i><span>Buscar</span></a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Desplegar navegación</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <h1 class="pull-left anim-suave">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP']->value;?>
">
                                <span>Centro de reposo San Juan de Dios Piura | Perú</span>
                                <img class="anim-suave" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
logo_p2.png" alt="Centro de reposo San Juan de Dios Piura | Perú">
                            </a>
                        </h1>
                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

                    <nav class="buscador" style="display: none;">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 clearfix">
                                    <form method="get" action="#">
                                        <input class="buscador__campo pull-left" type="text" placeholder="BUSCAR..." name="q">
                                        <input class="buscador__boton pull-left" type="submit" value="&#xf054;">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </nav>

            <!-- jQuery handles to place the header background images -->
            <div class="slider-principal-contenido">
                <div class="container">
                    <div class="slider-principal">
                        <ul>
                            <li>
                                    <img class="img-responsive pull-right" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
slidea1.jpg">
                            </li>
                            <li>
                                  <img class="img-responsive pull-right" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
slidea2.jpg">
                            </li>
                            <li>
                                  <img class="img-responsive pull-right" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
slidea3.jpg">
                            </li>
                            <li>
                                  <img class="img-responsive pull-right" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
slidea4.jpg">
                            </li>
                            <li>
                                  <img class="img-responsive pull-right" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
slidea5.jpg">
                            </li>
                            <li>
                                  <img class="img-responsive pull-right" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_IMG']->value;?>
slidea6.jpg">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- Sección principal -->
	<main id="main" role="main">  
            <?php echo $_smarty_tpl->tpl_vars['content_main']->value;?>
	
	</main>
        <footer class="pie">
            <div class="container">
                <div class="row">
                    <div class="pie__logo clearfix text-center">
                        <div class="col-xs-12 col-md-4">
                            <a class="logo" href="index.html">
                            <span>Centro de reposo San Juan de Dios Piura | Perú</span>
                                <img class="img-responsive margen" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADMIN_IMG']->value;?>
logo_p2.png" width="260" alt="Centro de reposo San Juan de Dios Piura | Perú" style="margin-top: 10px;">
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-3 col-md-offset-1">
                            <p class="text-left"><strong>Dirección</strong><br>
                            Av Calletano Heredia 210 | Castilla <br>Piura | Perú</p>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <span class="telefono">Teléfono: <a href="#">+51 (01) 2861197</a></span>
                            <p class="email">E-mail:<a href="#">  contactenos@centrosanjuandedios.com</a></p>
                        </div>
                    </div>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['menu_footer']->value;?>

            </div>
	</footer>
	<div class="pie__copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-9 text-center">
                        <p>© Copyright 2015 - <strong>Orden Hospitalaria de San Juan de Dios</strong>, Provincia Sudamericana  Septentrional (Perú, Venezuela y Ecuador)</p>
                    </div>
                    <div class="col-xs-12 col-md-3 text-center">
                        <a class="" href="#" target="_blank"></a>
                    </div>
                </div>
            </div>
	</div>

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_JS']->value;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_JS']->value;?>
bootstrap.min.js"><?php echo '</script'; ?>
>


    <!-- bxSlider: slider principal -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_JS']->value;?>
jquery.bxslider/jquery.bxslider.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    	$(document).ready(function(){
    		$('.slider-principal').show();
		  var sliderPrincipal = $('.slider-principal ul').bxSlider({
			controls: false,
			pager: false,
			auto: true,
			speed: 1500,
			pause: 5000,
			touchEnabled: true,
		});
	});
    	$(document).ready(function(){
			$('.slider-novedades').show();
		  var sliderNovedades = $('.slider-novedades ul').bxSlider({
			controls: false,
			pager: true,
			auto: false,
			speed: 1500,
			pause: 5000,
			touchEnabled: true,
			mode:'fade'
		});
	});
    	$(document).ready(function(){
			$('.slider-pastoral').show();
		  var sliderPastoral = $('.slider-pastoral > ul').bxSlider({
			controls: false,
			pager: true,
			auto: true,
			speed: 1500,
			pause: 5000,
			touchEnabled: true,
			adaptiveHeight: true
		});
		$('.slider-pastoral-prev').click(function(){
			sliderPastoral.goToPrevSlide();
		});
		$('.slider-pastoral-next').click(function(){
			sliderPastoral.goToNextSlide();
		});
	});
    <?php echo '</script'; ?>
>
    <!-- Fin bxSlider -->

	<!-- Menú desplegable -->
	<?php echo '<script'; ?>
>
		$('.js-desplegar > a').mouseover(function(){
			if( ! $(this).hasClass('activo') ){
				/*$('.js-desplegar > a').each(function(){
					cerrarDesplegable($(this));
				});*/
				abrirDesplegable($(this));
			}
		});

		//Cierra el desplegable cuando salimos del listado
		$('.js-desplegar').mouseleave(function(){
			var $enlaceDesplegable = $(this).children('.js-desplegable').siblings('a');
			if( $enlaceDesplegable.hasClass('activo') ){
				cerrarDesplegable($enlaceDesplegable);
			}

		});

		function cerrarDesplegable($enlaceDesplegable){
			$enlaceDesplegable.siblings('.js-desplegable').slideUp(300);
			$enlaceDesplegable.removeClass('activo');
		}

		function abrirDesplegable($enlaceDesplegable){
			$enlaceDesplegable.siblings('.js-desplegable').slideDown(300);
			$enlaceDesplegable.addClass('activo');
		}

		$('.buscar').click(function(){
			$('.buscador').slideToggle();
			return false;
		});

	<?php echo '</script'; ?>
>
	<!-- Fin Menú desplegable -->

	<!--Twitter -->
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_JS']->value;?>
jquery.twitter/js/twitterFetcher_min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
		var twitter = {
		  "id": '633986030262177792',
		  "domId": 'banner_twitter',
		  "maxTweets": 1,
		  "enableLinks": true,
		  "showTime": false,
		  "lang": 'es',
		  "showRetweet": false,
		  "showInteraction": false
		};
		twitterFetcher.fetch(twitter);
	<?php echo '</script'; ?>
>
  	<!--Fin Twitter -->

	<!-- These files are the PWI files -->

		<!-- FancyBox (usado por pwi)-->
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_JS']->value;?>
jquery.pwi/js/jquery.fancybox/source/jquery.fancybox.pack8cbb.js?v=2.1.5"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
		<?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_JS']->value;?>
jquery.pwi/js/jquery.pwi.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">

	  $(document).ready(function () {

		//https://code.google.com/p/pwi/wiki/Configuration
		$("#fotos").pwi({
		  username: '114773337224573804088',
		   labels: {
		   	photo:"foto",
            photos: "fotos"
           }
		});
		var resultados = 12;
		if ($(window).width()<768) {
			resultados = 4;
		};
		$("#picassa_home").pwi({
		  username: '114773337224573804088',
		  mode:'album',
		  album:'CentroDeReposoSanJuanDeDiosPiura',
		  maxResults : resultados,
		  albumMaxResults : resultados,
		  thumbSize:'104',
		  thumbCrop:'true',
		  showAlbumDescription: false,
		  showAlbumLocation: false,
		  showAlbumPhotoCount: false,
		  showPager : false,
		});

	  });
	<?php echo '</script'; ?>
>
	<!-- FinPWI -->

	<!-- Youtube -->
	<?php echo '<script'; ?>
 src="js/jquery.youmax/jquery.youmax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	//Documentación: http://www.codehandling.com/2013/03/youmax-20-complete-youtube-channel-on.html
	$('#youmax').youmax({
	  apiKey:'AIzaSyAadkwmwJSusigJZfss-jahoMHlUkkshU8',//Clave de desarrollo@synapsis.com.ar
	  youTubeChannelURL:"https://www.youtube.com/channel/UCtGJmRisNLhgpvR8qxt28oA",
	  youmaxDefaultTab: "uploads",
	  youmaxWidgetWidth:'100%',
	  youmaxColumns:2,
	  showFeaturedVideoOnLoad:true,
	  showVideoInLightbox:true
	  //youTubePlaylistURL:"http://www.youtube.com/playlist?list=PLHFlHpPjgk713fMv5O4s4Fv7k6yTkXwkV",
	});
		$('#youmax-header').hide();
		$('#youmax-tabs').hide();

	<?php echo '</script'; ?>
>
	<!-- Fin Youtube -->

	<!-- Mapa de Google -->
	<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_APP_JS']->value;?>
jquery.gmap/jquery.gmap.min.js"><?php echo '</script'; ?>
>
        
	<?php echo '<script'; ?>
 type="text/javascript">
		//http://gmap.nurtext.de/documentation.html
		$(document).ready(function() {
			$(".mapa-home").gMap({
				latitude: -5.195791,
				longitude: -80.620647,
				zoom: 16,
				markers: [{latitude: -5.195791, longitude: -80.620647}],
				controls: ["GSmallMapControl", "GMapTypeControl"]
			});
	  });
	<?php echo '</script'; ?>
>
        
	<!-- Fin Mapa de Google -->

	<!-- Scroll en cabecera -->
	<?php echo '<script'; ?>
>
		//Anima el menú cuando hay scroll
		$( window ).scroll(function(){
			var $cabecera = $('.cabecera');
			if( $(window).scrollTop() > 20){
				$cabecera.addClass('scroll');
			}else{
				$cabecera.removeClass('scroll');
			}
		});
	<?php echo '</script'; ?>
>
	<!-- Fin Scroll en cabecera -->


  </body>

</html><?php }
}
?>