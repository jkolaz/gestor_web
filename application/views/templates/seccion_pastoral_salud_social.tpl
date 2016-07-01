<article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    <div class="col-xs-12 col-md-9 col-md-push-3">
                        {if $objPrincipal|@count gt 0}
                        <h2>{$objPrincipal[0]->ss_nombre}</h2>
                        {$objPrincipal[0]->ss_descripcion}                       
                        {/if}
                        {if $objCuerpo|@count gt 0}
                        <div class="Pastoral-salud-social">
                            <div class="row">
                                {section name=id loop=$objCuerpo}
                                <div class="col-xs-12 col-md-12">												
                                    <h3>{$objCuerpo[id]->ss_nombre}</h3>
                                    {$objCuerpo[id]->ss_descripcion}
                                </div>
                                {if $objCuerpo[id]->ss_imagen neq ""}
                                <div class="col-xs-12 col-md-12">
                                    <img class="img-responsive {if $smarty.section.id.index lt $objCuerpo|@count-1}pull-right{/if}" src="{$SERVER_ADMIN_IMG}{$objCuerpo[id]->ss_imagen}">
                                </div>
                                {/if}
                                {/section}
                            </div>
                        </div>
                        {/if}
                    </div>
                    {$buscador}
                </div>
            </div>
        </div>
    </section>
</article>  