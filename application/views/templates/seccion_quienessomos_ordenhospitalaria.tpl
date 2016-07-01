<article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    <div class="col-xs-12 col-md-9 col-md-push-3">
                        {if $objPrincipal|@count gt 0}
                        <h2>{$objPrincipal[0]->ord_nombre}</h2>
                        {$objPrincipal[0]->ord_descripcion}
                        {/if}
                        {if $objValores|@count gt 0}
                        <div class="valores">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="valores__titulo">
                                        <h2>{$objValores[0]->ord_nombre}</h2>
                                        {$objValores[0]->ord_descripcion}
                                    </div>
                                </div>
                            </div>
                            {if $objValores[0]->ord_descripcion_2 neq ""}
                            <div class="row">
                                {$objValores[0]->ord_descripcion_2}
                            </div>
                            {/if}
                        </div>
                        {/if}
                        <br>
                        <br>
                        {if $objPrincipios|@count gt 0}
                        <h2>{$objPrincipios[0]->ord_nombre}</h2>
                        <div class="row">
                            {$objPrincipios[0]->ord_descripcion}
                        </div>
                        {/if}
                        {if $objEstructura|@count gt 0}
                        <h2>{$objEstructura[0]->ord_nombre}</h2>
                        {$objEstructura[0]->ord_descripcion}
                        <div class="row">
                            {if $objEstructura[0]->ord_descripcion_2 neq ""}
                            {$objEstructura[0]->ord_descripcion_2}
                            {/if}
                            {if $objEstructura[0]->ord_imagen neq ""}
                            <div class="col-xs-12 col-md-6">
                                <img class="img-responsive mapa" src="{$SERVER_ADMIN_IMG}{$objEstructura[0]->ord_imagen}" alt="{$objEstructura[0]->ord_nombre}">
                                <span class="h3">La Orden Hospitalaria se divide, a nivel mundial, en 23 Provincias y 5 Delegaciones Generales</span>
                            </div>
                            {/if}
                        </div>
                        {/if}
                        {if $objProvincia|@count gt 0}
                        <div class="nuestra-provincia">
                            <div class="row">
                                <div class="col-xs-12 clearfix">
                                    {if $objProvincia[0]->ord_imagen neq ""}
                                    <img class="img-responsive pull-right" src="{$SERVER_ADMIN_IMG}{$objProvincia[0]->ord_imagen}" alt="{$objProvincia[0]->ord_nombre}">
                                    {/if}
                                    <div class="nuestra-provincia__texto">
                                        <h2>{$objProvincia[0]->ord_nombre}</h2>
                                        {$objProvincia[0]->ord_descripcion}
                                        {if $objProvincia[0]->ord_descripcion_2 neq ""}
                                        <div class="row">
                                            {$objProvincia[0]->ord_descripcion_2}
                                        </div>
                                        {/if}
                                    </div>                    
                                </div>
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