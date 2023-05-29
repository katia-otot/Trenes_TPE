{include file="header.tpl"}
<header> 
<h1> Vagones</h1>

</header>
<section>
    <table class="table">
    <thead>
        <tr>
            <th>Número de vagón</th>
            <th>Tipo</th>
            <th>Capacidad máxima</th>
            <th>Modelo</th>
            <th>locomotora</th>
        </tr>
    </thead>
    <tbody>
        {foreach from = $vagones item = $vagon}
            <tr>
                <td>{$vagon -> nro_vagon}</td>
                <td>{$vagon -> tipo}</td>
                <td>{$vagon -> capacidad_max}</td>
                <td>{$vagon -> modelo}</td>
                <td>{$vagon -> tren_id}</td>
            </tr>
        {/foreach}
    </tbody>
    </table>
</section>
{include file="footer.tpl"}