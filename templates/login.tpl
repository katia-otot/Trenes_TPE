{include file="header.tpl"}
{* <h2 class="col d-flex justify-content-center"> Iniciar sesión </h2>
<div class="col d-flex justify-content-center">


    <form action="login" method="POST" >
    
        <div class="form-outline mb-4">
            <label  class="form-label" for="form2Example1"> Usuario:</label>
            <input type="text"  id="form2Example1" name="user" required class="form-control">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Contraseña:</label>
            <input type="password"  name="password" required id="form2Example2" class="form-control">
        </div>
        <div class="col d-flex justify-content-center">
            <input type="submit" value="Acceder" class="btn btn-primary btn-block mb-4">
      </div>
    </form>
  </div> *}
  <div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card border-0 shadow rounded-3 my-5">
        <div class="card-body p-4 p-sm-5">
          <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar sesion en Ferrocarriles</h5>
          <form action="login" method="POST" >
            <div class="form-floating mb-3">
              <input  class="form-control" id="floatingInput" placeholder="name@example.com" name="user" required>
              <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required >
              <label for="floatingPassword">Contraseña</label>
            </div>

      
            <div class="d-grid">
              <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Iniciar sesión</button>
            </div>
            <hr class="my-4">
    
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
  {include file="footer.tpl"}
  