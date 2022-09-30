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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descarga tus quinielas</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" media="screen" href="../css/estilos_interno.css">
<link rel="stylesheet" media="print" href="../css/estilos_imprimir.css">
</head>
<body>

<header>
    <nav>
        <ul class="nav__link">
            <li>Bienvenido <?php echo $_SESSION['usuario'];?></li>
            <li><a href="../php/panel.php">Panel principal</a></li> 
            <li><button onclick="window.print()">Imprimir</button></li>  
        </ul>
    </nav>
    <button><a href="../php/cerrar_sesion.php">Cerrar sesión</a></button>
</header>

<body>


<!-- Leer resultados oficiales -->
<?php
        include_once '../php/conexion_bd.php';
        $usuario_control = 'control_resultados';

        $query = "select*from tbl_control WHERE quiniela_usuario='".$usuario_control."' ";
        $ejecutar = mysqli_query($conexion, $query);
        while($row=mysqli_fetch_assoc($ejecutar)){

        $control_p1 = $row['quiniela_p1'];
        $control_p1_a1 = $row['quiniela_p1_a1'];
        $control_p1_a2 = $row['quiniela_p1_a2'];
        $control_p2 = $row['quiniela_p2'];
        $control_p2_a3 = $row['quiniela_p2_a3'];
        $control_p2_a4 = $row['quiniela_p2_a4'];
        $control_p3 = $row['quiniela_p3'];
        $control_p3_a1 = $row['quiniela_p3_a1'];
        $control_p3_a3 = $row['quiniela_p3_a3'];
        $control_p4 = $row['quiniela_p4'];
        $control_p4_a4 = $row['quiniela_p4_a4'];
        $control_p4_a2 = $row['quiniela_p4_a2'];
        $control_p5 = $row['quiniela_p5'];
        $control_p5_a2 = $row['quiniela_p5_a2'];
        $control_p5_a3 = $row['quiniela_p5_a3'];
        $control_p6 = $row['quiniela_p6'];
        $control_p6_a4 = $row['quiniela_p6_a4'];
        $control_p6_a1 = $row['quiniela_p6_a1'];
        $control_p7 = $row['quiniela_p7'];
        $control_p7_b1 = $row['quiniela_p7_b1'];
        $control_p7_b2 = $row['quiniela_p7_b2'];
        $control_p8 = $row['quiniela_p8'];
        $control_p8_b3 = $row['quiniela_p8_b3'];
        $control_p8_b4 = $row['quiniela_p8_b4'];
        $control_p9 = $row['quiniela_p9'];
        $control_p9_b4 = $row['quiniela_p9_b4'];
        $control_p9_b2 = $row['quiniela_p9_b2'];
        $control_p10 = $row['quiniela_p10'];
        $control_p10_b1 = $row['quiniela_p10_b1'];
        $control_p10_b3 = $row['quiniela_p10_b3'];
        $control_p11 = $row['quiniela_p11'];
        $control_p11_b4 = $row['quiniela_p11_b4'];
        $control_p11_b1 = $row['quiniela_p11_b1'];
        $control_p12 = $row['quiniela_p12'];
        $control_p12_b2 = $row['quiniela_p12_b2'];
        $control_p12_b3 = $row['quiniela_p12_b3'];
        $control_p13 = $row['quiniela_p13'];
        $control_p13_c1 = $row['quiniela_p13_c1'];
        $control_p13_c2 = $row['quiniela_p13_c2'];
        $control_p14 = $row['quiniela_p14'];
        $control_p14_c3 = $row['quiniela_p14_c3'];
        $control_p14_c4 = $row['quiniela_p14_c4'];
        $control_p15 = $row['quiniela_p15'];
        $control_p15_c4 = $row['quiniela_p15_c4'];
        $control_p15_c2 = $row['quiniela_p15_c2'];
        $control_p16 = $row['quiniela_p16'];
        $control_p16_c1 = $row['quiniela_p16_c1'];
        $control_p16_c3 = $row['quiniela_p16_c3'];
        $control_p17 = $row['quiniela_p17'];
        $control_p17_c4 = $row['quiniela_p17_c4'];
        $control_p17_c1 = $row['quiniela_p17_c1'];
        $control_p18 = $row['quiniela_p18'];
        $control_p18_c2 = $row['quiniela_p18_c2'];
        $control_p18_c3 = $row['quiniela_p18_c3'];
        $control_p19 = $row['quiniela_p19'];
        $control_p19_d1 = $row['quiniela_p19_d1'];
        $control_p19_d2 = $row['quiniela_p19_d2'];
        $control_p20 = $row['quiniela_p20'];
        $control_p20_d3 = $row['quiniela_p20_d3'];
        $control_p20_d4 = $row['quiniela_p20_d4'];
        $control_p21 = $row['quiniela_p21'];
        $control_p21_d2 = $row['quiniela_p21_d2'];
        $control_p21_d4 = $row['quiniela_p21_d4'];
        $control_p22 = $row['quiniela_p22'];
        $control_p22_d3 = $row['quiniela_p22_d3'];
        $control_p22_d1 = $row['quiniela_p22_d1'];
        $control_p23 = $row['quiniela_p23'];
        $control_p23_d4 = $row['quiniela_p23_d4'];
        $control_p23_d1 = $row['quiniela_p23_d1'];
        $control_p24 = $row['quiniela_p24'];
        $control_p24_d2 = $row['quiniela_p24_d2'];
        $control_p24_d3 = $row['quiniela_p24_d3'];
        $control_p25 = $row['quiniela_p25'];
        $control_p25_e1 = $row['quiniela_p25_e1'];
        $control_p25_e2 = $row['quiniela_p25_e2'];
        $control_p26 = $row['quiniela_p26'];
        $control_p26_e3 = $row['quiniela_p26_e3'];
        $control_p26_e4 = $row['quiniela_p26_e4'];
        $control_p27 = $row['quiniela_p27'];
        $control_p27_e2 = $row['quiniela_p27_e2'];
        $control_p27_e4 = $row['quiniela_p27_e4'];
        $control_p28 = $row['quiniela_p28'];
        $control_p28_e3 = $row['quiniela_p28_e3'];
        $control_p28_e1 = $row['quiniela_p28_e1'];
        $control_p29 = $row['quiniela_p29'];
        $control_p29_e2 = $row['quiniela_p29_e2'];
        $control_p29_e3 = $row['quiniela_p29_e3'];
        $control_p30 = $row['quiniela_p30'];
        $control_p30_e4 = $row['quiniela_p30_e4'];
        $control_p30_e1 = $row['quiniela_p30_e1'];
        $control_p31 = $row['quiniela_p31'];
        $control_p31_f3 = $row['quiniela_p31_f3'];
        $control_p31_f4 = $row['quiniela_p31_f4'];
        $control_p32 = $row['quiniela_p32'];
        $control_p32_f1 = $row['quiniela_p32_f1'];
        $control_p32_f2 = $row['quiniela_p32_f2'];
        $control_p33 = $row['quiniela_p33'];
        $control_p33_f1 = $row['quiniela_p33_f1'];
        $control_p33_f3 = $row['quiniela_p33_f3'];
        $control_p34 = $row['quiniela_p34'];
        $control_p34_f4 = $row['quiniela_p34_f4'];
        $control_p34_f2 = $row['quiniela_p34_f2'];
        $control_p35 = $row['quiniela_p35'];
        $control_p35_f4 = $row['quiniela_p35_f4'];
        $control_p35_f1 = $row['quiniela_p35_f1'];
        $control_p36 = $row['quiniela_p36'];
        $control_p36_f2 = $row['quiniela_p36_f2'];
        $control_p36_f3 = $row['quiniela_p36_f3'];
        $control_p37 = $row['quiniela_p37'];
        $control_p37_g3 = $row['quiniela_p37_g3'];
        $control_p37_g4 = $row['quiniela_p37_g4'];
        $control_p38 = $row['quiniela_p38'];
        $control_p38_g1 = $row['quiniela_p38_g1'];
        $control_p38_g2 = $row['quiniela_p38_g2'];
        $control_p39 = $row['quiniela_p39'];
        $control_p39_g4 = $row['quiniela_p39_g4'];
        $control_p39_g2 = $row['quiniela_p39_g2'];
        $control_p40 = $row['quiniela_p40'];
        $control_p40_g1 = $row['quiniela_p40_g1'];
        $control_p40_g3 = $row['quiniela_p40_g3'];
        $control_p41 = $row['quiniela_p41'];
        $control_p41_g2 = $row['quiniela_p41_g2'];
        $control_p41_g3 = $row['quiniela_p41_g3'];
        $control_p42 = $row['quiniela_p42'];
        $control_p42_g4 = $row['quiniela_p42_g4'];
        $control_p42_g1 = $row['quiniela_p42_g1'];
        $control_p43 = $row['quiniela_p43'];
        $control_p43_h3 = $row['quiniela_p43_h3'];
        $control_p43_h4 = $row['quiniela_p43_h4'];
        $control_p44 = $row['quiniela_p44'];
        $control_p44_h1 = $row['quiniela_p44_h1'];
        $control_p44_h2 = $row['quiniela_p44_h2'];
        $control_p45 = $row['quiniela_p45'];
        $control_p45_h4 = $row['quiniela_p45_h4'];
        $control_p45_h2 = $row['quiniela_p45_h2'];
        $control_p46 = $row['quiniela_p46'];
        $control_p46_h1 = $row['quiniela_p46_h1'];
        $control_p46_h3 = $row['quiniela_p46_h3'];
        $control_p47 = $row['quiniela_p47'];
        $control_p47_h2 = $row['quiniela_p47_h2'];
        $control_p47_h3 = $row['quiniela_p47_h3'];
        $control_p48 = $row['quiniela_p48'];
        $control_p48_h4 = $row['quiniela_p48_h4'];
        $control_p48_h1 = $row['quiniela_p48_h1'];
                    

        }?>


