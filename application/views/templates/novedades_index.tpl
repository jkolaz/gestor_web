{if $objNovedad|@count gt 0}
<article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Novedades</h2>
                        <div class="novedades">
                            {section name=id loop=$objNovedad}
                            <figure class="modulo-novedad e-nove">
                                <div class="row">
                                    <div class="col-xs-12 col-md-4 text-center">
                                        <a class="modulo-novedad__imagen" href="{$SERVER_APP}novedades/detalle/{$url_sede}/{$objNovedad[id]->nov_id}" class="img" title="{$objNovedad[id]->nov_titulo}">
                                            <img src="{$SERVER_ADMIN_IMG}{$objNovedad[id]->nov_imagen}" width="377" height="411" alt="{$objNovedad[id]->nov_titulo}" class="img-responsive margen">
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-md-8">
                                        <figcaption class="modulo-novedad__texto">
                                            <h2><a href="{$SERVER_APP}novedades/detalle/{$url_sede}/{$objNovedad[id]->nov_id}" title="{$objNovedad[id]->nov_titulo}">{$objNovedad[id]->nov_titulo}</a></h2>
                                            <span class="novedad__fecha">Perú |  2016</span>
                                            <hr class="gris-corta">
                                            <p>{$objNovedad[id]->nov_subtitulo}</p>
                                            <a class="seguir" href="{$SERVER_APP}novedades/detalle/{$url_sede}/{$objNovedad[id]->nov_id}" title="{$objNovedad[id]->nov_titulo}"><span>Seguir leyendo</span></a>
                                        </figcaption>
                                    </div>
                                </div>
                            </figure>
                            {/section}
                        </div>
                        <div class="paginado text-center">
                            {$paginacion}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
{/if}