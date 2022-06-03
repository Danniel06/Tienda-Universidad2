@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>{{$product->name}}</h1>
            <div class="card" style="width: 18rem; margin:auto;">
                <img src="{{$product->image}}" class="card-img-top" alt="Not found">
                <div class="card-body">
                    <p class="card-text">Obtenlo ahora</p>
                </div>
            </div>
            <!-- <h1>{{$product->name}}</h1>
            <img src="{{$product->image}}" alt="" class="rounded mx-auto d-block"> -->
        </div>
        <div class="col" style="margin:auto;">
            <p class="h3">$ @convert($product->price)</p>
            <p class="h3">{{$product->description}}</p>
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" value="{{ $product->id }}" name="id">
                <input type="hidden" value="{{ $product->name }}" name="name">
                <input type="hidden" value="{{ $product->price }}" name="price">
                <input type="hidden" value="{{ $product->image }}" name="image">
                <input type="hidden" value="1" name="quantity">
                <button class="px-4 py-2 text-white bg-blue-800 rounded">Agregar al carrito</button>
            </form>
        </div>
    </div>
</div>
<section class="clientes contenedor">
    <h2 class="titulo">Opiniones de nuestros clientes</h2>
    <div class="cards">
        <div class="card">
            <img src="../img/Cara1.jpg" alt="">
            <div class="contenido-texto-card">
                <h4>Lina</h4>
                <p>¡OMG! ¡ESTAS COSAS SE SIENTEN GENIALES EN MIS PIES!
                    ¡Fui a la pista para poner a prueba a estos bebés! Caminé 3 vueltas y corrí 1- no se fatigan
                    los pies,tienen buena estabilidad, tienen buena tracción y se ven GENIALES EN PERSONA...😜😜
                </p>
            </div>
        </div>
        <div class="card">
            <img src="../img/cara2.jpg" alt="">
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
        <img src="../img/Cara3.jpeg" alt="">
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
                <img src="../img/Atencion1.jpg" alt="">
                <h3>Atencion al cliente</h3>
                <p>Nuestro equipo cuenta con servicio al cliente 24 horas.</p>
            </div>
            <div class="servicio-ind">
                <img src="../img/Atencion2.png" alt="">
                <h3>Servicio a domicilio</h3>
                <p>Nuestro equipo brinda el mejor servicio a domicilio. Desde que el producto es autorizado y
                    enviado tendra el mejor servicio. </p>
            </div>
            <div class="servicio-ind">
                <img src="../img/Atencion3.jpg" alt="">
                <h3>Entregas en el mejor tiempo</h3>
                <p>Nostros tenemos el mejor manejo del tiempo, tendras el producto en tus manos en el mejor
                    tiempo posible.</p>
            </div>
        </div>
    </div>
</section>
@endsection