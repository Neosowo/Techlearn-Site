<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

include 'php/conexion_be.php';

$usuario = $_SESSION['usuario'];

$query = "SELECT nombre_completo FROM usuarios WHERE usuario = '$usuario'";

$resultado = mysqli_query($conexion, $query);

$row = mysqli_fetch_array($resultado);


mysqli_close($conexion);
?>

<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/homestyles.css">
    <link rel="stylesheet" href="css/code.css">
    <link rel="stylesheet" href="css/footer.css">
    <meta charset="UTF-8">
    <link rel="icon" href="logo/ico.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
		body {
			background-color: white;
			color: black;
		}
		
		body.dark-mode {
			background-color: black;
			color: white;
		}
	</style>
    </head>
<body>
<script>

var darkMode = localStorage.getItem('darkMode');

if (darkMode === 'enabled') {
  document.body.classList.add('dark-mode');
}
</script>
  <div class="sidebar">
    <div class="logo-details">
        <div class="image-text">
            <span class="image">
                <img  src="logo/ico.ico" type="logo">

            </span>
        </div>
        <div class="logo_name" id="btn">TechLearn</div>
    </div>
    <ul class="nav-list">

    <li>
        <a class="toolmg" href="home.php">
          <i class='bx bx-grid-alt'></i>
          <p><span class="links_name">Home</span></p>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
      <a class="toolmg" href="blog.php">
           <i class='bx bxs-chat' ></i>
             <span class="links_name">Blog</span>
           </a>
           <span class="tooltip">Blog</span>
         </li>
      <li>
       <a target="_blank" class="toolmg" href="https://github.com/Neosowo">
        <i class='bx bx-code'></i>
         <span class="links_name">Developer</span>
       </a>
       <span class="tooltip">Developer</span>
     </li>

<li class="deslog">
  <a class="toolmg" href="php/cerrar_sesion.php">
      <i class="bx bx-log-out icon"></i>
      <span class="links_name">Logout</span>
  </a>
  <span class="tooltip">Logout</span>
</li>


<li class="xd"onclick="toggleDarkMode()" >
  <a class="toolmg">
      <i class="" id="dark-mode-button"></i>
      <span class="links_name">Mode</span>
  </a>
  <span class="tooltip">Mode</span>
</li>


</ul>
  </div>

 
  <section class="home-section">
      <p><div class="text"><a href="home.php">Home</a><i class='bx bx-chevron-right bx-xs' ></i> Diseño Web  </p>
      </div>
      <section class="text-section">

      <h3>Diseño Web Responsivo</h3>
<p>El diseño web responsivo se ha convertido en una práctica esencial en la era de la tecnología moderna. Su origen se remonta a la necesidad de adaptar los sitios web a la creciente variedad de dispositivos y tamaños de pantalla utilizados para acceder a Internet. A medida que los teléfonos inteligentes y las tabletas ganaron popularidad, surgió la necesidad de crear sitios web que fueran amigables con estos dispositivos móviles.</p>
<p>En la actualidad, el diseño web responsivo se logra mediante el uso de CSS media queries y unidades de medida flexibles, permitiendo que los sitios web se adapten de manera dinámica al tamaño de la pantalla del usuario.</p>

<img src="https://appdesign.dev/wp-content/uploads/2017/12/páginas-web-en-responsive.png" class="responsiveimg">

<h3>Diseño de Interfaz de Usuario (UI)</h3>
<p>La Interfaz de Usuario, o UI, es la parte visible y tangible de un sitio web o aplicación que los usuarios interactúan directamente. Incluye la disposición de elementos como botones, menús, campos de entrada y elementos de navegación, así como la elección de colores, tipografía e imágenes.</p>
<p>El diseño de UI se enfoca en crear una experiencia atractiva y fácil de usar para los usuarios, colaborando estrechamente con los diseñadores de UX (Experiencia de Usuario) para garantizar la intuición y eficacia en la navegación del usuario.</p>


<img src="data:image/jpeg;base64,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" class="responsiveimg">

<h3>Diseño de Experiencia de Usuario (UX)</h3>
<p>El Diseño de Experiencia de Usuario, o UX, va más allá de la apariencia visual y se centra en la usabilidad, la navegación y la arquitectura de la información al interactuar con un sitio web o aplicación.</p>
<p>Los diseñadores de UX buscan comprender las necesidades y expectativas de los usuarios, diseñando el flujo de navegación de manera intuitiva y eficiente para aumentar la satisfacción del usuario, la retención y la conversión.</p>

<h3>Diseño Gráfico Web</h3>
<p>El Diseño Gráfico Web se centra en la creación de elementos gráficos para sitios web, como logotipos, iconos, ilustraciones y gráficos. Utilizando herramientas como Adobe Photoshop e Illustrator, los diseñadores gráficos web mejoran la estética y la identidad visual de un sitio.</p>
<p>Además de los aspectos estéticos, los diseñadores gráficos web deben considerar la legibilidad, la coherencia y la accesibilidad de los elementos gráficos en el contexto del diseño general del sitio web.</p>

