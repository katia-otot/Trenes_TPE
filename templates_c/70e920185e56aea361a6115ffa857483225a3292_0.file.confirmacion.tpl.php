<?php
/* Smarty version 4.3.1, created on 2023-06-04 22:46:26
  from 'C:\xampp\htdocs\web2\Trenes_TPE\templates\confirmacion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647cf822f0ef93_20929260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e920185e56aea361a6115ffa857483225a3292' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Trenes_TPE\\templates\\confirmacion.tpl',
      1 => 1685911585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_647cf822f0ef93_20929260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" style="display: flex;
  width: 100vw;
  height: 100vh;
  justify-content: center;
  align-items: center;">

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Seguro que quiere <?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
 esta <?php echo $_smarty_tpl->tpl_vars['registro']->value;?>
.</h4>
    <p>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['si']->value;?>
" class="mb-0" style="padding-left:45%">Si</a>

    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['no']->value;?>
" class="mb-0" style="padding-left:45%">No</a>

  </p>
  </div>
</div> <?php }
}
