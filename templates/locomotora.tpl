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
                <td ><a   href="Modificar/{$locomotora->id_locomotora}" class="btn btn-outline-secondary" name="btnModificarLocomotora"> Modificar</a>
                <a   href="Borrar/{$locomotora->id_locomotora}" class="btn btn-outline-secondary" name="btnEliminarLocomotora"> Eliminar</a></td>
                {/if}
                  {* <td><input class="btn btn-outline-secondary" type="submit" value="Ver" onclick="window.location='Vagones/' + {$locomotora -> id_locomotora};" /> </td> *}
            </tr>
         
        {/foreach}
    </tbody>
    </table>
</section>
<section>
{* bg-dark text-white-50 *}
    {if $logueado }
        <form action="Agregar" method="POST">
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text " id="inputGroup-sizing-sm">Modelo</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" name="modelo" value="{$valueModelo}" required>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Año de fabricación</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" name="anio_fabricacion" value="{$valueAnio}" required>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Lugar de fabricación</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" name="lugar_fabricacion" value="{$valueLugar}" required>
            </div>
            <div class="d-grid">
                <div style="display:flex; justify-content: center">

                    <button class="btn   text-uppercase fw-bold btn-outline-secondary" style=" width:80px;
height:45px; margin-bottom:1%; align:center" type="submit">  Enviar</button>
                </div>
            </div>

        </form>
    {/if}
</section>
{include file="footer.tpl"}