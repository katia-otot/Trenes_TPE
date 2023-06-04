<?php
/* Smarty version 4.3.1, created on 2023-06-04 23:55:48
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\confirmacion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647d0864dfcdd7_72777572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c834d45c5515d8db746e5ce89a4bf62c0d76f219' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\confirmacion.tpl',
      1 => 1685915746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_647d0864dfcdd7_72777572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" style="display: flex;
  width: 100vw;
  height: 100vh;
  justify-content: center;
  align-items: center;">

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">¿Seguro quiere <?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
 esta <?php echo $_smarty_tpl->tpl_vars['registro']->value;?>
?</h4>
    <div style="margin-left:34%">
      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['si']->value;?>
" class="mb-0 btn   text-uppercase fw-bold btn-outline-secondary" style="text-decoration:none; margin-right:15%">SI</a>

      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['no']->value;?>
" class="mb-0 btn   text-uppercase fw-bold btn-outline-secondary" style="text-decoration:none">NO</a>

    </div>
  </div>
</div><?php }
}
