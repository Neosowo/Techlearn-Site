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
      <h1>Tras el éxito de ChatGPT, OpenAI se enfrenta a su reto más difícil: sobrevivir económicamente</h1>

      <p>Desde que ChatGPT diera con la veta de la inteligencia artificial generativa, en menos de un año gran parte del sector tecnológico se ha lanzado a perseguir la nueva fiebre del oro. Pero el asombro esparcido entre doctos y profanos se diluye ahora, tras el primer shock. Y la adopción masiva de usuarios de OpenAI es solo un buen comienzo, lejos de su consolidación definitiva como líder del mercado.</p>

<p>Para apuntalar su dominio en servicios de IA generativa, OpenAI tiene muchos retos por delante. Uno de los más básicos tiene que ver con su cuenta de resultados. Al ser una startup tecnológica se espera que invierta primero en adopción de usuarios para después rentabilizar su oferta y, solo más adelante, preocuparse de la eficiencia de costes. Sin embargo, parece que la compañía apresura sus pasos. Este año se ha cuidado de aumentar su facturación con ChatGPT Plus, y ya se plantea cómo ahorrar costes para paliar sus abultados gastos operativos.</p>

<p>Al poco de lanzar ChatGPT 3.5, el CEO de OpenAI Sam Altman reconoció públicamente que el coste de operar el servicio era sangrante (utilizó la expresión inglesa "eye-watering"). Por entonces, el chatbot apenas había salido del cascarón. Unos meses después se estimaba que la IA generativa le suponía a la startup 700.000 dólares de gasto diarios, algo más de 20 millones al mes. A esto habría que sumarle los costes de Dall-E y otras herramientas, que también consumen recursos de computación.</p>

<p>Google se enfrenta a dos guerras en el campo de la IA: la primera contra OpenAI y la segunda contra sí misma.</p>

<p>Google se enfrenta a dos guerras en el campo de la IA: la primera contra OpenAI y la segunda contra sí misma</p>

<p>Una de las fórmulas que la compañía se plantearía para reducir sus gastos operativos, según una nota de Reuters que cita fuentes internas de OpenAI, sería crear sus propios chips. Con ellos podría optimizar el funcionamiento de su software e incrementar la eficiencia energética. Es una estrategia que muchas de las grandes tecnológicas han adoptado en los últimos años.</p>

<p>Altman ya advirtió que su empresa podía ser la "startup con más necesidad de capital en la historia de Silicon Valley". Hablaba en referencia al futuro desarrollo de una inteligencia artificial general (aquella capaz de efectuar cualquier tarea intelectual atribuible a un ser humano), que podría costar 100.000 millones de dólares. Pero no hace falta entrar en el terreno de la (por ahora) ciencia ficción para que se disparen los gastos.</p>

<p>OpenAI necesita evolucionar sus productos constantemente y lanzar nuevas actualizaciones para mantenerse en la cresta de la innovación. Todo ello implica una inversión continuada. Cuando a Altman se le preguntó en un evento del MIT si entrenar al reciente ChatGPT 4 había costado 100 millones de dólares (varias veces más que ChatGPT 3), contestó que había supuesto un gasto mayor. Una respuesta que no sugiere si costó solo un poco más que esa cifra o mucho más. La startup trabaja ahora en la versión 4.5 y uno de los motivos por los que no se ha lanzado directamente a la 5 serían los costes. Además, su ambición por abarcar más y más áreas de la IA generativa supone nuevos gastos.</p>

<p>Según The Information, los ingresos de OpenAI habrían aumentado exponencial e inesperadamente. La compañía pretendía alcanzar los 1.000 millones de facturación en 2024 y podría lograrlo en este ejercicio. Con estos números, sus finanzas deberían estar saneadas. Pero a la avalancha de ingresos hay que restarle los gastos de operación y de personal. En 2022, con menor consumo de recursos, aunque un elevado coste de desarrollo, se habría anotado pérdidas por valor de 540 millones de dólares, también según The Information citando fuentes conocedoras de las finanzas de la compañía.</p>

<p>La relación de OpenAI con Microsoft solucionaría la cuestión económica, pues el gigante tecnológico habría comprometido 10.000 millones de dólares solo este año, a los que hay que añadir otros 3.000 millones. Pero el acuerdo entre ambas, tal y como lo ha podido reconstruir Fortune, estrangula los márgenes de la startup, que estaría obligada a pagar el 75% de su beneficio a su socio hasta que este recupere su inversión. Cuando lo haga, le deberá pagar el 49% de las ganancias hasta alcanzar la friolera de 92.000 millones de dólares.</p>

<p>La estructura financiera de OpenAI es compleja. Comenzó como una entidad sin ánimo de lucro que tenía la misión de desarrollar una inteligencia artificial general (IAG). Pero en 2019 creó una organización empresarial dentro de su estructura, y lo hizo con una particularidad. En vez de recibir participaciones en la empresa, los inversores reciben el derecho a embolsarse una parte de los beneficios futuros de esta. Idealmente, esto se traduce en que no tienen tanta influencia en las decisiones de la compañía. De hecho, la startup indica que podría reinvertir todos los beneficios hasta que logre su objetivo de alcanzar la IAG.</p>

