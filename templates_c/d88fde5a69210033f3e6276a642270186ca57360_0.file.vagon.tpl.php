<?php
/* Smarty version 4.3.1, created on 2023-06-04 03:50:16
  from 'C:\xampp\htdocs\web2\Trenes_TPE\templates\vagon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647bedd891d744_85309039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd88fde5a69210033f3e6276a642270186ca57360' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Trenes_TPE\\templates\\vagon.tpl',
      1 => 1685842719,
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
function content_647bedd891d744_85309039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" style="margin-top:1%; margin-bottom:1%">
    <div class="card" style="margin-bottom:1%">
        <h5 class="card-header">Vagon</h5>
        <div class="card-body">
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['vagon']->value->nro_vagon;?>
</p>
        </div>
    </div>
    <div class="card" style="margin-bottom:1%">
        <h5 class="card-header">Modelo</h5>
        <div class="card-body">
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['vagon']->value->modelo;?>
</p>
        </div>
    </div>
    <div class="card"style="margin-bottom:1%">
        <h5 class="card-header">Capacidad máxima</h5>
        <div class="card-body">
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['vagon']->value->capacidad_max;?>
</p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Descripción</h5>
        <div class="card-body">
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['vagon']->value->descripcion;?>
</p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Locomotora</h5>
        <div class="card-body">
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['vagon']->value->locomotora_modelo;?>
</p>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
