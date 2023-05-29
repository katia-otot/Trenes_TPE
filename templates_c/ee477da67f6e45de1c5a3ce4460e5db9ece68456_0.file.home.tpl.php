<?php
/* Smarty version 4.3.1, created on 2023-05-29 18:49:28
  from 'C:\xampp\htdocs\Trenes_TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474d79846d592_40156216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee477da67f6e45de1c5a3ce4460e5db9ece68456' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trenes_TPE\\templates\\home.tpl',
      1 => 1685377039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6474d79846d592_40156216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header> 
    <h1> title </h1>
    <input class = "login-button" type="submit" value="Login" onclick="window.location='showlogin';" /> 
</header>
<input class = "square" type="submit" value="Trenes" onclick="window.location='showtrenes';" />
<input class = "square" type="submit" value="Vagones" onclick="window.location='showvagones';" />
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
