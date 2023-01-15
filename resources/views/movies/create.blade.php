@extends('layouts.app')

@section('content')
    <div class="card my-5">

        <div class="card-body">
            <h1>Add new Movie</h1>

            <form action="{{ route('movies.store') }}" method="POST">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="text" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="">Rating star</label>
                    <select name="rating_star" class="form-control">
                        <option value="1">1 Star</option>
                        <option value="2">2 Star</option>
                        <option value="3">3 Star</option>
                        <option value="4">4 Star</option>
                        <option value="5">5 Star</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2 float-end">Submit</button>
            </form>
        </div>

    </div>


@endsection