<div class="contenedor_tabla">
    <table id="datos_tabla">
        <tr>
            <th>ID Quiniela</th>
            <th>Usuario</th>
            <th>Código</th>
            <th>Puntos acumulados</th>
            <th>Descargar Quiniela</th>
        </tr>


        <!-- Mostrar quiniela y puntos obtenidos -->
        <?php
        include_once '../php/conexion_bd.php';

        $query = "select*from tbl_quinielas ORDER BY quiniela_puntos DESC ";
        $ejecutar = mysqli_query($conexion, $query);
        while($row=mysqli_fetch_assoc($ejecutar)){

            $comparar_p1 = $row['quiniela_p1'];
            $comparar_p1_a1 = $row['quiniela_p1_a1'];
            $comparar_p1_a2 = $row['quiniela_p1_a2'];
            $comparar_p2 = $row['quiniela_p2'];
            $comparar_p2_a3 = $row['quiniela_p2_a3'];
            $comparar_p2_a4 = $row['quiniela_p2_a4'];
            $comparar_p3 = $row['quiniela_p3'];
            $comparar_p3_a1 = $row['quiniela_p3_a1'];
            $comparar_p3_a3 = $row['quiniela_p3_a3'];
            $comparar_p4 = $row['quiniela_p4'];
            $comparar_p4_a4 = $row['quiniela_p4_a4'];
            $comparar_p4_a2 = $row['quiniela_p4_a2'];
            $comparar_p5 = $row['quiniela_p5'];
            $comparar_p5_a2 = $row['quiniela_p5_a2'];
            $comparar_p5_a3 = $row['quiniela_p5_a3'];
            $comparar_p6 = $row['quiniela_p6'];
            $comparar_p6_a4 = $row['quiniela_p6_a4'];
            $comparar_p6_a1 = $row['quiniela_p6_a1'];
            $comparar_p7 = $row['quiniela_p7'];
            $comparar_p7_b1 = $row['quiniela_p7_b1'];
            $comparar_p7_b2 = $row['quiniela_p7_b2'];
            $comparar_p8 = $row['quiniela_p8'];
            $comparar_p8_b3 = $row['quiniela_p8_b3'];
            $comparar_p8_b4 = $row['quiniela_p8_b4'];
            $comparar_p9 = $row['quiniela_p9'];
            $comparar_p9_b4 = $row['quiniela_p9_b4'];
            $comparar_p9_b2 = $row['quiniela_p9_b2'];
            $comparar_p10 = $row['quiniela_p10'];
            $comparar_p10_b1 = $row['quiniela_p10_b1'];
            $comparar_p10_b3 = $row['quiniela_p10_b3'];
            $comparar_p11 = $row['quiniela_p11'];
            $comparar_p11_b4 = $row['quiniela_p11_b4'];
            $comparar_p11_b1 = $row['quiniela_p11_b1'];
            $comparar_p12 = $row['quiniela_p12'];
            $comparar_p12_b2 = $row['quiniela_p12_b2'];
            $comparar_p12_b3 = $row['quiniela_p12_b3'];
            $comparar_p13 = $row['quiniela_p13'];
            $comparar_p13_c1 = $row['quiniela_p13_c1'];
            $comparar_p13_c2 = $row['quiniela_p13_c2'];
            $comparar_p14 = $row['quiniela_p14'];
            $comparar_p14_c3 = $row['quiniela_p14_c3'];
            $comparar_p14_c4 = $row['quiniela_p14_c4'];
            $comparar_p15 = $row['quiniela_p15'];
            $comparar_p15_c4 = $row['quiniela_p15_c4'];
            $comparar_p15_c2 = $row['quiniela_p15_c2'];
            $comparar_p16 = $row['quiniela_p16'];
            $comparar_p16_c1 = $row['quiniela_p16_c1'];
            $comparar_p16_c3 = $row['quiniela_p16_c3'];
            $comparar_p17 = $row['quiniela_p17'];
            $comparar_p17_c4 = $row['quiniela_p17_c4'];
            $comparar_p17_c1 = $row['quiniela_p17_c1'];
            $comparar_p18 = $row['quiniela_p18'];
            $comparar_p18_c2 = $row['quiniela_p18_c2'];
            $comparar_p18_c3 = $row['quiniela_p18_c3'];
            $comparar_p19 = $row['quiniela_p19'];
            $comparar_p19_d1 = $row['quiniela_p19_d1'];
            $comparar_p19_d2 = $row['quiniela_p19_d2'];
            $comparar_p20 = $row['quiniela_p20'];
            $comparar_p20_d3 = $row['quiniela_p20_d3'];
            $comparar_p20_d4 = $row['quiniela_p20_d4'];
            $comparar_p21 = $row['quiniela_p21'];
            $comparar_p21_d2 = $row['quiniela_p21_d2'];
            $comparar_p21_d4 = $row['quiniela_p21_d4'];
            $comparar_p22 = $row['quiniela_p22'];
            $comparar_p22_d3 = $row['quiniela_p22_d3'];
            $comparar_p22_d1 = $row['quiniela_p22_d1'];
            $comparar_p23 = $row['quiniela_p23'];
            $comparar_p23_d4 = $row['quiniela_p23_d4'];
            $comparar_p23_d1 = $row['quiniela_p23_d1'];
            $comparar_p24 = $row['quiniela_p24'];
            $comparar_p24_d2 = $row['quiniela_p24_d2'];
            $comparar_p24_d3 = $row['quiniela_p24_d3'];
            $comparar_p25 = $row['quiniela_p25'];
            $comparar_p25_e1 = $row['quiniela_p25_e1'];
            $comparar_p25_e2 = $row['quiniela_p25_e2'];
            $comparar_p26 = $row['quiniela_p26'];
            $comparar_p26_e3 = $row['quiniela_p26_e3'];
            $comparar_p26_e4 = $row['quiniela_p26_e4'];
            $comparar_p27 = $row['quiniela_p27'];
            $comparar_p27_e2 = $row['quiniela_p27_e2'];
            $comparar_p27_e4 = $row['quiniela_p27_e4'];
            $comparar_p28 = $row['quiniela_p28'];
            $comparar_p28_e3 = $row['quiniela_p28_e3'];
            $comparar_p28_e1 = $row['quiniela_p28_e1'];
            $comparar_p29 = $row['quiniela_p29'];
            $comparar_p29_e2 = $row['quiniela_p29_e2'];
            $comparar_p29_e3 = $row['quiniela_p29_e3'];
            $comparar_p30 = $row['quiniela_p30'];
            $comparar_p30_e4 = $row['quiniela_p30_e4'];
            $comparar_p30_e1 = $row['quiniela_p30_e1'];
            $comparar_p31 = $row['quiniela_p31'];
            $comparar_p31_f3 = $row['quiniela_p31_f3'];
            $comparar_p31_f4 = $row['quiniela_p31_f4'];
            $comparar_p32 = $row['quiniela_p32'];
            $comparar_p32_f1 = $row['quiniela_p32_f1'];
            $comparar_p32_f2 = $row['quiniela_p32_f2'];
            $comparar_p33 = $row['quiniela_p33'];
            $comparar_p33_f1 = $row['quiniela_p33_f1'];
            $comparar_p33_f3 = $row['quiniela_p33_f3'];
            $comparar_p34 = $row['quiniela_p34'];
            $comparar_p34_f4 = $row['quiniela_p34_f4'];
            $comparar_p34_f2 = $row['quiniela_p34_f2'];
            $comparar_p35 = $row['quiniela_p35'];
            $comparar_p35_f4 = $row['quiniela_p35_f4'];
            $comparar_p35_f1 = $row['quiniela_p35_f1'];
            $comparar_p36 = $row['quiniela_p36'];
            $comparar_p36_f2 = $row['quiniela_p36_f2'];
            $comparar_p36_f3 = $row['quiniela_p36_f3'];
            $comparar_p37 = $row['quiniela_p37'];
            $comparar_p37_g3 = $row['quiniela_p37_g3'];
            $comparar_p37_g4 = $row['quiniela_p37_g4'];
            $comparar_p38 = $row['quiniela_p38'];
            $comparar_p38_g1 = $row['quiniela_p38_g1'];
            $comparar_p38_g2 = $row['quiniela_p38_g2'];
            $comparar_p39 = $row['quiniela_p39'];
            $comparar_p39_g4 = $row['quiniela_p39_g4'];
            $comparar_p39_g2 = $row['quiniela_p39_g2'];
            $comparar_p40 = $row['quiniela_p40'];
            $comparar_p40_g1 = $row['quiniela_p40_g1'];
            $comparar_p40_g3 = $row['quiniela_p40_g3'];
            $comparar_p41 = $row['quiniela_p41'];
            $comparar_p41_g2 = $row['quiniela_p41_g2'];
            $comparar_p41_g3 = $row['quiniela_p41_g3'];
            $comparar_p42 = $row['quiniela_p42'];
            $comparar_p42_g4 = $row['quiniela_p42_g4'];
            $comparar_p42_g1 = $row['quiniela_p42_g1'];
            $comparar_p43 = $row['quiniela_p43'];
            $comparar_p43_h3 = $row['quiniela_p43_h3'];
            $comparar_p43_h4 = $row['quiniela_p43_h4'];
            $comparar_p44 = $row['quiniela_p44'];
            $comparar_p44_h1 = $row['quiniela_p44_h1'];
            $comparar_p44_h2 = $row['quiniela_p44_h2'];
            $comparar_p45 = $row['quiniela_p45'];
            $comparar_p45_h4 = $row['quiniela_p45_h4'];
            $comparar_p45_h2 = $row['quiniela_p45_h2'];
            $comparar_p46 = $row['quiniela_p46'];
            $comparar_p46_h1 = $row['quiniela_p46_h1'];
            $comparar_p46_h3 = $row['quiniela_p46_h3'];
            $comparar_p47 = $row['quiniela_p47'];
            $comparar_p47_h2 = $row['quiniela_p47_h2'];
            $comparar_p47_h3 = $row['quiniela_p47_h3'];
            $comparar_p48 = $row['quiniela_p48'];
            $comparar_p48_h4 = $row['quiniela_p48_h4'];
            $comparar_p48_h1 = $row['quiniela_p48_h1'];

        // Cálculo de puntos

        if ($control_p1 === $comparar_p1) { $resultado_p1 = 1; if(($comparar_p1_a1 === $control_p1_a1) and ($comparar_p1_a2 === $control_p1_a2)){$goles_p1=1;} else{$goles_p1=0;}} else {$resultado_p1= 0;$goles_p1=0;}
        if ($control_p2 === $comparar_p2) { $resultado_p2 = 1; if(($comparar_p2_a3 === $control_p2_a3) and ($comparar_p2_a4 === $control_p2_a4)){$goles_p2=1;} else{$goles_p2=0;}} else {$resultado_p2= 0;$goles_p2=0;}
        if ($control_p3 === $comparar_p3) { $resultado_p3 = 1; if(($comparar_p3_a1 === $control_p3_a1) and ($comparar_p3_a3 === $control_p3_a3)){$goles_p3=1;} else{$goles_p3=0;}} else {$resultado_p3= 0;$goles_p3=0;}
        if ($control_p4 === $comparar_p4) { $resultado_p4 = 1; if(($comparar_p4_a4 === $control_p4_a4) and ($comparar_p4_a2 === $control_p4_a2)){$goles_p4=1;} else{$goles_p4=0;}} else {$resultado_p4= 0;$goles_p4=0;}
        if ($control_p5 === $comparar_p5) { $resultado_p5 = 1; if(($comparar_p5_a2 === $control_p5_a2) and ($comparar_p5_a3 === $control_p5_a3)){$goles_p5=1;} else{$goles_p5=0;}} else {$resultado_p5= 0;$goles_p5=0;}
        if ($control_p6 === $comparar_p6) { $resultado_p6 = 1; if(($comparar_p6_a4 === $control_p6_a4) and ($comparar_p6_a1 === $control_p6_a1)){$goles_p6=1;} else{$goles_p6=0;}} else {$resultado_p6= 0;$goles_p6=0;}
        if ($control_p7 === $comparar_p7) { $resultado_p7 = 1; if(($comparar_p7_b1 === $control_p7_b1) and ($comparar_p7_b2 === $control_p7_b2)){$goles_p7=1;} else{$goles_p7=0;}} else {$resultado_p7= 0;$goles_p7=0;}
        if ($control_p8 === $comparar_p8) { $resultado_p8 = 1; if(($comparar_p8_b3 === $control_p8_b3) and ($comparar_p8_b4 === $control_p8_b4)){$goles_p8=1;} else{$goles_p8=0;}} else {$resultado_p8= 0;$goles_p8=0;}
        if ($control_p9 === $comparar_p9) { $resultado_p9 = 1; if(($comparar_p9_b4 === $control_p9_b4) and ($comparar_p9_b2 === $control_p9_b2)){$goles_p9=1;} else{$goles_p9=0;}} else {$resultado_p9= 0;$goles_p9=0;}
        if ($control_p10 === $comparar_p10) { $resultado_p10 = 1; if(($comparar_p10_b1 === $control_p10_b1) and ($comparar_p10_b3 === $control_p10_b3)){$goles_p10=1;} else{$goles_p10=0;}} else {$resultado_p10= 0;$goles_p10=0;}
        if ($control_p11 === $comparar_p11) { $resultado_p11 = 1; if(($comparar_p11_b4 === $control_p11_b4) and ($comparar_p11_b1 === $control_p11_b1)){$goles_p11=1;} else{$goles_p11=0;}} else {$resultado_p11= 0;$goles_p11=0;}
        if ($control_p12 === $comparar_p12) { $resultado_p12 = 1; if(($comparar_p12_b2 === $control_p12_b2) and ($comparar_p12_b3 === $control_p12_b3)){$goles_p12=1;} else{$goles_p12=0;}} else {$resultado_p12= 0;$goles_p12=0;}
        if ($control_p13 === $comparar_p13) { $resultado_p13 = 1; if(($comparar_p13_c1 === $control_p13_c1) and ($comparar_p13_c2 === $control_p13_c2)){$goles_p13=1;} else{$goles_p13=0;}} else {$resultado_p13= 0;$goles_p13=0;}
        if ($control_p14 === $comparar_p14) { $resultado_p14 = 1; if(($comparar_p14_c3 === $control_p14_c3) and ($comparar_p14_c4 === $control_p14_c4)){$goles_p14=1;} else{$goles_p14=0;}} else {$resultado_p14= 0;$goles_p14=0;}
        if ($control_p15 === $comparar_p15) { $resultado_p15 = 1; if(($comparar_p15_c4 === $control_p15_c4) and ($comparar_p15_c2 === $control_p15_c2)){$goles_p15=1;} else{$goles_p15=0;}} else {$resultado_p15= 0;$goles_p15=0;}
        if ($control_p16 === $comparar_p16) { $resultado_p16 = 1; if(($comparar_p16_c1 === $control_p16_c1) and ($comparar_p16_c3 === $control_p16_c3)){$goles_p16=1;} else{$goles_p16=0;}} else {$resultado_p16= 0;$goles_p16=0;}
        if ($control_p17 === $comparar_p17) { $resultado_p17 = 1; if(($comparar_p17_c4 === $control_p17_c4) and ($comparar_p17_c1 === $control_p17_c1)){$goles_p17=1;} else{$goles_p17=0;}} else {$resultado_p17= 0;$goles_p17=0;}
        if ($control_p18 === $comparar_p18) { $resultado_p18 = 1; if(($comparar_p18_c2 === $control_p18_c2) and ($comparar_p18_c3 === $control_p18_c3)){$goles_p18=1;} else{$goles_p18=0;}} else {$resultado_p18= 0;$goles_p18=0;}
        if ($control_p19 === $comparar_p19) { $resultado_p19 = 1; if(($comparar_p19_d1 === $control_p19_d1) and ($comparar_p19_d2 === $control_p19_d2)){$goles_p19=1;} else{$goles_p19=0;}} else {$resultado_p19= 0;$goles_p19=0;}
        if ($control_p20 === $comparar_p20) { $resultado_p20 = 1; if(($comparar_p20_d3 === $control_p20_d3) and ($comparar_p20_d4 === $control_p20_d4)){$goles_p20=1;} else{$goles_p20=0;}} else {$resultado_p20= 0;$goles_p20=0;}
        if ($control_p21 === $comparar_p21) { $resultado_p21 = 1; if(($comparar_p21_d2 === $control_p21_d2) and ($comparar_p21_d4 === $control_p21_d4)){$goles_p21=1;} else{$goles_p21=0;}} else {$resultado_p21= 0;$goles_p21=0;}
        if ($control_p22 === $comparar_p22) { $resultado_p22 = 1; if(($comparar_p22_d3 === $control_p22_d3) and ($comparar_p22_d1 === $control_p22_d1)){$goles_p22=1;} else{$goles_p22=0;}} else {$resultado_p22= 0;$goles_p22=0;}
        if ($control_p23 === $comparar_p23) { $resultado_p23 = 1; if(($comparar_p23_d4 === $control_p23_d4) and ($comparar_p23_d1 === $control_p23_d1)){$goles_p23=1;} else{$goles_p23=0;}} else {$resultado_p23= 0;$goles_p23=0;}
        if ($control_p24 === $comparar_p24) { $resultado_p24 = 1; if(($comparar_p24_d2 === $control_p24_d2) and ($comparar_p24_d3 === $control_p24_d3)){$goles_p24=1;} else{$goles_p24=0;}} else {$resultado_p24= 0;$goles_p24=0;}
        if ($control_p25 === $comparar_p25) { $resultado_p25 = 1; if(($comparar_p25_e1 === $control_p25_e1) and ($comparar_p25_e2 === $control_p25_e2)){$goles_p25=1;} else{$goles_p25=0;}} else {$resultado_p25= 0;$goles_p25=0;}
        if ($control_p26 === $comparar_p26) { $resultado_p26 = 1; if(($comparar_p26_e3 === $control_p26_e3) and ($comparar_p26_e4 === $control_p26_e4)){$goles_p26=1;} else{$goles_p26=0;}} else {$resultado_p26= 0;$goles_p26=0;}
        if ($control_p27 === $comparar_p27) { $resultado_p27 = 1; if(($comparar_p27_e2 === $control_p27_e2) and ($comparar_p27_e4 === $control_p27_e4)){$goles_p27=1;} else{$goles_p27=0;}} else {$resultado_p27= 0;$goles_p27=0;}
        if ($control_p28 === $comparar_p28) { $resultado_p28 = 1; if(($comparar_p28_e3 === $control_p28_e3) and ($comparar_p28_e1 === $control_p28_e1)){$goles_p28=1;} else{$goles_p28=0;}} else {$resultado_p28= 0;$goles_p28=0;}
        if ($control_p29 === $comparar_p29) { $resultado_p29 = 1; if(($comparar_p29_e2 === $control_p29_e2) and ($comparar_p29_e3 === $control_p29_e3)){$goles_p29=1;} else{$goles_p29=0;}} else {$resultado_p29= 0;$goles_p29=0;}
        if ($control_p30 === $comparar_p30) { $resultado_p30 = 1; if(($comparar_p30_e4 === $control_p30_e4) and ($comparar_p30_e1 === $control_p30_e1)){$goles_p30=1;} else{$goles_p30=0;}} else {$resultado_p30= 0;$goles_p30=0;}
        if ($control_p31 === $comparar_p31) { $resultado_p31 = 1; if(($comparar_p31_f3 === $control_p31_f3) and ($comparar_p31_f4 === $control_p31_f4)){$goles_p31=1;} else{$goles_p31=0;}} else {$resultado_p31= 0;$goles_p31=0;}
        if ($control_p32 === $comparar_p32) { $resultado_p32 = 1; if(($comparar_p32_f1 === $control_p32_f1) and ($comparar_p32_f2 === $control_p32_f2)){$goles_p32=1;} else{$goles_p32=0;}} else {$resultado_p32= 0;$goles_p32=0;}
        if ($control_p33 === $comparar_p33) { $resultado_p33 = 1; if(($comparar_p33_f1 === $control_p33_f1) and ($comparar_p33_f3 === $control_p33_f3)){$goles_p33=1;} else{$goles_p33=0;}} else {$resultado_p33= 0;$goles_p33=0;}
        if ($control_p34 === $comparar_p34) { $resultado_p34 = 1; if(($comparar_p34_f4 === $control_p34_f4) and ($comparar_p34_f2 === $control_p34_f2)){$goles_p34=1;} else{$goles_p34=0;}} else {$resultado_p34= 0;$goles_p34=0;}
        if ($control_p35 === $comparar_p35) { $resultado_p35 = 1; if(($comparar_p35_f4 === $control_p35_f4) and ($comparar_p35_f1 === $control_p35_f1)){$goles_p35=1;} else{$goles_p35=0;}} else {$resultado_p35= 0;$goles_p35=0;}
        if ($control_p36 === $comparar_p36) { $resultado_p36 = 1; if(($comparar_p36_f2 === $control_p36_f2) and ($comparar_p36_f3 === $control_p36_f3)){$goles_p36=1;} else{$goles_p36=0;}} else {$resultado_p36= 0;$goles_p36=0;}
        if ($control_p37 === $comparar_p37) { $resultado_p37 = 1; if(($comparar_p37_g3 === $control_p37_g3) and ($comparar_p37_g4 === $control_p37_g4)){$goles_p37=1;} else{$goles_p37=0;}} else {$resultado_p37= 0;$goles_p37=0;}
        if ($control_p38 === $comparar_p38) { $resultado_p38 = 1; if(($comparar_p38_g1 === $control_p38_g1) and ($comparar_p38_g2 === $control_p38_g2)){$goles_p38=1;} else{$goles_p38=0;}} else {$resultado_p38= 0;$goles_p38=0;}
        if ($control_p39 === $comparar_p39) { $resultado_p39 = 1; if(($comparar_p39_g4 === $control_p39_g4) and ($comparar_p39_g2 === $control_p39_g2)){$goles_p39=1;} else{$goles_p39=0;}} else {$resultado_p39= 0;$goles_p39=0;}
        if ($control_p40 === $comparar_p40) { $resultado_p40 = 1; if(($comparar_p40_g1 === $control_p40_g1) and ($comparar_p40_g3 === $control_p40_g3)){$goles_p40=1;} else{$goles_p40=0;}} else {$resultado_p40= 0;$goles_p40=0;}
        if ($control_p41 === $comparar_p41) { $resultado_p41 = 1; if(($comparar_p41_g2 === $control_p41_g2) and ($comparar_p41_g3 === $control_p41_g3)){$goles_p41=1;} else{$goles_p41=0;}} else {$resultado_p41= 0;$goles_p41=0;}
        if ($control_p42 === $comparar_p42) { $resultado_p42 = 1; if(($comparar_p42_g4 === $control_p42_g4) and ($comparar_p42_g1 === $control_p42_g1)){$goles_p42=1;} else{$goles_p42=0;}} else {$resultado_p42= 0;$goles_p42=0;}
        if ($control_p43 === $comparar_p43) { $resultado_p43 = 1; if(($comparar_p43_h3 === $control_p43_h3) and ($comparar_p43_h4 === $control_p43_h4)){$goles_p43=1;} else{$goles_p43=0;}} else {$resultado_p43= 0;$goles_p43=0;}
        if ($control_p44 === $comparar_p44) { $resultado_p44 = 1; if(($comparar_p44_h1 === $control_p44_h1) and ($comparar_p44_h2 === $control_p44_h2)){$goles_p44=1;} else{$goles_p44=0;}} else {$resultado_p44= 0;$goles_p44=0;}
        if ($control_p45 === $comparar_p45) { $resultado_p45 = 1; if(($comparar_p45_h4 === $control_p45_h4) and ($comparar_p45_h2 === $control_p45_h2)){$goles_p45=1;} else{$goles_p45=0;}} else {$resultado_p45= 0;$goles_p45=0;}
        if ($control_p46 === $comparar_p46) { $resultado_p46 = 1; if(($comparar_p46_h1 === $control_p46_h1) and ($comparar_p46_h3 === $control_p46_h3)){$goles_p46=1;} else{$goles_p46=0;}} else {$resultado_p46= 0;$goles_p46=0;}
        if ($control_p47 === $comparar_p47) { $resultado_p47 = 1; if(($comparar_p47_h2 === $control_p47_h2) and ($comparar_p47_h3 === $control_p47_h3)){$goles_p47=1;} else{$goles_p47=0;}} else {$resultado_p47= 0;$goles_p47=0;}
        if ($control_p48 === $comparar_p48) { $resultado_p48 = 1; if(($comparar_p48_h4 === $control_p48_h4) and ($comparar_p48_h1 === $control_p48_h1)){$goles_p48=1;} else{$goles_p48=0;}} else {$resultado_p48= 0;$goles_p48=0;}
        
        $suma_resultado =   $resultado_p1 + $resultado_p2 + $resultado_p3 + $resultado_p4 + $resultado_p5 + $resultado_p6 + $resultado_p7 + $resultado_p8 + $resultado_p9 + $resultado_p10 + $resultado_p11 + $resultado_p12 + $resultado_p13 + $resultado_p14 + $resultado_p15 + $resultado_p16 + $resultado_p17 + $resultado_p18 + $resultado_p19 + $resultado_p20 + $resultado_p21 + $resultado_p22 + $resultado_p23 + $resultado_p24 + $resultado_p25 + $resultado_p26 + $resultado_p27 + $resultado_p28 + $resultado_p29 + $resultado_p30 + $resultado_p31 + $resultado_p32 + $resultado_p33 + $resultado_p34 + $resultado_p35 + $resultado_p36 + $resultado_p37 + $resultado_p38 + $resultado_p39 + $resultado_p40 + $resultado_p41 + $resultado_p42 + $resultado_p43 + $resultado_p44 + $resultado_p45 + $resultado_p46 + $resultado_p47 + $resultado_p48;
        $suma_goles =   $goles_p1 + $goles_p2 + $goles_p3 + $goles_p4 + $goles_p5 + $goles_p6 + $goles_p7 + $goles_p8 + $goles_p9 + $goles_p10 + $goles_p11 + $goles_p12 + $goles_p13 + $goles_p14 + $goles_p15 + $goles_p16 + $goles_p17 + $goles_p18 + $goles_p19 + $goles_p20 + $goles_p21 + $goles_p22 + $goles_p23 + $goles_p24 + $goles_p25 + $goles_p26 + $goles_p27 + $goles_p28 + $goles_p29 + $goles_p30 + $goles_p31 + $goles_p32 + $goles_p33 + $goles_p34 + $goles_p35 + $goles_p36 + $goles_p37 + $goles_p38 + $goles_p39 + $goles_p40 + $goles_p41 + $goles_p42 + $goles_p43 + $goles_p44 + $goles_p45 + $goles_p46 + $goles_p47 + $goles_p48;
        $suma_total = $suma_resultado + $suma_goles;

            ?>

<tr>
            <td><?php echo $row['id_quiniela']; ?></td>
            <td><?php echo $row['quiniela_usuario']; ?></td>
            <td><?php echo $row['quiniela_codigo']; ?></td>
            <td><?php echo $suma_total; ?></td>
            <td><a href="../php/ver_quiniela.php?id=<?php echo $row['id_quiniela']; ?>">Descargar</a></td>
        </tr>

        <?php } ?>

    </table>
</div>



</body>
</html>