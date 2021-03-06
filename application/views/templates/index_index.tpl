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
    <link rel="icon" href="{$SERVER_APP_ASSETS}index/img/ico.png">
    <title>.:: ORDEN HOSPITALARIA SAN JUAN DE DIOS ::.</title>	
	<!--<link href="css/site.css" rel="stylesheet" type="text/css">-->

    <!-- Bootstrap core CSS -->
    <link href="{$SERVER_APP_ASSETS}index/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{$SERVER_APP_ASSETS}index/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	
	<link href="{$SERVER_APP_ASSETS}index/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{$SERVER_APP_ASSETS}index/css/site.css">
	
	
    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">
	<link href="{$SERVER_APP_ASSETS}index/css/css.css" rel="stylesheet">
	
	


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{$SERVER_APP_ASSETS}index/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document" class="fondo">

    <div class="fondologo">
		<img class="img-responsive pull-right" src="{$SERVER_APP_ASSETS}index/img/bg_prehome.png">
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
                            {if $objBanner1|@count gt 3}
                            <div class="col-xs-6 col-md-6 bloqueimg">
                                <a href="{$objBanner1[0]->ban_url}" target="_blank">
                                    <img class="img-responsive pull-right" style="width: 286px; height: 177px;"  src="{$SERVER_ADMIN_IMG}{$objBanner1[0]->ban_img}">
                                </a>	
                            </div>
                            <div class="col-xs-6 col-md-6 bloqueimg">
                                <a href="{$objBanner1[1]->ban_url}" target="_blank">
                                    <img class="img-responsive pull-right" style="width: 286px; height: 177px;" src="{$SERVER_ADMIN_IMG}{$objBanner1[1]->ban_img}">
                                </a>	
                            </div>
                            <div class="col-xs-6 col-md-6 bloqueimg">
                                <a href="{$objBanner1[2]->ban_url}" target="_blank">
                                    <img class="img-responsive pull-right" style="width: 286px; height: 177px;" src="{$SERVER_ADMIN_IMG}{$objBanner1[2]->ban_img}">
                                </a>	
                            </div>				
                            <div class="col-xs-6 col-md-6 bloqueimg">
                                <a href="{$objBanner1[3]->ban_url}" target="_blank">
                                    <img class="img-responsive pull-right" style="width: 286px; height: 177px;" src="{$SERVER_ADMIN_IMG}{$objBanner1[3]->ban_img}">
                                </a>
                            </div>
                            {/if}
                            {if $objBanner2|@count gt 0}
                            <div class="col-xs-6 col-md-6 bloqueimg">
                                {section name=id loop=$objBanner2}
                                <div class="col-xs-6 col-md-6" style="padding: 0px; padding-right: 2px;">
                                    <a href="{$objBanner2[id]->ban_url}">
                                        <img class="img-responsive pull-right" style="width: 141px; height: 175px;" src="{$SERVER_ADMIN_IMG}{$objBanner2[id]->ban_img}">
                                    </a>						
                                </div>
                                {/section}
                            </div>
                            {/if}
                            
                            <div class="col-xs-6 col-md-6" style="padding: 0px; padding-right: 8px; padding-bottom: 6px;">
                                <a href="#">
                                    <img class="img-responsive pull-right" style="width: 286px; height: 177px;" src="{$SERVER_ADMIN_IMG}{$objBanner1[4]->ban_img}">
                                </a>
                            </div>
			</div>
                        {if $objBanner3|@count gt 0}
			<div class="col-xs-12 col-lg-6 bloquesright">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    {section name=id loop=$objBanner3}
                                    <li data-target="#carousel-example-generic" data-slide-to="{$smarty.section.id.index}" {if $smarty.section.id.index eq 0}class="active"{/if}></li>
                                    {/section}
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    {section name=id loop=$objBanner3}
                                    <div class="item {if $smarty.section.id.index eq 0}active{/if}">
                                        <a href="#">
                                            <img class="img-responsive pull-right" style="width: 578px; height: 543px;" src="{$SERVER_ADMIN_IMG}{$objBanner3[id]->ban_img}">	
                                        </a>	
                                    </div>
                                    {/section}
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
                        {/if}
		</div>
                {if $objRegion|@count gt 0}
		<div class="row">
                    {section name=id loop=$objRegion}
                    <div class="col-xs-6 col-lg-3 pais">
                        <div class="pais-color">
                            {if $objRegion[id]->sedes|@count gt 0}
                            <div class="col-xs-12 col-lg-12">
                                <label>
                                    <div class="col-xs-6 col-lg-6 pais-bandera">
                                        <img src="{$SERVER_ADMIN_IMG}{$objRegion[id]->reg_bandera}" class="left block">
                                    </div>
                                    <div class="col-xs-6 col-lg-6 cuerpo-texto-bandera">
                                        <p>{if $smarty.section.id.index eq 3}Orden en el{else}Centros en{/if}<br><h2 style="padding: 0px; margin: 0px; width: 180px;">{$objRegion[id]->reg_nombre}</h2></p>
                                    </div>
                                </label>
                            </div>
                            <div class="pais-pie">
                                <select class="form-control mb-md cbo_sede">
                                    <option selected="" disabled="">Seleccione un Centro</option>
                                    {section name=sed loop=$objRegion[id]->sedes}
                                    <option value="{$objRegion[id]->sedes[sed]->sed_url}">{$objRegion[id]->sedes[sed]->sed_nombre}</option>
                                    {/section}
                                </select>
                            </div>
                            {/if}
                        </div>
                    </div>
                    {/section}
		</div>
                {/if}
			

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="{$SERVER_APP_ASSETS}index/js/bootstrap.min.js"></script>
        <script src="../../assets/js/docs.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script>
            var base_url = "{$SERVER_APP}";
        </script>
	<script src="{$SERVER_APP_ASSETS}index/js/index.js"></script>
    </body>
</html>
