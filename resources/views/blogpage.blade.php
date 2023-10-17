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

    <div style="position:absolute; bottom: 10%; left:5%; max-width: 40%; z-index: 10" class="text-white">
        <h1 style="font-size: 72px; font-family: 'Times New Roman';" class="mb-0 pb-0">Access Blogs</h1>
        <p style="font-family: 'Raleway';">Explore our site to discover why our Healthcare Professionals
            love working
            with
            us while discovering some of
            the best opportunities in the industry
        </p>
    </div>
</div>

<section>
    <div class="container-xl py-5 ">

        <center>
            <img src="{{asset('storage/blog/' . $article->image)}}" style="max-height:400px"
                class="img-fluid rounded-4 mb-5">
            <h1>{{$article->title}}</h1>
        </center>
        <div style="padding-left: 100px; padding-right: 100px">
            <p>{{$article->content}}</p>

        </div>
    </div>

</section>
@endsection
