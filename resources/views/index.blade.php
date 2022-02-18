@extends('layouts.app')
<style>

</style>
@include('includes.frontend.header')
@section('page-hero')
{{-- hero --}}
<div class="homepage-hero-wrapper">

    <div class="homepage-glass-wrapper">

        <div class="cta-btn">
            <a href="#" id="bookOnline">Book Online</a>
            <a href="{{route('frontend.gallery.index')}}" id="moreStyles">Styles Gallery</a>
        </div>
    </div>
</div>

@endsection

@section('content')

{{-- services section --}}
<div class="row" style="margin-bottom: 2rem">
    <div class="page-section-heading">
        <h1>Our Services</h1>
        <p>What we do best to make you the best.</p>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="service-wrapper">
            {{-- image --}}
            <div class="service-image">
                <img src="{{asset('images/hairs2.jpg')}}" alt="">
            </div>

            {{-- brief details --}}
            <div class="service-info">
                <h1>Braids</h1>
                <p>Some short description</p>

                <div class="extra-cta">
                    <a href="#">more info</a>
                    <a href="#">see gallery</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="service-wrapper">
            {{-- image --}}
            <div class="service-image">
                <img src="{{asset('images/hairs2.jpg')}}" alt="">
            </div>

            {{-- brief details --}}
            <div class="service-info">
                <h1>Sleek Press</h1>
                <p>Some short description</p>

                <div class="extra-cta">
                    <a href="#">more info</a>
                    <a href="#">see gallery</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="service-wrapper">
            {{-- image --}}
            <div class="service-image">
                <img src="{{asset('images/hairs2.jpg')}}" alt="">
            </div>

            {{-- brief details --}}
            <div class="service-info">
                <h1>Wigcaps</h1>
                <p>Some short description</p>

                <div class="extra-cta">
                    <a href="#">more info</a>
                    <a href="#">book this</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- hair styles --}}
<div class="row bg-mobile-special">
    <div class="page-section-heading">
        <h1>Braid Styles</h1>
        <p>Traditional & contemporary styles that you love. </p>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="hair-style-wrapper">
            {{-- image --}}
            <div class="style-image">
                <img src="{{asset('images/hairs7.jpg')}}" alt="">
            </div>

            {{-- brief details --}}
            <div class="style-info">
                <h1>Twists</h1>
                <p>Some short description</p>

                <div class="style-cta">
                    <a href="#">see works</a>
                    <a href="#">book this</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="hair-style-wrapper">
            {{-- image --}}
            <div class="style-image">
                <img src="{{asset('images/hairs6.jpg')}}" alt="">
            </div>

            {{-- brief details --}}
            <div class="style-info">
                <h1>Traditional Braids</h1>
                <p>Also known as regular braids</p>

                <div class="style-cta">
                    <a href="#">see works</a>
                    <a href="#">book this</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="hair-style-wrapper">
            {{-- image --}}
            <div class="style-image">
                <img src="{{asset('images/hairs3.jpg')}}" alt="">
            </div>

            {{-- brief details --}}
            <div class="style-info">
                <h1>Traditional Braids</h1>
                <p>Also known as regular braids</p>

                <div class="style-cta">
                    <a href="#">see works</a>
                    <a href="#">book this</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
