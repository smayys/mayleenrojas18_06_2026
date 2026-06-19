<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso</title>
</head>
<body>
   <?php
   $Nombre = $_POST['Nombre'];
   $Edad   = $_POST['Edad'];
   $Telefono = $_POST['Telefono'];
   $Direccion =$_POST['Direccion'];
   $Correo =$_POST['Correo'];

   if($Edad>= 70){
        echo("<h1>Bienvenido: $Nombre </h1><br>");
        echo("<h2> Con el telefono: $Telefono: </h2><br>");
        echo("<h3> con la Direccion: $Direccion: <h/3><br>");
        echo("<h4> con el correo: $Correo: <h/4><br>");
        echo("<b>Con la edad: $Edad, <i>Es alguien de la tercera edad</i><br>");

    }elseif($Edad>=40){
        echo("<h1>Bienvenido: $Nombre </h1><br>");
        echo("<h2> Con el telefono: $Telefono: </h2><br>");
        echo("<h3> con la Direccion: $Direccion: <h/3><br>");
        echo("<h4> con el correo: $Correo: <h/4><br>");
        echo("<b>Con la edad: $Edad, <i>Ya es alguien mayor</i><br>");

    }elseif($Edad>=18){
        echo("<h1>Bienvenido: $Nombre </h1><br>");
        echo("<h2> Con el telefono: $Telefono: </h2><br>");
        echo("<h3> con la Direccion: $Direccion: <h/3><br>");
        echo("<h4> con el correo: $Correo: <h/4><br>");
        echo("<b>Con la edad: $Edad, <i>Ya es adulto</i><br>");
    }else{
        echo("<h1>Bienvenido: $Nombre </h1><br>");
        echo("<h2> Con el telefono: $Telefono: </h2><br>");
        echo("<h3> con la Direccion: $Direccion: <h/3><br>");
        echo("<h4> con el correo: $Correo: <h/4><br>");
        echo("<b>Con la edad: $Edad, <i>Es un niño</i><br>");
    }
   ?>

</body>
</html>