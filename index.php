<?php
include("conexion.php");
$con=conectar();
$estudiante = "SELECT * FROM tbl_estudiante";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>School Practi</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <div class="container">
        <div class="navigation">
            <div class="menu-toggle"></div>
            <ul class="list">
                <li class="list-item active" style="color:#f44336"><a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Inicio</span>
                    </a></li>

                <li class="list-item active" style="color:#ffa117"><a href="#">
                        <span class="icon">
                            <ion-icon name="alert-outline"></ion-icon>
                        </span>
                        <span class="text">Noticias</span>
                    </a></li>

                <li class="list-item active" style="color:#0fc70f"><a href="#">
                        <span class="icon">
                            <ion-icon name="call-outline"></ion-icon>
                        </span>
                        <span class="text">Contactos</span>
                    </a></li>

                <li class="list-item active" style="color:#2196f3"><a href="#">
                        <span class="icon">
                            <ion-icon name="grid-outline"></ion-icon>
                        </span>
                        <span class="text">Matricula</span>
                    </a></li>
            </ul>
        </div>
    </div>

    <div class="container-sm">

        <table class="table">
            <thead>
                <th>CEDULA</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>FECHA DE NACIMIENTO</th>
                <th>TELEFONO</th>
                <th>CORREO</th>
                <th>REPRESENTANTE DEL ALUMNO</th>
                <th>DIRECCION</th>
            </thead>
            <tbody>
                <tr class="table-active">

                    <?php
                    $resultado = mysqli_query($conexion, $estudiante);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                    ?>

                    <td>
                        <div class="table__item">
                            <?php echo $row["estCedula"]; ?>
                        </div>
                    </td>

                    <td>
                        <div class="table__item">
                            <?php echo $row["estNombres"]; ?>
                        </div>
                    </td>

                    <td>
                        <div class="table__item">
                            <?php echo $row["estApellidos"]; ?>
                        </div>
                    </td>

                    <td>
                        <div class="table__item">
                            <?php echo $row["estFechaNacimiento"]; ?>
                        </div>
                    </td>

                    <td>
                        <div class="table__item">
                            <?php echo $row["estTelefono"]; ?>
                        </div>
                    </td>

                    <td>
                        <div class="table__item">
                            <?php echo $row["estCorreo"]; ?>
                        </div>
                    </td>

                    <td>
                        <div class="table__item">
                            <?php echo $row["estRepresentantePadres"]; ?>
                        </div>
                    </td>

                    <td>
                        <div class="table__item">
                            <?php echo $row["estDireccion"]; ?>
                        </div>
                    </td>

                <?php
            }
            ?>
            </tr>            
        </tbody>
    </table>

    <div class="container">

      <form class="row g-3 needs-validation">

        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="Nombres" placeholder="Nombres">
  <label for="floatingInput">Nombres</label>
</div>

<div class="form-floating mb-3">
<input type="text" class="form-control" id="Apellidos" placeholder="Apellidos">
<label for="floatingInput">Apellidos</label>
</div>

<div class="form-floating mb-3">
<input type="date" class="form-control" id="Fecha" placeholder="Fecha">
<label for="floatingInput">Fecha de Nacimiento</label>
</div>

<div class="form-floating mb-3">
<input type="text" class="form-control" id="Telefono" placeholder="Telefono">
<label for="floatingInput">Telefono</label>
</div>
        <div class="form-floating mb-3">
  <input type="email" class="form-control" id="Correo" placeholder="name@example.com">
  <label for="floatingInput">Correo</label>
</div>

<div class="form-floating mb-3">
<input type="text" class="form-control" id="Representate" placeholder="Representate">
<label for="floatingInput">Nombre del Representate</label>
</div>

<div class="form-floating mb-3">
<input type="text" class="form-control" id="Direccion" placeholder="Direccion">
<label for="floatingInput">Direccion</label>
</div>

<button type="button" class="btn btn-primary">Matricular Alumno</button>

<button type="button" class="btn btn-secondary">Eliminar</button>
<button type="button" class="btn btn-success">Editar</button>
    </form>


   

    
</body>

</html>