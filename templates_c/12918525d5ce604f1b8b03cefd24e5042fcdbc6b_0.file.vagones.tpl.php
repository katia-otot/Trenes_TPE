<?php
/* Smarty version 4.3.1, created on 2023-06-02 01:20:50
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\vagones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647927d2ed03e9_43771751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12918525d5ce604f1b8b03cefd24e5042fcdbc6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\vagones.tpl',
      1 => 1685661593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647927d2ed03e9_43771751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vagones']->value, 'vagon');
$_smarty_tpl->tpl_vars['vagon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vagon']->value) {
$_smarty_tpl->tpl_vars['vagon']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->nro_vagon;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->tipo;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->capacidad_max;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->modelo;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->locomotora_modelo;?>
</td>
<<<<<<< HEAD
                <td><input class="btn btn-outline-secondary" type="submit" value="Ver más" /></td>
=======
                
                <td><input class="btn btn-outline-secondary" type="submit" value="Ver más" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
Vagon/' + <?php echo $_smarty_tpl->tpl_vars['vagon']->value->id_vagon;?>
;"/></td>
>>>>>>> 8d6c7dca7c2890ed08b50a90efa1a5d1c6e9c820
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
