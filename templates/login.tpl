{include file="header.tpl"}
<h2 class="col d-flex justify-content-center"> Iniciar sesión </h2>
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
  </div>
  {include file="footer.tpl"}