<article>
    <section>
        <div class="container">
            <div class="container-chico">
                <div class="row">
                    <div class="col-xs-12 col-md-9 col-md-push-3">
                        <h2>Staff Médico</h2>
                        {if $objEspecialidad|@count gt 0}
                            {section name=id loop=$objEspecialidad}
                                {if $objEspecialidad[id]->medicos|@count gt 0}
                        <h3>{$objEspecialidad[id]->esp_nombre}</h3>
                                    {section name=med loop=$objEspecialidad[id]->medicos}
                        <h6>{$objEspecialidad[id]->medicos[med]->med_nombre}</h6>
                                    {/section}  
                                {/if} 
                            {/section}        
                        {/if}
                    </div>
                    {$buscador}
                </div>
            </div>
        </div>
    </section>
</article>