<p>Puede pensarse que OpenAI se puede pasar toda su existencia sin repartir ni un solo dólar entre sus inversores, reinvirtiendo siempre lo ganado. Pero esta fórmula es un arma de doble filo. Si los gastos aumentan, una de las formas que tienen las startups de hacerlos frente es levantar nuevas rondas. Y si OpenAI no declara beneficios, y por tanto no reparte dinero entre sus inversores, disuadirá a los que estén por llegar.</p>

<p>Optimizar costes podría verse como un gesto de buena voluntad hacia los inversores y, al mismo tiempo, le serviría a OpenAI para que sus productos fueran económicamente más sostenibles. Hay que tener en cuenta que su competencia son algunas de las grandes tecnológicas, que pueden inyectar un torrente de capital a sus proyectos. Google ha lanzado este año Bard y recientemente habría puesto a disposición de algunos desarrolladores Gemini, capaz de generar textos, imágenes y trabajar con lenguajes de programación.</p>

<p>Las empresas guardan celosamente sus secretos. OpenAI lo sabe, así que ha presentado un ChatGPT enfocado en la privacidad.</p>

<p>Las empresas guardan celosamente sus secretos. OpenAI lo sabe, así que ha presentado un ChatGPT enfocado en la privacidad</p>

<p>Amazon también se ha colado en la carrera de la IA generativa. Ha invertido 1.250 millones de dólares en Anthropic, cuyo servicio Claude es rival directo de ChatGPT. La cifra ascenderá a los 4.000 millones si se cumplen ciertos términos. Pero no es la única que apoya a esta startup. La propia Google participó en una ronda que llegó a los 450 millones y tiene previsto volver a inyectar dinero en una nueva que alcanzaría los 2.000 millones.</p>

<p>Las cifras marean. Sin embargo, no son lo único importante. Al igual que OpenAI se ha integrado en la oferta de servicios de la nube de Microsoft (Azure), las herramientas de Anthropic ya están disponibles en AWS, el servicio cloud de Amazon. Así, de sopetón, el rival de ChatGPT gana acceso a un enorme volumen de potenciales clientes. Al mismo tiempo, algunas filtraciones indican que Apple trabaja en su propia IA generativa, Ajax, llamada a funcionar en todo su software, al igual que lo harán Meta AI y Emu (para imágenes) en la familia de aplicaciones de Mark Zuckerberg.</p>

<p>Fabricar chips propios como una salida natural</p>

<p>En este marco de competencia se encuadra la información de Reuters por la que OpenAI se plantearía crear sus propios chips. Estarían optimizados para sus servicios y evitarían su dependencia tecnológica de Nvidia. El proyecto enlazaría con la tendencia de las grandes tecnológicas, que buscan diseñar sus procesadores propios para lograr el máximo rendimiento sus operaciones.</p>

<p>Con un diseño propio se pueden conseguir chips con una mayor eficiencia energética, que reduce los costes de los servidores en los centros de datos. Cuando Amazon introdujo sus Inferentia para Alexa, anunció que reducían un 30% el coste del asistente y su latencia, un 25%. El beneficio adquiere mayor relevancia aún en cargas de trabajo muy intensivas, como la inteligencia artificial generativa. De ahí que Google ya haya presentado un nuevo procesador en esta línea, mientras que Meta ya trabaja en el suyo.</p>

<p>Todo indica que para OpenAI tener sus propios chips es un paso lógico. Podría ahorrarse parte del enorme gasto que supone operar servicios como ChatGPT y mejorar la competitividad de su software, en cuanto a capacidad de computación se refiere.</p>

<p>La parte difícil es empezar a crear el primer chip. Se necesita personal especializado, que consiste en ingenieros cotizados en el mercado, establecer relaciones con proveedores de componentes, atender a la logística y, sobre todo, capital para gastar. Según la estimación de la consultora Digits to Dollars, hacer un procesador desde cero podría costar 270 millones de dólares. Pero el pedido mínimo de GPUs que permite el mercado alcanza los 3.000 millones de dólares.</p>

<p>La pérdida de relevancia de Taiwán en la industria de los semiconductores ya ha empezado.</p>


<p>Además, cualquier acuerdo de fabricación con un tercero tiene sus riesgos en estos momentos. Casi toda la cadena de suministro hunde sus raíces, de una manera o de otra, en China o en Taiwán, dos polos de un conflicto geopolítico a tres bandas, con Estados Unidos, que sacude al sector fabril de la electrónica. La inestabilidad se acentúa con los problemas de aprovisionamiento que arrastra la industria de los semiconductores, que se agudizan en los chips de IA. Como apuntaba la taiwanesa TSMC, la mayor empresa chipera del mundo, el atasco en los procesadores destinados a IA tardará unos 18 meses en corregirse. Sabe bien de lo que habla. Sus plantas son las únicas que fabrican los H100 y A100 de Nvidia, precisamente los que utiliza ChatGPT para funcionar.</p>

<p>Así, el diseño de chips propios puede convertirse en una odisea de desarrollo tecnológico. Pero las ventajas competitivas que aportan son tentadoras para OpenAI, que parece tener todas las cartas en su mano para emprender una iniciativa no exenta de dificultades.</p>
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