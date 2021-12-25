@extends('layouts.template')
@section('content')
@foreach ($productos as $producto)

<div class="col-lg-4 col-md-6 col-sm-12" data-bs-target="#portfolioModal1{{ $producto->id }}">
    <div class="blog-post-thumb">
        <div class="img">
            <img class="img-fluid" src="{{ $producto->imagen }}" alt="..." />
        </div>
        <div class="blog-content">
            <h3>
                <a href="#">{{ $producto->nombre }}</a>
            </h3>
            <div class="text">
                {{ $producto->descripcion }}
            </div>
            <a href="#" class="main-button">Comprar</a>
        </div>
    </div>
</div>
@endforeach
@endsection
