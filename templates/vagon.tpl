{include file="header.tpl"}
{include file="nav.tpl"}
<div class="container" style="margin-top:1%; margin-bottom:1%">
    <div class="card" style="margin-bottom:1%">
        <h5 class="card-header">Vagon</h5>
        <div class="card-body">
            <p class="card-text">{$vagon -> nro_vagon}</p>
        </div>
    </div>
    <div class="card" style="margin-bottom:1%">
        <h5 class="card-header">Modelo</h5>
        <div class="card-body">
            <p class="card-text">{$vagon -> modelo}</p>
        </div>
    </div>
    <div class="card"style="margin-bottom:1%">
        <h5 class="card-header">Capacidad máxima</h5>
        <div class="card-body">
            <p class="card-text">{$vagon -> capacidad_max}</p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Descripción</h5>
        <div class="card-body">
            <p class="card-text">{$vagon -> descripcion}</p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Locomotora</h5>
        <div class="card-body">
        <p class="card-text">{$vagon -> locomotora_modelo}</p>
        </div>
    </div>
</div>

{include file="footer.tpl"}