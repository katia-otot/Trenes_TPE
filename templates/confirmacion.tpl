{include file="header.tpl"}
<div class="container" style="display: flex;
  width: 100vw;
  height: 100vh;
  justify-content: center;
  align-items: center;">

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">¿Seguro quiere {$estado} {$registro}?</h4>
    <p class="alert-heading" style="display:flex;justify-content: center">{$vagones}</p>
    <div style="margin-left:34%">
      <a href="{$BASE_URL}{$si}" class="mb-0 btn   text-uppercase fw-bold btn-outline-secondary" style="text-decoration:none; margin-right:15%">SI</a>

      <a href="{$BASE_URL}{$no}" class="mb-0 btn   text-uppercase fw-bold btn-outline-secondary" style="text-decoration:none">NO</a>

    </div>
  </div>
</div>
