{include file="header.tpl"}
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
              <button class="btn text-uppercase fw-bold btn-outline-secondary" type="submit">Iniciar sesión</button>
            </div>
            <hr class="my-4">
            <a href="{BASE_URL}Ferrocarriles" style="text-decoration:none; padding-left:40%">Ir al inicio</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
{include file="footer.tpl"}