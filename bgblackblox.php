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
    <title>Programación</title>
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

      <p><div class="text"><a href="blog.php">Blog</a>  </p>
</div>
<section class="text-section">
      <h1>Blackbox: qué es y qué herramientas ofrece esta inteligencia artificial que te ayuda a programar completando código</h1>
      <p>Vamos a explicarte qué es y cómo funciona Blackbox, un recurso de inteligencia artificial que te ayuda a complicar el código de programación. Sistemas de IA como ChatGPT no suelen ser fiables a la hora de generar código, pero este recurso ha sido afinado específicamente para esto.</p>

<p>Vamos a empezar intentando explicarte de una manera sencilla qué es exactamente Blackbox, una buena alternativa a otros recursos como GitHub Copilot. Y luego, vamos a pasar a explicarte cuáles son las principales funciones que tiene esta herramienta.</p>

<h2>Qué es Blackbox</h2>
<h3>Autocompletado</h3>
<p>Blackbox es una herramienta de inteligencia artificial que te ayuda a encontrar y usar fragmentos de código de una manera eficiente. Así, según un programador está trabajando, tendrá sugerencias para poder completar las tareas que está realizando.</p>

<p>Por lo tanto, esta IA no va a escribir código por ti. Simplemente va a hacer un seguimiento de lo que estás programando, y te lanzará ejemplos y sugerencias para ayudarte a terminar los fragmentos de código del programa en el que estás trabajando.</p>

<p>Esta herramienta ofrece distintas funciones para programadores. Por lo tanto, no es tanto un programa dirigido a una finalidad completa, sino una navaja suiza con varias soluciones basadas en inteligencia artificial para ayudar a programadores.</p>

<p>Blackbox tiene soporte para más de 20 lenguajes de programación. Entre ellos se incluyen los más populares, como Python, JavaScript, TypeScript, Go o Ruby entre otros. Esto te da bastante flexibilidad a la hora de usarlo, y con sus funciones te ayudará tanto a aprender a programar como a agilizar tus procesos.</p>

<p>Por último, debes saber que Blackbox es una herramienta de pago, que ofrece tres suscripciones diferentes. La primera es la de estudiantes, que cuesta 4 dólares al mes con 1.000 autocompletados y 1.000 preguntas al chat. Luego, tienes la versión PRO de 8 dólares al mes, y la de equipos de 10 dólares al mes.</p>

<h2>Qué herramientas ofrece</h2>
<h3>Chat IA</h3>
<p>La primera de has herramientas que ofrece Blackbox es la del autocompletado de código. Con esta herramienta, tendrás las sugerencias para completar el código que estés realizando, sugiriéndote maneras de autocompletar el elemento en el que estás.</p>

<p>Blackbox también tiene un chat de inteligencia artificial. Se trata de una especie de ChatGPT al que le puedes hacer preguntas relacionadas con programación y código. Vamos, que en vez de buscar cosas en Internet para el código en el que estás trabajando, puedes hacerle preguntas o pedirle ejemplos a una IA.</p>

<p>También tienes sus Readme generator y AI Commit. Estos te ayudan en primer lugar a crear un archivo Readme para tu código, y también a generar mensajes en los que explicas qué cambios has hecho en un código en el caso de que estés trabajando de forma colaborativa.</p>

<p>Otra de las herramientas es el Diff. Lo que hace es monitorizar a nivel local todos los cambios que haces en el código. A nivel local quiere decir que no se envía información a los servidores de la empresa. ¿Y para qué? Pues para poder deshacer los cambios que quieras y volver a versiones anteriores de tu código.</p>

<p>La UE prepara una regulación de tres niveles para la IA: cuanto más potente, más estrictas serán las limitaciones</p>

<h2>Cómo funciona Blackbox</h2>
<p>Lo primero que tienes que hacer para usar Blackbox es registrarte en su página web, que es useblackbox.io. Una vez dentro, verás los distintos planes que ofrece, y elegirás uno de ellos pudiendo recurrir a su prueba gratuita.</p>

<p>Luego, la función de chat puedes utilizarla directamente desde la web, por lo que la experiencia en este caso es similar a ChatGPT. Para lo demás, vas a poder descargar su extensión para el navegador que quieras, o integrarlo en tu IDE favorito, como Visual Studio Code.</p>

<p>Cuando tengas bajada la extensión y configurada su integración con la IDE que hayas elegido, entonces ya podrás empezar a utilizar los recursos de esta plataforma. Cuando estés programando, podrás usar su cuadro de búsqueda para ver recomendaciones y sugerencias de código, y con solo pulsar en uno se copiará en el portapapeles.</p>
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