<?php
/* Smarty version 4.3.1, created on 2023-06-03 06:25:11
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\locomotora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647ac0a7c9de25_92195820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd65a5dd0afdbb15cabfb01ffe3e583b268e41c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\locomotora.tpl',
      1 => 1685765809,
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
function content_647ac0a7c9de25_92195820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<header > 
    <h1> Locomotoras</h1>
</header>
<section >
    <table class="table table table-bordered table align-middle">
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Año de fabricación</th>
            <th>País de fabricación</th>
            <th>Vagones</th>

        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locomotoras']->value, 'locomotora');
$_smarty_tpl->tpl_vars['locomotora']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['locomotora']->value) {
$_smarty_tpl->tpl_vars['locomotora']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['locomotora']->value->modelo;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['locomotora']->value->anio_fabricacion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['locomotora']->value->lugar_fabricacion;?>
</td>
                
                <td ><a   href="Vagones/<?php echo $_smarty_tpl->tpl_vars['locomotora']->value->id_locomotora;?>
" class="btn btn-outline-secondary"> Ver</a></td>
                <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
                <td ><a   href="Modificar/<?php echo $_smarty_tpl->tpl_vars['locomotora']->value->id_locomotora;?>
" class="btn btn-outline-secondary" name="btnModificarLocomotora"> Modificar</a>
                <a   href="Borrar/<?php echo $_smarty_tpl->tpl_vars['locomotora']->value->id_locomotora;?>
" class="btn btn-outline-secondary" name="btnEliminarLocomotora"> Eliminar</a></td>
                <?php }?>
                              </tr>
         
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
</section>
<section>
    <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
        <form action="Agregar" method="POST">
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text " id="inputGroup-sizing-sm">Modelo</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" name="modelo" value="<?php echo $_smarty_tpl->tpl_vars['valueModelo']->value;?>
">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Año de fabricación</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" name="anio_fabricacion" value="<?php echo $_smarty_tpl->tpl_vars['valueAnio']->value;?>
">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Lugar de fabricación</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" name="lugar_fabricacion" value="<?php echo $_smarty_tpl->tpl_vars['valueLugar']->value;?>
">
            </div>
            <div class="d-grid">
                <div style="display:flex; justify-content: center">

                    <button class="btn   text-uppercase fw-bold btn-outline-secondary" style=" width:80px;
height:45px; margin-bottom:1%; align:center" type="submit">  Enviar</button>
                </div>
            </div>

        </form>
    <?php }?>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
