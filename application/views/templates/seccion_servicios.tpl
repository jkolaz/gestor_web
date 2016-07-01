<article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    <div class="col-xs-12 col-md-9 col-md-push-3">
                        <h2>{$stdServicio->ser_nombre}</h2>
                        {$stdServicio->ser_descripcion}
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                {if $stdServicio->ser_listado neq ""}
                                    {$stdServicio->ser_listado}
                                {/if}
                            </div>
                            {if $stdServicio->ser_imagen neq ""}
                            <div class="col-xs-12 col-md-12">
                                <img class="img-responsive" src="{$SERVER_ADMIN_IMG}{$stdServicio->ser_imagen}" alt="{$stdServicio->ser_nombre}">
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