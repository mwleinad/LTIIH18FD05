@extends('layouts.app')

@section('content')
<div class="container">
    <hr>
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Paginas Web</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$1,000 <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Hosting y dominio incluidos</li>
                </ul>
                <button type="button" data-product='Hosting' class="btn btn-lg btn-block btn-outline-primary contract">Contratar</button>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Aplicaciones</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$2,000 <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Aplicación en IPhone y Android</li>
                </ul>
                <button type="button" data-product='Aplicacion' class="btn btn-lg btn-block btn-primary contract">Contratar</button>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Enterprise</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$3,000 <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Optimización en buscadores</li>
                </ul>
                <button type="button" data-product='SEO' class="btn btn-lg btn-block btn-primary contract">Contratar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <script src='/0402ContosoBD/resources/js/purchase.js'></script>
@endsection


