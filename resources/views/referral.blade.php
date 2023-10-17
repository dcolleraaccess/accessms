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
