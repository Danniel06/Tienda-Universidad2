<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tus zapatillas</title>
    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            @if (Route::has('login'))

            @auth
            <a href="#">Inicio</a>
            <a href="{{ url('/home') }}">Home</a>
            <a href="{{ route('cart.list') }}">Carrito</a>
            <a href="/tenis">Tenis</a>
            <a href="#">Contacto</a>
            @else
            <a href="{{ route('login') }}">Iniciar sesion</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Registrarse</a>
            @endif
            @endauth

            @endif

        </nav>
        <section class="textos-header">
            <h1>Los mejores sneakers del mercado </h1>
            <h2>Con los mejores precios</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M-25.96,-5.41 C545.71,143.59 567.71,119.91 536.68,62.67 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Un poco de nostros</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/Modelo.png" alt="" class="imagen-about-us">

                <div class="contenido-textos">

                    <h3><span>1</span>Los mejores productos</h3>
                    <p>La mejor calidad del mundo, actualmente la mejor empresa de venta de sneakers del mundo.</p>
                    <h3><span>2</span>Los mejores productos</h3>
                    <p>Trabajamos con marcas oficiales, marcas revolucionarias. Con los mejores materiales.</p>
                    <h3><span>3</span>Los mejores productos</h3>
                    <p>El mejor servicio.</p>
                    <h3><span>4</span>Los mejores productos</h3>
                    <p>Envios seguros.</p>
                    <h3><span>5</span>Los mejores productos</h3>
                    <p>El mejor acompañamiento.</p>
                </div>

            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Algunos de Nuestros Productos</h2>
                <div class="galeria-port">
                    @foreach ($products as $product)
                    <div class="imagen-port">
                        <img src="{{$product->image}}" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Comprar</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Opiniones de nuestros clientes</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/Cara1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Lina</h4>
                        <p>¡OMG! ¡ESTAS COSAS SE SIENTEN GENIALES EN MIS PIES!
                            ¡Fui a la pista para poner a prueba a estos bebés! Caminé 3 vueltas y corrí 1- no se fatigan
                            los pies,tienen buena estabilidad, tienen buena tracción y se ven GENIALES EN PERSONA...😜😜
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/cara2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Sara</h4>
                        <p>Me gustan estas zapatillas definitivamente recomendadas. El material se siente muy bien
                            definitivamente tiene tracción para trotar y caminar en el parque y la parte inferior de la
                            red se mantendrá definitivamente. hecho muy bien</p>
                    </div>
                </div>

            </div>

        </section>
        <div class="cards">
            <div class="card">
                <img src="img/Cara3.jpeg" alt="">
                <div class="contenido-texto-card">
                    <h4>Sofia</h4>
                    <p>A mi marido le encantan estos tenis. Se los compré para Navidad. Estos zapatos son elegantes y se
                        ven muy bien con sus jeans y ropa deportiva.</p>
                </div>
            </div>


        </div>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/Atencion1.jpg" alt="">
                        <h3>Atencion al cliente</h3>
                        <p>Nuestro equipo cuenta con servicio al cliente 24 horas.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/Atencion2.png" alt="">
                        <h3>Servicio a domicilio</h3>
                        <p>Nuestro equipo brinda el mejor servicio a domicilio. Desde que el producto es autorizado y
                            enviado tendra el mejor servicio. </p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/Atencion3.jpg" alt="">
                        <h3>Entregas en el mejor tiempo</h3>
                        <p>Nostros tenemos el mejor manejo del tiempo, tendras el producto en tus manos en el mejor
                            tiempo posible.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>9203562</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>tuszapatillas@nuestroequipo.com</p>
            </div>
            <div class="content-foo">
                <h4>Redes Sociales </h4>
                <p>Instagram-- Zapat_12</p>
            </div>
            <div class="content-foo">
                <h4>Ubicacion </h4>
                <p>Colombia</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Tus Zapatillas | Contactanos</h2>
    </footer>
</body>

</html>