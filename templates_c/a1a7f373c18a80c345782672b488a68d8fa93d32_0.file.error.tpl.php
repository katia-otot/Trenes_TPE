<?php
/* Smarty version 4.3.1, created on 2023-06-05 00:15:23
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647d0cfb7d0ca5_10135130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1a7f373c18a80c345782672b488a68d8fa93d32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\error.tpl',
      1 => 1685913873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_647d0cfb7d0ca5_10135130 (Smarty_Internal_Template $_smarty_tpl) {
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
