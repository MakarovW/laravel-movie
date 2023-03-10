@extends('layouts.app')

@section('content')
    <div class="card my-5">
        <div class="row">
            <div class="col-4">
                <img
                src="{{ $movie->image }}"
                alt=""
                class="card-image-top"
                style="max-width: 500px;width:100%;margin:0 auto;"
                />
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h1>{{ $movie->title }}</h1>
                    <div class="text-danger">
                        @for ( $i = 1; $i <= $movie->rating_star; $i++ )
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                    <p>{{ $movie->description }}</p>

                    <h3>Участинки
                        @auth
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCastModal">
                                <i class="fas fa-plus"></i>
                            </button>
                        @endauth
                    </h3>
                    <ul class="list-group list-group-flush">
                        @if (count($movie->casts))
                            @foreach ($movie->casts as $cast)
                                <li class="list-group-item"><a href="{{ route('casts.show', $cast->id) }}">{{ $cast->name }}</a> -
                                    <span class="text-muted font-italic">{{ $cast->pivot->role }}</span>
                                    @auth
                                        <form action="{{ route('movie_cast_destroy', [$movie->id, $cast->id]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-link text-danger">Удалить</button>
                                        </form>
                                    @endauth
                                </li>
                            @endforeach
                        @else
                                Нет участников
                        @endif
                    </ul>

                </div>
            </div>
        </div>

        @auth
            <div class="card-footer">
                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-link float-end">Удалить</button>
                </form>
            </div>
        @endauth

        <div class="m-5">
            <h3>Комментарии</h3>
            <ul class="list-group list-group-flush">
                @if (count($movie->comments))
                    @foreach ($movie->comments as $comment)
                        <li class="list-group-item"><b>{{ $comment->user->name }}: </b> {{ $comment->content }}
                            @auth
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-link text-danger">Удалить</button>
                                </form>
                            @endauth
                        </li>
                    @endforeach
                @else
                        Нет комментариев
                @endif

            </ul>
            <form action="{{ route('movies.comments.store', $movie->id) }}" method="POST">
                @csrf
                <input type="text" name="comment" class="form-control" placeholder="Напишите комментарий...">
                <button type="submit" class="btn btn-primary mt-2 float-end">Комментировать</button>
            </form>
        </div>

    </div>

@auth
    <!-- Modal -->
    <div class="modal fade" id="addCastModal" tabindex="-1" aria-labelledby="addCastModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCastModalLabel">New Cast</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Cast Role</h1>
                        <form action="{{ route('movie_cast_store', $movie->id) }}" method="POST">
                            @csrf
                            <div class="form-group m-1">
                                <label for="">Имя участинка</label>
                                <select name="cast_movie_name" class="form-control">
                                    <option value="" disabled selected>Choose Cast</option>
                                    @if (count($casts))
                                        @foreach ($casts as $cast)
                                            <option value="{{ $cast->id }}">{{ $cast->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group m-1">
                                <label for="">Роль</label>
                                <input type="text" class="form-control" name="cast_movie_role">
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Отправить</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h1>Новый участник</h1>
                        <form action="{{ route('casts.store') }}" method="POST">
                            @csrf
                            <div class="form-group m-1">
                                <label for="">Имя участинка</label>
                                <input type="text" class="form-control" name="cast_name">
                            </div>
                            <div class="form-group m-1">
                                <label for="">Изображение участинка</label>
                                <input type="text" class="form-control" name="cast_image">
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endauth

@endsection
