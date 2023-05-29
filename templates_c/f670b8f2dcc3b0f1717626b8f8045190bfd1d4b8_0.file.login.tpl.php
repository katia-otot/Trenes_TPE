<?php
/* Smarty version 4.3.1, created on 2023-05-29 21:24:28
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474fbec343665_48937800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f670b8f2dcc3b0f1717626b8f8045190bfd1d4b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\login.tpl',
      1 => 1685387917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6474fbec343665_48937800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class = "login-form">
    <h2> Iniciar sesión </h2>
    <form action="login" method="POST">
        <div class=form-group">
            <label for="user"> Usuario:</label>
            <input type="text" id="user" name="user" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Iniciar">
      </div>
    </form>
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
