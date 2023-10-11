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

        <div class="my-5">
            <center>
                <h1>Title Here</h1>
            </center>
            <div class="row gx-2">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Title Here</h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, alias nostrum animi
                                eum voluptate architecto quisquam totam neque excepturi quos?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Title Here</h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, alias nostrum animi
                                eum voluptate architecto quisquam totam neque excepturi quos?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Title Here</h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, alias nostrum animi
                                eum voluptate architecto quisquam totam neque excepturi quos?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>


@endsection