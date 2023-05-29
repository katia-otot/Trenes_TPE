{include file="header.tpl"}
<div class = "login-form">
    <h2> Iniciar sesión </h2>
    <form action="login" method="post">
        <div class=form-group">
            <label for="user"> Usuario:</label>
            <input type="text" id="user" name="user" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Iniciar">
      </div>
    </form>
  </div>
  {include file="footer.tpl"}