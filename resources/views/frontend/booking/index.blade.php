@extends('layouts.app')
<style>
    .appointment-form-wrapper{
        width: 90%;
        min-height: 400px;
        border:1px solid whitesmoke;
        padding: 1rem;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    }

    .contact-details-wrapper{
        width: 100%;
        min-height: 300px;
        border:1px solid whitesmoke;
        padding:1rem;
        text-align: center;
    }

    form label{
        margin-top: 1.2rem;
        color: #4181e0;
        font-weight: bold;
    }

    /* MEDIA QUERIES */
    @media (max-width: 575.98px){
        .appointment-form-wrapper{
            width: 100%;
        }
    }
</style>
@section('page-hero')
    @include('includes.frontend.header')
@endsection

@section('content')

<div class="page-section-heading">
    <h1>Make Appointment</h1>

    <p class="lead">We make you are priority, reserve a date.</p>

    <div>
     </div>
</div>


<div class="row mt-5">
    {{-- appointment form --}}
    <div class="col-md-8">
        <div class="appointment-form-wrapper">
            <form class="row" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-calander">
                    <h2>Pick a date</h2>
                    <p>available dates are showing in green</p>
                </div>

                <div class="col-12">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>

                <div class="col-md-6">
                    <label for="mobile" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="mobile">
                </div>

                <div class="col-6">
                    <label for="service" class="form-label">Service Type</label>
                    <select id="service" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="upload" class="form-label">Attach Image</label>
                    <input class="form-control" type="file" id="upload">
                </div>

                <div class="col-12">
                    <label for="note" class="form-label">Any Note</label>
                    <textarea class="form-control" id="note"
                    placeholder="Required example textarea" required></textarea>

                </div>

                <div class="col-md-6 mt-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        Check me out
                        </label>
                    </div>
                </div>

                  <div class="col-md-6 mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

            </form>


        </div>
    </div>

    {{-- location and contact details --}}
    <div class="col-md-4">
        <div class="contact-details-wrapper">
            <h3>Contact Us</h3>
        </div>
    </div>
</div>



@endsection




