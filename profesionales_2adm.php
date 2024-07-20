<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Requiere iniciar sesión");
                window.location = "login.php";
            </script>
        ';
        session_destroy();
        die();
        
    }

    include 'php/obtenerdatos.php';
    
?>


<!DOCTYPE html>
<html lang="es">

<!--==========================

  PESTAÑA DE NOSOTROS   

  ============================-->


<head>
  <meta charset="utf-8">
  <title>Nosotros - Asesoramiento Juridico</title>
  <link rel="icon" type="image/png" href="img/logo_pestañas.png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <style>
    .login-button.cerra {
        background-color: #ff4d4d; /* Rojo para 'Cerrar Sesión' */
        color: white; /* Texto blanco */
    }
    .login-button.cuenta {
        background-color: #4CAF50; /* Verde para 'Mi cuenta' */
        color: white; /* Texto blanco */
    }
</style>

</head>


<body>
  
  <div id="preloader"></div>


  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo_bienvenida_transparente_2.png" alt="" title="" /></img></a>
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li><a href="index_adm.php">Inicio</a></li>
          <li><a href="profesionales_2adm.php">Nosotros</a></li>
          <li><a href="servicios_2adm.php">Servicios</a></li>
          <li><a href="ubicacion_2adm.php">Horario de Atención y Ubicación</a></li>
          <li><a href="mi_cuenta_adm.php">Gestionar reservaciones</a></li>
        <li><a href="mi_cuenta2.php" class="login-button cuenta">Mi cuenta</a></li>  
          <li><a href="php/cerrar_sesion.php" class="login-button cerra">Cerrar Sesion</a></li>



        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  
  <section id="team">

    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nuestro equipo de trabajo</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">En nuestro Estudio Jurídico, nos enorgullece contar con un equipo de profesionales apasionados, siempre listos para brindarte el mejor servicio</p>
        </div>
      </div>
<div class="row justify-content-center text-center">

        <div class="col-md-3 mx-auto">
          <div class="member">
            <div class="pic"><img src="img/perso1.jpg" alt=""></div>
            <h4></h4>
            <span></span>
            <div class="social">

            </div>
          </div>
        </div>
        
        <div class="col-md-3 mx-auto">
          <div class="member">
            <div class="pic"><img src="img/abogada_1.jpg" alt=""></div>
            <h4 style="font-size: 22px; color: #000000;">Gissela Moya</h4>
            <span style="font-size: 18px;">Abogada</span>
            <div class="social">
              <a href="https://wa.me/593994884368" target="_blank" style="color: rgb(0, 255, 0);"><i class="fa fa-whatsapp"></i></a>
              <a href="https://www.facebook.com/gissmoyag" target="_blank" style="color: rgb(34, 0, 255);"><i class="fa fa-facebook"></i></a>
            </div>
            <br>
            <button class="open-modal-btn" data-modal="myModal1">Mas Información</button>
          </div>
        </div>
        
        <div class="col-md-3 mx-auto">
          <div class="member">
            <div class="pic"><img src="img/abogada_2.jpg" alt=""></div>
            <h4 style="font-size: 22px; color: #000000;">Damaris Cortez</h4>
            <span style="font-size: 18px;">Abogada</span>
            <div class="social">
              <a href="https://wa.me/593995797598" target="_blank" style="color: rgb(0, 255, 0);"><i class="fa fa-whatsapp"></i></a>
              <a href="https://www.facebook.com/damaris.cortez.98" target="_blank" style="color: rgb(34, 0, 255);"><i class="fa fa-facebook"></i></a>
            </div>
            <br>
            <button class="open-modal-btn" data-modal="myModal2">Mas Información</button>
          </div>
        </div>
        
        <!-- Modal para Gissela Moya -->
        <div id="myModal1" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-img"><img src="img/abogada_1.jpg" alt=""></div>
            <div class="modal-info">
              <h4>Gissela Moya</h4>
              <span>Abogada</span>
              <div class="info-box">
                <p style="font-size: 17px; font-weight: bold; color: #000000; ">Estudios:</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64); ">UNIVERSIDAD TECNICA PARTICULAR DE LOJA</p>
                <p style="font-size: 17px; font-weight: bold; color: #000000; ">Meritos Profesionales:</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64); ">- DERECHO PENAL Y PRACTICA PROCESALPENAL</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64); ">- DIPLOMADO INTERNACIONAL EN DERECHO CONSTITUCIONAL</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64); ">- CONGRESO DE DERECHO HUMANOS, TRATADOS</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64); ">- CONGRESO NACIONAL DE VIOLENCIA DE GENERO</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64); ">- CONGRESO NACIONAL DE DERECHO NOTARIAL Y MEDIACION</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64); ">- CONGRESO EN CRIMINALISTICA Y CRIMINOLOGIA</p>
              </div>
              <div class="social">
                <a href="https://wa.me/593994884368" target="_blank" style="color: rgb(0, 255, 0);"><i class="fa fa-whatsapp"></i></a>
                <a href="https://www.facebook.com/gissmoyag" target="_blank" style="color: rgb(34, 0, 255);"><i class="fa fa-facebook"></i></a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal para Damaris Cortez -->
        <div id="myModal2" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-img"><img src="img/abogada_2.jpg" alt=""></div>
            <div class="modal-info">
              <h4>Damaris Cortez</h4>
              <span>Abogada</span>
              <div class="info-box">
                <p style="font-size: 17px; font-weight: bold; color: #000000; ">Estudios:</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64);">UNIVERSIDAD TECNICA DE AMBATO</p>
                <p style="font-size: 17px; font-weight: bold; color: #000000; ">Meritos Profesionales:</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64);">- CONGRESO DE ACTUALIZACION AL COIP, CRIMINOLOGIA</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64);">- ASISTENTE JURÍDICA/ABOGADA</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64);">- ABOGADA EN LIBRE EJERCICIO (Especialización Herencias)</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64);">- DIPLOMADO INTERNACIONAL EN DERECHO CONSTITUCIONAL</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64);">- CONGRESO EN CRIMINALISTICA, CRIMINOLOGIA Y TRANSITO</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64);">- DERECHO CONTEMPORÁNEO</p>
                <p style="font-size: 15px; font-weight: bold; color: rgb(64, 64, 64);">- SECRETARIA/ASESORA JURÍDICA</p>
              </div>
              <div class="social">
                <a href="https://wa.me/593995797598" target="_blank" style="color: rgb(0, 255, 0);"><i class="fa fa-whatsapp"></i></a>
                <a href="https://www.facebook.com/damaris.cortez.98" target="_blank" style="color: rgb(34, 0, 255);"><i class="fa fa-facebook"></i></a>
              </div>
            </div>
          </div>
        </div>
 <!--==========================
  EJECUCION DE VENTANAS EMERGENTES PARA VER MAS INFORMACION DE LOS ABOGADOS
  ============================-->

