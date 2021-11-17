@extends('layouts.app')
<style>
    .gallery-style-items{
        width: 100%;
        display: flex;
        overflow-x: auto;
        overflow-y: hidden;
        padding-bottom: 1rem;
        margin: 0 0 3rem 0;

    }
    .gallery-style-item-image{
        width: 300px;
        height: 320px;
        background-color: white;
        margin-right: 1rem;
    }

</style>
@section('page-hero')
    @include('includes.frontend.header')
@endsection

@section('content')
<h1>Styles Gallery</h1>

<p class="lead">Browse through some of our beaitufully delivered services.</p>

<div class="gallery-style-wrapper">
    <h1>Braids</h1>

    <div class="gallery-style-items">
        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>



    </div>

</div>

<div class="gallery-style-wrapper">
    <h1>Weave-ons</h1>

    <div class="gallery-style-items">
        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>



    </div>
</div>

<div class="gallery-style-wrapper">
    <h1>Wigcaps</h1>

    <div class="gallery-style-items">
        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>

        <div>
            <div class="gallery-style-item-image">

            </div>
        </div>



    </div>
</div>

@endsection




