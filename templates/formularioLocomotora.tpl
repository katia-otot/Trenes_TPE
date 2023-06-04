{include file="header.tpl"}
{include file="nav.tpl"}
<h2> Ingrese una locomotora</h2>

<form action="{$BASE_URL}insertarOmodificarLocomotora" method="POST" style="margin-top:1%;>">
<input type = "hidden" name="id_locomotora" value="{$locomotora->id_locomotora}">

<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Modelo</span>
    <input type="text" class="form-control"  name="modelo"  value="{$locomotora->modelo}" required>
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Año de fabricación</span>
    <input type="number" class="form-control" name="anio_fabricacion" value="{$locomotora->anio_fabricacion}" required/>
        
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Lugar de fabricación</span>
    <input type="text" class="form-control"  name="lugar_fabricacion"  value="{$locomotora->lugar_fabricacion}"  required>
</div>
<div class="d-grid">
    <div style="display:flex; justify-content: center">

        <button class="btn   text-uppercase fw-bold btn-outline-secondary" style=" width:80px;height:45px; margin-bottom:1%; align:center" type="submit">  Enviar</button>
    </div>
</div>

</form>
{include file="footer.tpl"}