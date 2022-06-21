@extends('layouts.dashboard')
@section('content')

<style>
    .section-container{
        min-height: 190px;
        background-color: whitesmoke;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 15px;
    }

    .admin-read-article{
        height: 600px;
        overflow-x: hidden;
        overflow-y: scroll;
        padding: 1rem 10rem;
    }

    .read-article-img img{
        width: 100%;
        height: 150px;
        background-color: #cccccc;
        object-fit: contain;
    }
</style>

<div class="d-flex justify-content-between">
    <h4>View Service</h4>

    <h4>
        <span class="mx-1"><a href="{{route('dashboard.service.edit', $service)}}"
            class="btn btn-primary btn-sm">EDIT</a>
        </span>

        <a href="{{route('dashboard.service.index')}}"
            class="btn btn-success btn-sm">CANCEL</a>
    </h4>
</div>

<div class="col-md-12">
    <div class="section-container">
        <div class="admin-read-article">
            <h4>{{$service->name}}</h4>

            <div class="read-article-img">
                <img src="{{asset($service->image)}}">
            </div>


            <div class="my-3">
                <p>{!! $service->description !!}</p>
            </div>



        </div>

    </div>
</div>

@endsection
