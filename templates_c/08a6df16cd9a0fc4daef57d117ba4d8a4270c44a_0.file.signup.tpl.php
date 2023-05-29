<?php
/* Smarty version 4.3.1, created on 2023-05-29 21:45:36
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647500e0bd0448_64827690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a6df16cd9a0fc4daef57d117ba4d8a4270c44a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\signup.tpl',
      1 => 1685389534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647500e0bd0448_64827690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class = "login-form">
    <h2> Formulario de registro</h2>
    <form  method="POST">
        <div class=form-group>
            <label for="user"> Usuario:</label>
            <input type="text" id="user" name="userRegistro" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="passwordRegistro" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Iniciar">
      </div>
    </form>
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
