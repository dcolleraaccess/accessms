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

        <div class="my-5">
            <div class="row gy-4">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/1 - Traveler on Boat Deck Exploring.jpg')}}"
                                    class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h1 class="card-title">Card title</h1>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                $blogresult = DB::table('blog')
                ->get()
                ->toArray();
                @endphp

                @foreach ($blogresult as $blog)
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('storage/blog/' . $blog->image)}}" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h1 class="card-title">{{$blog->title}}</h1>
                                    <p class="card-text">{{$blog->content}}</p>
                                    <p class="card-text"><small class="text-body-secondary">{{
                                            \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

</section>


@endsection