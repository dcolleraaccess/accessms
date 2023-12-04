@extends('components.layout2')


@section('styles')

@endsection

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/mockcorp.jpg')}}"
                    style="height:300px;object-fit: cover;object-position: 0px -150px;">
            </div>
        </div>
    </div>
</div>

<section style="min-height: 500px">
    <div class="container-xl py-3">

        <div class="row  py-4 my-4">
            <h1 class="text-left">Corporate Career</h1>
            <p>

                Welcome to Access Healthcare Staffing – Your Gateway to a Fulfilling Corporate Career!<br>
                <br>
                At Access Healthcare Staffing, we are more than just a staffing agency; we are a thriving community of
                dedicated professionals committed to making a positive impact in the healthcare industry. As a leading
                force in healthcare staffing, we connect talented individuals with rewarding career opportunities,
                ensuring that the right skills meet the right opportunities.
                <br><br>
                Join our dynamic and passionate team as we embark on a journey to elevate healthcare staffing to new
                heights. At Access Healthcare Staffing, we believe in the power of teamwork, innovation, and excellence.
                If you are ready to contribute your skills and passion to a purpose-driven organization, explore the
                exciting career possibilities that await you.
            </p>

            <div class="col-12">
                <div id="jobcontainer" class="mt-4">


                    @php
                    $jobs = DB::table('corporatecareer')
                    ->orderBy('id', 'desc')
                    ->get()
                    ->toArray();

                    $jobscount = DB::table('corporatecareer')
                    ->count();
                    @endphp
                    @if ($jobscount > 0)
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
                    @else
                    <h4>No Job at the moment but we are happy to accept your application!</h4>
                    <div class="card mt-4">
                        <div class="card-body">
                            <h3 class="card-title">Send Resume</h3>
                            <form action="" class="mt-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Name</span>
                                    <input type="text" class="form-control" placeholder="First Name*">
                                    <input type="text" class="form-control" placeholder="Last Name*">
                                </div>
                                <div class="input-group my-3">
                                    <select name="state" id="state" class="form-select">
                                        @php
                                        $states = DB::table('statenursing')
                                        ->get()
                                        ->toArray();
                                        @endphp

                                        @foreach ($states as $state)
                                        <option value="{{$state->state}}">{{$state->state}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group my-3">
                                    <span class="input-group-text">About You</span>
                                    <textarea class="form-control"> </textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Attach Resume</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>

                                <button class="btn" style="background-color: #FFFF80">Send Details</button>
                            </form>

                        </div>

                    </div>
                    @endif


                </div>
            </div>

        </div>

    </div>

</section>