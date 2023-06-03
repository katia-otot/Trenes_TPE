<?php
/* Smarty version 4.3.1, created on 2023-06-03 23:52:08
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\ABM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647bb6082c23f8_16979417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b33cb82eefc099b3d94e3d26d434258c79707655' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\ABM.tpl',
      1 => 1685829003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_647bb6082c23f8_16979417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="display: flex;
width: 100vw;
height: 100vh;
justify-content: center;
align-items: center;">

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Se ha <?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
 un nuevo registro correctamete.</h4>
  <p style="text-align:center;" >Vuelva para verlo</p>
  <hr>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
Locomotoras" class="mb-0" style="padding-left:45%">Volver</a>
  </div>
</div> <?php }
}
