<?php
/* Smarty version 4.3.1, created on 2023-05-29 22:35:52
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\locomotora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64750ca89897c6_94618077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd65a5dd0afdbb15cabfb01ffe3e583b268e41c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\locomotora.tpl',
      1 => 1685392548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64750ca89897c6_94618077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header> 
    <h1> Trenes</h1>
</header>
<section >
    <table class="table table table-bordered table align-middle"">
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Año de fabricación</th>
            <th>País de fabricación</th>

        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locomotoras']->value, 'locomotora');
$_smarty_tpl->tpl_vars['locomotora']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['locomotora']->value) {
$_smarty_tpl->tpl_vars['locomotora']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['locomotora']->value->modelo;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['locomotora']->value->anio_fabricacion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['locomotora']->value->lugar_fabricacion;?>
</td>
                

                  <td><input type="submit" value="Vagones" onclick="window.location='Vagones/' + <?php echo $_smarty_tpl->tpl_vars['locomotora']->value->id_locomotora;?>
;" /> </td>
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
