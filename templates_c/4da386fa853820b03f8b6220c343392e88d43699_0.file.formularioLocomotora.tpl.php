<?php
/* Smarty version 4.3.1, created on 2023-06-05 02:06:05
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\formularioLocomotora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647d26ed0a83b5_17859902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4da386fa853820b03f8b6220c343392e88d43699' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\formularioLocomotora.tpl',
      1 => 1685919309,
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
function content_647d26ed0a83b5_17859902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2> Ingrese una locomotora</h2>

<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
insertarOmodificarLocomotora" method="POST" style="margin-top:1%;>">
<input type = "hidden" name="id_locomotora" value="<?php echo $_smarty_tpl->tpl_vars['locomotora']->value->id_locomotora;?>
">

<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Modelo</span>
    <input type="text" class="form-control"  name="modelo"  value="<?php echo $_smarty_tpl->tpl_vars['locomotora']->value->modelo;?>
" required>
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Año de fabricación</span>
    <input type="number" class="form-control" name="anio_fabricacion" value="<?php echo $_smarty_tpl->tpl_vars['locomotora']->value->anio_fabricacion;?>
" required/>
        
</div>
<div class="input-group input-group-sm mb-3">
    <span class="input-group-text">Lugar de fabricación</span>
    <input type="text" class="form-control"  name="lugar_fabricacion"  value="<?php echo $_smarty_tpl->tpl_vars['locomotora']->value->lugar_fabricacion;?>
"  required>
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
