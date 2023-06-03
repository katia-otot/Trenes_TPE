{include file="header.tpl"}
{include file="nav.tpl"}
<div class="container" style="margin-top:1%; margin-bottom:1%">
    <div class="card" style="margin-bottom:1%">
        <h5 class="card-header">Vagon</h5>
        <div class="card-body">
            <p class="card-text">{$numero}</p>
        </div>
    </div>
    <div class="card" style="margin-bottom:1%">
        <h5 class="card-header">Modelo</h5>
        <div class="card-body">
            <p class="card-text">{$modelo}</p>
        </div>
    </div>
    <div class="card"style="margin-bottom:1%">
        <h5 class="card-header">Capacidad máxima</h5>
        <div class="card-body">
            <p class="card-text">{$cap_max}</p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Descripción</h5>
        <div class="card-body">
            <p class="card-text">{$descripcion}</p>
        </div>
    </div>
</div>
{* <h1>Este es el vagon: </h1>
<h2>{$vagon}</h2>

<h1>Capacidad maxima: </h1>
<h2>{$cap_max}</h2>
<h1>{$modelo}</h1> *}
{include file="footer.tpl"}
