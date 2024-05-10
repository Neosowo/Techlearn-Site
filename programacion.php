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

    .spam-ros{
      text-align: center;
      padding-top: 100px;
      padding-bottom: 100px;    
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

      <p><div class="text"><a href="home.php">Home</a><i class='bx bx-chevron-right bx-xs' ></i> Programación</div>  </p>
</div>
<section class="text-section">
      <h1>Lenguajes de programación</h1>
    <p>Los lenguajes de programación son herramientas fundamentales en el mundo de la informática y la programación. Estos lenguajes permiten a los programadores comunicarse con las computadoras y darles instrucciones para realizar tareas específicas. A lo largo de la historia de la informática, se han desarrollado una amplia variedad de lenguajes de programación, cada uno con sus propias características, usos y ventajas. Aquí te proporciono una visión general completa sobre los lenguajes de programación:</p>
    <img src="https://www.tecnoinver.cl/wp-content/uploads/2015/08/Prog-languages.png" alt="SD-WAN" class="responsiveimg">
    <h3>Lenguajes de programación de alto nivel vs. bajo nivel</h3>
    <ul>
        <li>Alto nivel: Estos lenguajes están diseñados para ser más fáciles de entender y escribir para los programadores. Ejemplos incluyen Python, Java, Ruby y JavaScript. Suelen ser independientes de la plataforma, lo que significa que el código escrito en un lenguaje de alto nivel puede ejecutarse en diferentes sistemas operativos sin modificaciones significativas.</li>
        <li>Bajo nivel: Los lenguajes de bajo nivel, como el lenguaje ensamblador, están más cerca del lenguaje de máquina y son específicos de la arquitectura de la computadora. Son más difíciles de escribir y entender, pero ofrecen un control más preciso sobre el hardware.</li>
    </ul>

    <img src="https://i0.wp.com/www.diarlu.com/wp-content/uploads/2018/10/tipos-lenguajes-programacion.jpg?resize=961%2C518&ssl=1" class="responsiveimg">



    <h3>Tipos de lenguajes de programación</h3>
    <ul>
        <li>Lenguajes imperativos: Estos lenguajes se centran en describir cómo se debe realizar una tarea. Ejemplos incluyen C, C++, Java y Python.</li>
        <li>Lenguajes declarativos: Se enfocan en lo que se debe lograr en lugar de cómo hacerlo. Ejemplos son SQL (para bases de datos) y HTML/CSS (para diseño web).</li>
        <li>Lenguajes funcionales: Se centran en el uso de funciones y operaciones matemáticas para transformar datos. Ejemplos incluyen Haskell y Lisp.</li>
        <li>Lenguajes orientados a objetos: Están basados en el concepto de objetos, que combinan datos y comportamiento. Ejemplos son Java, C++, y Python.</li>
    </ul>

    <h3>Paradigmas de programación</h3>
    <ul>
        <li>Programación estructurada: Se enfoca en dividir un programa en estructuras lógicas como secuencias, bucles y condicionales.</li>
        <li>Programación orientada a objetos (POO): Se basa en la creación de objetos que encapsulan datos y comportamiento, lo que facilita la reutilización y el mantenimiento del código.</li>
        <li>Programación funcional: Se centra en el uso de funciones y evita el estado mutable. Promueve la inmutabilidad y la recursión.</li>
        <li>Programación lógica: Se utiliza para resolver problemas basados en reglas lógicas y declarativas. Prolog es un ejemplo de un lenguaje de programación lógica.</li>
    </ul>
    <img src="https://ecdisis.com/wp-content/uploads/2021/01/02-Lenguaje-de-programación-1024x591.jpeg" class="responsiveimg">



    <h3>Popularidad y casos de uso</h3>
    <ul>
        <li><strong>Python:</strong> Conocido por su legibilidad y versatilidad, Python es utilizado en desarrollo web, análisis de datos, inteligencia artificial, y más.</li>
        <li><strong>JavaScript:</strong> Un lenguaje esencial para el desarrollo web, se utiliza para crear aplicaciones interactivas en el navegador.</li>
        <li><strong>Java:</strong> Ampliamente utilizado en aplicaciones empresariales, desarrollo de Android y sistemas embebidos.</li>
        <li><strong>C++:</strong> Con un rendimiento cercano al lenguaje ensamblador, se usa en juegos, sistemas operativos y software de alto rendimiento.</li>
        <li><strong>C#:</strong> Desarrollado por Microsoft, se utiliza en aplicaciones de escritorio, desarrollo de juegos con Unity y desarrollo de aplicaciones de Windows.</li>
    </ul>
    <img src="https://blog.facialix.com/wp-content/uploads/2022/02/Blog210219_2.jpg" class="responsiveimg">



    <h3>Evolución de los lenguajes de programación</h3>
    <p>Los lenguajes de programación continúan evolucionando para adaptarse a las necesidades cambiantes de la tecnología. Nuevos lenguajes surgen para abordar desafíos específicos y simplificar ciertas tareas.</p>

    <h3>Recursos para aprender</h3>
    <p>Existen numerosos recursos en línea, tutoriales y cursos para aprender lenguajes de programación. Comunidades en línea como Stack Overflow son útiles para resolver problemas y obtener ayuda.</p>

    <h3>Desarrollo de software</h3>
    <p>Los lenguajes de programación son esenciales para el desarrollo de software en una variedad de campos, desde aplicaciones móviles hasta sistemas de inteligencia artificial y videojuegos.</p>

    <h3>Lenguajes de programación emergentes</h3>
    <p>En el momento de mi último entrenamiento en septiembre de 2021, algunos lenguajes emergentes incluían Rust (por su seguridad y rendimiento), Go (para desarrollo de servidores), y Swift (para desarrollo de aplicaciones iOS). Pueden haber surgido nuevos lenguajes desde entonces.</p>
    <h3>Plataformas de desarrollo</h3>
    <ul>
        <li>Windows: Las aplicaciones de escritorio para Windows se desarrollan principalmente utilizando tecnologías como el framework .NET (C# o VB.NET) o C++ con el uso de la API de Windows. El entorno de desarrollo Visual Studio es ampliamente utilizado.</li>
        <li>macOS: Las aplicaciones de escritorio para macOS se desarrollan utilizando principalmente el lenguaje de programación Swift o Objective-C en el entorno de desarrollo Xcode.</li>
        <li>Linux: En Linux, las aplicaciones de escritorio pueden desarrollarse utilizando una variedad de lenguajes y tecnologías, incluyendo C/C++, Python y Qt.</li>
    </ul>

    <h3>Interfaces de usuario (UI)</h3>
    <p>Las aplicaciones de escritorio suelen tener interfaces de usuario más complejas y ricas en comparación con las aplicaciones móviles o web. Los kits de desarrollo de software (SDK) proporcionan componentes para la creación de interfaces gráficas de usuario (GUI). Ejemplos incluyen Windows Forms y Windows Presentation Foundation (WPF) en Windows, y Cocoa en macOS.</p>
    <img src="https://tuatara.co/wp-content/uploads/2023/01/blog-lo-que-debes-saber-sobre-la-interfaz-grafica.png" class="responsiveimg">



    <h3>Funcionalidades avanzadas</h3>
    <p>Las aplicaciones de escritorio pueden aprovechar al máximo las capacidades de hardware de una computadora de escritorio, lo que les permite realizar tareas complejas, trabajar con grandes conjuntos de datos y ofrecer características avanzadas.</p>

    <h3>Aplicaciones de línea de negocio</h3>
    <p>Muchas aplicaciones de escritorio se utilizan en entornos empresariales para llevar a cabo tareas como la gestión de inventarios, contabilidad, procesamiento de datos y más.</p>

    <h3>Seguridad</h3>
    <p>La seguridad es una consideración importante en las aplicaciones de escritorio, especialmente cuando se trata de gestionar datos sensibles o confidenciales. Se deben implementar medidas de seguridad adecuadas, como la autenticación y el cifrado de datos.</p>

    <h3>Actualizaciones y distribución</h3>
    <p>Las actualizaciones de las aplicaciones de escritorio se distribuyen típicamente a través de instaladores que los usuarios descargan e instalan en sus sistemas. Las tiendas de aplicaciones en sistemas operativos como Windows y macOS también pueden utilizarse para la distribución.</p>

    <h3>Compatibilidad y pruebas</h3>
    <p>Es importante probar las aplicaciones de escritorio en diferentes versiones de sistemas operativos y configuraciones de hardware para garantizar la compatibilidad y un rendimiento adecuado.</p>

    <h3>Tecnologías modernas</h3>
    <p>Aunque las aplicaciones de escritorio tradicionales siguen siendo relevantes, se están desarrollando nuevas tecnologías para crear aplicaciones de escritorio más modernas y multiplataforma. Ejemplos incluyen el uso de frameworks como Electron (que utiliza tecnologías web para crear aplicaciones de escritorio) y el desarrollo de aplicaciones en la nube que se ejecutan en un navegador web.</p>

    <h3>Tendencias actuales</h3>
    <p>Algunas tendencias actuales en el desarrollo de aplicaciones de escritorio incluyen la adopción de interfaces de usuario modernas y minimalistas, la integración de análisis de datos y visualización, y el enfoque en la eficiencia y el rendimiento.</p>

    <p>El desarrollo de aplicaciones de escritorio es esencial para una variedad de industrias y necesidades empresariales. Aunque las aplicaciones web y móviles han ganado popularidad, las aplicaciones de escritorio siguen siendo una opción poderosa para software que requiere un alto rendimiento y funcionalidades avanzadas en el entorno de un PC o Mac.</p>

    <h3>Inteligencia artificial y aprendizaje automático</h3>
    <p>La inteligencia artificial (IA) y el aprendizaje automático (AA o machine learning en inglés) son campos de la informática que se centran en crear sistemas y programas capaces de aprender y tomar decisiones basadas en datos. Estos campos están en constante evolución y tienen aplicaciones en una amplia variedad de áreas. Aquí te proporciono una visión general de la inteligencia artificial y el aprendizaje automático:</p>

    <h3>Inteligencia Artificial (IA)</h3>
    
    <ol>
        <li>Definición: La IA se refiere a la creación de sistemas que pueden realizar tareas que normalmente requerirían inteligencia humana. Esto incluye el procesamiento del lenguaje natural, la percepción visual, el razonamiento lógico, la toma de decisiones y más.</li>
        <li>Subcampos de la IA:
            <ul>
                <li>Visión por computadora: Permite a las máquinas analizar y comprender imágenes y videos.</li>
                <li>Procesamiento del lenguaje natural (PLN): Permite a las máquinas entender y generar texto y lenguaje humano.</li>
                <li>Robótica: Implica la creación de robots capaces de interactuar con su entorno y tomar decisiones.</li>
                <li>Agentes de software: Desarrolla programas que pueden tomar decisiones y realizar tareas de forma autónoma.</li>
                <li>Sistemas expertos: Modela el conocimiento humano para tomar decisiones en áreas específicas.</li>
            </ul>
        </li>
        <li>Aplicaciones de la IA:
            <ul>
                <li>Asistentes virtuales: Como Siri, Google Assistant y Alexa.</li>
                <li>Diagnóstico médico: Ayuda a los médicos a identificar enfermedades y a interpretar imágenes médicas.</li>
                <li>Conducción autónoma: Vehículos autónomos que utilizan sensores y algoritmos de IA para navegar sin un conductor humano.</li>
                <li>Recomendación de contenido: Plataformas como Netflix y Amazon utilizan algoritmos de IA para recomendar productos y contenido a los usuarios.</li>
                <li>Predicción de demanda: Ayuda a las empresas a optimizar sus inventarios y operaciones.</li>
            </ul>
        </li>
        <li>Desafíos de la IA: Incluyen la interpretación de datos sesgados, la privacidad de datos, la ética en la IA y la toma de decisiones transparentes.</li>
    </ol>

    <img src="https://grupoinmotion.com/wp-content/uploads/2020/12/inteligencia-artificial-770x400.jpg" class="responsiveimg">




    <h3>Aprendizaje Automático (AA o Machine Learning)</h3>
    <ol>
        <li>Definición: El aprendizaje automático es una subdisciplina de la IA que se enfoca en el desarrollo de algoritmos y modelos que permiten a las máquinas aprender de los datos y tomar decisiones sin ser programadas explícitamente.</li>
        <li>Tipos de aprendizaje automático:
            <ul>
                <li>Aprendizaje supervisado: Los modelos se entrenan con datos etiquetados y se utilizan para hacer predicciones o clasificar datos nuevos.</li>
                <li>Aprendizaje no supervisado: Los modelos identifican patrones y relaciones en los datos sin la necesidad de etiquetas.</li>
                <li>Aprendizaje por refuerzo: Los modelos aprenden a través de la interacción con un entorno y reciben recompensas o penalizaciones por sus acciones.</li>
            </ul>
        </li>
        <li>Algoritmos de aprendizaje automático:
            <ul>
                <li>Regresión: Utilizado para predecir valores numéricos (por ejemplo, predicción de precios de viviendas).</li>
                <li>Clasificación: Se utiliza para asignar categorías o etiquetas a datos (por ejemplo, detección de spam en el correo electrónico).</li>
                <li>Agrupación: Agrupa datos similares en conjuntos (por ejemplo, segmentación de clientes).</li>
                <li>Redes neuronales: Modelan relaciones complejas y se utilizan en aplicaciones como reconocimiento de imágenes y procesamiento de lenguaje natural.</li>
            </ul>
        </li>
        <li>Herramientas de aprendizaje automático: Incluyen bibliotecas y frameworks como TensorFlow, PyTorch y scikit-learn, que facilitan el desarrollo de modelos de AA.</li>
        <li>Aplicaciones de aprendizaje automático:
            <ul>
                <li>Reconocimiento de voz y procesamiento de lenguaje natural: Permite la creación de chatbots y asistentes virtuales.</li>
                <li>Visión por computadora: Utilizado en sistemas de reconocimiento facial, detección de objetos y vehículos autónomos.</li>
                <li>Predicción de fraudes: Ayuda a las instituciones financieras a detectar actividades fraudulentas.</li>
                <li>Personalización de contenido: Plataformas de redes sociales y sitios web utilizan AA para personalizar el contenido para los usuarios.</li>
            </ul>
        </li>
        <li>Desafíos del aprendizaje automático: Incluyen la necesidad de grandes conjuntos de datos de alta calidad, el sobreajuste (overfitting), la interpretación de modelos complejos y la privacidad de datos.</li>
    </ol>

    <p>Tanto la inteligencia artificial como el aprendizaje automático son campos emocionantes que están transformando industrias y creando nuevas oportunidades en la tecnología. La continua investigación y desarrollo en estos campos prometen avances significativos en el futuro.</p>

    <h3>Seguridad informática</h3>
    <p>La seguridad informática es un campo crítico en la tecnología de la información que se enfoca en proteger sistemas, redes, datos y servicios contra amenazas, ataques y vulnerabilidades. La seguridad informática es esencial en un mundo cada vez más digital y conectado. Aquí tienes una visión general de la seguridad informática:</p>

    <h3>Objetivos de la seguridad informática</h3>
    <ul>
        <li>Confidencialidad: Garantizar que la información solo esté disponible para las personas o sistemas autorizados.</li>
        <li>Integridad: Mantener la exactitud y la integridad de los datos y sistemas, asegurando que no se hayan alterado sin autorización.</li>
        <li>Disponibilidad: Asegurar que los sistemas y datos estén disponibles y funcionando cuando se necesiten.</li>
        <li>Autenticación: Verificar la identidad de los usuarios y sistemas para garantizar que solo las personas o entidades autorizadas tengan acceso.</li>
        <li>Autorización: Controlar los privilegios y permisos de acceso para limitar lo que los usuarios pueden hacer en un sistema.</li>
        <li>No repudio: Garantizar que las acciones realizadas por un usuario o sistema no puedan ser negadas más tarde.</li>
        <li>Resiliencia: Garantizar que los sistemas sean capaces de resistir y recuperarse de ataques o fallos.</li>
    </ul>

  
  </div>

  <img src="https://www.ceupe.com/images/easyblog_images/168/b2ap3_thumbnail_confidencialidad-de-datos.jpg" class="responsiveimg">

  

  <div class="spam-ros">
       <h2>CODIGOS DE PYTHON EXPLICADOS <a href="">AQUI</a> </h2>

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