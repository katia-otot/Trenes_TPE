{include file="header.tpl"}
<header> 
    <h1> title </h1>
</header>
<section>
    <table>
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Año de fabricación</th>
            <th>País de fabricación</th>

        </tr>
    </thead>
    <tbody>
        {foreach from = $locomotoras item = $locomotora}
            <tr>
                <td>{$locomotora -> modelo}</td>
                <td>{$locomotora -> anio_fabricacion}</td>
                <td>{$locomotora -> lugar_fabricacion}</td>
                

                  <td><input type="submit" value="Vagones" onclick="window.location='Vagones/' + {$locomotora -> id_locomotora};" /> </td>
            </tr>
        {/foreach}
    </tbody>
    </table>
</section>
{include file="footer.tpl"}