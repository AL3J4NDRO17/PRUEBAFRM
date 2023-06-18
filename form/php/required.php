<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./requiered.css">
</head>

<body>
    <?php
    $nombre=$_POST['nombre'];
    $appaterno=$_POST['ap'];
    $apmaterno=$_POST['am'];
    $telefono=$_POST['tele'];
    $usu=$_POST['usu'];  
    $sex=$_POST ['SEXO'];
    $fecha=$_POST['date'];
    $rfc=$_POST['rfc'];
    $correo=$_POST['correo'];
    $contra1=$_POST['contra1'];
    $contra2=$_POST['contra2'];
    ?>

<fieldset>
    <tr>
        <td>Nombre:
    <?php
    echo $nombre
    ?>
        </td>
    </tr>


<br>

    <tr>
        <td>Apellido Paterno:
            <?php
           echo  $appaterno
           ?>
        </td>
    </tr>

<br>

    <tr>
        <td>Apellido Materno:
            <?php
           echo $apmaterno
           ?>
        </td>
    </tr>

<br>

    <tr>
        <td>Su telefono es:
            <?php
           echo $telefono
           ?>
        </td>
    </tr>

<br>

    <tr>
        <td>Su usuario es:
            <?php
           echo $usu
           ?>
        </td>
    </tr>
    <tr>

<br>

    <tr>
        <td>
            <?php
            echo "La opción seleccionada es: " . $sex;       
           ?>
        </td>
    </tr>

<br>

<tr>
        <td>Fecha de nacimiento:
            <?php
           echo $fecha
           ?>
        </td>
    </tr>


<br>

    <tr>
        <td>Su RFC es:
            <?php
           echo $rfc
           ?>
        </td>
    </tr>

<br>

    <tr>
        <td>Su correo Electronico es:
            <?php
           echo $correo
           ?>
        </td>
    </tr>

<br>

    <tr>
        <td>Su contraseña es:
            <?php
           echo $contra1
           ?>
        </td>
    </tr>
</fieldset>
    
   
    
</body>
</html>