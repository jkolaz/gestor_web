<div class="row">
    <div class="pie__nav">
        <div class="col-xs-12 col-sm-4 col-md-2 text-center">
            <h4 class="text-center">Provincia Sudamericana Septentrional</h4>
            <a class="boton-web" href="index.html" target="_blank"><i class="fa fa-desktop"></i>Ir a la web</a>
        </div>
        {if $objMenu|@count gt 0}
            {section name=id loop=$objMenu}
        <div class="hidden-xs col-sm-4 col-md-2">
            <h3>{$objMenu[id]->men_padre_nombre}</h3>
                {if $objMenu[id]->sub_menu|@count gt 0}
            <ul class="nav-principal">
                    {section name=i loop=$objMenu[id]->sub_menu}
                <li><a href="{$SERVER_APP}{$objMenu[id]->sub_menu[i]->men_ruta}">{$objMenu[id]->sub_menu[i]->men_nombre}</a></li>
                    {/section}
            </ul>
                {/if}
        </div>
            {/section}
        {/if}
    </div>
</div>