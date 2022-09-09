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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llena tu quiniela</title>
    <link rel="stylesheet" href="../css/estilos_quiniela.css">
</head>
<body>

    <header>
        <nav>
            <ul class="nav__link">
                <li>Bienvenido <?php echo $_SESSION['usuario'];?></li>
                <li><a href="../php/panel.php">Panel principal</a></li>   
            </ul>
        </nav>
        <button><a href="../php/cerrar_sesion.php">Cerrar sesión</a></button>
    </header>

    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><a href="./index.php"><img src="../img/logo_100.png" alt=""></a></div>
                    <ul class="progress-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>Grupo 1</p>
                        </li>
                        <li class="step">
                            <span>2</span>
                            <p>Grupo 2</p>
                        </li>
                        <li class="step">
                            <span>3</span>
                            <p>Grupo 3</p>
                        </li>
                        <li class="step">
                            <span>4</span>
                            <p>Grupo 4</p>
                        </li>
                        <li class="step">
                            <span>5</span>
                            <p>Grupo 5</p>
                        </li>
                        <li class="step">
                            <span>6</span>
                            <p>Grupo 6</p>
                        </li>
                        <li class="step">
                            <span>7</span>
                            <p>Grupo 7</p>
                        </li>
                        <li class="step">
                            <span>8</span>
                            <p>Grupo 8</p>
                        </li>
                    </ul>
                </div>
            <form action="">
                    <div class="form-one form-step active">
                        <div class="bg-svg"></div>
                        <h2>Quiniela Grupo A</h2>
                        <p>Anota el marcador</p>
                        <div>
                            <label>Qatar VS Ecuador</label>
                            <div class="grouping">
                                <img src="../img/selecciones/qatar.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p1_a1" id="p1_a1">
                                <input type="number" step="1" min="0" placeholder="0" name="p1_a2" id="p1_a2">
                                <img src="../img/selecciones/ecuador.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Senegal VS Paises Bajos</label>
                            <div class="grouping">
                                <img src="../img/selecciones/senegal.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p2_a3" id="p2_a3">
                                <input type="number" step="1" min="0" placeholder="0" name="p2_a4" id="p2_a4">
                                <img src="../img/selecciones/paisesbajos.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Qatar VS Senegal</label>
                            <div class="grouping">
                                <img src="../img/selecciones/qatar.png"  alt=""> 
                                <input type="number" step="1" min="0" placeholder="0" name="p3_a1" id="p3_a1">
                                <input type="number" step="1" min="0" placeholder="0" name="p3_a3" id="p3_a3">
                                <img src="../img/selecciones/senegal.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Paises Bajos VS Ecuador</label>
                            <div class="grouping">
                                <img src="../img/selecciones/paisesbajos.png"  alt=""> 
                                <input type="number" step="1" min="0" placeholder="0" name="p4_a4" id="p4_a4">
                                <input type="number" step="1" min="0" placeholder="0" name="p4_a2" id="p4_a2">
                                <img src="../img/selecciones/ecuador.png"  alt=""> 
                            </div>
                        </div>
                        <div>
                            <label>Ecuador VS Senegal</label>
                            <div class="grouping">
                                <img src="../img/selecciones/ecuador.png"  alt=""> 
                                <input type="number" step="1" min="0" placeholder="0" name="p5_a2" id="p5_a2">
                                <input type="number" step="1" min="0" placeholder="0" name="p5_a3" id="p5_a3">
                                <img src="../img/selecciones/senegal.png"  alt=""> 
                            </div>
                        </div>
                        <div>
                            <label>Paises Bajos VS Qatar</label>
                            <div class="grouping">
                                <img src="../img/selecciones/paisesbajos.png"  alt=""> 
                                <input type="number" step="1" min="0" placeholder="0" name="p6_a4" id="p6_a4">
                                <input type="number" step="1" min="0" placeholder="0" name="p6_a1" id="p6_a1">
                                <img src="../img/selecciones/qatar.png"  alt=""> 
                            </div>
                        </div>
                    </div>

                    <div class="form-two form-step">
                        <div class="bg-svg"></div>
                        <h2>Quiniela Grupo B</h2>
                        <p>Anota el marcador</p>
                        <div>
                            <label>Inglaterra VS Irán </label>
                            <div class="grouping">
                                <img src="../img/selecciones/inglaterra.png"  alt=""> 
                                <input type="number" step="1" min="0" placeholder="0" name="p7_b1" id="p7_b1">
                                <input type="number" step="1" min="0" placeholder="0" name="p7_b2" id="p7_b2">
                                <img src="../img/selecciones/iran.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  Estados Unidos VS Gales  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/usa.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p8_b3" id="p8_b3">
                                <input type="number" step="1" min="0" placeholder="0" name="p8_b4" id="p8_b4">
                                <img src="../img/selecciones/gales.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  Inglaterra VS Estados Unidos  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/inglaterra.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p9_b1" id="p9_b1">
                                <input type="number" step="1" min="0" placeholder="0" name="p9_b3" id="p9_b3">
                                <img src="../img/selecciones/usa.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Gales VS Irán</label>
                            <div class="grouping">
                                <img src="../img/selecciones/gales.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p10_b4" id="p10_b4">
                                <input type="number" step="1" min="0" placeholder="0" name="p10_b2" id="p10_b2">
                                <img src="../img/selecciones/iran.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Irán VS Estados Unidos</label>
                            <div class="grouping">
                                <img src="../img/selecciones/iran.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p11_b2" id="p11_b2">
                                <input type="number" step="1" min="0" placeholder="0" name="p11_b3" id="p11_b3">
                                <img src="../img/selecciones/usa.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Gales VS Inglaterra</label>
                            <div class="grouping">
                                <img src="../img/selecciones/gales.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p12_b4" id="p12_b4">
                                <input type="number" step="1" min="0" placeholder="0" name="p12_b1" id="p12_b1">
                                <img src="../img/selecciones/inglaterra.png"  alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-three form-step">
                        <div class="bg-svg"></div>
                        <h2>Quiniela Grupo C</h2>
                        <p>Anota el marcador</p>
                        <div>
                            <label>Argentina VS Arabia Saudita </label>
                            <div class="grouping">
                                <img src="../img/selecciones/argentina.png"  alt=""> 
                                <input type="number" step="1" min="0" placeholder="0" name="p13_c1" id="p13_c1">
                                <input type="number" step="1" min="0" placeholder="0" name="p13_c2" id="p13_c2">
                                <img src="../img/selecciones/arabiasaudita.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  México VS Polonia  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/mexico.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p14_c3" id="p14_c3">
                                <input type="number" step="1" min="0" placeholder="0" name="p14_c4" id="p14_c4">
                                <img src="../img/selecciones/polonia.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  Polonia VS Arabia Saudita  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/polonia.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p15_c1" id="p15_c1">
                                <input type="number" step="1" min="0" placeholder="0" name="p15_c3" id="p15_c3">
                                <img src="../img/selecciones/arabiasaudita.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Argentina VS México</label>
                            <div class="grouping">
                                <img src="../img/selecciones/argentina.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p16_c4" id="p16_c4">
                                <input type="number" step="1" min="0" placeholder="0" name="p16_c2" id="p16_c2">
                                <img src="../img/selecciones/mexico.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Polonia VS Argentina</label>
                            <div class="grouping">
                                <img src="../img/selecciones/polonia.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p17_c2" id="p17_c2">
                                <input type="number" step="1" min="0" placeholder="0" name="p17_c3" id="p17_c3">
                                <img src="../img/selecciones/argentina.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Arabia Saudita VS México</label>
                            <div class="grouping">
                                <img src="../img/selecciones/arabiasaudita.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p18_c4" id="p18_c4">
                                <input type="number" step="1" min="0" placeholder="0" name="p18_c1" id="p18_c1">
                                <img src="../img/selecciones/mexico.png"  alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-four form-step">
                        <div class="bg-svg"></div>
                        <h2>Quiniela Grupo D</h2>
                        <p>Anota el marcador</p>
                        <div>
                            <label>Dinamarca VS Túnez </label>
                            <div class="grouping">
                                <img src="../img/selecciones/dinamarca.png"  alt=""> 
                                <input type="number" step="1" min="0" placeholder="0" name="p19_d1" id="p19_d1">
                                <input type="number" step="1" min="0" placeholder="0" name="p19_d2" id="p19_d2">
                                <img src="../img/selecciones/tunez.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  Francia VS Australia  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/francia.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p20_d3" id="p14_d3">
                                <input type="number" step="1" min="0" placeholder="0" name="p20_d4" id="p14_d4">
                                <img src="../img/selecciones/australia.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label> Túnez VS Australia  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/tunez.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p21_d1" id="p21_d1">
                                <input type="number" step="1" min="0" placeholder="0" name="p21_d3" id="p21_d3">
                                <img src="../img/selecciones/australia.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Francia VS Dinamarca</label>
                            <div class="grouping">
                                <img src="../img/selecciones/francia.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p22_d4" id="p22_d4">
                                <input type="number" step="1" min="0" placeholder="0" name="p22_d2" id="p22_d2">
                                <img src="../img/selecciones/dinamarca.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Túnez VS Francia</label>
                            <div class="grouping">
                                <img src="../img/selecciones/tunez.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p23_d2" id="p23_d2">
                                <input type="number" step="1" min="0" placeholder="0" name="p23_d3" id="p23_d3">
                                <img src="../img/selecciones/francia.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Australia VS Dinamarca</label>
                            <div class="grouping">
                                <img src="../img/selecciones/australia.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p24_d4" id="p24_d4">
                                <input type="number" step="1" min="0" placeholder="0" name="p24_d1" id="p24_d1">
                                <img src="../img/selecciones/dinamarca.png"  alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-five form-step">
                        <div class="bg-svg"></div>
                        <h2>Quiniela Grupo E</h2>
                        <p>Anota el marcador</p>
                        <div>
                            <label>Alemania VS Japón</label>
                            <div class="grouping">
                                <img src="../img/selecciones/alemania.png"  alt=""> 
                                <input type="number" step="1" min="0" placeholder="0" name="p25_e1" id="p25_e1">
                                <input type="number" step="1" min="0" placeholder="0" name="p25_e2" id="p25_e2">
                                <img src="../img/selecciones/japon.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  España VS Costa Rica  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/espana.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p26_e3" id="p25_e3">
                                <input type="number" step="1" min="0" placeholder="0" name="p26_e4" id="p25_e4">
                                <img src="../img/selecciones/costarica.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  Japón VS Costa Rica  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/japon.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p27_e1" id="p27_e1">
                                <input type="number" step="1" min="0" placeholder="0" name="p27_e3" id="p27_e3">
                                <img src="../img/selecciones/costarica.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>España VS Alemania</label>
                            <div class="grouping">
                                <img src="../img/selecciones/espana.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p28_e4" id="p28_e4">
                                <input type="number" step="1" min="0" placeholder="0" name="p28_e2" id="p28_e2">
                                <img src="../img/selecciones/alemania.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Japón VS España</label>
                            <div class="grouping">
                                <img src="../img/selecciones/japon.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p29_e2" id="p29_e2">
                                <input type="number" step="1" min="0" placeholder="0" name="p29_e3" id="p29_e3">
                                <img src="../img/selecciones/espana.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Costa Rica VS Alemania</label>
                            <div class="grouping">
                                <img src="../img/selecciones/costarica.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p30_e4" id="p30_e4">
                                <input type="number" step="1" min="0" placeholder="0" name="p30_e1" id="p30_e1">
                                <img src="../img/selecciones/alemania.png"  alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-six form-step">
                        <div class="bg-svg"></div>
                        <h2>Quiniela Grupo F</h2>
                        <p>Anota el marcador</p>
                        <div>
                            <label>Marruecos VS Croacia </label>
                            <div class="grouping">
                                <img src="../img/selecciones/marruecos.png"  alt=""> 
                                <input type="number" step="1" min="0" placeholder="0" name="p31_f1" id="p31_f1">
                                <input type="number" step="1" min="0" placeholder="0" name="p31_f2" id="p31_f2">
                                <img src="../img/selecciones/croacia.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  Bélgica VS Canadá  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/belgica.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p32_f3" id="p32_f3">
                                <input type="number" step="1" min="0" placeholder="0" name="p32_f4" id="p32_f4">
                                <img src="../img/selecciones/canada.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  Bélgica VS Marruecos  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/belgica.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p33_f1" id="p33_f1">
                                <input type="number" step="1" min="0" placeholder="0" name="p33_f3" id="p33_f3">
                                <img src="../img/selecciones/marruecos.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Croacia VS Canadá</label>
                            <div class="grouping">
                                <img src="../img/selecciones/croacia.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p34_f4" id="p34_f4">
                                <input type="number" step="1" min="0" placeholder="0" name="p34_f2" id="p34_f2">
                                <img src="../img/selecciones/canada.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Croacia VS Bélgica</label>
                            <div class="grouping">
                                <img src="../img/selecciones/croacia.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p35_f2" id="p35_f2">
                                <input type="number" step="1" min="0" placeholder="0" name="p35_f3" id="p35_f3">
                                <img src="../img/selecciones/belgica.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Canadá VS Marruecos</label>
                            <div class="grouping">
                                <img src="../img/selecciones/canada.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p36_f4" id="p36_f4">
                                <input type="number" step="1" min="0" placeholder="0" name="p36_f1" id="p36_f1">
                                <img src="../img/selecciones/marruecos.png"  alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-seven form-step">
                        <div class="bg-svg"></div>
                        <h2>Quiniela Grupo G</h2>
                        <p>Anota el marcador</p>
                        <div>
                            <label>Suiza VS Camerún </label>
                            <div class="grouping">
                                <img src="../img/selecciones/suiza.png"  alt=""> 
                                <input type="number" step="1" min="0" placeholder="0" name="p37_g1" id="p37_g1">
                                <input type="number" step="1" min="0" placeholder="0" name="p37_g2" id="p37_g2">
                                <img src="../img/selecciones/camerun.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  Brasil VS Serbia  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/brasil.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p38_g3" id="p38_g3">
                                <input type="number" step="1" min="0" placeholder="0" name="p38_g4" id="p38_g4">
                                <img src="../img/selecciones/serbia.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  Camerún VS Serbia  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/camerun.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p39_g1" id="p39_g1">
                                <input type="number" step="1" min="0" placeholder="0" name="p39_g3" id="p39_g3">
                                <img src="../img/selecciones/serbia.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Brasil VS Suiza</label>
                            <div class="grouping">
                                <img src="../img/selecciones/brasil.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p40_g4" id="p40_g4">
                                <input type="number" step="1" min="0" placeholder="0" name="p40_g2" id="p40_g2">
                                <img src="../img/selecciones/suiza.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Serbia VS Suiza</label>
                            <div class="grouping">
                                <img src="../img/selecciones/serbia.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p41_g2" id="p41_g2">
                                <input type="number" step="1" min="0" placeholder="0" name="p41_g3" id="p41_g3">
                                <img src="../img/selecciones/suiza.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Camerún VS Brasil</label>
                            <div class="grouping">
                                <img src="../img/selecciones/camerun.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p42_g4" id="p42_g4">
                                <input type="number" step="1" min="0" placeholder="0" name="p42_g1" id="p42_g1">
                                <img src="../img/selecciones/brasil.png"  alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-eight form-step">
                        <div class="bg-svg"></div>
                        <h2>Quiniela Grupo H</h2>
                        <p>Anota el marcador</p>
                        <div>
                            <label>Uruguay VS Corea del Sur </label>
                            <div class="grouping">
                                <img src="../img/selecciones/uruguay.png"  alt=""> 
                                <input type="number" step="1" min="0" placeholder="0" name="p43_h1" id="p13_h1">
                                <input type="number" step="1" min="0" placeholder="0" name="p43_h2" id="p13_h2">
                                <img src="../img/selecciones/coreadelsur.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  Portugal  VS Ghana  </label>
                            <div class="grouping">
                                <img src="../img/selecciones/portugal.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p44_h3" id="p44_h3">
                                <input type="number" step="1" min="0" placeholder="0" name="p44_h4" id="p44_h4">
                                <img src="../img/selecciones/ghana.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>  Corea del Sur VS Ghana </label>
                            <div class="grouping">
                                <img src="../img/selecciones/coreadelsur.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p45_h1" id="p45_h1">
                                <input type="number" step="1" min="0" placeholder="0" name="p45_h3" id="p45_h3">
                                <img src="../img/selecciones/ghana.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Portugal VS Uruguay</label>
                            <div class="grouping">
                                <img src="../img/selecciones/portugal.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p56_h4" id="p56_h4">
                                <input type="number" step="1" min="0" placeholder="0" name="p56_h2" id="p56_h2">
                                <img src="../img/selecciones/uruguay.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Corea del Sur VS Portugal</label>
                            <div class="grouping">
                                <img src="../img/selecciones/coreadelsur.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p57_h2" id="p57_h2">
                                <input type="number" step="1" min="0" placeholder="0" name="p57_h3" id="p57_h3">
                                <img src="../img/selecciones/portugal.png"  alt="">
                            </div>
                        </div>
                        <div>
                            <label>Ghana VS Uruguay</label>
                            <div class="grouping">
                                <img src="../img/selecciones/ghana.png"  alt="">
                                <input type="number" step="1" min="0" placeholder="0" name="p58_h4" id="p58_h4">
                                <input type="number" step="1" min="0" placeholder="0" name="p58_h1" id="p58_h1">
                                <img src="../img/selecciones/uruguay.png"  alt="">
                            </div>
                        </div>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn-prev" disabled>Volver</button>
                        <button type="button" class="btn-next">Siguiente</button>
                        <button type="button" class="btn-submit">Enviar</button>
                    </div>
            </form>
            </div>
        </div>
    </div>
    <script src="../js/script_quiniela.js"></script>
    
</body>
</html>