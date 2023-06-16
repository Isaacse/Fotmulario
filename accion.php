<html>
  <head>
    <title>PHP Test</title>
       <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <p style="position:absolute; right:50 ;left:50;">
    DATOS CAPTURADOS <br>
    Nombre:<?php echo htmlspecialchars($_POST['nombre']); ?>.<br>
    Apellido Paterno:<?php echo htmlspecialchars($_POST['paterno']); ?>.<br>
    Apellido Materno:<?php echo htmlspecialchars($_POST['materno']); ?>.<br>
    Edad:<?php echo (int)$_POST['edad']; ?> 
       Email:<?php echo htmlspecialchars($_POST['Correo']); ?>.<br>
  </p>
 <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>