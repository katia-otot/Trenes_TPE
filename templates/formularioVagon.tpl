{include file="header.tpl"}
{include file="nav.tpl"}
<form action="{$BASE_URL}insertOrUpdateVagon" method="POST">
<input type = "hidden" name="id_vagon" value="{$vagon->id_vagon}"/>

<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Numero de Vagon</span>
    <input type="text" class="form-control"  name="nro_vagon"  value="{$vagon->nro_vagon}" required>
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Tipo</span>
    <input type="text" class="form-control" name="tipo" value="{$vagon->tipo}"/>
        
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Capacidad maxima</span>
    <input type="text" class="form-control"  name="capacidad_max"  value="{$vagon->capacidad_max}"  required>
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Modelo</span>
    <input type="text" class="form-control"  name="modelo"  value="{$vagon->modelo}"  required>
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Descripcion</span>
    <input type="text" class="form-control"  name="descripcion"  value="{$vagon->descripcion}"  required>
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Locomotora</span>
    <select name="locomotora_id"  required>
    {foreach from = $locomotoras item = $locomotora}
        {if ($locomotora->id_locomotora eq $vagon->locomotora_id )}
            <option selected value="{$locomotora->id_locomotora}">{$locomotora->modelo}</option>
        {else}
            <option value="{$locomotora->id_locomotora}">{$locomotora->modelo}</option>
        {/if}
    {/foreach}
    </select>
</div>
<div class="d-grid">
    <div style="display:flex; justify-content: center">
        <button class="btn   text-uppercase fw-bold btn-outline-secondary" style=" width:80px;height:45px; margin-bottom:1%; align:center" type="submit">  Enviar</button>
    </div>
</div>

</form>
{include file="footer.tpl"}