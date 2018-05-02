<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formlario</title>
  </head>
  <body>
    <h1>Formulario de registro</h1>
    <h3>Los campos con (*) son requeridos</h3>
    <form   method="post" action="">
        <table>
          <tr>
              <td>Nombre y apellidos</td>
              <td> <input type="name" name="realname"> </td>
          </tr>
          <tr>
              <td>*Nick de usuario</td>
              <td> <input type="name" name="nick"> </td>
          </tr>
          <tr>
              <td>*Contraseña</td>
              <td> <input type="password" name="pass"> </td>
          </tr>
          <tr>
              <td>*Repetir Contraseña</td>
              <td> <input type="password" name="rpass"> </td>
          </tr>
        </table>

        <input type="submit" name="submit" value="Resgistrarme">
        <input type="reset">
    </form>
    <?php
        if(isset($_POST['submit'])){
            require("registro.php");
        }
     ?>
  </body>
</html>
