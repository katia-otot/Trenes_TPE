{include file="header.tpl"}
<div class="container" style="display: flex;
  width: 100vw;
  height: 100vh;
  justify-content: center;
  align-items: center;">

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Se ha {$estado} {$registro} correctamente.</h4>
    <p style="text-align:center;">Vuelva para verlo</p>
    <hr>
    <div style="margin-left:43%">
    <a href="{$BASE_URL}{$dir}" class="mb-0 btn   text-uppercase fw-bold btn-outline-secondary"
      style="text-decoration:none;">Volver</a>
  </div>
  </div>
</div>