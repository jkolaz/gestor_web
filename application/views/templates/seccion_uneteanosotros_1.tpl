<article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    <div class="col-xs-12 col-md-9 col-md-push-3">
                        <h2>{$stdConvocatoria->con_nombre}</h2>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">                  
                                <ul class="con-flecha-circulo">
                                    <li><p class="trabana-con-nosotros">{$stdConvocatoria->con_descripcion}<p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="modulo-unete clearfix">
                            <div class="row">
                                <div class="col-xs-12 col-md-5">
                                    <span class="text-left">Formá parte de la<br class="hidden-xs hidden-sm"> familia juandediana</span>
                                </div>
                                <div class="col-xs-12 col-md-7 text-left">
                                    <img class="img-responsive" src="{$SERVER_ADMIN_IMG}{$stdConvocatoria->con_imagen}" alt="{$stdConvocatoria->con_nombre}">
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