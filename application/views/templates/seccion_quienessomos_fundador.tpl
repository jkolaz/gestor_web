<article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    <div class="col-xs-12 col-md-9 col-md-push-3">
                        <h2>{$objFundador->fun_nombre}</h2>
                        {$objFundador->fun_cuerpo}
                        <div class="datos-interes">
                            <div class="row">
                                {if $objFundador->fun_datos_interes neq ""}
                                <div class="col-xs-12 col-md-6">
                                    <div class="datos-interes__texto">
                                        <h3>Datos de interés</h3>
                                        {$objFundador->fun_datos_interes}
                                    </div>                    
                                </div>
                                {/if}
                                {if $objFundador->fun_imagen neq ""}
                                <div class="col-xs-12 col-md-6 clearfix">
                                     <img class="img-responsive" src="{$SERVER_ADMIN_IMG}{$objFundador->fun_imagen}" alt="Datos de interés">
                                </div>
                                {/if}
                            </div>
                        </div>
                    </div>
                    {$buscador}
                </div>
            </div>
        </div>
    </section>
</article>