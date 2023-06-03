{include file="header.tpl"}
{include file="nav.tpl"}

<header> 
<h1> Vagones</h1>

</header>
<section>
    <table class="table table table-bordered table align-middle">
    <thead>
        <tr>
        <th>Locomotora</th>
        <th>Tipo</th>
            <th>N° Vagón</th>
            {* <th>Capacidad máxima</th>
            <th>Modelo</th> *}
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        {foreach from = $vagones item = $vagon}
            <tr>
            <td>{$vagon -> locomotora_modelo}</td>
            <td>{$vagon -> tipo}</td>
                <td>{$vagon -> nro_vagon}</td>
                {* <td>{$vagon -> capacidad_max}</td>
                <td>{$vagon -> modelo}</td> *}
             <td ><a   href="{$BASE_URL}Vagon/{$vagon -> id_vagon}" class="btn btn-outline-secondary"> Ver más</a></td>
                {* <td><input class="btn btn-outline-secondary" type="submit" value="Ver más" onclick="window.location='{$BASE_URL}Vagon/' + {$vagon -> id_vagon};"/></td> *}
                {if $logueado}
                  <td ><a   href="#" class="btn btn-outline-secondary"> Modificar</a>
                  <a   href="#" class="btn btn-outline-secondary"> Eliminar</a></td>
                  {/if}
            </tr>
        {/foreach}
    </tbody>
    </table>
</section>
<section>
{if $logueado }
    {* bg-dark text-white-50 *}
    <form method="POST">
    <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Locomotora</span>

    <select class="form-select" aria-label="Default select example">
    {foreach from=$vagones item=vagon}
  <option selected>{$vagon->modelo}</option>
  {* <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option> *}
    {/foreach}
</select>
</div>
    <div class="input-group input-group-sm mb-3">
  <span class="input-group-text " id="inputGroup-sizing-sm">Número de vagón</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
    <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de vagón</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Capacidad máxima</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Modelo</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="d-grid">
<div style="display:flex; justify-content: center">

<button class="btn   text-uppercase fw-bold btn-outline-secondary" style=" width:80px;
height:45px; margin-bottom:1%; align:center"type="submit">Enviar</button>
</div>
</div>

    </form>
{/if}
{include file="footer.tpl"}