<h3>Desarrollo Front-End</h3>
<p>El Desarrollo Front-End se refiere a la codificación y programación de la parte visible de un sitio web con la que los usuarios interactúan, utilizando HTML para la estructura, CSS para el estilo y JavaScript para la interactividad.</p>
<p>Los desarrolladores front-end trabajan en colaboración con los diseñadores para traducir el diseño visual en código funcional, asegurándose de que el sitio web se vea y funcione como se espera, con énfasis en la optimización de velocidad, compatibilidad entre navegadores y accesibilidad.</p>
<img src="https://kinsta.com/es/wp-content/uploads/sites/8/2021/12/front-end-developer-1024x512.png
" class="responsiveimg">


<h3>Diseño de Comercio Electrónico</h3>
<p>El Diseño de Comercio Electrónico se centra en la creación de sitios web para la venta de productos o servicios en línea, incluyendo catálogos, carritos de compra y procesos de pago seguros.</p>
<p>El diseño de comercio electrónico busca fomentar la confianza del cliente, facilitar la búsqueda y la navegación de productos, y garantizar una experiencia de compra sin problemas, destacando imágenes de productos, descripciones detalladas y opciones de seguridad.</p>

<h3>Diseño de Blogs</h3>
<p>El Diseño de Blogs se enfoca en la presentación efectiva de contenido en formato de blog, organizando artículos, categorías, etiquetas y comentarios para mejorar la experiencia de lectura y navegación de los usuarios.</p>
<p>Utilizando plantillas y diseños que destacan las publicaciones más recientes y populares, el diseño de blogs prioriza la legibilidad y la facilidad de navegación para ayudar a los usuarios a consumir y explorar el contenido de manera eficiente.</p>

<h3>Diseño de Portafolios en Línea</h3>
<p>El Diseño de Portafolios en Línea se refiere a la creación de sitios web que muestran proyectos y trabajos de diseñadores, artistas y profesionales creativos. Estos portafolios en línea actúan como una vitrina de las habilidades y experiencias de los individuos.</p>
<p>El diseño se centra en presentar proyectos de manera atractiva, utilizando imágenes de alta calidad, descripciones detalladas y ejemplos visuales que destacan las capacidades del creador. Además, la navegación y la estructura del portafolio son críticas para permitir a los visitantes explorar y conocer mejor el trabajo presentado.</p>



<img src="https://www.hostinger.es/tutoriales/wp-content/uploads/sites/7/2023/11/Website-Development-alt-1.webp" class="responsiveimg">




      </div>
  
</section>
  </section>

<script>
  let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");
closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();
});
searchBtn.addEventListener("click", ()=>{ 
  sidebar.classList.toggle("open");
  menuBtnChange(); 
});

function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
 }
}


function toggleDarkMode() {
  var section = document.querySelector(".home-section");
  var button = document.querySelector("#dark-mode-button");
  var root = document.querySelector(":root");

  if (section.style.backgroundColor === "rgb(18, 18, 18)") {

    section.style.backgroundColor = "#fff";
    section.style.color = "#1d1b31"; 

    button.innerHTML = '<i class="bx bxs-toggle-right bx-sm"></i> ';
    localStorage.setItem("darkMode", "false"); 
  } else {
    section.style.backgroundColor = "rgb(18, 18, 18)";

    section.style.color = "#fff"; 
    button.innerHTML = '<i class="bx bxs-toggle-left bx-sm"></i>';
    localStorage.setItem("darkMode", "true"); 
  }
}


document.addEventListener("DOMContentLoaded", function() {
    var darkMode = localStorage.getItem("darkMode"); // Obtener preferencia del usuario
    var section = document.querySelector(".home-section");
    var button = document.querySelector("#dark-mode-button");
  
    if (darkMode === "true") {
      // Modo oscuro
      section.style.backgroundColor = "rgb(18, 18, 18)";
      section.style.color = "#fff";  // Cambia el color del texto
      button.innerHTML = '<i class="bx bxs-toggle-left bx-sm"></i>';
    } else {
      // Modo claro
      section.style.backgroundColor = "#fff";
      section.style.color = "#1d1b31";  // Cambia el color del texto, no blanco del todo
      button.innerHTML = '<i class="bx bxs-toggle-right bx-sm"></i> ';
    }
  });
  

</script>
  <script src="js/darkmode.js"></script>
  <script src="js/configuser.js"></script>

</body>
<footer style="background-color: #0b0b0b; color: #fff; padding: 1px 0;">

  <hr style="border-color: #fff;">
  <div class="row">
    <div style="display: flex; align-items: center; justify-content: center; ">
      <img src="logo/ico.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 10px;">
      <p id="note-animation">TechLearn</p>
    </div>
    <div style="display: flex; align-items: center; justify-content: center; ">
      <p id="credithome" style="font-size: 14px; margin-top: 5px; ">© 2023 Developed by Neos</p>
    </div>
  </div>
</div>
</footer>

</html>