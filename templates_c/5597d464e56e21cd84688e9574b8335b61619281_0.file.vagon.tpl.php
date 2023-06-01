<?php
/* Smarty version 4.3.1, created on 2023-06-02 00:43:23
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\vagon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64791f0bdfbd55_45955607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5597d464e56e21cd84688e9574b8335b61619281' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\vagon.tpl',
      1 => 1685659302,
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
function content_64791f0bdfbd55_45955607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p> <?php echo $_smarty_tpl->tpl_vars['vagones']->value;?>
</p>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
