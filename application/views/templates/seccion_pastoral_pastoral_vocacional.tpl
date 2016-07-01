<article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    <div class="col-xs-12 col-md-9 col-md-push-3">
                        {if $objPrincipal|@count gt 0}
                        <h2>{$objPrincipal[0]->voc_nombre}</h2>
                        {$objPrincipal[0]->voc_descripcion}
                        {/if}
                        {if $objProceso|count gt 0}
                        <h2>{$objProceso[0]->voc_nombre}</h2>
                        {$objProceso[0]->voc_descripcion}
                            {if $objProceso[0]->voc_descripcion_2 neq ""}
                        <div class="Pastoral-salud-social">
                            <div class="row">
                                {$objProceso[0]->voc_descripcion_2}
                            </div>
                        </div>
                            {/if}
                        {/if}
                        {if $objApostolado|@count gt 0}
                        <div class="col-xs-12 col-md-12">
                            <h2>{$objApostolado[0]->voc_nombre}</h2>
                        </div>
                        <div class="col-xs-12 col-md-7">
                            {$objApostolado[0]->voc_descripcion}
                        </div>
                            {if $objApostolado[0]->voc_imagen neq ""}
                        <div class="col-xs-12 col-md-5">
                            <img class="img-responsive pull-right" src="{$SERVER_ADMIN_IMG}{$objApostolado[0]->voc_imagen}">
                        </div>
                            {/if}
                            {if $objApostolado[0]->voc_descripcion_2 neq ""}
                        <div class="col-xs-12 col-md-12">
                            {$objApostolado[0]->voc_descripcion_2}
                        </div>
                            {/if}
                        {/if}
                        {if $objEstiloVida|@count gt 0}
                        <div class="col-xs-12 col-md-12">
                            <h2>{$objEstiloVida[0]->voc_nombre}</h2>
                        </div>
                        {$objEstiloVida[0]->voc_descripcion}
                        {/if}
                        {if $objCarisma|@count gt 0}
                        <div class="col-xs-12 col-md-12">
                            <h2>{$objCarisma[0]->voc_nombre}</h2>
                            {$objCarisma[0]->voc_descripcion}
                        </div>
                            {if $objCarisma[0]->voc_descripcion_2 neq ""}
                        {$objCarisma[0]->voc_descripcion_2}
                            {/if}
                            {if $objCarisma[0]->voc_imagen neq ""}
                        <div class="col-xs-12 col-md-5">
                            <img class="img-responsive pull-right" src="{$SERVER_ADMIN_IMG}{$objCarisma[0]->voc_imagen}">
                        </div>
                            {/if}
                        {/if}
                    </div>
                    {$buscador}
                </div>
            </div>
        </div>
    </section>
</article>   