<?php
/* Smarty version 4.3.1, created on 2023-06-03 18:16:46
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\ABM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647b676ec53ca4_53051343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b33cb82eefc099b3d94e3d26d434258c79707655' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\ABM.tpl',
      1 => 1685807880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_647b676ec53ca4_53051343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="display: flex;
width: 100vw;
height: 100vh;
justify-content: center;
align-items: center;">

<div class="alert alert-success d-flex align-items-center" role="alert" >
    <div >
  <h4 class="alert-heading" >Usuario y/o contraseña incorrecto</h4>
  <p style="text-align:center;">Intentalo de nuevo.</p>
  <hr>
  <a href="Acceder" class="mb-0" style="padding-left:43%">Volver</a>
  </div>
</div>
</div><?php }
}
