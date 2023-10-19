@extends('components.layout2')

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <img src="{{asset('img/blogimg.jpg')}}" class="d-block w-100">
            </div>
        </div>
    </div>

    <div style="position:absolute; bottom: 10%; left:5%; max-width: 40%; z-index: 10" class="text-white">
        <h1 style="font-size: 72px; font-family: 'Times New Roman';" class="mb-0 pb-0">Access Blogs</h1>
    </div>
</div>

<section>
    <div class="container-xl py-5 ">

        <div class="my-5">
            <div class="row gy-4">

                <div class="row">
                    <div class="col-9">
                        @php
                        $blogresult = DB::table('blog')
                        ->where('status', 'active')
                        ->orderBy('id', 'desc')
                        ->get()
                        ->toArray();
                        @endphp


                        <div id="blogContainer">
                            @foreach ($blogresult as $blog)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/blog/' . $blog->image) }}" class="rounded-start"
                                            style="height: 100%; min-height: 300px; max-height:300px; width: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-4">
                                            <h2 class="card-title">{{$blog->title}}</h2>
                                            <div class="card-text"
                                                style="max-height: 3em; overflow: hidden; word-wrap: break-word; text-overflow: ellipsis;">
                                                {!! str_replace(['<br>', '<b>', '</b>', 'src', '</p>', '<p>'], [' ', '',
                                                    '',
                                                    '', '', ''],
                                                    $blog->content) !!}
                                            </div>
                                            <p class="card-text"><small class="text-body-secondary">{{
                                                    \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</small>
                                            </p>
                                            <a href="/article?id={{$blog->id}}" class="btn"
                                                style="background-color: #FFFF80">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-3">
                        Search Article:
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Article Title" id="searchtitle">
                            <button class="btn btn-outline-secondary" type="button" id="searchbutton"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <hr>
                        Categories:
                        <div class="form-check">
                            <input class="form-check-input category-checkbox" type="checkbox" value="Nurses in the News"
                                id="category1">
                            <label class="form-check-label" for="flexCheckDefault">
                                Nurses in the News
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input category-checkbox" type="checkbox" value="News"
                                id="category2">
                            <label class="form-check-label" for="flexCheckDefault">
                                News
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input category-checkbox" type="checkbox"
                                value="Tips and Inspiration" id="category3">
                            <label class="form-check-label" for="flexCheckDefault">
                                Tips and Inspiration
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input category-checkbox" type="checkbox"
                                value="Team Member Spotlight" id="category4">
                            <label class="form-check-label" for="flexCheckDefault">
                                Team Member Spotlight
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input category-checkbox" type="checkbox" value="Newsletter"
                                id="category5">
                            <label class="form-check-label" for="flexCheckDefault">
                                Newsletter
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('jsscripts')
<script>
    $(document).ready(function(){
        const searchtitle = $('#searchtitle');

        $('#searchbutton').on('click', function(){
            createSearchQuery();
        })

        $('.category-checkbox').change(function () {
            createSearchQuery();
        });

        function createSearchQuery(){
            let title = searchtitle.val();
            let selectedCategories = [];

            $('.category-checkbox:checked').each(function () {
                selectedCategories.push($(this).val());
            });

            $.get('/fetchblog', {title: title, categories: selectedCategories}, function(data){
                let container = $('#blogContainer');
                container.empty();

                data.forEach(function (blog) {
                    let blogCard = $('<div class="card mb-3">' +
                        '<div class="row g-0">' +
                        '<div class="col-md-4">' +
                            '<img src="{{ asset('storage/blog/') }}/' + blog.image + '" class="rounded-start" style="height: 100%; min-height: 300px; max-height:300px; width: 100%; object-fit: cover;">' +
                        '</div>' +
                        '<div class="col-md-8">' +
                        '<div class="card-body p-4">' +
                        '<h2 class="card-title">' + blog.title + '</h2>' +
                        '<div class="card-text" style="max-height: 3em; overflow: hidden; word-wrap: break-word; text-overflow: ellipsis;">' +
                        blog.content +
                        '</div>' +
                        '<p class="card-text"><small class="text-body-secondary">' + blog.created_at + '</small></p>' +
                        '<a href="/article?id=' + blog.id + '" class="btn" style="background-color: #FFFF80">Read More</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>');

                    container.append(blogCard);
                });
            });
        }
    });

</script>
@endpush