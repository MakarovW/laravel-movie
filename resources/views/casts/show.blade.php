@extends('layouts.app')

@section('content')

<div class="card my-4">
    <div class="row">
        <div class="col-5">
            <img
            style="object-fit: cover;width: 320px;max-width: 500px;height: 540px;"
            class="card-image-top"
            src="{{ $cast->image }}"
            alt=""/>
        </div>
        <div class="col-7">
            <div class="card-body">
                <h1>{{ $cast->name }}</h1>
                <p>Все фильмы - <strong>{{ $cast->name }}</strong></p>
                <ul class="list-group list-group-flush">
                    @if (count($cast->movies))
                        @foreach ($cast->movies as $movie)
                            <li class="list-group-item">
                                <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a>
                            </li>
                        @endforeach
                    @endif

                </ul>
            </div>
        </div>
    </div>


    <div class="card-footer">
        <form action="#" method="POST">
            <button type="submit" class="btn btn-link float-end">Удалить</button>
        </form>
    </div>
</div>

@endsection
