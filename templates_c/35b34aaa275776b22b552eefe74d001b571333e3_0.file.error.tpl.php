<?php
/* Smarty version 4.3.1, created on 2023-06-04 03:50:00
  from 'C:\xampp\htdocs\web2\Trenes_TPE\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647bedc83c6450_47999044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35b34aaa275776b22b552eefe74d001b571333e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Trenes_TPE\\templates\\error.tpl',
      1 => 1685843384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_647bedc83c6450_47999044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="display: flex;
width: 100vw;
height: 100vh;
justify-content: center;
align-items: center;">

<div class="alert alert-danger d-flex align-items-center" role="alert" >
  <div >
  <h4 class="alert-heading" >Usuario y/o contraseña incorrecto</h4>
  <p style="text-align:center;">Intentalo de nuevo.</p>
  <hr>
  <a href="Acceder" class="mb-0" style="padding-left:43%">Volver</a>
  </div>
</div>
</div><?php }
}
