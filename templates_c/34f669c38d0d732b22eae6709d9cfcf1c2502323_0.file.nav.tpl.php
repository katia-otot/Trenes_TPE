<?php
/* Smarty version 4.3.1, created on 2023-05-30 19:33:47
  from 'C:\xampp\htdocs\web2\Trenes_TPE\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6476337b1da191_46422947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34f669c38d0d732b22eae6709d9cfcf1c2502323' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Trenes_TPE\\templates\\nav.tpl',
      1 => 1685468020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6476337b1da191_46422947 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">

<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index">Ferrocarriles</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
Locomotoras">Locomotoras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
Vagones">Vagones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
Acceder">Acceder</a>
        </li>
</div>

</nav><?php }
}
