@extends('components.layout')

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <img src="{{asset('img/1 - Traveler on Boat Deck Exploring.jpg')}}" class="d-block w-100">
            </div>
        </div>
    </div>

    {{-- <div style="position:absolute; bottom: 10%; left:5%; max-width: 40%; z-index: 10" class="text-white">
        <h1 style="font-size: 72px; font-family: 'Times New Roman';" class="mb-0 pb-0">Title Here</h1>
        <h1 style="font-family: 'Times New Roman';">Why not <span
                style=" font: italic 1em Georgia, Times, 'Times New Roman' , serif;">both</span>?</h1>
        <p style="font-family: 'Raleway';">Explore our site to discover why our Healthcare Professionals
            love working
            with
            us while discovering some of
            the best opportunities in the industry
        </p>
    </div> --}}
</div>

<section>
    <div class="container-xl py-5 ">


        <div class="row d-flex align-items-center py-4 my-4">

            <div class="col-6 ">
                <h1 class="text-end">Referral Program</h1>
                <p class="text-end">
                    Explore the world of wellness and healthcare with our brand new podcast, 'See U Next Tuesday!' Join
                    us as we delve into a variety of captivating health-related topics, offering insights into the
                    latest medical advancements, wellness trends, and discussions on promoting a healthier lifestyle.
                </p>
            </div>
            <div class="col-6">
                <img src="{{asset('img/Locum Tenens.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
        </div>

    </div>

</section>



<section>
    <div class="container-xl py-5 my-5">
        <div class="row d-flex align-items-center">

            <div class="">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Send a Referral</h3>
                        <form action="" class="mt-4">
                            <div class="input-group my-4">
                                <span class="input-group-text">Email</span>
                                <input type="text" aria-label="First name" class="form-control">
                            </div>
                            <div class="input-group my-4">
                                <span class="input-group-text">Example Input</span>
                                <input type="text" aria-label="First name" class="form-control">
                            </div>
                            <div class="input-group my-4">
                                <span class="input-group-text">Sample</span>
                                <input type="text" aria-label="First name" class="form-control">
                            </div>
                            <button class="btn" style="background-color: #FFFF80">Send Referral</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>



@endsection
