<?php
/* Smarty version 4.3.1, created on 2023-06-04 21:34:44
  from 'C:\xampp\htdocs\web2\Trenes_TPE\templates\ABM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647ce754a731b7_05255561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd265eaa8d85e9f57d07d1a3e71427a6a92d88127' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Trenes_TPE\\templates\\ABM.tpl',
      1 => 1685906348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_647ce754a731b7_05255561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" style="display: flex;
  width: 100vw;
  height: 100vh;
  justify-content: center;
  align-items: center;">

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Se ha <?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['registro']->value;?>
 correctamente.</h4>
    <p style="text-align:center;" >Vuelva para verlo</p>
    <hr>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['dir']->value;?>
" class="mb-0" style="padding-left:45%">Volver</a>
  </div>
</div> <?php }
}
