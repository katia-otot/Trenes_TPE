<?php
/* Smarty version 4.3.1, created on 2023-06-04 03:49:56
  from 'C:\xampp\htdocs\web2\Trenes_TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647bedc4051b39_70387178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e552968fa057e43140d752a71ddb5d58eaf3d939' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Trenes_TPE\\templates\\login.tpl',
      1 => 1685843384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647bedc4051b39_70387178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card border-0 shadow rounded-3 my-5">
        <div class="card-body p-4 p-sm-5">
          <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar sesion en Ferrocarriles</h5>
          <form action="Accediendo" method="POST">
            <div class="form-floating mb-3">
              <input class="form-control" id="floatingInput" placeholder="name@example.com" name="user" required>
              <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"
                required>
              <label for="floatingPassword">Contraseña</label>
            </div>


            <div class="d-grid">
              <button class="btn   text-uppercase fw-bold btn-outline-secondary" type="submit">Iniciar sesión</button>
            </div>

            <hr class="my-4">
            <a href="Ferrocarriles" style="text-decoration:none; padding-left:40%">Ir al inicio</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}