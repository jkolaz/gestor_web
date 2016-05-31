{if $objNovedad|@count gt 0}
<div class="col-xs-12 col-md-9 col-md-pull-3">
    <div class="novedades">
        <div class="row">
            <div class="col-xs-6">
                    <h3 class="left">Novedades</h3>
            </div>
            <div class="col-xs-6 text-right">
               <a class="ver-todas" href="novedades.html">Ver todas<span>+</span></a>
            </div>
            <div class="col-xs-12">
                {section name=id loop=$objNovedad}
                <figure class="modulo-novedad e-nove">
                    <div class="row">
                        <div class="col-xs-12 col-md-4 text-center">
                            <a class="modulo-novedad__imagen" href="#" class="img" title="">
                                <img src="{$SERVER_IMG}servicios/home-seccion-destacada1.jpg" width="377" alt="" class="img-responsive margen">
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-8">
                            <figcaption class="modulo-novedad__texto">
                                <h2>
                                    <a href="#">{$objNovedad[id].nov_titulo}</a>
                                </h2>
                                <span class="novedad__fecha"><strong>PROVINCIA | 2016</strong></span>
                                <hr class="gris-corta">
                                <p>{$objNovedad[id].nov_subtitulo}</p>
                                <a class="seguir" href="servicios-principales-centro-psicoterapéutico.html" title=""><span>Seguir leyendo</span></a>
                            </figcaption>
                        </div>
                    </div>
                </figure>
                {/section}
            </div>
        </div>                 
    </div>
</div>
{/if}