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

        <div class="row d-flex align-items-center py-4 my-4">

            <div class="col-12">
                <h1 class="text-left">Corporate Career</h1>

                <br>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="First Name*">
                            </div>
                            <div class="col-6">
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
                        <hr>

                    </div>
                </div>
            </div>


        </div>

    </div>

</section>