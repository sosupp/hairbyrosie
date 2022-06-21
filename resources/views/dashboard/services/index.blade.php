@extends('layouts.dashboard')
@section('content')
<style>
    .section-container{
        min-height: 600px;
        background-color: whitesmoke;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 15px;
    }

    .list-else-message{
        text-align: center;
        padding: 100px;
        color: #b1aeae;
        font-size: 1rem;
    }

    .grid-view{
        /* width: 200px; */
        min-height: 200px;
        display: none;
    }

    #testing{
        height: 300px;
        display: none;
    }

    .grid-view-image{
        height: 150px;
        background-color: #cecece;
    }

    .grid-view-image img{
        width: 100%;
        height: 100%;
        object-fit: cover;

    }

    .grid-view-title{
        background-color: white;
        height: 80px;
    }

    .grid-view-date{
        height: 30px;
        background-color: white;
    }
    .extra-details{
        border-top: 1px solid #cecece;
        background-color: white;
        height: 40px;
    }

    #table{
        display: none;
    }

    #tableView{
        width: 100%;
    }

    .article-admin-label{
        font-size: 12px;
        color: darkblue;
        font-family: 'Passion One', cursive;
        font-weight: lighter;
    }
</style>


<div class="d-flex justify-content-between">
    <h4>services</h4>
    <h4>
        <a href="{{route('dashboard.service.create')}}" class="btn btn-success btn-sm">Add service</a>
    </h4>
</div>

<div class="section-container">
    @if ($services->count() > 0)
        <div class="d-flex justify-content-between">
            <div class="mb-2">
                <input class="btn btn-secondary btn-sm" type="button" value="TABLE" id="table">
                <input class="btn btn-secondary btn-sm" type="button" value="GRID" id="grid">
            </div>

        </div>

        <div id="tableView">
            <table class="table table-responsive table-hover" >
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Service Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Date Added</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($services as $service)
                    <tr>
                        <td scope="row">{{$service->id}}</td>
                        <td>{{$service->name}}</td>

                        <td>
                            <img width="50" height="30"
                                src="{{asset($service->image)}}">
                        </td>

                        <td>{{$service->price}}</td>
                        <td>{{$service->created_at->isoFormat('LL')}}</td>

                        @if ($service->admin)
                            <td>
                                {{$service->admin->name}}
                                <div>
                                    <small class="article-admin-label">
                                    <strong>admin</strong></small>
                                </div>

                            </td>
                        @elseif ($service->user)
                            <td>{{$service->user->name}}</td>
                        @endif

                        <td class="d-flex">
                            <span>
                                <a href="{{route('dashboard.service.show', $service->id)}}"
                                    class="btn btn-success btn-sm">VIEW</a>
                            </span>

                            <span class="mx-1">
                                <a href="{{route('dashboard.service.edit', $service)}}"
                                class="btn btn-primary btn-sm">EDIT</a>
                            </span>

                            <span >
                                <form action="{{route('dashboard.service.destroy', $service->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm ml-2">DELETE</button>
                                </form>
                            </span>


                        </td>
                    </tr>
                    @empty
                        <td>No services</td>
                    @endforelse
                </tbody>
            </table>
        </div >


        {{-- GRID VIEW --}}
        <div class="row">
            @forelse ($services as $service)
            <div class="col-sm-6 col-md-4 col-xxl-3">

                <div class="grid-view my-3" id="testing">
                    {{-- image --}}
                    <div class="grid-view-image">
                        <img src="{{asset($service->post_image)}}"
                                    alt="{{$service->image_caption}}">
                    </div>

                    {{-- heading --}}
                    <div class="">
                        <div class="grid-view-title px-2">
                            <h6 class="py-2">
                                <b>{{$service->title}}</b>
                            </h6>
                        </div>

                        <div class="d-flex justify-content-between align-items-center px-2 grid-view-date">
                            <small>{{$service->created_at->isoFormat('LL')}}</small>
                            {{-- <small>{{$service->admin->name}}</small> --}}
                            @if ($service->admin)
                            <small>
                                {{-- {{$service->admin->name}} --}}
                                <div>
                                    <small class="article-admin-label">
                                    <strong>Admin</strong></small>
                                </div>

                            </small>
                            @elseif ($service->user)
                                <small>{{$service->user->name}}</small>
                            @endif
                        </div>
                    </div>

                    {{-- extra details --}}
                    <div class="d-flex justify-content-between extra-details p-2">
                        <small>20K</small>
                        <small><a href="{{route('dashboard.service.show', $service)}}" class="btn btn-primary btn-sm py-0">VIEW</a></small>
                        <small class="">
                            <form action="{{route('dashboard.service.destroy', $service->id)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm py-0">DELETE</button>
                            </form>
                        </small>
                    </div>

                </div>

            </div>
            @empty
                <td>No services</td>
            @endforelse
        </div>


    @else

        <div class="list-else-message">
            <span >no services on list</span>
            <div class="my-4">
                <span class="fs-2">All <b>services</b> will show here in table with grid view option.</span>
            </div>
        </div>

    @endif
</div>


<script>
    'use strict'

    const grid = document.getElementById("grid");
    const table = document.getElementById("tableView");
    const gridView = document.querySelectorAll(".grid-view");
    var i;

    grid.addEventListener("click", ()=>{
        // loop/ foreach
        for(i = 0; i < gridView.length; i++){
            gridView[i].style.display = "block";
        }
        table.style.display = "none";

        document.querySelector("#table").style.display = "inline-block";
    })

    document.getElementById("table").addEventListener("click", ()=>{
        for(i = 0; i < gridView.length; i++){
            gridView[i].style.display = "none";
        }

        table.style.display = "inline-block";
        document.querySelector("#table").style.display = "none";
    })
</script>
@endsection
