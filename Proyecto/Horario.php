<!DOCTYPE html>
<html>
<head>
  <title>Horario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Horario.css">
</head>
<body>
  <?php
    echo '
    <ul>
      <li>
        <a href="#" target="_blank"><i class="fa fa-bars"></i></a>
        <ul class="dropdown">

          <li><a href="servicio.php">Servicio</a></li>
          <li><a href="Horario.php">Horarios</a></li>
          <li><a href="">Preguntas Frecuentes</a></li>
          <li><a href="#">Citas</a></li>
           <li><a href="#">Paquetes</a></li>

        </ul>
      </li>
      <li><a href="Inicio.php">Inicio</a></li>
      <li><a href="#">Contacto</a></li>
      <li><a href="Filo.php">Sobre Nosotros</a></li>

    </ul>
    <a href="#" class="logo">
        <img src="https://i.postimg.cc/br4YFVJ7/Proyecto.png" alt="Logo de la compañía">
    </a>
    ';

    include 'footer.php';

    echo '


<div class="Horario">
    <h1>Nuestro Horario:</h1>
</div>

</div>

    <h2 class="Horario1">
        <table>
            <tr>
            <th>Día</th>
            <th>Horario</th>
            </tr>
            <tr>
            <td>Lunes</td>
            <td>9:00 - 18:00</td>
            </tr>
            <tr>
            <td>Martes</td>
            <td>9:00 - 18:00</td>
            </tr>
            <tr>
            <td>Miércoles</td>
            <td>9:00 - 18:00</td>
            </tr>
            <tr>
            <td>Jueves</td>
            <td>9:00 - 18:00</td>
            </tr>
            <tr>
            <td>Viernes</td>
            <td>9:00 - 18:00</td>
            </tr>
            <tr>
            <td>Sábado</td>
            <td>10:00 - 16:00</td>
            </tr>
            <tr>
            <td>Domingo</td>
            <td>Cerrado</td>
            </tr>
            </table>
        </h2>
    </h2>
</div>


    ';

  ?>
</body>
</html>
