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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
            $('.flexslider').flexslider({
                touch: true,
                pauseOnAction: false,
                pauseOnHover: false,
            });
        });
</script>
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
        <!-- Slider-->
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="img/bebidas.jpg" />
                    <section class="flex-caption">
                        <p>VARIEDAD DE BEBIDAS</p>
                    </section>
                </li>
                <li>
                    <img src="img/ambiente.jpg" />
                    <section class="flex-caption">
                        <p>AMBIENTE</br>CÓMODO</p>
                    </section>
                </li>
                <li>
                    <img src="img/trucha.jpg" />
                    <section class="flex-caption">
                        <p>PRUEBA NUESTROS </br>DELICIOSOS PLATOS</p>
                    </section>
                </li>
                <li>
                    <img src="img/reunion.jpg" />
                    <section class="flex-caption">
                        <p>NUESTROS INTERIORES</p>
                    </section>
                </li>
            </ul>
        </div>
        <!-- Carta-->
		<section id="carta">
            <h2>Nuestras Especialidades</h2>
            <div id="info">
                <article class="card">
                    <img src="img/trucha2.jpg" alt="">
                    <div>
                        <h4><a href="#">Trucha</a></h4>
                        <p>Eius explicabo facere a corporis aut optio ipsa facilis omnis nulla.</p>
                        <span>S/. 15</span>
                    </div>
                </article>
                <article class="card">
                    <img src="img/chicharron.jpg" alt="">
                    <div>
                        <h4><a href="#">Chicharron</a></h4>
                        <p>Eius explicabo facere a corporis aut optio ipsa facilis omnis nulla.</p>
                        <span>S/. 15</span>
                    </div>
                </article>
                <article class="card">
                    <img src="img/Cuy.jpg" alt="">	
                    <div>
                        <h4><a href="#">Cuy</a></h4>
                        <p>Eius explicabo facere a corporis aut optio ipsa facilis omnis nulla.</p>
                        <span>S/. 15</span>
                    </div>
                </article>
                <article class="card">
                    <img src="img/ceviche.jpg" alt="">
                    <div>
                        <h4><a href="#">Pachamanca</a></h4>
                        <p>Eius explicabo facere a corporis aut optio ipsa facilis omnis nulla.</p>
                        <span>S/. 15</span>
                    </div>
                </article>
            </div>
        </section>
        <!-- Reservas -->
        <section id="reserva">
            <h2>Reservas</h2>
            <form action="">
                <section class="datos">
                    <label for="name">Nombres y Apellidos:</label>
                    <input type="text" id="name" name="name" placeholder="Nombres y Apellidos">
                    <label for="email">Correo Electronico:</label>
                    <input type="email" id="email" name="email" placeholder="Correo Electrónico">
                    <label for="phone">Telefono:</label>
                    <input type="text" id="phone" name="phone" placeholder="Telefono">
                    <div class="rev">
                        <div>
                            <label for="date-rev">Fecha de Reserva:</label>
                            <input type="date" name="date-rev" id="date-rev">
                        </div>
                        <div>
                            <label for="time">Hora de Reserva:</label>
                            <input type="time" name="time" id="time">
                        </div>
                    </div>
                    <label for="cant">Cantidad de Personas:</label>
                    <input type="number" id="cant" name="cant">
                </div>
                <button type="submit" id="boton">RESERVAR</button>
            </form>
        </section>
        <!-- Pie de pagina-->
        <footer>
            <h4>
                Contactenos
            </h4>
            <section class="contact">
                <ul>
                    <li>
                        <span><i class="icono-footer fa fa-map-marker" aria-hidden="true"></i>
                                Los Geranios 190 - El Tambo - Huancayo - Junín
                        </span>
                    </li>
                    <li>
                        <span><i class="icono-footer fa fa-envelope" aria-hidden="true"></i>
                                elconquistador@mail.com
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
            <div class="container">
                <div class="row center-sm">
                    <p>©ElConquistador</p>
                </div>
            </div>
        </footer>
    </body>
</html>