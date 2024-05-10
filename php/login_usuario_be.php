<?php 


    session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validad_log = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena='$contrasena'");
    
    if(mysqli_num_rows($validad_log) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../home.php");
        exit();
    }else{
        echo'
        <script>
        alert("Usuario no existe");
        window.location = "../index.php";
        </script>
        ';
        exit();
    }

    
?>