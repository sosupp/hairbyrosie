
<style>
    /* .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 48
    } */

    .material-icons{
        font-size: 14px;
        padding: 0;
        margin-left: 1rem;
    }
    .site-main-nav{
        background-color: #ffffff;
        box-shadow: 0 0 16px rgba(0,0,0,.15);
        /* box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px; */

    }
    .nav-items-wrapper{
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* line-height: 60px; */
        padding: 0.8rem 0;
    }
    .brand-logo > a{
        text-decoration: none;
        color: darkblue;

    }
    .brand-logo h1{
        font-size: 1.3rem;
        font-weight: bold;
        font-family: 'Comforter Brush', cursive;
        margin: 0;
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
        display: flex;
        align-items: center;
        list-style: none;
    }
    .nav-items ul li{
        padding: 0 1rem;
        margin: 0;
    }
    .nav-items ul li a{
        text-decoration: none;
        color: #1e1e27;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
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
                    <li><a href="{{route('frontend.booking.index')}}">Appointment</a></li>


                    <li>
                        <a href="#">
                            <span class="material-icons">
                                person
                                </span>
                        </a>

                        <a href="#">
                            <span class="material-icons">
                                shopping_bag
                                </span>
                        </a>
                    </li>
                </ul>

                {{-- cart icon --}}


                {{-- <div class="nav-cta-wrapper">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Log in</a>
                    <a href="{{ route('register') }}" class="btn btn-success btn-sm">Free Membership</a>
                </div> --}}
            </div>

            {{-- cart and account --}}
            {{-- <div class="cart-account-icons">
                <ul>
                    <li>
                        <a href="#">
                            <span class="material-icons">
                                person
                                </span>
                        </a>

                        <a href="#">
                            <span class="material-icons">
                                shopping_bag
                                </span>
                        </a>
                    </li>
                </ul>
            </div> --}}
        </div>


    </div>
</nav>
