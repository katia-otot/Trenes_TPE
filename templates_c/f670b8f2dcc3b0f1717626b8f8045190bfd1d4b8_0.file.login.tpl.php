<?php
/* Smarty version 4.3.1, created on 2023-05-29 22:33:08
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64750c042d4a05_95224667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f670b8f2dcc3b0f1717626b8f8045190bfd1d4b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\login.tpl',
      1 => 1685392386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64750c042d4a05_95224667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2 class="col d-flex justify-content-center"> Iniciar sesión </h2>
<div class="col d-flex justify-content-center">


    <form action="login" method="POST" >
    
        <div class="form-outline mb-4">
            <label  class="form-label" for="form2Example1"> Usuario:</label>
            <input type="text"  id="form2Example1" name="user" required class="form-control">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Contraseña:</label>
            <input type="password"  name="password" required id="form2Example2" class="form-control">
        </div>
        <div class="col d-flex justify-content-center">
            <input type="submit" value="Acceder" class="btn btn-primary btn-block mb-4">
      </div>
    </form>
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
