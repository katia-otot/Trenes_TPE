{include file="header.tpl"}
{* {include file="nav.tpl"} *}
{* {include file="libs/bootstrap-5.2.3-dist"} *}

{* <div class="container">
    <div class="alert alert-success" role="alert">

        <h4 class="alert-heading">Usuario y/o contraseña incorrecto</h4>
        <p>Intentalo de nuevo.</p>
        <hr>
        <a href="Acceder" class="mb-0">Volver</a>

    </div>
</div> *}
{* <div class="container" style="display: flex;
width: 100vw;
height: 100vh;
justify-content: center;
align-items: center;">

 <div>
    <h4 class="alert-heading">Se ha agregado un nuevo registro correctamete</h4>
    <p style="text-align:center;"></p>
    <hr>
    <a href="Locomotoras" class="mb-0" style="padding-left:43%">Volver</a>
  </div>
</div> *}
<div class="container" style="display: flex;
width: 100vw;
height: 100vh;
justify-content: center;
align-items: center;">

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Se ha {$estado} un nuevo registro correctamete.</h4>
  <p style="text-align:center;" >Vuelva para verlo</p>
  <hr>
  <a href="{$BASE_URL}Locomotoras" class="mb-0" style="padding-left:45%">Volver</a>
  {* <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> *}
</div>
</div> 