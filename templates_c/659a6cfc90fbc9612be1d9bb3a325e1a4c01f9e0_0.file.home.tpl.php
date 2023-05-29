<?php
/* Smarty version 4.3.1, created on 2023-05-29 22:36:15
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64750cbf56afb4_54843101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '659a6cfc90fbc9612be1d9bb3a325e1a4c01f9e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\home.tpl',
      1 => 1685392570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64750cbf56afb4_54843101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header> 
    <h1> Ferrocariles</h1>
        <input class = "login-button" type="submit" value="Acceder" onclick="window.location='Acceder';" /> 
</header>
<input class = "square" type="submit" value="Trenes" onclick="window.location='Locomotoras';" />
<input class = "square" type="submit" value="Vagones" onclick="window.location='Vagones';" />
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
