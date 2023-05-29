<?php
/* Smarty version 4.3.1, created on 2023-05-28 20:18:32
  from 'C:\xampp\htdocs\web2\Trenes_TPE\templates\vagones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64739af8035df3_60748886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a177833fbefd9f408c539155bdac20ef64e816' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Trenes_TPE\\templates\\vagones.tpl',
      1 => 1685297910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64739af8035df3_60748886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header> 
    <h1> title </h1>
</header>
<section>
    <table>
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
                <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->tren_id;?>
</td>
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
