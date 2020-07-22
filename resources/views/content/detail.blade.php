@extends('layouts.master')
@section('content')
<div class="container-fluid mt-4">
    <h1>Question</h1>
    <div class="card shadow-sm mb-3 bg-white rounded ">
        <div class="card-body">
            <div class="row">
                <div class="col-md-auto">
                    <i class="far fa-thumbs-up"></i>
                    <br>
                    15
                    <br>
                    <i class="far fa-thumbs-down"></i>
                </div>
                <div class="col ml-3">
                    <h2 class="card-title">Question Title</h2>
                    <p>Question detail here</p>
                    <h6 class="text-muted">Comment</h6>
                    <div class="card shadow-sm bg-white rounded">
                        <div class="ml-3 mr-3 mb-2">
                            <p class="text-muted">comment here</p>
                            <div class="input-group">
                                <input class="form-control border-0" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid mt-4">
<h1>Answers</h1>
    <div class="card shadow-sm mb-3 bg-white rounded ">
        <div class="card-body">
            <div class="row">
                <div class="col-md-auto">
                    <i class="far fa-thumbs-up"></i>
                    <br>
                    15
                    <br>
                    <i class="far fa-thumbs-down"></i>
                    <br>
                    <i class="fas fa-check"></i>
                </div>
                <div class="col ml-3">
                    <p>Answer detail here</p>
                    <h6 class="text-muted">Comment</h6>
                    <div class="card shadow-sm bg-white rounded">
                        <div class="ml-3 mr-3 mb-2">
                            <p class="text-muted">comment here</p>
                            <div class="input-group">
                                <input class="form-control border-0" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection