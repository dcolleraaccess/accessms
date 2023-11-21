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
            <h1 class="text-left">{{$job->jobtitle}}</h1>
            <p>
                <b>Time:</b> {{ \Carbon\Carbon::parse($job->start)->format('h:iA') }} EST - {{
                \Carbon\Carbon::parse($job->end)->format('h:iA') }} EST<br>
                <b>Pay Rate:</b> ${{$job->payrate}} <br>
                <b>Location:</b> {{$job->state}} <br>
            </p>
            <p>{!!$job->description!!}</p>



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
                            <span class="input-group-text">Address</span>
                            <input type="text" aria-label="First name" class="form-control" placeholder="Address*">
                        </div>
                        <div class="input-group my-3">
                            <span class="input-group-text">Age</span>
                            <input type="text" aria-label="First name" class="form-control" placeholder="Age*">
                        </div>
                        <div class="input-group my-3">
                            <span class="input-group-text">Description</span>
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

</section>