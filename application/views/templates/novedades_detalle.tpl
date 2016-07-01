<article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    <div class="col-xs-12 col-md-9 col-md-push-3">
                        <h2>{$stdNovedades->nov_titulo}</h2>
                        {$stdNovedades->nov_contenido}
                        <div class="row">
                            {if $stdNovedades->nov_listado neq ""}
                            <div class="col-xs-12 col-md-12">
                                {$stdNovedades->nov_listado}
                            </div>
                            {/if}
                            {if $stdNovedades->nov_imagen neq ""}
                            <div class="col-xs-12 col-md-12">
                                <img class="img-responsive" src="{$SERVER_ADMIN_IMG}{$stdNovedades->nov_imagen}" alt="{$stdNovedades->nov_titulo}">
                            </div>
                            {/if}
                            {if $stdNovedades->nov_contactenos neq ""}
                            <div class="col-xs-12 col-md-12"><br><br>
                                {$stdNovedades->nov_contactenos}
                            </div>
                            {/if}
                        </div>
              
                    </div>
                    {$buscador}
                </div>
            </div>
        </div>
    </section>
</article>