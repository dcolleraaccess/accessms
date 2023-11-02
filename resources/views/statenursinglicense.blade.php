@extends('components.layout2');

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/statenursing.jpg')}}"
                    style="height:300px;object-fit: cover;object-position: 0px -900px;">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-xl mt-5 mb-5 py-3">
        <h1 class="mt-5">State Nursing License</h1>
        <p>
            Access Healthcare makes transitioning to another state to practice as an RN, LPN, or CNA simple,
            regardless of what state you are currently working in. Whether you want to travel the country or
            accept a position in the state next door, we have travel nursing jobs and direct hire (full-time)
            job opportunities available nationwide.
            <br><br>
            Questions? Our Recruiters have the most current information about each state’s requirements. Contact
            us!

        </p>
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
        <div class="row my-5" id="info">
            <div class="col-4" id="rn-section">
                <h4>RN</h4>
                <ul>
                    <li>
                        <b>Temp License:</b> 3-5 Days
                    </li>
                    <li>
                        <b>Perm License:</b> 3-5 Days
                    </li>
                    <li>
                        <b>Fees</b> 3-5 Days
                    </li>
                    <li>
                        <b>Notes</b> 3-5 Days
                    </li>
                    <li>
                        <b>Link</b>
                    </li>
                </ul>
            </div>
            <div class="col-4" id="lpn-section">
                <h4>LPN</h4>
                <ul>
                    <li>
                        <b>Temp License:</b> 3-5 Days
                    </li>
                    <li>
                        <b>Perm License:</b> 3-5 Days
                    </li>
                    <li>
                        <b>Fees</b> 3-5 Days
                    </li>
                    <li>
                        <b>Notes</b> 3-5 Days
                    </li>
                    <li>
                        <b>Link</b>
                    </li>
                </ul>
            </div>
            <div class="col-4" id="cna-section">
                <h4>CNA</h4>
                <ul>
                    <li>
                        <b>Temp License:</b> 3-5 Days
                    </li>
                    <li>
                        <b>Perm License:</b> 3-5 Days
                    </li>
                    <li>
                        <b>Fees</b> 3-5 Days
                    </li>
                    <li>
                        <b>Notes</b> 3-5 Days
                    </li>
                    <li>
                        <b>Link</b>
                    </li>
                </ul>
            </div>
        </div>
</section>

@endsection

@push('jsscripts')
<script>
    $(document).ready(function(){

            updateInfo();

            $('#states').change(function() {
                updateInfo();
            })

            function updateInfo(){
                var selectedState = $('#states').val();
                $.get('/stateinfo', {state:selectedState}, function (data){
                    $('#info #rn-section').html(data.rn);

                    // Update the LPN section
                    $('#info #lpn-section').html(data.lpn);

                    // Update the CNA section
                    $('#info #cna-section').html(data.cna);
                })
            }
        })
</script>
@endpush