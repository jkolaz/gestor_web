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
        <meta property="og:image" content="{$SERVER_APP_IMG}img_redes310x310.html" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Inicio | Centro de reposo San Juan de Dios Piura | Perú" />
        <meta name="twitter:description" content="Los Hermanos de San Juan de Dios somos una Institución religiosa de confesionalidad católica y sin ánimo de lucro, que promueve la ayuda a necesitados y enfermos en los ámbitos social y sanitario." />
        <meta name="twitter:image" content="{$SERVER_APP_IMG}img_redes310x310.html" />

        <meta name="robots" content="all">
        <meta name=viewport content="width=device-width, initial-scale=1">

        <meta name="google-site-verification" content="" />

        <base >

        <link rel="icon" type="image/x-icon" href="{$SERVER_APP_IMG}favicon.png" />
        <link rel="icon" type="image/png" href="{$SERVER_APP_IMG}favicon.png" />

        <link href="{$SERVER_APP_CSS}bootstrap.min.css" rel="stylesheet">
        <link href="{$SERVER_APP_CSS}styles-theme.css" rel="stylesheet">

        <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{$SERVER_APP_CSS}font-awesome.min.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- CSS DE JQUERY -->
        <link href="{$SERVER_APP_JS}jquery.bxslider/jquery.bxslider.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{$SERVER_APP_JS}jquery.youmax/youmax.css"/>
        <link href="{$SERVER_APP_JS}jquery.pwi/css/pwi.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{$SERVER_APP_JS}jquery.pwi/js/jquery.fancybox/source/jquery.fancybox8cbb.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript">
            var switchTo5x=true;
        </script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        {literal}
        <script type="text/javascript">
            stLight.options({publisher: "74cba81d-5aa0-4098-9ce6-e4000c2f6738", doNotHash: false, doNotCopy: false, hashAddressBar: false});
        </script>
        {/literal}
    </head>

    <body id="top" role="document" class="{$CLASS_BODY}">

        <!--PLUGIN FACEBOOK-->
        <div id="fb-root"></div>
        {literal}
        <!--<script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "../connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>-->
        <!--PLUGIN FACEBOOK-->

        <!--GOOGLE ANALYTICS-->
        <!--<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-36852718-53', 'auto');
          ga('send', 'pageview');

        </script>-->
        {/literal}
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
                            <a href="{$SERVER_APP}sede/index/{$url_sede}">
                                <span>Centro de reposo San Juan de Dios Piura | Perú</span>
                                <img class="anim-suave" src="{$SERVER_APP_IMG}logo_p2.png" alt="Centro de reposo San Juan de Dios Piura | Perú">
                            </a>
                        </h1>
                    </div>
                    {$menu}
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

            {$slider}
        </header>
        <!-- Sección principal -->
	<main id="main" role="main">  
            {$content_main}	
	</main>
        <footer class="pie">
            <div class="container">
                {$direccion}
                {$menu_footer}
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
    <script src="{$SERVER_APP_JS}jquery.min.js"></script>
    <script src="{$SERVER_APP_JS}bootstrap.min.js"></script>


    <!-- bxSlider: slider principal -->
	<script src="{$SERVER_APP_JS}jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
    	$(document).ready(function(){
            
    		$('.slider-principal').show();
		  var sliderPrincipal = $('.slider-principal ul').bxSlider({
			controls: false,
			pager: false,
			auto: {if $slider_permitido gt 0}true{else}false{/if},
			speed: 1500,
			pause: 5000,
			touchEnabled: true,
		});
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
    </script>
    <!-- Fin bxSlider -->

	<!-- Menú desplegable -->
	<script>
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

	</script>
	<!-- Fin Menú desplegable -->

	<!--Twitter -->
	<!--<script type="text/javascript" src="{$SERVER_APP_JS}jquery.twitter/js/twitterFetcher_min.js"></script>
    <script type="text/javascript">
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
	</script>-->
  	<!--Fin Twitter -->

	<!-- These files are the PWI files -->

		<!-- FancyBox (usado por pwi)-->
		<script type="text/javascript" src="{$SERVER_APP_JS}jquery.pwi/js/jquery.fancybox/source/jquery.fancybox.pack8cbb.js?v=2.1.5"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
		</script>

	<script src="{$SERVER_APP_JS}jquery.pwi/js/jquery.pwi.js" type="text/javascript"></script>
	<script type="text/javascript">

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
	</script>
	<!-- FinPWI -->

	<!-- Youtube -->
	<script src="{$SERVER_APP_JS}jquery.youmax/jquery.youmax.js"></script>
	<script>
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

	</script>
	<!-- Fin Youtube -->

	<!-- Mapa de Google -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script type="text/javascript" src="{$SERVER_APP_JS}jquery.gmap/jquery.gmap.min.js"></script>
        {literal}
	<script type="text/javascript">
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
	</script>
        {/literal}
	<!-- Fin Mapa de Google -->

	<!-- Scroll en cabecera -->
	<script>
		//Anima el menú cuando hay scroll
		$( window ).scroll(function(){
			var $cabecera = $('.cabecera');
			if( $(window).scrollTop() > 20){
				$cabecera.addClass('scroll');
			}else{
				$cabecera.removeClass('scroll');
			}
		});
	</script>
	<!-- Fin Scroll en cabecera -->


  </body>

</html>