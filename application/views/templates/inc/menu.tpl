<!-- Agrupar los enlaces de navegación, los formularios y cualquier otro elemento que se pueda ocultar al minimizar la barra -->
<div class="col-xs-12 col-sm-9">
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav anim-suave">
            <li><a href="{$SERVER_APP}sede/index/{$url_sede}">Inicio</a></li>
            {if $objMenu|@count gt 0}
                {section name=id loop=$objMenu}
            <li class="js-desplegar" aria-haspopup="true">
                <a>{$objMenu[id]->men_padre_nombre}</a>
                    {if $objMenu[id]->sub_menu|@count gt 0}
                <div class="js-desplegable desplegable" style="display: none;">
                    <ul>
                        {section name=i loop=$objMenu[id]->sub_menu}
                        <li><a href="{$SERVER_APP}seccion/{$url_sede}/{$objMenu[id]->men_padre_ruta}/{$objMenu[id]->sub_menu[i]->men_ruta}">{$objMenu[id]->sub_menu[i]->men_nombre}</a></li>
                        {/section}
                    </ul>
                </div>
                    {/if}
            </li>
                {/section}
            {/if}
        </ul>
    </div>
</div>