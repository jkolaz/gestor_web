<article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    <div class="col-xs-12 col-md-9 col-md-push-3">
                        <h2>Directorio</h2>
                        <div class="row">
                            {if $objDirectorio|@count gt 0}
                                {section name=id loop=$objDirectorio}
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="modulo-directorio">
                                    <h3>{$objDirectorio[id]->dir_nombre}</h3>
                                    <h6>{$objDirectorio[id]->dir_encargado}</h6>
                                    <ul class="fa-ul">
                                        <li><i class="fa fa-li fa-phone"></i>{$objDirectorio[id]->dir_telefono}</li>
                                        <li><i class="fa fa-li fa-envelope"></i><a href="#">{$objDirectorio[id]->dir_correo}</a></li>
                                    </ul>
                                </div>                  
                            </div>
                                {/section}
                            {/if}
                        </div>
                    </div>
                    {$buscador}
                </div>
            </div>
        </div>
    </section>
</article>