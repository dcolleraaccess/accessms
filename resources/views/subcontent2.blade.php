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


                @php
                $blogresult = DB::table('blog')
                ->where('status', 'active')
                ->orderBy('id', 'desc')
                ->get()
                ->toArray();
                @endphp

                @foreach ($blogresult as $blog)
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/blog/' . $blog->image) }}" class="rounded-start"
                                    style="height: 100%; min-height: 320px; max-height:320px; width: 100%; object-fit: cover;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h2 class="card-title">{{$blog->title}}</h2>
                                    <div class="card-text"
                                        style="max-height: 5.8em; overflow: hidden; word-wrap: break-word; text-overflow: ellipsis;">
                                        {!! str_replace(['<br>', '<b>', '</b>', 'src', '</p>', '<p>'], [' ', '', '',
                                            '', '', ''],
                                            $blog->content) !!}
                                    </div>
                                    <p class="card-text"><small class="text-body-secondary">{{
                                            \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</small></p>
                                    <a href="/article?id={{$blog->id}}" class="btn"
                                        style="background-color: #FFFF80">Read More</a>
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