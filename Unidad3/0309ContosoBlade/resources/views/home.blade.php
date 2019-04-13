@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Bienvenidos</h1>
        <p>Gracias por visitarnos. Somos una empresa especializada en la creacion de paginas web.</p>
        <p><a class="btn btn-primary btn-lg" href="index.php?page=us" role="button">Quienes somos »</a></p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Paginas web</h2>
            <p>Elaboración de paginas web profesionales. </p>
            <p><a class="btn btn-secondary" href="index.php?page=apps" role="button">Contratar »</a></p>
        </div>
        <div class="col-md-4">
            <h2>Aplicaciones</h2>
            <p>Desarrollo de aplicaciones Web</p>
            <p><a class="btn btn-secondary" href="index.php?page=website" role="button">Contratar »</a></p>
        </div>
        <div class="col-md-4">
            <h2>SEO</h2>
            <p>Optimizacion en buscadores web (Google, Yahoo, Bing).</p>
            <p><a class="btn btn-secondary" href="index.php?page=seo" role="button">Contratar »</a></p>
        </div>
    </div>
    <hr>
</div> 
@endsection