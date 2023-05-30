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
                

                  <td><input class="btn btn-outline-secondary" type="submit" value="Ver" onclick="window.location='Vagones/' + {$locomotora -> id_locomotora};" /> </td>
            </tr>
        {/foreach}
    </tbody>
    </table>
</section>

{include file="footer.tpl"}