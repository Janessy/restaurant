<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>El Conquistador</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/style.css">  
    </head>
    <body>
        <!-- Menu -->
        <header>
            <div  id="principal">
                <img src="img/reunion.jpg" alt="">
                <div id="menu">
                    <ul class="nav">
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Nosotros</a>
                            <ul>
                                <li><a href="">Ubicación</a></li>
                                <li><a href="">Personal</a></li>
                                <li><a href="">Comentarios</a></li>
                            </ul>
                        </li>
                        <li><a href="">Menú</a></li>
                        <li><a href="">Galería</a>
                        <li><a href="">Contacto</a>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Slider -->
        <section id="banner">
            <div class="item">
                <ul>
                    <li><img src="img/bebidas.jpg" alt=""></li> 
                    <li><img src="img/exterior.jpg" alt=""></li>  
                    <li><img src="img/ambiente.jpg" alt=""></li>  
                    <li><img src="img/reunion.jpg" alt=""></li>
                </ul>
            </div>
            <div class="canvas">
                <h1>PLATOS TIPICOS DE LA REGIÓN JUNÍN</h1>
                <a href="#">Explora el Menú</a>
            </div>
        </section>
        <!-- Carta-->
		<section id="carta">
            <h2>Comidas destacadas</h2>
            <div>
                <div class="card">
                    <img src="img/trucha.jpg" alt="">
                    <div>
                        <h4><a href="#">Trucha</a></h4>
                        <p>Eius explicabo facere a corporis aut optio ipsa facilis omnis nulla.</p>
                        <span>S/. 15</span>
                    </div>
                </div>
                <div class="card">
                    <img src="img/chicharron.jpg" alt="">
                    <div>
                        <h4><a href="#">Chicharron</a></h4>
                        <p>Eius explicabo facere a corporis aut optio ipsa facilis omnis nulla.</p>
                        <span>S/. 15</span>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Cuy.jpg" alt="">	
                    <div>
                        <h4><a href="#">Cuy</a></h4>
                        <p>Eius explicabo facere a corporis aut optio ipsa facilis omnis nulla.</p>
                        <span>S/. 15</span>
                    </div>
                </div>
                <div class="card">
                    <img src="img/ceviche.jpg" alt="">
                    <div>
                        <h4><a href="#">Pachamanca</a></h4>
                        <p>Eius explicabo facere a corporis aut optio ipsa facilis omnis nulla.</p>
                        <span>S/. 15</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Reservas -->
        <h2>Reservas</h2>
        <div>
            <label for="name">Nombre y Apellido</label>
            <input type="text" id="name" name="name">
            <label for="email">Correo Electronico</label>
            <input type="email">
            <label for="phone">Telefono</label>
            <input type="text">
            <label for="date">Fecha de Reserva</label>
            <input type="date" name="" id="">
            <label for="time">Hora de Reserva</label>
            <input type="time" name="" id="">
            <label for="cant">Cantidad de Personas</label>
            <input type="number">
            <button>RESERVAR</button>
        </div>
        <!-- Pie de pagina-->
        <footer class="site__social">
        <div class="contact">
                <h4>
                    Contactenos
                </h4>
                <section class="form">
                    <ul>
                        <li>
                            <span><i class="icono-footer fa fa-map-marker" aria-hidden="true"></i>
                                    Los Geranios 190 - El Tambo - Huancayo - Junín
                            </span>
                        </li>
                        <li>
                            <span><i class="icono-footer fa fa-envelope" aria-hidden="true"></i>
                                    elconquistador@hotmail.com
                            </span>
                        </li>
                        <li>
                            <span><i class="icono-footer fa fa-phone" aria-hidden="true"></i>
                                    (064)261167
                            </span>                            
                        </li> 
                    </ul>     
                </section>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1050.428819512412!2d-75.23900649327695!3d-12.034998217176872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2spe!4v1506828544383" frameborder="0" allowfullscreen>
                </iframe>
            </div>
            <div class="container">
                <div class="row center-sm">
                    <p class="site__colophon col--sm-12">©ElConquistador</p>
                    <p class="site__credit col--sm-12">Diseñado por Restaurant Engine</a></p>
                </div>
            </div>
        </footer>
    </body>
</html>