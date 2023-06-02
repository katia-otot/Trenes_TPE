{include file="header.tpl"}
{include file="nav.tpl"}

<header> 
<h1> Vagones</h1>

</header>
<section>
    <table class="table table table-bordered table align-middle">
    <thead>
        <tr>
            <th>N° Vagón</th>
            <th>Tipo</th>
            <th>Capacidad máxima</th>
            <th>Modelo</th>
            <th>Locomotora</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        {foreach from = $vagones item = $vagon}
            <tr>
                <td>{$vagon -> nro_vagon}</td>
                <td>{$vagon -> tipo}</td>
                <td>{$vagon -> capacidad_max}</td>
                <td>{$vagon -> modelo}</td>
                <td>{$vagon -> locomotora_modelo}</td>
             <td ><a   href="{$BASE_URL}Vagon/{$vagon -> id_vagon}" class="btn btn-outline-secondary"> Ver más</a></td>
                {* <td><input class="btn btn-outline-secondary" type="submit" value="Ver más" onclick="window.location='{$BASE_URL}Vagon/' + {$vagon -> id_vagon};"/></td> *}

            </tr>
        {/foreach}
    </tbody>
    </table>
</section>
{include file="footer.tpl"}