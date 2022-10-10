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

    // Grupo C
    $quiniela_p13_c1 = $_POST['p13_c1'];
    $quiniela_p13_c2 = $_POST['p13_c2'];
    $resultado_p13 = $quiniela_p13_c1 - $quiniela_p13_c2;
    if ($resultado_p13 === 0){
        $quiniela_p13 = "E";
    } else if ($resultado_p13 > 0){
        $quiniela_p13 = "L";
    } else if ($resultado_p13 < 0){	
        $quiniela_p13 = "V";
    }

    $quiniela_p14_c3 = $_POST['p14_c3'];
    $quiniela_p14_c4 = $_POST['p14_c4'];
    $resultado_p14 = $quiniela_p14_c3 - $quiniela_p14_c4;
    if ($resultado_p14 === 0){
        $quiniela_p14 = "E";
    } else if ($resultado_p14 > 0){
        $quiniela_p14 = "L";
    } else if ($resultado_p14 < 0){
        $quiniela_p14 = "V";
    }

    $quiniela_p15_c4 = $_POST['p15_c4'];
    $quiniela_p15_c2 = $_POST['p15_c2'];
    $resultado_p15 = $quiniela_p15_c4 - $quiniela_p15_c2;
    if ($resultado_p15 === 0){
        $quiniela_p15 = "E";
    } else if ($resultado_p15 > 0){
        $quiniela_p15 = "L";
    } else if ($resultado_p15 < 0){
        $quiniela_p15 = "V";
    }

    $quiniela_p16_c1 = $_POST['p16_c1'];
    $quiniela_p16_c3 = $_POST['p16_c3'];
    $resultado_p16 = $quiniela_p16_c1 - $quiniela_p16_c3;
    if ($resultado_p16 === 0){
        $quiniela_p16 = "E";
    } else if ($resultado_p16 > 0){
        $quiniela_p16 = "L";
    } else if ($resultado_p16 < 0){
        $quiniela_p16 = "V";
    }

    $quiniela_p17_c4 = $_POST['p17_c4'];
    $quiniela_p17_c1 = $_POST['p17_c1'];
    $resultado_p17 = $quiniela_p17_c4 - $quiniela_p17_c1;
    if ($resultado_p17 === 0){
        $quiniela_p17 = "E";
    } else if ($resultado_p17 > 0){
        $quiniela_p17 = "L";
    } else if ($resultado_p17 < 0){
        $quiniela_p17 = "V";
    }

    $quiniela_p18_c2 = $_POST['p18_c2'];
    $quiniela_p18_c3 = $_POST['p18_c3'];
    $resultado_p18 = $quiniela_p18_c2 - $quiniela_p18_c3;
    if ($resultado_p18 === 0){
        $quiniela_p18 = "E";
    } else if ($resultado_p18 > 0){
        $quiniela_p18 = "L";
    } else if ($resultado_p18 < 0){
        $quiniela_p18 = "V";
    }

    // Grupo D
    $quiniela_p19_d1 = $_POST['p19_d1'];
    $quiniela_p19_d2 = $_POST['p19_d2'];
    $resultado_p19 = $quiniela_p19_d1 - $quiniela_p19_d2;
    if ($resultado_p19 === 0){
        $quiniela_p19 = "E";
    } else if ($resultado_p19 > 0){
        $quiniela_p19 = "L";
    } else if ($resultado_p19 < 0){	
        $quiniela_p19 = "V";
    }

    $quiniela_p20_d3 = $_POST['p20_d3'];
    $quiniela_p20_d4 = $_POST['p20_d4'];
    $resultado_p20 = $quiniela_p20_d3 - $quiniela_p20_d4;
    if ($resultado_p20 === 0){
        $quiniela_p20 = "E";
    } else if ($resultado_p20 > 0){
        $quiniela_p20 = "L";
    } else if ($resultado_p20 < 0){
        $quiniela_p20 = "V";
    }

    $quiniela_p21_d2 = $_POST['p21_d2'];
    $quiniela_p21_d4 = $_POST['p21_d4'];
    $resultado_p21 = $quiniela_p21_d2 - $quiniela_p21_d4;
    if ($resultado_p21 === 0){
        $quiniela_p21 = "E";
    } else if ($resultado_p21 > 0){
        $quiniela_p21 = "L";
    } else if ($resultado_p21 < 0){
        $quiniela_p21 = "V";
    }

    $quiniela_p22_d3 = $_POST['p22_d3'];
    $quiniela_p22_d1 = $_POST['p22_d1'];
    $resultado_p22 = $quiniela_p22_d3 - $quiniela_p22_d1;
    if ($resultado_p22 === 0){
        $quiniela_p22 = "E";
    } else if ($resultado_p22 > 0){
        $quiniela_p22 = "L";
    } else if ($resultado_p22 < 0){
        $quiniela_p22 = "V";
    }

    $quiniela_p23_d4 = $_POST['p23_d4'];
    $quiniela_p23_d1 = $_POST['p23_d1'];
    $resultado_p23 = $quiniela_p23_d4 - $quiniela_p23_d1;
    if ($resultado_p23 === 0){
        $quiniela_p23 = "E";
    } else if ($resultado_p23 > 0){
        $quiniela_p23 = "L";
    } else if ($resultado_p23 < 0){
        $quiniela_p23 = "V";
    }

    $quiniela_p24_d2 = $_POST['p24_d2'];
    $quiniela_p24_d3 = $_POST['p24_d3'];
    $resultado_p24 = $quiniela_p24_d2 - $quiniela_p24_d3;
    if ($resultado_p24 === 0){
        $quiniela_p24 = "E";
    } else if ($resultado_p24 > 0){
        $quiniela_p24 = "L";
    } else if ($resultado_p24 < 0){
        $quiniela_p24 = "V";
    }

    // Grupo E
    $quiniela_p25_e1 = $_POST['p25_e1'];
    $quiniela_p25_e2 = $_POST['p25_e2'];
    $resultado_p25 = $quiniela_p25_e1 - $quiniela_p25_e2;
    if ($resultado_p25 === 0){
        $quiniela_p25 = "E";
    } else if ($resultado_p25 > 0){
        $quiniela_p25 = "L";
    } else if ($resultado_p25 < 0){	
        $quiniela_p25 = "V";
    }

    $quiniela_p26_e3 = $_POST['p26_e3'];
    $quiniela_p26_e4 = $_POST['p26_e4'];
    $resultado_p26 = $quiniela_p26_e3 - $quiniela_p26_e4;
    if ($resultado_p26 === 0){
        $quiniela_p26 = "E";
    } else if ($resultado_p26 > 0){
        $quiniela_p26 = "L";
    } else if ($resultado_p26 < 0){
        $quiniela_p26 = "V";
    }

    $quiniela_p27_e2 = $_POST['p27_e2'];
    $quiniela_p27_e4 = $_POST['p27_e4'];
    $resultado_p27 = $quiniela_p27_e2 - $quiniela_p27_e4;
    if ($resultado_p27 === 0){
        $quiniela_p27 = "E";
    } else if ($resultado_p27 > 0){
        $quiniela_p27 = "L";
    } else if ($resultado_p27 < 0){
        $quiniela_p27 = "V";
    }

    $quiniela_p28_e3 = $_POST['p28_e3'];
    $quiniela_p28_e1 = $_POST['p28_e1'];
    $resultado_p28 = $quiniela_p28_e3 - $quiniela_p28_e1;
    if ($resultado_p28 === 0){
        $quiniela_p28 = "E";
    } else if ($resultado_p28 > 0){
        $quiniela_p28 = "L";
    } else if ($resultado_p28 < 0){
        $quiniela_p28 = "V";
    }

    $quiniela_p29_e2 = $_POST['p29_e2'];
    $quiniela_p29_e3 = $_POST['p29_e3'];
    $resultado_p29 = $quiniela_p29_e2 - $quiniela_p29_e3;
    if ($resultado_p29 === 0){
        $quiniela_p29 = "E";
    } else if ($resultado_p29 > 0){
        $quiniela_p29 = "L";
    } else if ($resultado_p29 < 0){
        $quiniela_p29 = "V";
    }

    $quiniela_p30_e4 = $_POST['p30_e4'];
    $quiniela_p30_e1 = $_POST['p30_e1'];
    $resultado_p30 = $quiniela_p30_e4 - $quiniela_p30_e1;
    if ($resultado_p30 === 0){
        $quiniela_p30 = "E";
    } else if ($resultado_p30 > 0){
        $quiniela_p30 = "L";
    } else if ($resultado_p30 < 0){
        $quiniela_p30 = "V";
    }

    // Grupo F
    $quiniela_p31_f3 = $_POST['p31_f3'];
    $quiniela_p31_f4 = $_POST['p31_f4'];
    $resultado_p31 = $quiniela_p31_f3 - $quiniela_p31_f4;
    if ($resultado_p31 === 0){
        $quiniela_p31 = "E";
    } else if ($resultado_p31 > 0){
        $quiniela_p31 = "L";
    } else if ($resultado_p31 < 0){
        $quiniela_p31 = "V";
    }

    $quiniela_p32_f1 = $_POST['p32_f1'];
    $quiniela_p32_f2 = $_POST['p32_f2'];
    $resultado_p32 = $quiniela_p32_f1 - $quiniela_p32_f2;
    if ($resultado_p32 === 0){
        $quiniela_p32 = "E";
    } else if ($resultado_p32 > 0){
        $quiniela_p32 = "L";
    } else if ($resultado_p32 < 0){	
        $quiniela_p32 = "V";
    }


    $quiniela_p33_f1 = $_POST['p33_f1'];
    $quiniela_p33_f3 = $_POST['p33_f3'];
    $resultado_p33 = $quiniela_p33_f1 - $quiniela_p33_f3;
    if ($resultado_p33 === 0){
        $quiniela_p33 = "E";
    } else if ($resultado_p33 > 0){
        $quiniela_p33 = "L";
    } else if ($resultado_p33 < 0){
        $quiniela_p33 = "V";
    }

    $quiniela_p34_f4 = $_POST['p34_f4'];
    $quiniela_p34_f2 = $_POST['p34_f2'];
    $resultado_p34 = $quiniela_p34_f4 - $quiniela_p34_f2;
    if ($resultado_p34 === 0){
        $quiniela_p34 = "E";
    } else if ($resultado_p34 > 0){
        $quiniela_p34 = "L";
    } else if ($resultado_p34 < 0){
        $quiniela_p34 = "V";
    }

    $quiniela_p35_f4 = $_POST['p35_f4'];
    $quiniela_p35_f1 = $_POST['p35_f1'];
    $resultado_p35 = $quiniela_p35_f4 - $quiniela_p35_f1;
    if ($resultado_p35 === 0){
        $quiniela_p35 = "E";
    } else if ($resultado_p35 > 0){
        $quiniela_p35 = "L";
    } else if ($resultado_p35 < 0){
        $quiniela_p35 = "V";
    }

    $quiniela_p36_f2 = $_POST['p36_f2'];
    $quiniela_p36_f3 = $_POST['p36_f3'];
    $resultado_p36 = $quiniela_p36_f2 - $quiniela_p36_f3;
    if ($resultado_p36 === 0){
        $quiniela_p36 = "E";
    } else if ($resultado_p36 > 0){
        $quiniela_p36 = "L";
    } else if ($resultado_p36 < 0){
        $quiniela_p36 = "V";
    }

    // Grupo G
    $quiniela_p37_g3 = $_POST['p37_g3'];
    $quiniela_p37_g4 = $_POST['p37_g4'];
    $resultado_p37 = $quiniela_p37_g3 - $quiniela_p37_g4;
    if ($resultado_p37 === 0){
        $quiniela_p37 = "E";
    } else if ($resultado_p37 > 0){
        $quiniela_p37 = "L";
    } else if ($resultado_p37 < 0){
        $quiniela_p37 = "V";
    }

    $quiniela_p38_g1 = $_POST['p38_g1'];
    $quiniela_p38_g2 = $_POST['p38_g2'];
    $resultado_p38 = $quiniela_p38_g1 - $quiniela_p38_g2;
    if ($resultado_p38 === 0){
        $quiniela_p38 = "E";
    } else if ($resultado_p38 > 0){
        $quiniela_p38 = "L";
    } else if ($resultado_p38 < 0){	
        $quiniela_p38 = "V";
    }


    $quiniela_p39_g4 = $_POST['p39_g4'];
    $quiniela_p39_g2 = $_POST['p39_g2'];
    $resultado_p39 = $quiniela_p39_g4 - $quiniela_p39_g2;
    if ($resultado_p39 === 0){
        $quiniela_p39 = "E";
    } else if ($resultado_p39 > 0){
        $quiniela_p39 = "L";
    } else if ($resultado_p39 < 0){
        $quiniela_p39 = "V";
    }

    $quiniela_p40_g1 = $_POST['p40_g1'];
    $quiniela_p40_g3 = $_POST['p40_g3'];
    $resultado_p40 = $quiniela_p40_g1 - $quiniela_p40_g3;
    if ($resultado_p40 === 0){
        $quiniela_p40 = "E";
    } else if ($resultado_p40 > 0){
        $quiniela_p40 = "L";
    } else if ($resultado_p40 < 0){
        $quiniela_p40 = "V";
    }

    $quiniela_p41_g2 = $_POST['p41_g2'];
    $quiniela_p41_g3 = $_POST['p41_g3'];
    $resultado_p41 = $quiniela_p41_g2 - $quiniela_p41_g3;
    if ($resultado_p41 === 0){
        $quiniela_p41 = "E";
    } else if ($resultado_p41 > 0){
        $quiniela_p41 = "L";
    } else if ($resultado_p41 < 0){
        $quiniela_p41 = "V";
    }

    $quiniela_p42_g4 = $_POST['p42_g4'];
    $quiniela_p42_g1 = $_POST['p42_g1'];
    $resultado_p42 = $quiniela_p42_g4 - $quiniela_p42_g1;
    if ($resultado_p42 === 0){
        $quiniela_p42 = "E";
    } else if ($resultado_p42 > 0){
        $quiniela_p42 = "L";
    } else if ($resultado_p42 < 0){
        $quiniela_p42 = "V";
    }

    // Grupo H
    $quiniela_p43_h3 = $_POST['p43_h3'];
    $quiniela_p43_h4 = $_POST['p43_h4'];
    $resultado_p43 = $quiniela_p43_h3 - $quiniela_p43_h4;
    if ($resultado_p43 === 0){
        $quiniela_p43 = "E";
    } else if ($resultado_p43 > 0){
        $quiniela_p43 = "L";
    } else if ($resultado_p43 < 0){
        $quiniela_p43 = "V";
    }

    $quiniela_p44_h1 = $_POST['p44_h1'];
    $quiniela_p44_h2 = $_POST['p44_h2'];
    $resultado_p44 = $quiniela_p44_h1 - $quiniela_p44_h2;
    if ($resultado_p44 === 0){
        $quiniela_p44 = "E";
    } else if ($resultado_p44 > 0){
        $quiniela_p44 = "L";
    } else if ($resultado_p44 < 0){	
        $quiniela_p44 = "V";
    }


    $quiniela_p45_h4 = $_POST['p45_h4'];
    $quiniela_p45_h2 = $_POST['p45_h2'];
    $resultado_p45 = $quiniela_p45_h4 - $quiniela_p45_h2;
    if ($resultado_p45 === 0){
        $quiniela_p45 = "E";
    } else if ($resultado_p45 > 0){
        $quiniela_p45 = "L";
    } else if ($resultado_p45 < 0){
        $quiniela_p45 = "V";
    }

    $quiniela_p46_h1 = $_POST['p46_h1'];
    $quiniela_p46_h3 = $_POST['p46_h3'];
    $resultado_p46 = $quiniela_p46_h1 - $quiniela_p46_h3;
    if ($resultado_p46 === 0){
        $quiniela_p46 = "E";
    } else if ($resultado_p46 > 0){
        $quiniela_p46 = "L";
    } else if ($resultado_p46 < 0){
        $quiniela_p46 = "V";
    }

    $quiniela_p47_h2 = $_POST['p47_h2'];
    $quiniela_p47_h3 = $_POST['p47_h3'];
    $resultado_p47 = $quiniela_p47_h2 - $quiniela_p47_h3;
    if ($resultado_p47 === 0){
        $quiniela_p47 = "E";
    } else if ($resultado_p47 > 0){
        $quiniela_p47 = "L";
    } else if ($resultado_p47 < 0){
        $quiniela_p47 = "V";
    }

    $quiniela_p48_h4 = $_POST['p48_h4'];
    $quiniela_p48_h1 = $_POST['p48_h1'];
    $resultado_p48 = $quiniela_p48_h4 - $quiniela_p48_h1;
    if ($resultado_p48 === 0){
        $quiniela_p48 = "E";
    } else if ($resultado_p48 > 0){
        $quiniela_p48 = "L";
    } else if ($resultado_p48 < 0){
        $quiniela_p48 = "V";
    }


    //Conexión a la base de datos

    $query = "INSERT INTO tbl_quinielas(quiniela_usuario, quiniela_codigo, 
    quiniela_p1, quiniela_p1_a1, quiniela_p1_a2, quiniela_p2, quiniela_p2_a3, quiniela_p2_a4, 
    quiniela_p3, quiniela_p3_a1, quiniela_p3_a3, quiniela_p4, quiniela_p4_a4, quiniela_p4_a2, 
    quiniela_p5, quiniela_p5_a2, quiniela_p5_a3, quiniela_p6, quiniela_p6_a4, quiniela_p6_a1, 
    quiniela_p7, quiniela_p7_b1, quiniela_p7_b2, quiniela_p8, quiniela_p8_b3, quiniela_p8_b4, 
    quiniela_p9, quiniela_p9_b4, quiniela_p9_b2, quiniela_p10, quiniela_p10_b1, quiniela_p10_b3, 
    quiniela_p11, quiniela_p11_b4, quiniela_p11_b1, quiniela_p12, quiniela_p12_b2, quiniela_p12_b3,
    quiniela_p13, quiniela_p13_c1, quiniela_p13_c2, quiniela_p14, quiniela_p14_c3, quiniela_p14_c4, 
    quiniela_p15, quiniela_p15_c4, quiniela_p15_c2, quiniela_p16, quiniela_p16_c1, quiniela_p16_c3, 
    quiniela_p17, quiniela_p17_c4, quiniela_p17_c1, quiniela_p18, quiniela_p18_c2, quiniela_p18_c3,
    quiniela_p19, quiniela_p19_d1, quiniela_p19_d2, quiniela_p20, quiniela_p20_d3, quiniela_p20_d4, 
    quiniela_p21, quiniela_p21_d2, quiniela_p21_d4, quiniela_p22, quiniela_p22_d3, quiniela_p22_d1, 
    quiniela_p23, quiniela_p23_d4, quiniela_p23_d1, quiniela_p24, quiniela_p24_d2, quiniela_p24_d3,
    quiniela_p25, quiniela_p25_e1, quiniela_p25_e2, quiniela_p26, quiniela_p26_e3, quiniela_p26_e4, 
    quiniela_p27, quiniela_p27_e2, quiniela_p27_e4, quiniela_p28, quiniela_p28_e3, quiniela_p28_e1, 
    quiniela_p29, quiniela_p29_e2, quiniela_p29_e3, quiniela_p30, quiniela_p30_e4, quiniela_p30_e1,
    quiniela_p31, quiniela_p31_f3, quiniela_p31_f4, quiniela_p32, quiniela_p32_f1, quiniela_p32_f2, 
    quiniela_p33, quiniela_p33_f1, quiniela_p33_f3, quiniela_p34, quiniela_p34_f4, quiniela_p34_f2, 
    quiniela_p35, quiniela_p35_f4, quiniela_p35_f1, quiniela_p36, quiniela_p36_f2, quiniela_p36_f3,
    quiniela_p37, quiniela_p37_g3, quiniela_p37_g4, quiniela_p38, quiniela_p38_g1, quiniela_p38_g2, 
    quiniela_p39, quiniela_p39_g4, quiniela_p39_g2, quiniela_p40, quiniela_p40_g1, quiniela_p40_g3, 
    quiniela_p41, quiniela_p41_g2, quiniela_p41_g3, quiniela_p42, quiniela_p42_g4, quiniela_p42_g1,
    quiniela_p43, quiniela_p43_h3, quiniela_p43_h4, quiniela_p44, quiniela_p44_h1, quiniela_p44_h2, 
    quiniela_p45, quiniela_p45_h4, quiniela_p45_h2, quiniela_p46, quiniela_p46_h1, quiniela_p46_h3, 
    quiniela_p47, quiniela_p47_h2, quiniela_p47_h3, quiniela_p48, quiniela_p48_h4, quiniela_p48_h1)
    
    VALUES ('$quiniela_usuario' , '$quiniela_codigo' , 
    '$quiniela_p1' , '$quiniela_p1_a1' , '$quiniela_p1_a2' , '$quiniela_p2' , '$quiniela_p2_a3' , '$quiniela_p2_a4' , 
    '$quiniela_p3' , '$quiniela_p3_a1' , '$quiniela_p3_a3' , '$quiniela_p4' , '$quiniela_p4_a4' , '$quiniela_p4_a2' , 
    '$quiniela_p5' , '$quiniela_p5_a2' , '$quiniela_p5_a3' , '$quiniela_p6' , '$quiniela_p6_a4' , '$quiniela_p6_a1', 
    '$quiniela_p7' , '$quiniela_p7_b1' , '$quiniela_p7_b2' , '$quiniela_p8' , '$quiniela_p8_b3' , '$quiniela_p8_b4' , 
    '$quiniela_p9' , '$quiniela_p9_b4' , '$quiniela_p9_b2' , '$quiniela_p10' , '$quiniela_p10_b1' , '$quiniela_p10_b3' , 
    '$quiniela_p11' , '$quiniela_p11_b4' , '$quiniela_p11_b1' , '$quiniela_p12' , '$quiniela_p12_b2' , '$quiniela_p12_b3',
    '$quiniela_p13' , '$quiniela_p13_c1' , '$quiniela_p13_c2' , '$quiniela_p14' , '$quiniela_p14_c3' , '$quiniela_p14_c4' , 
    '$quiniela_p15' , '$quiniela_p15_c4' , '$quiniela_p15_c2' , '$quiniela_p16' , '$quiniela_p16_c1' , '$quiniela_p16_c3' , 
    '$quiniela_p17' , '$quiniela_p17_c4' , '$quiniela_p17_c1' , '$quiniela_p18' , '$quiniela_p18_c2' , '$quiniela_p18_c3' ,
    '$quiniela_p19' , '$quiniela_p19_d1' , '$quiniela_p19_d2' , '$quiniela_p20' , '$quiniela_p20_d3' , '$quiniela_p20_d4' , 
    '$quiniela_p21' , '$quiniela_p21_d2' , '$quiniela_p21_d4' , '$quiniela_p22' , '$quiniela_p22_d3' , '$quiniela_p22_d1' , 
    '$quiniela_p23' , '$quiniela_p23_d4' , '$quiniela_p23_d1' , '$quiniela_p24' , '$quiniela_p24_d2' , '$quiniela_p24_d3' ,
    '$quiniela_p25' , '$quiniela_p25_e1' , '$quiniela_p25_e2' , '$quiniela_p26' , '$quiniela_p26_e3' , '$quiniela_p26_e4' , 
    '$quiniela_p27' , '$quiniela_p27_e2' , '$quiniela_p27_e4' , '$quiniela_p28' , '$quiniela_p28_e3' , '$quiniela_p28_e1' , 
    '$quiniela_p29' , '$quiniela_p29_e2' , '$quiniela_p29_e3' , '$quiniela_p30' , '$quiniela_p30_e4' , '$quiniela_p30_e1' ,
    '$quiniela_p31' , '$quiniela_p31_f3' , '$quiniela_p31_f4' , '$quiniela_p32' , '$quiniela_p32_f1' , '$quiniela_p32_f2' , 
    '$quiniela_p33' , '$quiniela_p33_f1' , '$quiniela_p33_f3' , '$quiniela_p34' , '$quiniela_p34_f4' , '$quiniela_p34_f2' , 
    '$quiniela_p35' , '$quiniela_p35_f4' , '$quiniela_p35_f1' , '$quiniela_p36' , '$quiniela_p36_f2' , '$quiniela_p36_f3' ,
    '$quiniela_p37' , '$quiniela_p37_g3' , '$quiniela_p37_g4' , '$quiniela_p38' , '$quiniela_p38_g1' , '$quiniela_p38_g2' , 
    '$quiniela_p39' , '$quiniela_p39_g4' , '$quiniela_p39_g2' , '$quiniela_p40' , '$quiniela_p40_g1' , '$quiniela_p40_g3' , 
    '$quiniela_p41' , '$quiniela_p41_g2' , '$quiniela_p41_g3' , '$quiniela_p42' , '$quiniela_p42_g4' , '$quiniela_p42_g1' ,
    '$quiniela_p43' , '$quiniela_p43_h3' , '$quiniela_p43_h4' , '$quiniela_p44' , '$quiniela_p44_h1' , '$quiniela_p44_h2' , 
    '$quiniela_p45' , '$quiniela_p45_h4' , '$quiniela_p45_h2' , '$quiniela_p46' , '$quiniela_p46_h1' , '$quiniela_p46_h3' , 
    '$quiniela_p47' , '$quiniela_p47_h2' , '$quiniela_p47_h3' , '$quiniela_p48' , '$quiniela_p48_h4' , '$quiniela_p48_h1')";

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