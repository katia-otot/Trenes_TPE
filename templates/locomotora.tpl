{include file="header.tpl"}
{include file="nav.tpl"}

<header > 
    <h1> Locomotoras</h1>
</header>
<section >
    <table class="table table table-bordered table align-middle">
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Año de fabricación</th>
            <th>País de fabricación</th>
            <th>Vagones</th>

        </tr>
    </thead>
    <tbody class="table-group-divider">
        {foreach from = $locomotoras item = $locomotora}
            <tr>
                <td>{$locomotora -> modelo}</td>
                <td>{$locomotora -> anio_fabricacion}</td>
                <td>{$locomotora -> lugar_fabricacion}</td>
                
                <td ><a   href="Vagones/{$locomotora ->id_locomotora}" class="btn btn-outline-secondary"> Ver</a></td>
                {if $logueado}
                <td ><a   href="formularioLocomotora/{$locomotora->id_locomotora}" class="btn btn-outline-secondary" name="btnModificarLocomotora"> Modificar</a>
                <a   href="BorrarLocomotora/{$locomotora->id_locomotora}" class="btn btn-outline-secondary" name="btnEliminarLocomotora"> Eliminar</a></td>
                {/if}
            </tr>
         
        {/foreach}
    </tbody>
    </table>
</section>
<section>
    {if $logueado }
        <input  class="btn btn-outline-secondary" type="submit" value="Agregar" onclick="window.location='formularioLocomotora/0';" /> 
    {/if}
</section>
{include file="footer.tpl"}