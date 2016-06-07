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
                                        <a class="modulo-novedad__imagen" href="#" class="img" title="{$objNovedad[id].nov_titulo}">
                                            <img src="{$SERVER_IMG}novedades1.jpg" width="377" height="411" alt="{$objNovedad[id].nov_titulo}" class="img-responsive margen">
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-md-8">
                                        <figcaption class="modulo-novedad__texto">
                                            <h2><a href="#" title="{$objNovedad[id].nov_titulo}">{$objNovedad[id].nov_titulo}</a></h2>
                                            <span class="novedad__fecha">Perú |  2016</span>
                                            <hr class="gris-corta">
                                            <p>{$objNovedad[id].nov_subtitulo}</p>
                                            <a class="seguir" href="novedades/detalle/{$objNovedad[id].nov_id}.html" title="{$objNovedad[id].nov_titulo}"><span>Seguir leyendo</span></a>
                                        </figcaption>
                                    </div>
                                </div>
                            </figure>
                            {/section}
                        </div>
                        <div class="paginado text-center">
                            {if isset($paginacion)}{$paginacion}{/if}
                            {if Session::accesoViewEstricto(array('usuario'))}
                            <div class="pagination">
                                <span class="disabled">&#xf053;</span>
                                <span class="current">1</span>
                                <a href="#">2</a>
                                <a href="#" class="next">&#xf054;</a>
                            </div>
                            {/if}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
{/if}