<?php
<<<<<<< .merge_file_7o3Rok
/* Smarty version 4.3.1, created on 2023-06-03 20:36:15
=======
/* Smarty version 4.3.1, created on 2023-06-02 00:43:23
>>>>>>> .merge_file_r0q4EK
  from 'C:\xampp\htdocs\WEB_TPE\Trenes_TPE\templates\vagon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< .merge_file_7o3Rok
  'unifunc' => 'content_647b881f716704_29059368',
=======
  'unifunc' => 'content_64791f0bdfbd55_45955607',
>>>>>>> .merge_file_r0q4EK
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5597d464e56e21cd84688e9574b8335b61619281' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_TPE\\Trenes_TPE\\templates\\vagon.tpl',
<<<<<<< .merge_file_7o3Rok
      1 => 1685817368,
=======
      1 => 1685659302,
>>>>>>> .merge_file_r0q4EK
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
<<<<<<< .merge_file_7o3Rok
function content_647b881f716704_29059368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" style="margin-top:1%; margin-bottom:1%">
    <div class="card" style="margin-bottom:1%">
        <h5 class="card-header">Vagon</h5>
        <div class="card-body">
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
</p>
        </div>
    </div>
    <div class="card" style="margin-bottom:1%">
        <h5 class="card-header">Modelo</h5>
        <div class="card-body">
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['modelo']->value;?>
</p>
        </div>
    </div>
    <div class="card"style="margin-bottom:1%">
        <h5 class="card-header">Capacidad máxima</h5>
        <div class="card-body">
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['cap_max']->value;?>
</p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Descripción</h5>
        <div class="card-body">
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</p>
        </div>
    </div>
</div>
=======
function content_64791f0bdfbd55_45955607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p> <?php echo $_smarty_tpl->tpl_vars['vagones']->value;?>
</p>


>>>>>>> .merge_file_r0q4EK
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
