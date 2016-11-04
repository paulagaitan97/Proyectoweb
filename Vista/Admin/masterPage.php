<!doctype html>
<!doctype html>
<html lang="en">
    <head>
        <title>Internal an Interior Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Internal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--// Meta tag Keywords -->
        <!-- css files -->

        <link href="Recursos/css/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="Recursos/css/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Recursos/css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


        <!-- //css files -->
        <!-- online-fonts -->
        <link href="//fonts.googleapis.com/css?family=Gudea:400,400i,700&subset=latin-ext" rel="stylesheet">
        <!--// online-fonts -->
        <!-- js -->
        <script src="Recursos/js/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="Recursos/js/js/bootstrap-3.1.1.min.js" type="text/javascript"></script>

        <!-- //js -->
    </head>
    <body>
        <div class="header">
            <div class="agile-top-header">
                <div class="logo">
                    <a href="index.html"><h1><label>byte</label>bank</h1></a>
                </div>
                <!-- navigation -->
                <div class="top-left">

                    <div class="top-nav">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div>

                            <form name="formularioLogOut" id="formLogOut3" method="post" action="Controlador/gestionLogin.php"
                                  onSubmit="return logIn('desc');">
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <nav class="linkEffects linkHoverEffect_12">
                                        <ul>
                                            <li><a href=""class="scroll"><span>INICIO</span></a></li> 
                                            <li><a href="#about" class="scroll"><span>BYTEBANK</span></a></li> 
                                            <li><a href="Vista/registrarJunta.php" ><span>JUNTA DIRECTIVA</span></a></li> 
                                            <li><a href="#services" class="scroll"><span>SUCURSALES</span></a></li> 
                                            <li><a href="Vista/empleados.php" ><span>EMPLEADOS</span></a></li> 
                                            <input type="text" id="txtTypeLog" name="type" class="oculto">
                                            <li><button type="submit" id="btnDesconectar"><a value="desconectar" style="outline-color: transparent;"><span>CERRAR SESION</span></a></button></li> 

                                        </ul>
                                    </nav>
                                </div>

                            </form>
                            <!--                            <form name="formularioLogOut" id="formLogOut2" method="post" action="Controlador/gestionLogin.php" onSubmit="return logIn('desc');"> navbar-header 
                                                              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                                <nav class="linkEffects linkHoverEffect_12">
                                                                    <ul>
                                                                        <li><a href=""class="scroll"><span>INICIO</span></a></li> 
                                                                        <li><a href="#about" class="scroll"><span>BYTEBANK</span></a></li> 
                                                                        <li><a href="#services" class="scroll"><span>JUNTA DIRECTIVA</span></a></li> 
                                                                        <li><a href="#services" class="scroll"><span>SUCURSALES</span></a></li> 
                                                                        <li><a href="#services" class="scroll"><span>EMPLEADOS</span></a></li> 
                                                                        <li><button type="submit" value="desconectar" id="btnDesconectar" href="" class="scroll">CERRAR SESION</button></li> 
                            
                                                                    </ul>
                                                                </nav>
                                                            </div>
                                                        </form>-->



                            <div class="clearfix"> </div>	
                        </nav>
                    </div>
                    <div class="clearfix"> </div>	
                    <!-- //navigation -->
                </div>
            </div>
            <div class="slider">
                <!-- Slideshow 3 -->
                <ul class="rslides" id="slider">
                    <li>
                        <img src="Recursos/img/2.jpg" alt=""/>


                        <!--					<div class="slider-info">
                                                                        <h4>Lorem ipsum <span>amet dolor</span></h4>
                                                                        <p>Quis nostrud exercitation ulla</p>
                                                                        <h6><span>Lorem ipsum</span> amet dolor</h6>
                                                                </div>-->
                    </li>
                    <li>
                        <img src="Recursos/img/3.jpg" alt=""/>


                        <!--					<div class="slider-info">
                                                                        <h4>adiping elitrs <span>eius tempo</span></h4>
                                                                        <p>ut labore et dolore magna aliq</p>
                                                                        <h6><span>incidit ut</span> do eiusmod</h6>
                                                                </div>-->
                    </li>
                    <li>
                        <img src="Recursos/img/4.jpg" alt=""/>

                        <!--					<div class="slider-info">
                                                                        <h4>incidit ut labo <span>dol magna</span></h4>
                                                                        <p>sed do eiusmod tempor incid</p>
                                                                        <h6><span>adiping elit</span> et dolore</h6>
                                                                </div>-->
                    </li>
                </ul>
                <!-- Slideshow 3 Pager -->
                <ul id="slider3-pager">

                    <li><a href="#" > <img src="Recursos/img/6.jpg" alt=""/></a></li>


                    <li><a href="#"><img src="Recursos/img/5.jpg" alt=""/></a></li>

                    <li><a  href="#"><img src="Recursos/img/7.jpg" alt=""/></a></li>
                </ul>
            </div>	
        </div>



        <!-- js files -->
        <!-- Starts-Number-Scroller-Animation-JavaScript -->
        <script src="Recursos/js/js/waypoints.min.js"></script>
        <script src="Recursos/js/js/counterup.min.js"></script>

        <script>
                                      jQuery(document).ready(function ($) {
                                          $('.counter').counterUp({
                                              delay: 20,
                                              time: 3000
                                          });
                                      });
        </script>



        <!-- js -->
        <script src="Recursos/js/js/lightbox-plus-jquery.min.js"></script>

        <link href="Recursos/css/css/lightbox.css" rel="stylesheet" >
        <script src="Recursos/js/js/jquery-2.1.4.min.js" ></script>

        <!-- //js -->


        <script src="Recursos/js/js/responsiveslides.min.js"></script>
        <script>
// You can also use "$(window).load(function() {"
                                      $(function () {
                                          $("#slider").responsiveSlides({
                                              auto: true,
                                              manualControls: '#slider3-pager',
                                          });
                                      });
        </script>


        <!-- start-smoth-scrolling -->

        <script type="text/javascript" src="Recursos/js/js/move-top.js"></script>
        <script type="text/javascript" src="Recursos/js/js/easing.js"></script>
        <script type="text/javascript">
                                      jQuery(document).ready(function ($) {
                                          $(".scroll").click(function (event) {
                                              event.preventDefault();
                                              $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                                          });
                                      });
        </script>
        <!-- start-smoth-scrolling -->

        <!-- //js files -->


        <!-- bottom-top -->
        <!-- smooth scrolling -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <!--// bottom-top -->
        <label class="infoLogIn"><?php
            if (isset($_REQUEST['mensaje'])) {
                echo $_REQUEST['mensaje'];
            }
            ?></label>

    </body>
</html>