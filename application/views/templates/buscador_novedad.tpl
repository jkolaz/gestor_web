<div class="col-xs-12 col-md-3 col-md-pull-9">
    <aside>
        <div class="buscador clearfix hidden-xs hidden-sm">
            <form method="get" action="#">
                    <input class="buscador__campo pull-left" type="text" placeholder="BUSCAR..." name="q">
                    <input class="buscador__boton pull-left" type="submit" value="&#xf054;">
            </form>
        </div>
        {if $objeto|@count gt 0}
        <div class="novedades-lateral">
            <a class="h3" href="novedades.html">Novedades</a>
            <div class="slider-novedades">
                <ul>
                    {section name=id loop=$objeto}
                    <li>
                        <figure class="modulo-novedad e-nove">
                            <div class="row">
                                <div class="col-xs-12">
                                    <a class="modulo-novedad__imagen" href="{$SERVER_APP}novedades/detalle/{$sede}/{$objeto[id]->nov_id}" class="img" title="{$objeto[id]->nov_titulo}">
                                        <img src="{$SERVER_ADMIN_IMG}{$objeto[id]->nov_imagen}" width="377" height="411" alt="{$objeto[id]->nov_subtitulo}" class="img-responsive">
                                        <img class="punta-blanca" src="{$SERVER_APP_IMG}punta-blanca-arriba.png">
                                    </a>
                                </div>
                                <div class="col-xs-12">
                                    <figcaption class="modulo-novedad__texto">
                                        <h2><a href="{$SERVER_APP}novedades/detalle/{$sede}/{$objeto[id]->nov_id}" title="{$objeto[id]->nov_titulo}">{$objeto[id]->nov_titulo}</a></h2>
                                        <span class="novedad__fecha">Perú |  {$objeto[id]->dia_text}</span>
                                        <hr class="gris-corta">
                                        <p>{$objeto[id]->nov_subtitulo}</p>
                                        <a class="seguir" href="#" title="{$objeto[id]->nov_titulo}"><span>Seguir leyendo</span></a>
                                    </figcaption>
                                </div>
                            </div>
                        </figure>
                    </li>
                    {/section}
                </ul>
            </div>
        </div>
        {/if}
        <div class="redes">
            <div class="siguenos clearfix">
                <h3 class="pull-left" style="margin-bottom: 10px;">SÍGUENOS</h3>
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
        </div>     
    </aside>
</div>