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

            <div class="col-5">

                <br>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Keywords">
                            </div>
                            <div class="">
                                <select name="states" id="states" class="form-select">
                                    @php
                                    $states = DB::table('statenursing')
                                    ->get()
                                    ->toArray();
                                    @endphp

                                    @foreach ($states as $state)
                                    <option value="{{$state->id}}">{{$state->state}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-dark mt-2" style="width: 100%;">Search</button>
                    </div>
                </div>


            </div>


            <div class="col-7">
                <div id="jobcontainer" class="mt-4">

                    @php
                    $jobs = DB::table('corporatecareer')
                    ->get()
                    ->toArray();
                    @endphp

                    @foreach ($jobs as $job)
                    <div class="card mb-3">
                        <div class="">
                            <div class="card-body p-4">
                                <h2 class="card-title">{{$job->jobtitle}}</h2>
                                <p>
                                    <b>Time:</b> {{ \Carbon\Carbon::parse($job->start)->format('h:iA') }} - {{
                                    \Carbon\Carbon::parse($job->end)->format('h:iA') }}<br>
                                    <b>Pay Rate:</b> ${{$job->payrate}} <br>
                                    <b>Location:</b> {{$job->state}} <br>
                                    <b>Description:</b> {{$job->description}}
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