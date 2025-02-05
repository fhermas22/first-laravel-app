@extends('layouts.app')

@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Listes des posts de {{ $category->name }}</h1>
            </div>
        </div>
    </header>

    <!-- Page content-->
    <div class="row">
        @if ($category->posts->isEmpty())
            <div class="container mb-4">
                <div class="row">
                    <!-- Blog entries-->
                    <div class="col-lg-12">
                        <p class="lead mb-0">Aucun post disponible pour cette catégorie.</p>
                    </div>
                </div>
            </div>
        @else
            @foreach ($category->posts as $post)
            <div class="col-lg-4">
                <!-- Blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $post -> created_at}}</div>
                        <h2 class="card-title h4">{{ $post -> title }}</h2>
                        <p class="card-text">{{ $post -> text }}</p>
                        <a class="btn btn-primary" href="#!">Lire plus →</a>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
@endsection
