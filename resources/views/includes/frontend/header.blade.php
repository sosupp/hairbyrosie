<style>
  .site-main-nav{
        background-color: rgba(0, 0, 0, 0.3);
        min-height: 50px;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    }
    .navbar-brand > a{
        text-decoration: none;
        color: darkblue;

    }
    .navbar-brand h1{
        font-size: 1.3rem;
        font-weight: bold;
        font-family: 'Comforter Brush', cursive;
    }
    .navbar-nav a{
        padding: 0 0.5rem;
        text-decoration: none;
        color:orangered;
        font-weight: bold;
        text-shadow: 1px 1px 2px white;
        font-size: 1.3rem;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light site-main-nav sticky-top">
    <div class="container-md">
        {{-- brand logo or name --}}
        <div class="navbar-brand">
            <a href="/">
                <h1>Hair by Rosie</h1>
            </a>
        </div>

        {{-- other nav links: search, etc. --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a href="#">Services</a>
                <a href="#">Hair Styles</a>
                <a href="#">Products</a>
                <a href="#">Book Online</a>
            </ul>

            <div class="ms-3">
                <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Log in</a>
                <a href="{{ route('register') }}" class="btn btn-success btn-sm">Free Membership</a>
            </div>
        </div>

    </div>
</nav>
