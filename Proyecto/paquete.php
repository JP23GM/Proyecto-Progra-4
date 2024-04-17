<!DOCTYPE html>
<html>
<head>
  <title>Servicios</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="paquete.css">
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
          <li><a href="paquete.php">Paquetes</a></li>

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
      
        </div>
        <div class="pie">
            <h1>Premium</h1>

            <p>de lavado y encerado</p>
              <p>de lavado y encerado</p>


        </div>
    </div>




    <div class="galeria">
        <div class="foto">
            <h1>Básico</h1>


  <p>de lavado y encerado</p>
            

        </div>
        <div class="pie">
        
        </div>
    </div>



    ';



  ?>
</body>
</html>
