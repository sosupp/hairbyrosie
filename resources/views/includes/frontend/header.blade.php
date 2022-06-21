<style>
    .site-main-nav{
        background-color: #f2f6fc;
        /* box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px; */

    }
    .nav-items-wrapper{
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
        line-height: 60px;
    }
    .brand-logo > a{
        text-decoration: none;
        color: darkblue;

    }
    .brand-logo h1{
        font-size: 1.3rem;
        font-weight: bold;
        font-family: 'Comforter Brush', cursive;
        /* margin: 0; */
    }
    .navbar-nav a{
        padding: 0 0.5rem;
        text-decoration: none;
        color:orangered;
        font-weight: bold;
        text-shadow: 1px 1px 2px white;
        font-size: 1.3rem;
    }
    .menu-toggler{
        display: none;
        border: none;
        background-color: inherit;
    }
    .menu-toggler > span{
        width: 30px;
        height: 8px;
        border-bottom: 2px solid black;
        transform: rotate(180deg);
        -ms-transform: rotate(180deg);	 /*  for IE  */
        /* 	for browsers supporting webkit (such as chrome, firefox, safari etc.). */
        -webkit-transform: rotate(180deg);
        display: block;
    }
    #check{
        display: none;
    }
    .nav-items ul{
        margin: 0;
        /* border: 1px solid red; */
        padding: 0;
        display: flex;
        list-style: none;
        padding: 0;
    }
    .nav-items ul li{
        padding:0 1rem;
    }
    .nav-items ul li a{
        text-decoration: none;
        color: black;
        font-weight: bold;
    }
    .nav-items ul li a:hover{
        border-bottom: 5px solid orange;
    }


    /* MEDIA QUERIES */
    @media screen and (max-width: 767px){
        .nav-items-wrapper{
            line-height: 30px;
        }
        .nav-items,
        .nav-cta-wrapper{
            width: 90%;
            height: 100vh;
            display: ;
            position: fixed;
            top: 60px;
            /* right: 0; */
            left: -100%;
            background-color: white;
            transition: 0.4s ease;
        }
        .nav-items ul{
            width: 100%;
            display: block;
        }
        .nav-items ul li{
            margin-top: 1rem;
        }

        .menu-toggler{
            display: block;
            float: right;
        }

        #check:checked ~ .nav-items{
            left: 0;
        }

    }
</style>

<nav class="site-main-nav sticky-top">
    <div class="container-md">
        <div class="nav-items-wrapper">
            {{-- brand logo or name --}}
            <div class="brand-logo">
                <a href="/">
                    <h1>Hair by Rosie</h1>
                </a>
            </div>

            {{-- other nav links: search, etc. --}}
            <input type="checkbox" id="check">
            <label for="check" class="menu-toggler">
                <span class=""></span>
                <span class=""></span>
                <span class=""></span>
            </label>

            <div class="nav-items">
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li><a href="#">Hair Styles</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="{{route('frontend.booking.index')}}">Appointment</a></li>

                </ul>

                {{-- <div class="nav-cta-wrapper">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Log in</a>
                    <a href="{{ route('register') }}" class="btn btn-success btn-sm">Free Membership</a>
                </div> --}}
            </div>


        </div>


    </div>
</nav>
