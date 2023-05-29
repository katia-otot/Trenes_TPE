<?php
/* Smarty version 4.3.1, created on 2023-05-28 21:16:33
  from 'C:\xampp\htdocs\web2\Trenes_TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6473a89162d235_10201663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad5535485f8051fb9919369f3af54c0ef2f93c34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Trenes_TPE\\templates\\home.tpl',
      1 => 1685301302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6473a89162d235_10201663 (Smarty_Internal_Template $_smarty_tpl) {
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
