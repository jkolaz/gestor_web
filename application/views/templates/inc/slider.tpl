<!-- jQuery handles to place the header background images -->
{if $objSlider|@count gt 0}
<div class="slider-principal-contenido">
    <div class="container">
        <div class="slider-principal">
            <ul>
                {section name=id loop=$objSlider}
                <li>
                    <img class="img-responsive pull-right" src="{$SERVER_ADMIN_IMG}{$objSlider[id]}">
                </li>
                {/section}
            </ul>
        </div>
    </div>
</div>
{/if}