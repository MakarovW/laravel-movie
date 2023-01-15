@extends('layouts.app')

@section('content')

<div class="card my-4">
    <img
        style="max-width: 500px;margin:0 auto;"
        class="card-image-top"
        src="https://upload.wikimedia.org/wikipedia/commons/3/33/Mark_Kassen%2C_Tony_C%C3%A1rdenas_and_Chris_Evans_%28cropped%29.jpg"
        alt=""/>
    <div class="card-body">
        <h1>Tony Stark</h1>
        <p>All Movies of Tony Stark</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a href="#">Avengers</a>
            </li>
        </ul>
    </div>
    <div class="card-footer">
        <form action="#" method="POST">
            <button type="submit" class="btn btn-link float-end">Delete</button>
        </form>
    </div>
</div>

@endsection
