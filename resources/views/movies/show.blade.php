@extends('layouts.app')

@section('content')
    <div class="card my-5">
        <img
            src="https://avatars.mds.yandex.net/get-kinopoisk-image/6201401/006c247b-35d5-4553-8ad9-e47928fde3aa/1920x"
            alt=""
            class="card-image-top"
        />
        <div class="card-body">
            <h1>Avengers</h1>
            <div class="text-danger">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>content</p>

            <h3>Cast
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus"></i>
                  </button>
            </h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Robert Downey, Jr. -
                    <span class="text-muted font-italic">Stark</span>
                </li>
                <li class="list-group-item">Chris Evans -
                    <span class="text-muted font-italic">Captain America</span>
                </li>
            </ul>

            <h3>Comments</h3>
            <p>No comments</p>
            <form action="#" method="POST">
                <input type="text" class="form-control" placeholder="say something">
                <button type="submit" class="btn btn-primary mt-2 float-end">Comment</button>
            </form>
        </div>

        <div class="card-footer">
            <form action="#">
                <button type="submit" class="btn btn-link float-end">Delete</button>
            </form>
        </div>

    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Cast</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <h1>Cast Role</h1>
                    <form action="#" method="POST">
                        <div class="form-group m-1">
                            <label for="">Actor Name</label>
                            <select name="cast_movie_name" class="form-control">
                                <option value="" disabled selected>Choose Cast</option>
                            </select>
                        </div>
                        <div class="form-group m-1">
                            <label for="">Role</label>
                            <input type="text" class="form-control" name="cast_movie_role">
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h1>New Cast</h1>
                    <form action="#" method="POST">
                        <div class="form-group m-1">
                            <label for="">Actor Name</label>
                            <input type="text" class="form-control" name="cast_name">
                        </div>
                        <div class="form-group m-1">
                            <label for="">Actor Image</label>
                            <input type="text" class="form-control" name="cast_image">
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection
