<?php
/* Smarty version 4.3.1, created on 2023-06-05 21:07:35
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\confirmacion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647e3277e864c2_49590863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c834d45c5515d8db746e5ce89a4bf62c0d76f219' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\confirmacion.tpl',
      1 => 1685992053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_647e3277e864c2_49590863 (Smarty_Internal_Template $_smarty_tpl) {
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
    <p class="alert-heading" style="display:flex;justify-content: center"><?php echo $_smarty_tpl->tpl_vars['vagones']->value;?>
</p>
    <div style="margin-left:34%">
      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['si']->value;?>
" class="mb-0 btn   text-uppercase fw-bold btn-outline-secondary" style="text-decoration:none; margin-right:15%">SI</a>

      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['no']->value;?>
" class="mb-0 btn   text-uppercase fw-bold btn-outline-secondary" style="text-decoration:none">NO</a>

    </div>
  </div>
</div>
<?php }
}
