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
        <th>Modelo</th>
        <th>Tipo</th>
            <th>N° Vagón</th>
            {* <th>Capacidad máxima</th>
            <th>Modelo</th> *}
            
        </tr>
    </thead>
    <tbody class="table-group-divider">
        {foreach from = $vagones item = $vagon}
            <tr>
            <td>{$vagon -> locomotora_modelo}</td>
            <td>{$vagon -> modelo}</td>
            <td>{$vagon -> tipo}</td>
            <td>{$vagon -> nro_vagon}</td>           
             
             <td ><a   href="{$BASE_URL}Vagon/{$vagon->id_vagon}" class="btn btn-outline-secondary"> Ver más</a></td>
                {if $logueado}
                  <td ><a   href="{$BASE_URL}formularioVagon/{$vagon->id_vagon}" class="btn btn-outline-secondary"> Modificar</a>
                  <a   href="{$BASE_URL}BorrarVagon/{$vagon->id_vagon}" class="btn btn-outline-secondary"> Eliminar</a></td>
                  {/if}
            </tr>
        {/foreach}
    </tbody>
    </table>
</section>
<section>
{if $logueado }
  <input  class="btn btn-outline-secondary" type="submit" value="Agregar" onclick="window.location='{$BASE_URL}formularioVagon/0';" /> 
{/if}
{include file="footer.tpl"}