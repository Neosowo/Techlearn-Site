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

      <p><div class="text"><a href="blog.php">Blog</a></div>  </p>
</div>
<section class="text-section">
      <h1>Lenguajes de programación</h1>

      <p>Marijus Briedis, CTO de Nord Security, comparte sus inicios, desde desmontar computadoras en su infancia hasta liderar el equipo técnico de NordVPN. La empresa, valuada en 3.000 millones de dólares, surgió cuando los fundadores notaron la creciente vigilancia en Internet y la falta de soluciones de ciberseguridad fáciles de usar. Optaron por las VPN sobre los antivirus, buscando una solución accesible. NordVPN, una VPN sin registros y con encriptación sólida, se destaca en auditorías externas.</p>

<p>Briedis destaca la importancia de la privacidad en el contexto del "capitalismo de vigilancia", donde las empresas usan datos para cambiar el comportamiento. NordVPN actúa como barrera, evitando rastreo y publicidad personalizada. Briedis insta a usar VPNs constantemente, especialmente en redes públicas. Aboga por la conciencia cibernética, actualizaciones frecuentes, cambio de contraseñas y precaución en el comportamiento en línea. NordVPN, con énfasis en seguridad, busca integrar inteligencia artificial y machine learning para combatir amenazas futuras. Briedis comparte su preferencia por Firefox, evita Google y destaca la seguridad de iOS.</p>
<p>Lo primero que hizo cuando le regalaron su primer ordenador, un Pentium III con Windows 95, fue abrirlo, desmontarlo por completo y colocar todas las piezas por su habitación. Cuando su padre entró y vio aquella postal, se llevó las manos a la cabeza. "Mi mayor error fue quitar la CPU sin tener pasta térmica para pegarla de vuelta", dice con una sonrisa pícara Marijus Briedis, quien a día de hoy es el CTO de Nord Security, una empresa de ciberseguridad valorada en 3.000 millones de dólares.</p>

<p>De él depende el equipo técnico de NordVPN, el mayor proveedor de VPN para particulares del mundo. Desde luego, no dejó de lado su parte nerd en la infancia; en la actualidad lee código de programación como pasatiempo y en un fin de semana cualquiera le encontrarás haciendo experimentos en su casa, como crear su propio sistema operativo desde cero.</p>

<p>También cree que las grandes empresas utilizan nuestros datos no solo con fines comerciales, sino también para cambiar nuestro comportamiento, lo que la socióloga Shoshana Zuboff llamó "capitalismo de vigilancia" en su libro sobre este concepto.</p>

<p>Hablamos con él.</p>

<h2>¿Por qué montar una empresa de VPN y no de antivirus?</h2>
<p>Los dos fundadores de Nord Security, Tom Okman y Eimantas Sabaliauskas, crearon en 2012 una empresa cuando todavía eran estudiantes. Además, eligieron el negocio de las VPN. ¿Por qué?</p>

<p>En aquella época estaban viajando mucho, y se fijaron en todo lo que estaba pasando con Internet, básicamente la llegada de más vigilancia. Internet está cada vez más compartimentado, con más silos, y no había una solución de ciberseguridad, una que fuera fácil de usar, por lo que decidieron darle una oportunidad, y todo comenzó con un archivo de configuración de Windows, el método geek, pero después de un año ya tenían un equipo con un especialista aquí en Lituania y empiezan a construir aplicaciones, y así fueron llegando las aplicaciones para Windows, iOS y Android y todo comenzó a moverse desde allí.</p>

<p>Sí, pero en aquella época quizá lo que estaba de moda en ciberseguridad eran los antivirus. ¿por qué no apostaron por una empresa de antivirus?</p>

<p>Vieron que Internet se estaba dividiendo en islas y cada vez había más vigilancia, y pensaron que una VPN era mejor solución que un antivirus. Recuerdo cuando nos contaron la historia sobre una investigación de mercado que hicieron. Creían que habría unas 50 empresas de VPN en el mundo en aquella época, en el año 2012, pero luego se dieron cuenta de que había varias miles de ellas, así que ya había bastante competencia, pero ninguna tenía una marca fuerte detrás, así que el objetivo fue hacer una VPN mejor y más fácil de usar, que fuera hacer click y listo.</p>

<h2>¿Tienes alguna pregunta o comentario para Marijus Briedis?</h2>
<p>Fui el empleado 60 cuando llegué a la empresa. Ahora somos más de 2.000. El caso es que la cultura cuando empecé era cumplir nuestros objetivos, y eso sigue siendo así y define nuestros valores, que son sencillos, como comunicación honesta: si hay algo mal, di que está mal, sin suavizarlo.</p>

<p>También somos inquietos, nos gusta experimentar, trabajar y llegar a los objetivos que nos planteamos. Por supuesto, también somos algo geeks. La mayor parte de la gente sabe lo que hace en su área, son especialistas. A mí, por ejemplo, me encantan las redes computacionales y la ciberseguridad, así que es ideal para mí porque justo trabajo con ambas cosas.</p>

<p>Si yo contrato a un manager de programación, busco a alguien que sepa escribir código.</p>

<h2>¿Es por eso que en tus ratos libres lees código de programación?</h2>

<p>Claro, sigo siendo un ingeniero de corazón. Cuando pasas de ser un trabajador individual a un puesto de gestión, dejas de trabajar con tus manos. Tu tarea principal es asegurarte de que tienes al mejor equipo, el mejor talento y trabajar con ello. Pero echo de menos picar código.</p>

<p>Por ejemplo, ahora está de moda Carbon de Google, así que me gusta experimentar con él. O hace unos años con Rust.</p>

<p>Pero si es para el trabajo, ¿no podrías hacerlo en horas de trabajo?</p>

<p>Oh, tengo unas dos horas laborales cada semana asignadas para eso, para aprender y leer sobre tecnología e innovación, pero creo que es bueno para mí enfrentarme a un código y seguir trasteando con mis manos. Cuando hablo con mis ingenieros jefes o responsables técnicos, necesito entender la tecnología, y esto me ayuda. Quizá no hace falta que sea tan en profundidad a veces, pero si me ensucio las manos es más fácil proponer ideas y encontrar soluciones a problemas.</p>

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