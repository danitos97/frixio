
<?php 
    header("Location: ./error.php");
    include("version.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Compra productos alimenticios liofilizados por mayoreo al mejor precio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frixio - Alimentos liofilizados</title>
    <link rel="canonical" href="https://www.frixio.com.mx" />
    <link rel="icon" type="image/x-icon" href="favicon.svg">
    <link rel="stylesheet" href="public/<?php echo $version?>/css/landing/main.css">
    <script src="public/<?php echo $version?>/js/menu.js" defer></script>
</head>
<body>

    <div class="scroll">

        <div id="top"></div>

        <header>

            <div class="logo-alivsa">
                <div>
                    <a href="#top"><img src="public/<?php echo $version?>/imgs/logos/alivsa.svg" alt=""></a>
                    
                </div>
            </div>

            <nav class="desk">
                <a href="#nosotros">   <div class="item">NOSOTROS</div></a>
                <a href="#liofilizado"><div class="item">LIOFILIZADO</div></a>
                <div class="logo-frixio"><img src="public/<?php echo $version?>/imgs/logos/frixio.svg" alt=""></div>
                <a href="#productos">  <div class="item">PRODUCTOS</div></a>
                <a href="#contacto">   <div class="item">CONTACTO</div></a>
            </nav>

            <div class="menu">
                <div class="menu-icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <nav class="movil">
                    <a href="#nosotros">   <div class="item">NOSOTROS</div></a>
                    <a href="#liofilizado"><div class="item">LIOFILIZADO</div></a>
                    <a href="#productos">  <div class="item">PRODUCTOS</div></a>
                    <a href="#contacto">   <div class="item">CONTACTO</div></a>
                </nav>
            </div>

        </header>


        <section class="landing">
            <div>
                
                <div class="logo-frixio-2">
                    <img src="public/<?php echo $version?>/imgs/logos/frixio.svg" alt="">
                </div>
                <div class="name">
                    <div><div class="square"></div><h1>FRIXIO</h1></div>
                </div>
                <br><br><br><br><br><br><br><br><br><br>
                <div><h2>¿QUIÉNES SOMOS?</h2></div>
                <div class="fresas">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/otros/fresas-no-bg.png" alt="">
                    </div>
                </div>
            </div>
        </section>


        <section class="nosotros">

            <div class="separator">
                <div></div>
            </div>
            <br><br><br><br>
            <div class="anchor" id="nosotros"></div>
            <br>
            <div class="info">

                <div class="vertical">
                    <div>
                        <div class="square"></div>
                        <div>VISIÓN</div>
                        <div class="square"></div>
                        <div>MISIÓN</div>
                        <div class="square"></div>
                        <div>NOSOTROS</div>
                    </div>
                  
                </div>

                <div>
                    <br><br><br>
                    <div class="nosotros-text">
                        <p>
                            <b>Comercializadora Alivsa, S. de R.L. de C.V</b> es una empresa que
                            nace en la Región de los Altos del Estado de Jalisco, México, para
                            desarrollar proyectos alimenticios innovadores que requiere el
                            mercado nacional e internacional productos de primera calidad,
                            como las frutas y yogurt liofilizados, proceso mediante el cual se
                            tienen varias opciones de aplicación, teniendo como resultado la
                            comercialización de los mismos
                            a personas que buscan de consumir lo natural y que pueda tener
                            una vida de anaquel de mucho tiempo.
                        </p>
                        <br>
                        <p>
                            Así nace la idea de éste proyecto con alianzas de algunas empresas
                            productoras para cumplir con una excelente calidad de nuestros
                            productos y satisfacción de nuestros clientes.
                        </p>
                    </div>
                   

                   
                    <div class="mision-text">
                        <p>
                            Comercializadora Alivsa, S. de R. L. de C.V. es una
                            empresa dedicada al desarrollo y comercialización de
                            productos liofilizados, como las frutas, yogurt y otras
                            especies, así como otros productos naturales para
                            nuestros clientes que buscan la innovación, sin que
                            pierda el sabor y sus propiedades naturales.
                        </p>
                    </div>
                  

                    
                    <div class="vision-text">
                        <p>
                            Queremos ser una de las empresas lideres en el mercado
                            de Liofilizado en nuestro país y en el extranjero, siempre
                            estando a la vanguardia de las necesidades del mercado
                            alimenticio, iniciando con las frutas y yogurt siendo
                            productos innovadores con nuestra marca Frixio, donde
                            se ofrece opciones de comercialización a nuestros
                            clientes.
                        </p>
                    </div>
                 
                </div>

            </div>

            <div class="cuchara">
                <img src="public/<?php echo $version?>/imgs/otros/cuchara-fresas.png" alt="">
            </div>
          
        </section>


        <section class="landing landing-liofilizado">
            <div>
                <br><br><br>
                <div><h2>¿QUÉ <br> ES EL</h2></div>
                <div class="name">
                    <div><div class="square"></div><h3>LIOFILIZADO?</h3></div>
                </div>
                <div class="fresas">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/otros/fresas-no-bg.png" alt="">
                    </div>
                </div>
            </div>
        </section>


        <section class="liofilizado">
            <div class="separator">
                <div></div>
            </div>
            <br><br>
            <div class="anchor" id="liofilizado"></div>
            <div class="text">
                <p>
                    El liofilizado es un proceso de conservación de alimentos, en los que se congelan los productos a temperaturas de
                </p>
                <span>-70°C</span>
                <p>
                    a través del cambio de temperatura por sublimación en la máquina de liofilizadora se extrae el aua del producto.
                </p>
                <br><br><br>
                <h3>¿POR QUÉ LIOFILIZADO?</h3>
                <br><br>
                <p>El liofilizado elimina el</p>
                <span>99%</span>
                <p>
                    del agua del producto, manteniendo todos los nutrientes del producto, sin cambios en su sabor, aroma y alargando su vida útil.
                </p>
                <br>
                <p>
                    A diferencia del deshidratado por calor, donde se pierde el 90% de agua, la descomposición de sus nutrientes (vitaminas y minerales), el sabor y el aroma cambian radicalmente, además su aspecto suele ser marchito y gomoso.
                </p>
                <br><br><br>
                <div class="center">
                    <img class="platanos" src="public/<?php echo $version?>/imgs/otros/platanos.png" alt="">
                    <p class="platanos-text">DESHIDRATADO VS LIOFILIZADO</p>
                </div>
            </div>

            <br><br>

            <div class="center">
                <h3>¿CUÁL ES EL PROCESO DE<br>LIOFILIZADO?</h3>
            </div>

            <br><br>
            
            <div class="proceso">
             
                <div>
                    <div>
                        <span>1.-</span>
                        <p>Preparación del producto, estandarizado, rebanada, trozo, pasta y jugos.</p>
                    </div>
                </div>

                <div>
                    <div>
                        <span>2.-</span>
                        <p>Congelación del producto entre -45°C a -70°C</p>
                    </div>
                </div>

                <div>
                    <div>
                        <span>3.-</span>
                        <p>Sublimación en liofilizadora 12 a 18 horas.</p>
                    </div>
                </div>

                <div>
                    <div>
                        <span>4.-</span>
                        <p>Extracción y empaquetado del producto liofilizado.</p>
                    </div>
                </div>

            </div>
            <div class="spacer"></div>
            <div class="text">
                <p>
                    Los productos liofilizados no requieren de refrigeración, solo un ambiente seco, por lo cual su transportación, almacenaje y conservacín tienen un costo menor por producto que requieren contenedores climatizados.
                </p>
                <br>
                <p>
                    El producto final mantiene el sabor, aroma, estructura molecular y propiedades nutricionales originales, pero cambia a una consistencia seca, es decir, sin líquido. Esto ocaciona que su peso final sea mucho más ligero, en su volumen solo pierde un 10% además alarga su vida de anaquel a más de 5 años.
                </p>
                <br>
                <p>
                    El término FREEZE DRIED es el utilizado en los mercados de Norte América, Europa y Asia para productos liofilizados.
                </p>

            </div>
        </section>


        <section class="futuro green-section">
            <div class="center">
                <img class="img-fondo-futuro" src="public/<?php echo $version?>/imgs/otros/fondo-futuro.png" alt="">
                <img class="img-futuro" src="public/<?php echo $version?>/imgs/otros/futuro.png" alt="">
            </div>
        </section>


        <section class="realidad">
            <div>
                <div class="title">
                    <h3>SOMOS UNA</h3>
                    <h3>REALIDAD.</h3>
                </div>
               <br><br><br>
               <ul>
                    <p>NUESTRA PLANTA</p>
                    <br>
                    <ul>
                        <li>
                            <p>Es la más grande de México y Latinoamerica.</p>
                        </li>
                        <br>
                        <li>
                            <p> 
                                Con una capacidad de 2 toneladas de producto fresco diario un promedio de 200 kg
                                liofilizados.
                            </p>
                        </li>
                        <br>
                        <li>
                            <p>
                                Plan de crecimiento para otras dos máquinas
                                de liofilizado con capacidad de 2 toneladas.
                                Llegando así, a tener 6 toneladas de producto
                                fresco diario en un futuro no muy lejano.
                            </p>
                        </li>
                    </ul>
                    <br>
                    <p>
                        Se han realizado más de 400 pruebas con variedad
                        de productos desde fruta, yogurt, platillos preprados y postres, así también con cortes de carnes,
                        lácteos, quesos y demás.
                    </p>
                </ul>

                <br><br><br>

                <div class="title">
                    <h3>NUESTRO</h3>
                    <h3>OBJETIVO.</h3>
                </div>
                <br>
                <ul>
                    <p class="text-objetivo">
                        Desarrollar productos liofilizados con los
                        más altos estándares de calidad alimenticia
                        para nuestra marca Frixio Liofilizados,
                        colocar la misma al consumidor final en los
                        mercados nacionales e internacionales, con la
                        variedad de frutas, yogurt y otras especies, así
                        como otros productos naturales, de forma
                        fácil para su consumo.
                    </p>
                </ul>

                <img class="img-planta" src="public/<?php echo $version?>/imgs/otros/planta.png" alt="">
                <img class="img-planta-fresas" src="public/<?php echo $version?>/imgs/otros/planta-fresas.png" alt="">
                <img class="img-woman" src="public/<?php echo $version?>/imgs/otros/woman.png" alt="">
            </div>
        </section>


        <section class="visible nuestros green-section">
            <div class="center">
                <img class="img-fondo-futuro" src="public/<?php echo $version?>/imgs/otros/fondo-futuro.png" alt="">
                <img class="img-nuestros" src="public/<?php echo $version?>/imgs/otros/nuestros.png" alt="">
            </div>
        </section>

        
        <div class="anchor" id="productos"></div>
        
        <section class="productos-old">
            <br><br><br><br><br><br>
            <h5>INSTRUCCIONES</h5>
            <br>
            <p>
                Mantener la bolsa cerrada herméticamente, para evitar que
                se humedezca.
                No exponer el producto a la luz.
            </p>
            <br><br>
            <h5>EMBALAJE Y ETIQUETADO</h5>
            <br>
            <p>Bolsas trilaminadas grado alimenticio.
                Caja de cartón grado alimenticio.
                Etiquetado de acuerdo a la NOM-051-SSA1-2020
            </p>
            <br><br><br><br><br><br>
           
            

            <div class="producto yogurt-mora">
                <h3>MORA AZUL CON CEREALES. </h3>
                <h4>YOGURT LIOFILIZADO</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/yogurt/yogurt-mora.png" alt="">
                </div><div class="col-2">
                    <b>DESCRIPCIÓN:</b>
                    <p>Yogurt cereales moras azules, nueces y probióticos</p>
                    <br>
                    <b>INGREDIENTES:</b>
                    <p>
                        Leche semidescremada pasteurizada estandarizada.
                        Preparado de fruta 15% (29% de mora azul, 4% de cereales
                        (trigo entero, germen de trigo), nuez 3% Azúcares añadidos
                        (azúcar), almidón modificado, pectina, ácido cítrico, fosfato
                        tricálcico, cultivos lácticos.
                        Contiene 16% grasa de leche
                    </p>
                    <br>
                    <b>ESPECIFICACIONES:</b>
                    <p>
                        <span>APARIENCIA:</span> Bites en forma de media luna de yogurt cereales
                        moras azules y nueces. <br>
                        <span>COLOR:</span> Color lia con trozos de mora azul
                        y nueces, sin presencia de colores extraños. <br>
                        <span>OLOR:</span> Agradable, dulce y aromático. <br>
                        <span>SABOR:</span> Textura en boca seca y con sensación crocante. <br>
                        <span>TEXTURA:</span> Crocante.
                    </p>
                    <br>
                    <b>INSTRUCCIONES:</b>
                    <p>
                        Mantener la bolsa cerrada herméticamente, para evitar
                        que se humedezca.
                        No exponer el producto a la luz
                    </p>
                    <br>
                    <b>EMBALAJE Y ETIQUETADO:</b>
                    <p>
                        Bolsas trilaminadas grado alimenticio.
                        Caja de cartón grado alimenticio.
                        Etiquetado de acuerdo a la NOM-051-SSA1-2020
                    </p>
                </div>
                <div class="dec-1"><img src="public/<?php echo $version?>/imgs/productos/mora-1.png" alt="" width="80px"></div>
                <div class="dec-2"><img src="public/<?php echo $version?>/imgs/productos/mora-2.png" alt=""></div>
            </div>

            <div class="producto yogurt-frutos">
                <h3>FRUTOS ROJOS. </h3>
                <h4>YOGURT LIOFILIZADO</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/yogurt/yogurt-frutos.png" alt="">
                </div><div class="col-2">
                    <b>DESCRIPCIÓN:</b>
                    <p>Yogurt trozos de frutas rojas y probióticos.</p>
                    <br>
                    <b>INGREDIENTES:</b>
                    <p>
                        Leche semidescremada pasteurizada estandarizada.
                        Preparado de fruta 15% ( frutas rojas 43% de: Fresa, Cereza,
                        Ciruela) Azúcares añadidos (azúcar), almidón modificado,
                        goma tara, ácido cítrico, sabor fresa, cereza y ciruela.
                        Contiene 16% grasa de leche
                    </p>
                    <br>
                    <b>ESPECIFICACIONES:</b>
                    <p>
                        <span>APARIENCIA:</span>: Bites en forma de media luna de yogurt con
                        trozos frutas rojas <br>
                        <span>COLOR:</span> Color rosa, contiene trozos de frutos rojos sin presencia
                        de colores extraños <br>
                        <span>OLOR:</span> Agradable, dulce y aromático. <br>
                        <span>SABOR:</span> Textura en boca seca y con sensación crocante. <br>
                        <span>TEXTURA:</span> Crocante.
                    </p>
                    <br>
                    <b>INSTRUCCIONES:</b>
                    <p>
                        Mantener la bolsa cerrada herméticamente, para evitar
                        que se humedezca.
                        No exponer el producto a la luz
                    </p>
                    <br>
                    <b>EMBALAJE Y ETIQUETADO:</b>
                    <p>
                        Bolsas trilaminadas grado alimenticio.
                        Caja de cartón grado alimenticio.
                        Etiquetado de acuerdo a la NOM-051-SSA1-2020
                    </p>
                </div>
                <div class="dec-1"><img src="public/<?php echo $version?>/imgs/productos/frutos-1.png" alt=""></div>
                <div class="dec-2"><img src="public/<?php echo $version?>/imgs/productos/frutos-2.png" alt=""></div>
            </div>

            <div class="producto yogurt-durazno">
                <h3>DURAZNO. </h3>
                <h4>YOGURT LIOFILIZADO</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/yogurt/yogurt-durazno.png" alt="">
                </div><div class="col-2">
                    <b>DESCRIPCIÓN:</b>
                    <p>Yogurt trozos de Durazno y probióticos.</p>
                    <br>
                    <b>INGREDIENTES:</b>
                    <p>
                        Leche semidescremada pasteurizada estandarizada.
                        Preparado de fruta 15% ( Durazno 27%)
                        Azúcares añadidos (azúcar), almidón modificado, pectina,
                        goma tara, ácido cítrico, sabor fresa, cereza y ciruela
                        Contiene 16% grasa de leche.
                    </p>
                    <br>
                    <b>ESPECIFICACIONES:</b>
                    <P>
                        <span>APARIENCIA:</span> Bites en forma de media luna de yogurt con
                        trozos durazno. <br>
                        <span>COLOR:</span>  Color naranja crema, contiene trozos de durazno
                        sin presencia de colores extraños <br>
                        <span>OLOR:</span> Agradable, dulce y aromático. <br>
                        <span>SABOR:</span> Textura en boca seca y con sensación crocante. <br>
                        <span>TEXTURA:</span> Crocante.
                    </P>
                    <br>
                    <b>INSTRUCCIONES:</b>
                    <p>
                        Mantener la bolsa cerrada herméticamente, para evitar
                        que se humedezca.
                        No exponer el producto a la luz
                    </p>
                    <br>
                    <b>EMBALAJE Y ETIQUETADO:</b>
                    <p>
                        Bolsas trilaminadas grado alimenticio.
                        Caja de cartón grado alimenticio.
                        Etiquetado de acuerdo a la NOM-051-SSA1-2020
                    </p>
                </div>
                <div class="dec-1"><img src="public/<?php echo $version?>/imgs/productos/durazno-1.png" alt="" width="160px"></div>
                <div class="dec-2"><img src="public/<?php echo $version?>/imgs/productos/durazno-2.png" alt="" width="300px"></div>
            </div>

            <div class="producto yogurt-pinia">
                <h3>PIÑA - COCO. </h3>
                <h4>YOGURT LIOFILIZADO</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/yogurt/yogurt-pinia.png" alt="">
                </div><div class="col-2">
                    <b>DESCRIPCIÓN:</b>
                    <p>Yogurt trozos de piña y coco natural y probióticos.</p>
                    <br>
                    <b>INGREDIENTES:</b>
                    <p>
                        Leche semidescremada pasteurizada estandarizada.
                        Preparado de fruta 15% (Piña 35%), coco tallado 5%
                        Azúcares añadidos (azúcar), almidón modificado, pectina,
                        goma tara, ácido cítrico, sabor piña y coco.
                        Contiene 16% grasa de leche.
                    </p>
                    <br>
                    <b>ESPECIFICACIONES:</b>
                    <P>
                        <span>APARIENCIA:</span> Bites en forma de media luna de yogurt
                        con trozos de piña y coco. <br>
                        <span>COLOR:</span>  Color blanco a amarilloso, contiene trozos de piña
                        y coco sin presencia de colores extraños<br>
                        <span>OLOR:</span> Agradable, dulce y aromático. <br>
                        <span>SABOR:</span> Textura en boca seca y con sensación crocante. <br>
                        <span>TEXTURA:</span> Crocante.
                    </P>
                    <br>
                    <b>INSTRUCCIONES:</b>
                    <p>
                        Mantener la bolsa cerrada herméticamente, para evitar
                        que se humedezca.
                        No exponer el producto a la luz
                    </p>
                    <br>
                    <b>EMBALAJE Y ETIQUETADO:</b>
                    <p>
                        Bolsas trilaminadas grado alimenticio.
                        Caja de cartón grado alimenticio.
                        Etiquetado de acuerdo a la NOM-051-SSA1-2020
                    </p>
                </div>
                <div class="dec-1"><img src="public/<?php echo $version?>/imgs/productos/pinia-1.png" alt="" width="160px"></div>
                <div class="dec-2"><img src="public/<?php echo $version?>/imgs/productos/pinia-2.png" alt="" width="300px"></div>
            </div>

            <div class="producto yogurt-fresa">
                <h3>FRESA. </h3>
                <h4>YOGURT LIOFILIZADO</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/yogurt/yogurt-fresa.png" alt="">
                </div><div class="col-2">
                    <b>DESCRIPCIÓN:</b>
                    <p>Yogurt trozos de fresa natural y probióticos.</p>
                    <br>
                    <b>INGREDIENTES:</b>
                    <p>
                        Leche semidescremada pasteurizada estandarizada.
                        Preparado de fruta 15% (fresa 38%),
                        Azúcares añadidos (azúcar), almidón modificado, pectina,
                        goma tara, ácido cítrico, sabor fresa,
                        Contiene 16% grasa de leche.
                    </p>
                    <br>
                    <b>ESPECIFICACIONES:</b>
                    <P>
                        <span>APARIENCIA:</span> Bites en forma de media luna de yogurt con
                        trozos de fresa. <br>
                        <span>COLOR:</span>  Color rosa, contiene trozos de fresa sin presencia
                        de colores extraños<br>
                        <span>OLOR:</span> Agradable, dulce y aromático. <br>
                        <span>SABOR:</span> Textura en boca seca y con sensación crocante. <br>
                        <span>TEXTURA:</span> Crocante.
                    </P>
                    <br>
                    <b>INSTRUCCIONES:</b>
                    <p>
                        Mantener la bolsa cerrada herméticamente, para evitar
                        que se humedezca.
                        No exponer el producto a la luz
                    </p>
                    <br>
                    <b>EMBALAJE Y ETIQUETADO:</b>
                    <p>
                        Bolsas trilaminadas grado alimenticio.
                        Caja de cartón grado alimenticio.
                        Etiquetado de acuerdo a la NOM-051-SSA1-2020
                    </p>
                </div>
                <div class="dec-1"><img src="public/<?php echo $version?>/imgs/productos/fresa-1.png" alt="" width="160px"></div>
                <div class="dec-2"><img src="public/<?php echo $version?>/imgs/productos/fresa-2.png" alt="" width="300px"></div>
            </div>
           <br><br><br><br><br><br>
            <div class="producto fruta-pinia">
                <h3>PIÑA CON CHILE. </h3>
                <h4>FRUTA LIOFILIZADA</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/fruta/fruta-pinia.png" alt="">
                </div>
            </div>
            <div class="producto fruta-fresa">
                <h3>FRESA. </h3>
                <h4>FRUTA LIOFILIZADA</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/fruta/fruta-fresa.png" alt="">
                </div>
            </div>
            <div class="producto fruta-plat">
                <h3>PLATANO. </h3>
                <h4>FRUTA LIOFILIZADA</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/fruta/fruta-platano.png" alt="">
                </div>
            </div>
            <div class="producto fruta-mango">
                <h3>MANGO. </h3>
                <h4>FRUTA LIOFILIZADA</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/fruta/fruta-mango.png" alt="">
                </div>
            </div>
            <div class="producto fruta-agua">
                <h3>AGUACATE. </h3>
                <h4>FRUTA LIOFILIZADA</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/fruta/fruta-agua.png" alt="">
                </div>
            </div>


            <br><br><br><br><br><br>
            <div class="producto cecina-chil">
                <h3>CHILTEPIN. </h3>
                <h4>CECINA</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/cecina/chiltepin.png" alt="">
                </div>
            </div>
            <div class="producto cecina-hab">
                <h3>HABANERO. </h3>
                <h4>CECINA</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/cecina/habanero.png" alt="">
                </div>
            </div>
            <div class="producto cecina-nat">
                <h3>NATURAL. </h3>
                <h4>CECINA</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/cecina/natural.png" alt="">
                </div>
            </div>
            <div class="producto cecina-pim">
                <h3>PIMIENTA. </h3>
                <h4>CECINA</h4>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/cecina/pimienta.png" alt="">
                </div>
            </div>
            <br><br><br><br><br><br>
            <div class="producto guacamole">
                <h3>GUACAMOLE LIOFILIZADO. </h3>
                <div class="col-1">
                    <img src="public/<?php echo $version?>/imgs/productos/guacamole.png" alt="">
                </div>
            </div>
        </section>


        <section class="productos visible">
            <h5>INSTRUCCIONES</h5>
            <br>
            <p>
                Mantener la bolsa cerrada herméticamente, para evitar que
                se humedezca.
                No exponer el producto a la luz.
            </p>
            <br><br><br>
            <h5>EMBALAJE Y ETIQUETADO</h5>
            <br>
            <p>
                Bolsas trilaminadas grado alimenticio.
                Caja de cartón grado alimenticio.
                Etiquetado de acuerdo a la NOM-051-SSA1-2020
            </p>
            <br><br><br><br><br><br>
            <h3>YOGURT LIOFILIZADO</h3>
            <br><br><br>
            
            
            <div class="grid">

                <div class="mora">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/yogurt/yogurt-mora.png" alt="">
                    </div>
                    <h3 style="color:hsl(207, 65%, 89%);"> MORA AZUL CON CEREALES </h3>
                </div>

                <div class="frutos">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/yogurt/yogurt-frutos.png" alt="">
                    </div>
                    <h3 style="color:hsl(355, 74%, 86%);"> FRUTOS ROJOS</h3>
                </div>

                <div class="durazno">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/yogurt/yogurt-durazno.png" alt="">
                    </div>
                    <h3 style="color:hsl(21, 74%, 80%);"> DURAZNO</h3>
                </div>
           

                <div class="pinia">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/yogurt/yogurt-pinia.png" alt="">
                    </div>
                    <h3 style="color:hsl(50, 75%, 85%);"> PIÑA - COCO</h3>
                </div>

                <div class="fresa">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/yogurt/yogurt-fresa.png" alt="">
                    </div>
                    <h3 style="color:hsl(0, 80%, 85%);"> FRESA</h3>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
            <h3>FRUTA LIOFILIZADA</h3>
            <br><br><br>
            <div class="grid">

                <div class="pinia-chile">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/fruta/fruta-pinia.png" alt="">
                    </div>
                    <h3 style="color:hsl(27, 85%, 86%)"> PIÑA CON CHILE </h3>
                </div>

                <div class="fresa">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/fruta/fruta-fresa.png" alt="">
                    </div>
                    <h3 style="color:hsl(355, 74%, 86%);"> FRESA</h3>
                </div>

                <div class="platano">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/fruta/fruta-platano.png" alt="">
                    </div>
                    <h3 style="color:hsl(53, 62%, 84%);"> PLATANO</h3>
                </div>
           

                <div class="mango">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/fruta/fruta-mango.png" alt="">
                    </div>
                    <h3 style="color:hsl(14, 72%, 85%)"> MANGO</h3>
                </div>

                <div class="agua">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/fruta/fruta-agua.png" alt="">
                    </div>
                    <h3 style="color:hsl(90, 41%, 80%);">AGUACATATE</h3>
                </div>
            </div>

            <br><br><br><br><br><br><br><br>
            <h3>CECINA LIOFILIZADA</h3>
            <br><br><br>
            <div class="grid">

          

                <div class="chil">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/cecina/chiltepin.png" alt="">
                    </div>
                    <h3 style="color:hsl(354, 65%, 88%)"> CHILTEPIN</h3>
                </div>

                <div class="hab">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/cecina/habanero.png" alt="">
                    </div>
                    <h3 style="color:hsl(30, 68%, 84%);"> HABANERO</h3>
                </div>
           

                <div class="nat">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/cecina/natural.png" alt="">
                    </div>
                    <h3 style="color:hsl(43, 75%, 85%)"> NATURAL</h3>
                </div>

                <div class="pim">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/cecina/pimienta.png" alt="">
                    </div>
                    <h3 style="color:hsl(37, 64%, 85%);">PIMIENTA</h3>
                </div>
            </div>

            <br><br><br><br><br><br><br><br><br>
            <h3>GUACAMOLE LIOFILIZADO</h3>
            <br><br><br>

            <div class="grid">
                <div class="guaca">
                    <div>
                        <img src="public/<?php echo $version?>/imgs/productos/guacamole.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <div class="anchor" id="contacto"></div>

        <footer>
            <div class="center">
                <div class="top-decoration"></div>
                <div class="bot-decoration"></div>
                <div class="logos">
                    <img class="alivsa" src="public/<?php echo $version?>/imgs/logos/alivsa.svg" alt="">
                    <img class="frixio" src="public/<?php echo $version?>/imgs/logos/frixio-blanco.svg" alt="">
                </div>
                <br><br><br><br>
                <b>CONTACTO</b>
                <br><br>
                <p>M.A. SALVADOR PEÑA GUTIÉRREZ</p>
                <p>REPRESENTANTE LEGAL</p>
                <p>DIRECTOR GENERAL</p>
                <br>
                <p>ARQ. JAVIER VELAZQUEZ CASTELLANOS</p>
                <p>APODERADO LEGAL</p>
                <br>
                <p>Comercializadora ALIVSA S. DE R.L. DE C.V.</p>
                <p>Rio Papaloapan 1173</p>
                <p>Col. Jardines de la Rivera C.P. 47675</p>
                <p>Tepatitlán de Morelos, Jalisco. México</p>
                <p>RFC: CAL1502287U2</p>
                <br><br><br>
                <div class="links">
                    <img src="public/<?php echo $version?>/imgs/logos/whats.svg" alt="">
                    <a>3781104871</a> / 
                    <a>3331291143</a>
                </div>
                <br><br>
                <div class="links">
                    
                    <a href=""><img src="public/<?php echo $version?>/imgs/logos/facebook.svg" alt=""><span>Frixio Liofilizados</span></a>
                    <a href=""><img src="public/<?php echo $version?>/imgs/logos/instagram.svg" alt=""><span>@frixiomx</span></a>
                    <a href=""><img src="public/<?php echo $version?>/imgs/logos/twitter.svg" alt=""><span>@frixioalivs</span></a>
                </div>
                <br><br><br>
            </div>
        </footer>
     
        
    </div>
    
</body>
</html>

