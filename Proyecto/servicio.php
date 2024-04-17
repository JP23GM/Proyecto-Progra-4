<!DOCTYPE html>
<html>
<head>
  <title>Servicios</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="servicio.css">
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

    <h1>Servicios Brindados</h1>
    <h1>Black & White Lavacar</h1>
    <div class="galeria">
        <div class="foto">
            <img src="https://i.postimg.cc/2j91Z2zF/encerado.png" alt="">
        </div>
        <div class="pie">
            <p>Servicio</p>
            <p>de lavado y encerado</p>
        </div>
    </div>

    <div class="galeria">
        <div class="foto">
            <img src="https://i.postimg.cc/SRPjbNZt/aspirado.jpg" alt="">
        </div>
        <div class="pie">
            <p>Aspirado</p>
        </div>
    </div>

    <div class="galeria">
        <div class="foto">
            <img src="https://i.postimg.cc/7hhbRTN2/Interiores.jpg" alt="">
        </div>
        <div class="pie">
            <p>Detallado</p>
            <p>de interiores</p>
        </div>
    </div>


    <div class="galeria">
        <div class="foto">
            <img src="https://i.postimg.cc/BZzv6bgm/restaurado.jpg" alt="">
        </div>
        <div class="pie">
            <p>Detallado</p>
            <p>de partes negras</p>
        </div>
    </div>

    ';

  ?>
</body>
</html>