<script>
          // Obtener todos los botones que abren modales
var btns = document.querySelectorAll(".open-modal-btn");

// Función para abrir el modal correspondiente
function openModal() {
  var modalId = this.getAttribute("data-modal");
  var modal = document.getElementById(modalId);
  modal.style.display = "block";
}

// Asignar evento a cada botón
btns.forEach(function(btn) {
  btn.onclick = openModal;
});

// Obtener todos los elementos <span> que cierran los modales
var spans = document.querySelectorAll(".close");

// Función para cerrar el modal
function closeModal() {
  this.parentElement.parentElement.style.display = "none";
}

// Asignar evento a cada <span>
spans.forEach(function(span) {
  span.onclick = closeModal;
});

// Cerrar el modal si el usuario hace clic fuera de él
window.onclick = function(event) {
  if (event.target.classList.contains("modal")) {
    event.target.style.display = "none";
  }
}
</script>
        
        
        


        <div class="col-md-3 mx-auto ">
          <div class="member">
            <div class="pic"><img src="img/perso2.jpg" alt=""></div>
            <h4></h4>
            <span></span>
            <div class="social">

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

   <!--==========================
  Testimonials Section
  ============================-->
  <!--==========================
    /* SECCIÓN PARA COMENTARIOS AUN NO DISPONIBLE */
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Testimonio de nuestros usuarios</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">La calidad de nuestro servicio habla por nosotros y nuestros clientes satisfechos son la prueba de esto</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/cliente2.jpg" alt=""></div>
            <h4>Katherine Castillo </h4>
            <span>Estudiante ESPOCH </span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b>¡Increíble experiencia con NasiTapia S.A.! La plataforma de rutas de transporte público es mi salvadora diaria. Ahora, encontrar la mejor manera de llegar a mi destino es tan fácil como un clic. ¡Gracias por hacer que mi viaje diario sea mucho más eficiente y conveniente!  <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b>Después de muchos años viviendo en Riobamba, encontré en NasiTapia S.A. una herramienta invaluable. Aunque conozco la ciudad, la información actualizada sobre las rutas de transporte público me ha ahorrado tiempo y ha simplificado mi día a día. ¡Una gran adición para residentes como yo que valoramos la eficiencia y la comodidad!<small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/person3.jpg" alt=""></div>
            <h4>Jenna Ortega</h4>
            <span>Estudiante UNACH</span>
          </div>
        </div>
      </div>

    </div>
  </section>
   ============================-->




   <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Noticias y Novedades Legales</h3>
          <div class="section-title-divider"></div>
          <p class="section-description", style="font-size: 18px;">Mantente informado sobre las últimas noticias y acontecimientos relacionados al mundo judicial</p>
        </div>
      </div>


        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/noticia_1.jpg);" href="https://www.eluniverso.com/noticias/politica/cambios-para-segundo-debate-del-proyecto-de-ley-de-seguridad-digital-en-ecuador-preocupa-a-gremios-nota/" target="_blank">
            <div class="details">
              <h4>Proyecto de ley de Seguridad Digital </h4>
              <span>¿Qué preocupa a los gremios?</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/noticia_2.jpg);" href="https://insightcrime.org/es/noticias/elites-criminales-tuercen-leyes-eludir-justicia-ecuador/" target="_blank">
            <div class="details">
              <h4>¿Cómo las élites criminales manipulan las leyes para eludir la justicia en Ecuador?</h4>
              <span>Ecuador en una batalla contra el crimen</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/noticia_3.jpg);" href="https://insightcrime.org/es/noticias/caso-metastasis-destapa-cancer-corrupcion-ecuador/" target="_blank">
            <div class="details">
              <h4>El caso Metástasis destapa el cáncer de la corrupción en Ecuador</h4>
              <span>La corrupción manchando al país</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/noticia_4.jpg);" href="https://www.prensa-latina.cu/2024/05/08/iva-bajara-al-ocho-por-ciento-en-proximo-feriado-en-ecuador/" target="_blank">
            <div class="details">
              <h4>IVA bajará al ocho por ciento en próximo feriado en Ecuador</h4>
              <span>Del 15% al 8%</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Estudio Jurídico - Asesoria Legal Integral</strong>. All Rights Reserved
          </div>
          <div class="credits">

          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1142053847830194"
       crossorigin="anonymous"></script>
       <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1142053847830194"
            crossorigin="anonymous"></script>

          </body>

</html>
