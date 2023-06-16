<html>
  <head>
    <title>PHP Test</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php echo '<p></p>';  ?> 
       <center> <div style="position:absolute; right:50; left:50;" class="container"><form action="accion.php" method="post">
         <p>Nombre: <input type="text" name="nombre" pattern="[A-Za-z]{1,7}" title="primera letra en mayuscula"required/></p>
        <p>Apellido paterno: <input type="text" name="paterno"required pattern="[A-Za-z]{1,25}" title="primera letra en mayuscula"/></p>
        <p>Apellido materno: <input type="text" name="materno" required pattern="[A-Za-z]{1,25}" title="primera letra en mayuscula"/></p>
         <p>Su edad: <input type="number" name="edad" size="20px" required pattern="{2}" title="solo numeros" /></p>
         <p>Email:<input type="email" name="Correo" required></p>
         <p><input type="submit" value="Guardar"/>
          <input type="reset" value="Borrar"/></p>
        </form></div>
          <!--
          This script places a badge on your repl's full-browser view back to your repl's cover
          page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
          teal, blue, blurple, magenta, pink!
          -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>