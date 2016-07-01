 <article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    <div class="col-xs-12 col-md-9 col-md-push-3">				
                        <h2>{$stdConvocatoria->con_nombre}</h2>
                        <div class="row">
                            <div class="espacio-left">
                                {$stdConvocatoria->con_descripcion}
                                <div class="slider-principal">
                                    <ul>
                                        <li>
                                            <img class="img-responsive" src="{$SERVER_ADMIN_IMG}{$stdConvocatoria->con_imagen}">
                                        </li>
                                        <li>
                                            <img class="img-responsive" src="{$SERVER_ADMIN_IMG}{$stdConvocatoria->con_imagen}">
                                        </li>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                    </div>
                    {$buscador}
                </div>
            </div>
        </div>
    </section>
</article>