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
    <title>Soporte</title>
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
      <p><div class="text"><a href="home.php">Home</a><i class='bx bx-chevron-right bx-xs' ></i> Soporte  </p>

      </div>
      <section class="text-section">
      <h1>Hardware y Componentes de Computadoras</h1>


<h2 style="font-size: 16px;">Soluciones de Problemas de Hardware</h2>
<img src="https://alquilerdecomputadores.co/wp-content/uploads/2019/11/Enmascarar-grupo-159.png" class="responsiveimg">
<ul>
  <li>Reiniciar el dispositivo</li>
  <p>A veces, un simple reinicio puede solucionar problemas temporales. Si experimentas problemas con tu computadora, la primera medida que debes tomar es reiniciarla. Esto puede resolver problemas menores y restaurar el funcionamiento normal del sistema.</p>
</ul>

<ul>
  <li>Verificar las conexiones</li>
  <p>Asegúrate de que todos los cables estén correctamente conectados. Esto incluye cables de alimentación, cables de video, conexiones USB, etc. Las conexiones sueltas o incorrectas pueden causar problemas de hardware, por lo que es importante verificar y asegurar todas las conexiones de tu computadora.</p>
</ul>

<ul>
  <li>Revisar el suministro de energía</li>
  <p>Asegúrate de que el dispositivo esté recibiendo suficiente energía y que la fuente de alimentación esté funcionando correctamente. Si tu computadora no recibe la energía adecuada, puede experimentar fallas y problemas de funcionamiento.</p>
</ul>

<ul>
  <li>Realizar pruebas de hardware</li>
  <p>Si es posible, prueba el hardware en otro dispositivo o prueba con hardware conocido y funcional en el dispositivo problemático. Esto te ayudará a determinar si el problema está en el componente en sí o en el sistema. Realizar pruebas de hardware es una forma efectiva de identificar componentes defectuosos.</p>
</ul>

<ul>
  <li>Verificar las luces indicadoras</li>
  <p>Muchos dispositivos tienen luces indicadoras que pueden proporcionar pistas sobre el estado del hardware. Observa las luces indicadoras en tu computadora para identificar posibles problemas. Por ejemplo, una luz de encendido parpadeante puede indicar un problema de alimentación.</p>
</ul>

<ul>
  <li>Actualizar los controladores</li>
  <p>Asegúrate de que los controladores del hardware estén actualizados. Puedes hacer esto a través del administrador de dispositivos en Windows o el equivalente en otros sistemas operativos. Mantener los controladores actualizados es importante para garantizar el funcionamiento adecuado de tus dispositivos.</p>
</ul>

<img src="https://hardzone.es/app/uploads-hardzone.es/2022/02/Luces-LED-Placa-Base.jpg" class="responsiveimg">


<ul>
  <li>Realizar un diagnóstico de hardware</li>
  <p>Algunos sistemas tienen herramientas de diagnóstico incorporadas que pueden identificar problemas de hardware. Consulta el manual del usuario o el sitio web del fabricante para obtener más información. El diagnóstico de hardware puede proporcionar información detallada sobre el estado de tus componentes.</p>
</ul>

<ul>
  <li>Verificar la temperatura</li>
  <p>El sobrecalentamiento puede causar problemas de hardware. Asegúrate de que los ventiladores estén funcionando correctamente y de que no haya obstrucciones en las salidas de aire. Monitorea la temperatura de tu computadora y toma medidas para evitar el sobrecalentamiento.</p>
</ul>

<ul>
  <li>Realizar una limpieza física</li>
  <p>A veces, el polvo y la suciedad pueden acumularse en los componentes y causar problemas. Limpia el interior de la computadora con aire comprimido si es posible. La limpieza regular de tu computadora puede prevenir problemas causados por la acumulación de polvo.</p>
</ul>

<ul>
  <li>Realizar una prueba de memoria (RAM)</li>
  <p>Si sospechas que la RAM puede ser el problema, puedes utilizar herramientas como MemTest86 para verificar la integridad de tus módulos de RAM. Los problemas de memoria pueden causar bloqueos y errores en tu sistema, por lo que es importante verificar la RAM.</p>
</ul>

<img src="https://es.digitaltrends.com/wp-content/uploads/2023/10/cuanta-memoria-ram-es-necesaria.jpeg?p=1" class="responsiveimg">

<ul>
  <li>Verificar los discos duros o SSD</li>
  <p>Utiliza herramientas de diagnóstico de disco como CHKDSK en Windows o Disk Utility en macOS para buscar y corregir errores en los discos. Los problemas en los discos duros o SSD pueden causar pérdida de datos y problemas de rendimiento.</p>
</ul>

<img src="https://www.mouser.ec/images/marketingid/2021/img/126678010.png?v=070223.0223" class="responsiveimg">
<ul>
  <li>Actualizar el firmware del BIOS/UEFI</li>
  <p>Asegúrate de que el firmware del sistema esté actualizado. Actualizar el firmware puede mejorar la compatibilidad y la estabilidad de tu computadora. Consulta el sitio web del fabricante para obtener las últimas actualizaciones.</p>
</ul>

<ul>
  <li>Consultar el manual o el soporte técnico del fabricante</li>
  <p>Si los pasos anteriores no solucionan el problema, es posible que necesites consultar el manual del usuario o comunicarte con el soporte técnico del fabricante para obtener ayuda específica. Los fabricantes suelen ofrecer asistencia técnica para resolver problemas más complejos.</p>
</ul>




      </section>
  
  </section>


  <script src="js/darkmode.js"></script>
  <script src="js/configuser.js"></script>
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