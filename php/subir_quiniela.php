<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo
    '
    <script>
        alert ("Esta sección es solo para usuarios registrados");
        window.location = "../index.php";
    </script>
    ';
    session_destroy();
    die();
}

include_once '../php/conexion_bd.php';

//Leemos los datos del formulario

if (isset($_POST['btn-submit'])){

    $quiniela_usuario = $_SESSION['usuario'];

    $idUnico = time();
    $quiniela_codigo = $idUnico . "user" . $quiniela_usuario;


    // Grupo A
    $quiniela_p1_a1 = $_POST['p1_a1'];
    $quiniela_p1_a2 = $_POST['p1_a2'];
    $resultado_p1 = $quiniela_p1_a1 - $quiniela_p1_a2;
    if ($resultado_p1 === 0){
        $quiniela_p1 = "E";
    } else if ($resultado_p1 > 0){
        $quiniela_p1 = "L";
    } else if ($resultado_p1 < 0){
        $quiniela_p1 = "V";
    }

    $quiniela_p2_a3 = $_POST['p2_a3'];
    $quiniela_p2_a4 = $_POST['p2_a4'];
    $resultado_p2 = $quiniela_p2_a3 - $quiniela_p2_a4;
    if ($resultado_p2 === 0){
        $quiniela_p2 = "E";
    } else if ($resultado_p2 > 0){
        $quiniela_p2 = "L";
    } else if ($resultado_p2 < 0){
        $quiniela_p2 = "V";
    }

    $quiniela_p3_a1 = $_POST['p3_a1'];
    $quiniela_p3_a3 = $_POST['p3_a3'];
    $resultado_p3 = $quiniela_p3_a1 - $quiniela_p3_a3;
    if ($resultado_p3 === 0){
        $quiniela_p3 = "E";
    } else if ($resultado_p3 > 0){
        $quiniela_p3 = "L";
    } else if ($resultado_p3 < 0){
        $quiniela_p3 = "V";
    }

    $quiniela_p4_a4 = $_POST['p4_a4'];
    $quiniela_p4_a2 = $_POST['p4_a2'];
    $resultado_p4 = $quiniela_p4_a4 - $quiniela_p4_a2;
    if ($resultado_p4 === 0){
        $quiniela_p4 = "E";
    } else if ($resultado_p4 > 0){
        $quiniela_p4 = "L";
    } else if ($resultado_p4 < 0){
        $quiniela_p4 = "V";
    }

    $quiniela_p5_a2 = $_POST['p5_a2'];
    $quiniela_p5_a3 = $_POST['p5_a3'];
    $resultado_p5 = $quiniela_p5_a2 - $quiniela_p5_a3;
    if ($resultado_p5 === 0){
        $quiniela_p5 = "E";
    } else if ($resultado_p5 > 0){
        $quiniela_p5 = "L";
    } else if ($resultado_p5 < 0){
        $quiniela_p5 = "V";
    }

    $quiniela_p6_a4 = $_POST['p6_a4'];
    $quiniela_p6_a1 = $_POST['p6_a1'];
    $resultado_p6 = $quiniela_p6_a4 - $quiniela_p6_a1;
    if ($resultado_p6 === 0){
        $quiniela_p6 = "E";
    } else if ($resultado_p6 > 0){
        $quiniela_p6 = "L";
    } else if ($resultado_p6 < 0){
        $quiniela_p6 = "V";
    }

    // Grupo B
    $quiniela_p7_b1 = $_POST['p7_b1'];
    $quiniela_p7_b2 = $_POST['p7_b2'];
    $resultado_p7 = $quiniela_p7_b1 - $quiniela_p7_b2;
    if ($resultado_p7 === 0){
        $quiniela_p7 = "E";
    } else if ($resultado_p7 > 0){
        $quiniela_p7 = "L";
    } else if ($resultado_p7 < 0){
        $quiniela_p7 = "V";
    }

    $quiniela_p8_b3 = $_POST['p8_b3'];
    $quiniela_p8_b4 = $_POST['p8_b4'];
    $resultado_p8 = $quiniela_p8_b3 - $quiniela_p8_b4;
    if ($resultado_p8 === 0){
        $quiniela_p8 = "E";
    } else if ($resultado_p8 > 0){
        $quiniela_p8 = "L";
    } else if ($resultado_p8 < 0){
        $quiniela_p8 = "V";
    }

    $quiniela_p9_b4 = $_POST['p9_b4'];
    $quiniela_p9_b2 = $_POST['p9_b2'];
    $resultado_p9 = $quiniela_p9_b4 - $quiniela_p9_b2;
    if ($resultado_p9 === 0){
        $quiniela_p9 = "E";
    } else if ($resultado_p9 > 0){
        $quiniela_p9 = "L";
    } else if ($resultado_p9 < 0){
        $quiniela_p9 = "V";
    }

    $quiniela_p10_b1 = $_POST['p10_b1'];
    $quiniela_p10_b3 = $_POST['p10_b3'];
    $resultado_p10 = $quiniela_p10_b1 - $quiniela_p10_b3;
    if ($resultado_p10 === 0){
        $quiniela_p10 = "E";
    } else if ($resultado_p10 > 0){
        $quiniela_p10 = "L";
    } else if ($resultado_p10 < 0){
        $quiniela_p10 = "V";
    }

    $quiniela_p11_b4 = $_POST['p11_b4'];
    $quiniela_p11_b1 = $_POST['p11_b1'];
    $resultado_p11 = $quiniela_p11_b4 - $quiniela_p11_b1;
    if ($resultado_p11 === 0){
        $quiniela_p11 = "E";
    } else if ($resultado_p11 > 0){
        $quiniela_p11 = "L";
    } else if ($resultado_p11 < 0){
        $quiniela_p11 = "V";
    }


    $quiniela_p12_b2 = $_POST['p12_b2'];
    $quiniela_p12_b3 = $_POST['p12_b3'];
    $resultado_p12 = $quiniela_p12_b2 - $quiniela_p12_b3;
    if ($resultado_p12 === 0){
        $quiniela_p12 = "E";
    } else if ($resultado_p12 > 0){
        $quiniela_p12 = "L";
    } else if ($resultado_p12 < 0){
        $quiniela_p12 = "V";
    }



    //Conexión a la base de datos

    $query = "INSERT INTO tbl_quinielas(quiniela_usuario, quiniela_codigo, quiniela_p1, quiniela_p1_a1, quiniela_p1_a2, quiniela_p2, quiniela_p2_a3, quiniela_p2_a4, quiniela_p3, quiniela_p3_a1, quiniela_p3_a3, quiniela_p4, quiniela_p4_a4, quiniela_p4_a2, quiniela_p5, quiniela_p5_a2, quiniela_p5_a3, quiniela_p6, quiniela_p6_a4, quiniela_p6_a1, quiniela_p7, quiniela_p7_b1, quiniela_p7_b2, quiniela_p8, quiniela_p8_b3, quiniela_p8_b4, quiniela_p9, quiniela_p9_b4, quiniela_p9_b2, quiniela_p10, quiniela_p10_b1, quiniela_p10_b3, quiniela_p11, quiniela_p11_b4, quiniela_p11_b1, quiniela_p12, quiniela_p12_b2, quiniela_p12_b3)
          VALUES ('$quiniela_usuario' , '$quiniela_codigo' , '$quiniela_p1' , '$quiniela_p1_a1' , '$quiniela_p1_a2' , '$quiniela_p2' , '$quiniela_p2_a3' , '$quiniela_p2_a4' , '$quiniela_p3' , '$quiniela_p3_a1' , '$quiniela_p3_a3' , '$quiniela_p4' , '$quiniela_p4_a4' , '$quiniela_p4_a2' , '$quiniela_p5' , '$quiniela_p5_a2' , '$quiniela_p5_a3' , '$quiniela_p6' , '$quiniela_p6_a4' , '$quiniela_p6_a1', '$quiniela_p7' , '$quiniela_p7_b1' , '$quiniela_p7_b2' , '$quiniela_p8' , '$quiniela_p8_b3' , '$quiniela_p8_b4' , '$quiniela_p9' , '$quiniela_p9_b4' , '$quiniela_p9_b2' , '$quiniela_p10' , '$quiniela_p10_b1' , '$quiniela_p10_b3' , '$quiniela_p11' , '$quiniela_p11_b4' , '$quiniela_p11_b1' , '$quiniela_p12' , '$quiniela_p12_b2' , '$quiniela_p12_b3')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Registro correcto, ya puede ver su quiniela y descargarla");
                window.location = "../index.php";
            </script>
            ';
    }else{
        echo '
        <script>
            alert("Error. Por favor, intente de nuevo. ");
            window.location = "../index.php";
        </script>
        ';
    }

    mysqli_close($conexion);

    
//Si no podemos lleer los datos, mandará un error
} else {
    echo '
    <script>
        alert("Error. Por favor, intente de nuevo. ");
        window.location = "../index.php";
    </script>
    ';
}



?>