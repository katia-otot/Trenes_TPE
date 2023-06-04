<?php
/* Smarty version 4.3.1, created on 2023-06-04 03:06:32
  from 'C:\xampp\htdocs\web2\Trenes_TPE\templates\formularioVagon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647be39879f5f9_46441975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e44636e14c6975bd9782bce4b1efb6aa64bce78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Trenes_TPE\\templates\\formularioVagon.tpl',
      1 => 1685840786,
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
function content_647be39879f5f9_46441975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
insertOrUpdateVagon" method="POST">
<input type = "hidden" name="id_vagon" value="<?php echo $_smarty_tpl->tpl_vars['vagon']->value->id_vagon;?>
"/>

<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Numero de Vagon</span>
    <input type="text" class="form-control"  name="nro_vagon"  value="<?php echo $_smarty_tpl->tpl_vars['vagon']->value->nro_vagon;?>
" required>
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Tipo</span>
    <input type="text" class="form-control" name="tipo" value="<?php echo $_smarty_tpl->tpl_vars['vagon']->value->tipo;?>
"/>
        
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Capacidad maxima</span>
    <input type="text" class="form-control"  name="capacidad_max"  value="<?php echo $_smarty_tpl->tpl_vars['vagon']->value->capacidad_max;?>
"  required>
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Modelo</span>
    <input type="text" class="form-control"  name="modelo"  value="<?php echo $_smarty_tpl->tpl_vars['vagon']->value->modelo;?>
"  required>
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Descripcion</span>
    <input type="text" class="form-control"  name="descripcion"  value="<?php echo $_smarty_tpl->tpl_vars['vagon']->value->descripcion;?>
"  required>
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Locomotora</span>
    <select name="locomotora_id"  required>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locomotoras']->value, 'locomotora');
$_smarty_tpl->tpl_vars['locomotora']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['locomotora']->value) {
$_smarty_tpl->tpl_vars['locomotora']->do_else = false;
?>
        <?php if (($_smarty_tpl->tpl_vars['locomotora']->value->id_locomotora == $_smarty_tpl->tpl_vars['vagon']->value->locomotora_id)) {?>
            <option selected value="<?php echo $_smarty_tpl->tpl_vars['locomotora']->value->id_locomotora;?>
"><?php echo $_smarty_tpl->tpl_vars['locomotora']->value->modelo;?>
</option>
        <?php } else { ?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['locomotora']->value->id_locomotora;?>
"><?php echo $_smarty_tpl->tpl_vars['locomotora']->value->modelo;?>
</option>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>
<div class="d-grid">
    <div style="display:flex; justify-content: center">
        <button class="btn   text-uppercase fw-bold btn-outline-secondary" style=" width:80px;height:45px; margin-bottom:1%; align:center" type="submit">  Enviar</button>
    </div>
</div>

</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
