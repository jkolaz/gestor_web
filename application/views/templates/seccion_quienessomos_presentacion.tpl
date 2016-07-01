<article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    {if $stdPresentacion|@count gt 0}
                    <div class="col-xs-12 col-md-9 col-md-push-3">
                        {$stdPresentacion[0]->pre_descripcion}
                    </div>
                    {/if}
                    {$buscador}
                </div>
            </div>
        </div>
    </section>
</article>