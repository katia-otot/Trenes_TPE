<?php
/* Smarty version 4.3.1, created on 2023-06-04 23:46:38
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\vagones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647d063e818d31_12575442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12918525d5ce604f1b8b03cefd24e5042fcdbc6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\vagones.tpl',
      1 => 1685914547,
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
function content_647d063e818d31_12575442 (Smarty_Internal_Template $_smarty_tpl) {
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
                <th>Locomotora</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>N° Vagón</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->locomotora_modelo;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->modelo;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->tipo;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->nro_vagon;?>
</td>

                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
Vagon/<?php echo $_smarty_tpl->tpl_vars['vagon']->value->id_vagon;?>
" class="btn btn-outline-secondary"> Ver más</a></td>
                    <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
formularioVagon/<?php echo $_smarty_tpl->tpl_vars['vagon']->value->id_vagon;?>
" class="btn btn-outline-secondary">
                                Modificar</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
BorrarVagon/<?php echo $_smarty_tpl->tpl_vars['vagon']->value->id_vagon;?>
" class="btn btn-outline-secondary"> Eliminar</a>
                        </td>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</section>
<section style="margin-bottom:1%;">
    <div style="display: flex;
justify-content: center;">
<?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
    <a href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
formularioVagon/0' class="btn btn-outline-secondary">Agregar</a>
    <?php }?>
</div>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
