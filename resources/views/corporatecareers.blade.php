@extends('components.layout2')


@section('styles')

@endsection

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/referral.jpg')}}"
                    style="height:300px;object-fit: cover;object-position: 0px -150px;">
            </div>
        </div>
    </div>
</div>

<section style="min-height: 500px">
    <div class="container-xl py-3">

        <div class="row  py-4 my-4">
            <h1 class="text-left">Corporate Career</h1>


            <div class="col-12">
                <div id="jobcontainer" class="mt-4">

                    @php
                    $jobs = DB::table('corporatecareer')
                    ->orderBy('id', 'desc')
                    ->get()
                    ->toArray();
                    @endphp

                    @foreach ($jobs as $job)
                    <div class="card mb-3">
                        <div class="">
                            <div class="card-body p-4">
                                <h2 class="card-title">{{$job->jobtitle}}</h2>
                                <div class="card-text"
                                    style="max-height: 4.4em; overflow: hidden; word-wrap: break-word; text-overflow: ellipsis;">


                                </div>
                                <p>
                                    <b>Time:</b> {{ \Carbon\Carbon::parse($job->start)->format('h:iA') }} EST - {{
                                    \Carbon\Carbon::parse($job->end)->format('h:iA') }} EST<br>
                                    <b>Pay Rate:</b> ${{$job->payrate}} <br>
                                    <b>Location:</b> {{$job->state}} <br>
                                    <b>Description:</b> {!! \Illuminate\Support\Str::limit($job->description, 200) !!}
                                </p>


                                <a href="corpjob?id={{$job->id}}" class="btn mt-1"
                                    style="background-color: #FFFF80">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>

    </div>

</section>