<div class="row">
    <div class="pie__logo clearfix text-center">
        <div class="col-xs-12 col-md-4">
            <a class="logo" href="{$SERVER_APP}sede/index/{$sede_datos->url}">
            <span>{$sede_datos->nombre} | {$sede_datos->region}</span>
                <img class="img-responsive margen" src="{$SERVER_APP_IMG}logo_p2.png" width="260" alt="Centro de reposo San Juan de Dios Piura | Perú" style="margin-top: 10px;">
            </a>
        </div>
        <div class="col-xs-12 col-md-3 col-md-offset-1">
            <p class="text-left"><strong>Dirección</strong><br>
            {$sede_datos->direccion}<br>{$sede_datos->region}</p>
        </div>
        <div class="col-xs-12 col-md-4">
            <span class="telefono">Teléfono: <a href="#">{$sede_datos->num_telefono}</a></span>
            <p class="email">E-mail:<a href="#">  {$sede_datos->correo}</a></p>
        </div>
    </div>
</div>