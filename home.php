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



    .popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 999;
    justify-content: center;
    align-items: center;
}

.popup-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    position: relative;
}

.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
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



     <li class="xd" onclick="toggleDarkMode()" >
        <a class="toolmg">
            <i class="" id="dark-mode-button"></i>
            <span class="links_name">Mode</span>
        </a>
        <span class="tooltip">Mode</span>
    </li>




 
    </ul>
  </div>
  <div id="popup-container" class="popup">
    <div class="popup-content">
        <span class="close-button" id="close-button">&times;</span>
        <h2>¡Versión Alpha 4.109 Ahora Disponible!</h2>
        <ul style="padding-left: 10px;">
          <li>Se añade blog</li>
          <li>Arreglo de bugs</li>
          <li>Mejora de estilos</li>
        </ul>
    </div>
</div>

<script src="script.js"></script>

  <section class="home-section">
  <div class="text" >Bienvenido/a, <strong><?php echo $usuario; ?></strong></div>

      <div class="menu-container">
        <div class="menu-section">
          <img src="logo/redes.webp" loading="lazy">
          <h2>Redes</h2>
          <a href="redes.php"><button class="redes">Ver</button></a>
        </div>
        <div class="menu-section">
          <img src="logo/image.webp"  loading="lazy">
          <h2>Soporte</h2>
          <a href="soporte.php"><button class="sup">Ver</button></a>
        </div>
     
        <div class="menu-section">
          <img src="logo/diseñoweb.webp"  loading="lazy">
          <h2>Diseño Web</h2>
          <a href="diseñoweb.php"><button class="dw">Ver</button></a>
        </div>
        <div class="menu-section">
          <img class="bordercodeimg" src="logo/code.png"  loading="lazy">
          <h2>Programación</h2>
          <a href="programacion.php"> <div class="box"><button class="sup">Ver</button></div></a>
        </div>

      </div>
  
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
  


  
function showPopup() {
    const popup = document.getElementById("popup-container");
    popup.style.display = "block";
}


function closePopup() {
    const popup = document.getElementById("popup-container");
    popup.style.display = "none";
}


if (localStorage.getItem("popupShown") !== "true") {
    showPopup();
}

document.getElementById("close-button").addEventListener("click", function() {
    closePopup();

    localStorage.setItem("popupShown", "true");
});


  

  </script>
       <script src="js/darkmode.js"></script>
       <script src="js/configuser.js"></script>
       <script src="js/lazy.js"></script>

</body>
<footer style="background-color: #0b0b0b; color: #fff; padding: 1px 0;">

  <div class="row" style="margin-top: 14px; margin-bottom: 15px;">
    <div style="display: flex; align-items: center; justify-content: center; ">
      <img src="logo/ico.png" alt="Logo" style="width: 40px; height: 40px; margin-right: 10px; ">
      <p id="note-animation">TechLearn</p>
    </div>
    <div style="display: flex; align-items: center; justify-content: center; ">
      <p id="credithome" style="font-size: 12px; margin-top: 5px; ">© 2023 Developed by Neo</p>
    </div>
  </div>

</footer>


</html>