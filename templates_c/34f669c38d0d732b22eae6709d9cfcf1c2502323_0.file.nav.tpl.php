<?php
/* Smarty version 4.3.1, created on 2023-06-04 03:49:52
  from 'C:\xampp\htdocs\web2\Trenes_TPE\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647bedc00c6301_22823301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34f669c38d0d732b22eae6709d9cfcf1c2502323' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Trenes_TPE\\templates\\nav.tpl',
      1 => 1685843384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647bedc00c6301_22823301 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand active" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
Ferrocarriles">Ferrocarriles</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
Locomotoras">Locomotoras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
Vagones">Vagones</a>
        </li>

      </ul>
      <span class="navbar-text">



        <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>

          <a class="nav-item "  href="<?php echo BASE_URL;?>
Cerrar"> Cerrar sesión</a>
        <?php } else { ?>
          <a class="nav-link  " href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
Acceder">Acceder</a>
       
        <?php }?>


      </span>
    </div>
  </div>
</nav><?php }
}
