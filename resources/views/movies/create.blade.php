@extends('layouts.app')

@section('content')
    <div class="card my-5">

        <div class="card-body">
            <h1>Добавить новый фильм</h1>

            <form action="{{ route('movies.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Название</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="">Изображение</label>
                    <input type="text" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="">Количество звёзд</label>
                    <select name="rating_star" class="form-control">
                        <option value="1">1 звезда</option>
                        <option value="2">2 звезда</option>
                        <option value="3">3 звезда</option>
                        <option value="4">4 звезда</option>
                        <option value="5">5 звезда</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Описание</label>
                    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2 float-end">Отправить</button>
            </form>
        </div>

    </div>


@endsection
