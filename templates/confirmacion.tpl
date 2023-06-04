{include file="header.tpl"}
<div class="container" style="display: flex;
  width: 100vw;
  height: 100vh;
  justify-content: center;
  align-items: center;">

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Seguro que quiere {$estado} esta {$registro}.</h4>
    <p>
    <a href="{$BASE_URL}{$si}" class="mb-0" style="padding-left:45%">Si</a>

    <a href="{$BASE_URL}{$no}" class="mb-0" style="padding-left:45%">No</a>

  </p>
  </div>
</div> 