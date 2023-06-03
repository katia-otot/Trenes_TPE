<?php
/* Smarty version 4.3.1, created on 2023-06-03 03:22:51
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\vagones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647a95eb7355d2_30357371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12918525d5ce604f1b8b03cefd24e5042fcdbc6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\vagones.tpl',
      1 => 1685755369,
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
function content_647a95eb7355d2_30357371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<header> 
<h1> Vagones</h1>

</header>
<section>
    <table class="table table table-bordered table align-middle">
    <thead>
        <tr>
        <th>Locomotora</th>
        <th>Tipo</th>
            <th>N° Vagón</th>
                        <th>Descripción</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vagones']->value, 'vagon');
$_smarty_tpl->tpl_vars['vagon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vagon']->value) {
$_smarty_tpl->tpl_vars['vagon']->do_else = false;
?>
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->locomotora_modelo;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->tipo;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vagon']->value->nro_vagon;?>
</td>
                             <td ><a   href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
Vagon/<?php echo $_smarty_tpl->tpl_vars['vagon']->value->id_vagon;?>
" class="btn btn-outline-secondary"> Ver más</a></td>
                
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
</section>
<section>
<?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
        <form method="POST">
    <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Locomotora</span>

    <select class="form-select" aria-label="Default select example">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vagones']->value, 'vagon');
$_smarty_tpl->tpl_vars['vagon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vagon']->value) {
$_smarty_tpl->tpl_vars['vagon']->do_else = false;
?>
  <option selected><?php echo $_smarty_tpl->tpl_vars['vagon']->value->modelo;?>
</option>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
</div>
    <div class="input-group input-group-sm mb-3">
  <span class="input-group-text " id="inputGroup-sizing-sm">Número de vagón</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
    <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de vagón</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Capacidad máxima</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Modelo</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="d-grid">
<div style="display:flex; justify-content: center">

<button class="btn   text-uppercase fw-bold btn-outline-secondary" style=" width:80px;
height:45px; margin-bottom:1%; align:center"type="submit">Enviar</button>
</div>
</div>

    </form>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
