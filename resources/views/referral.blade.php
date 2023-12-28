@extends('components.layout2')


@section('styles')

@endsection

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/Nurses walking in Hallway - L.jpg')}}" style="height:300px;object-fit: cover">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-xl py-3">

        <div class="row d-flex align-items-center py-1 my-1 mb-1">

            <div class="col-12">
                <h1 class="text-center mb-3">Referral Program</h1>
                <h5 class="text-center">
                    We need more healthcare heroes like you.
                </h5>
                <p class="text-center">

                    Are you a licensed RN, LPN, CNA, or Allied Professional, and do you know someone exceptional who
                    would thrive with Access Healthcare Staffing? Refer a friend, and you'll be eligible for a fantastic
                    bonus! At Access Healthcare Staffing, we appreciate and value the contributions of our talented team
                    members and believe that great talent deserves to be rewarded. </p>
            </div>
        </div>


        <div class="row mt-4 mb-5">
            <div class="col-lg-3 mb-4 mb-lg-0 d-flex flex-column align-items-center">
                <i class="fa-solid fa-handshake-simple mb-3" style="font-size:50px"></i>
                <h4>
                    Refer a Friend
                </h4>
                <center>
                    Know a skilled healthcare professional seeking new opportunities? Refer them to Access Healthcare
                    Staffing!
                </center>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0  d-flex flex-column align-items-center">
                <i class="fa-solid fa-file mb-3" style="font-size:50px"></i>
                <h4>
                    Submit the Referral
                </h4>
                <center>
                    Fill out our easy online referral form, providing the necessary details about your referred
                    candidate.
                </center>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0   d-flex flex-column align-items-center">
                <i class="fa-solid fa-globe mb-3" style="font-size:50px"></i>
                <h4>
                    Let Us Connect
                </h4>
                <center>
                    Once referred, our team will connect with your candidate to explore opportunities matching their
                    skills and goals.
                </center>
            </div>
            <div class="col-lg-3 d-flex flex-column align-items-center">
                <i class="fa-solid fa-money-bill mb-3" style="font-size:50px"></i>
                <h4>
                    Earn Your Bonus
                </h4>
                <center>

                    When your referred candidate joins and completes onboarding, you'll earn a referral bonus as a token
                    of appreciation.
                </center>
            </div>
        </div>


        <p class="text-center mb-4">
            Ready to refer a friend and earn fantastic bonuses? Visit our Referral Program page to submit your referral
            and start the journey toward rewarding both you and your referred candidates.

            At Access Healthcare Staffing, we believe in the power of connections, and your referrals help us build a
            stronger, more talented team. Join us in shaping the future of healthcare staffing—refer a friend today!
        </p>
        <center>
            <a href="#form">
                <button class="btn btn-dark mb-5">Send a Referral</button>
            </a>
        </center>

    </div>

</section>

<section style="background-color:#FFFF80">
    <div class="container-xl py-5">
        <div class="row d-flex align-items-center py-2">
            <div class="col-lg-6 order-2 order-lg-1">
                <img src="{{asset('img/holdhands.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <h1 class="text-center text-lg-start">Benefits of Referring</h1>
                <p class="text-start">
                <ul>
                    <li class="my-2"><b>Generous Bonuses:</b> Enjoy a competitive bonus for each successful referral you
                        make.</li>
                    <li class="my-2"><b>Unlimited Opportunities:</b> There's no limit to how many referrals you can
                        submit or how
                        many
                        bonuses you can earn. The more talented professionals you refer, the more you can earn!</li>
                    <li class="my-2"><b>Contribute to Our Team:</b> Help us build an exceptional team of healthcare
                        professionals
                        dedicated
                        to making a positive impact in the industry.</li>
                </ul>
                </p>
            </div>

        </div>
    </div>

    <div id="form">
        <span style="color: #FFFF80">pin</span>
    </div>
</section>

<section>
    <div class="container-xl py-5 my-5">
        <div class="row d-flex align-items-center">

            <div class="">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Send a Referral</h3>
                        <form action="" class="mt-4">
                            <h5>About You</h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control" placeholder="First Name*">
                                <input type="text" class="form-control" placeholder="Last Name*">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Email</span>
                                <input type="text" aria-label="First name" class="form-control" placeholder="Email*">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Phone</span>
                                <input type="text" aria-label="First name" class="form-control"
                                    placeholder="Phone Number*">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Recruiter</span>
                                <select class="form-select" aria-label="Default select example" id="recruiters">
                                    <option selected hidden>Recruiters*</option>
                                </select>
                            </div>

                            <hr>

                            <h5>About Your Referral</h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control" placeholder="First Name">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Email</span>
                                <input type="text" aria-label="First name" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Phone</span>
                                <input type="text" aria-label="First name" class="form-control"
                                    placeholder="Phone Number">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Profession*</span>
                                <select class="form-select" aria-label="Default select example" id="professions">
                                    <option selected hidden>Professions</option>
                                    @php
                                    $professions = DB::table('professions')
                                    ->get()
                                    ->toArray();
                                    @endphp

                                    @foreach ($professions as $pro)
                                    <option value="{{$pro->id}}">{{$pro->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Specialty*</span>
                                <select class="form-select" aria-label="Default select example" id="specialties">
                                    <option selected hidden>Specialties</option>
                                </select>
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Preferred Communication*</span>
                                <select class="form-select" aria-label="Default select example" id="comms">
                                    <option selected>Email</option>
                                    <option>Phone</option>
                                    <option>Text</option>
                                </select>
                            </div>
                            <button class="btn" style="background-color: #FFFF80">Send Referral</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection

@push('jsscripts')
<script>
    $(document).ready(function () {
        var $searchButton = $('#searchbutton');

        $('#specialties').change(function () {
            updateSearchButtonHref();
        });

        $('#professions').change(function () {
            var selectedProfession = $(this).val();
            updateSearchButtonHref();
            // Make an AJAX request to fetch specialties
            $.get('/fetch-specialties', { profession: selectedProfession }, function (data) {
                // Assuming data is an array of specialties
                var $specialtiesSelect = $('#specialties');
                $specialtiesSelect.empty();

                // Add the fetched specialties
                $.each(data, function (index, specialty) {
                    $specialtiesSelect.append($('<option>', {
                        value: specialty.id,
                        text: specialty.name
                    }));
                });
            });
        });

        function updateSearchButtonHref() {
            var selectedProfession = $('#professions').val();
            var selectedSpecialty = $('#specialties').val();

            selectedSpecialty = selectedSpecialty.replace(/\s+/g, '-');

            var href = 'https://nexus-leap.laboredge.com/access/jobs?prof=' + selectedProfession +'&spec=' + selectedSpecialty +'&job=LOCAL,PERM,TRAVEL&highSort=clientName&highSortOr=-1&exclSort=clientName&exclSortOr=-1&featureSort=clientName&featureSortOr=-1'
            $searchButton.attr('href', href);
        }
    });


</script>
@endpush