@extends('components.layout')

@section('content')
{{-- Header with Image --}}


<section style="padding-top: 150px">
    <div class="container-xl py-5 ">
        <center>
            <img src="{{asset('storage/blog/' . $article->image)}}" style="max-height:400px"
                class="img-fluid rounded-4 mb-5">
            <h1>{{$article->title}}</h1>
        </center>
        <div style="padding-left: 100px; padding-right: 100px">
            {!! $article->content !!}
        </div>
    </div>

</section>
@endsection