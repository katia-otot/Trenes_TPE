<?php
/* Smarty version 4.3.1, created on 2023-05-25 23:00:01
  from 'C:\xampp\htdocs\Trenes_TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646fcc517dff79_87954165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '923743b3d88a51fa892f3172a84c9ea4057cef75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trenes_TPE\\templates\\login.tpl',
      1 => 1685048399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_646fcc517dff79_87954165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class = "login-form">
    <h2> Iniciar sesión </h2>
    <form action="login" method="post">
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
<?php }
}
