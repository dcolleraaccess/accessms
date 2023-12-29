@extends('components.layout')

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <img src="{{asset('img/1 - Traveler on Boat Deck Exploring.jpg')}}" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="{{asset('img/2 - Caregiver Assist Senior Woman.jpg')}}" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="{{asset('img/3 - Hiker Woman Rising Arms in Victory.jpg')}}" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="{{asset('img/4 - Female Medical Practitioner Reassuring Patient.jpg')}}"
                    class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="{{asset('img/5 - Elegant Woman Enjoys the View to a Canal.jpg')}}" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="{{asset('img/6 - Medical Technicians Doctor Looking at the Microscope.jpg')}}"
                    class="d-block w-100">
            </div>
        </div>
    </div>

    <div class="d-none d-lg-block">
        <div style="position:absolute; bottom: 10%; left:5%; max-width: 45%; z-index: 10" class="text-white">
            <h1 style="font-size: 4vw; font-family: 'Times New Roman';" class="mb-0 pb-0">You Need Access to Get In</h1>
            <h4 style="font-size: 1.5vw; font-family: 'Times New Roman';">Unlock Opportunities with your Dependable
                Healthcare
                Staffing
                Partner
            </h4>
            <p style="font-size: 1vw; font-family: 'Raleway';">Connecting Healthcare Professionals with Quality
                Opportunities since 2015
            </p>
        </div>
    </div>
    <div class="d-block d-lg-none">
        <div style="position:absolute; bottom: 5%; left:5%; max-width: 90%; z-index: 10" class="text-white">
            <h1 style="font-size: 50px; font-family: 'Times New Roman';" class="mb-0 pb-0">You Need Access to Get In
            </h1>
            <h4 style="font-size: 22px; font-family: 'Times New Roman';" class="d-none d-md-block">Unlock Opportunities
                with your Dependable
                Healthcare
                Staffing
                Partner
            </h4>
            <p style="font-size: 15px; font-family: 'Raleway';" class="d-none d-md-block">Connecting Healthcare
                Professionals with Quality
                Opportunities since 2015
            </p>
        </div>
    </div>

</div>

<section style="background-color: #ffff80">
    <div class="container-xl py-3">
        <div class="d-none d-md-block">
            <div class="row">
                <h3 class="fw-bold col">
                    Search Jobs<br>
                    COUNT: <span id="jobcount">0</span>
                </h3>
                <div class="col">
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
                <div class="col">
                    <select class="form-select" aria-label="Default select example" id="specialties">
                        <option selected hidden>Specialties</option>
                    </select>
                </div>
                <div class="col-auto">
                    <a href="" class="btn btn-dark" type="button" id="searchbutton" target="_empty">Search</a>
                </div>

            </div>
        </div>

        <div class="d-block d-md-none">
            <h3 class="fw-bold mb-2">
                <center>
                    Search Jobs
                </center>
            </h3>
            <select class="form-select mb-2" aria-label="Default select example" id="professionssmall">
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
            <div class="col">
                <select class="form-select mb-2" aria-label="Default select example" id="specialtiessmall">
                    <option selected hidden>Specialties</option>
                </select>
            </div>
            <a href="" class="btn btn-dark w-100" type="button" id="searchbuttonsmall" target="_empty">Search</a>
        </div>
    </div>
</section>

<section>
    <div class="container-xl py-4 ">
        <div class="py-3">
            <center>
                <h1 class="mb-3">Adventure or Fortune<br><span style="font-size: 32px">Why not <i>both</i>?</span></h1>
                <p>Are you a passionate healthcare professional ready to embark on the adventure of a lifetime? Discover
                    open positions with us and take your career to new heights. Our platform connects talented
                    professionals like you with incredible assignments across the country. Unlike other agencies, we
                    were founded by nurses and want healthcare professionals to work "with" us, not "for" us. We offer
                    one of the top leading pay packages in the industry and we are ready to get you the money you
                    deserve
                </p>
            </center>
        </div>


        <div class="row d-flex align-items-center py-4">
            <div class="col-lg-6 order-2 order-lg-1">
                <img src="{{asset('img/Travel.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <h1 class="text-center text-lg-start">Travel</h1>
                <p class="text-center text-lg-start">Our team of traveling healthcare professionals operates on a
                    temporary contract basis providing you
                    the opportunity to work in diverse healthcare facilities and discover new cities and states along
                    the way. Let us help you unlock "Access" to your next adventure all while enjoying competitive pay,
                    valuable benefits and the freedom to decide when your next journey begins. Expand your skillset by
                    encountering a variety of medical conditions and patient populations, thus sharpening your clinical
                    care skills and judgment. </p>
                {{-- <a href="/travel" class="btn mb-4" style="background-color: #FFFF80">See More</a> --}}
            </div>
        </div>

        <div class="row d-flex align-items-center py-4">
            <div class="col-lg-6">
                <h1 class="text-center text-lg-end">Per Diem</h1>
                <p class="text-center text-lg-end">
                    If you're seeking the ideal blend of a staff position and the adventure of travel, our local
                    placements are designed for those deeply rooted in their local communities who value flexibility.
                    Whether your preference is for short or long-term contracts, you'll enjoy compensation that exceeds
                    typical staff positions, all while preserving the benefits of a travel healthcare professional. Stay
                    close to friends and family while infusing your career with excitement at Access Healthcare!
                </p>
                {{-- <div class="d-flex flex-column justify-content-end">
                    <a href="/perdiem" class="btn custom-menu mb-4" style="background-color: #FFFF80">See More</a>
                </div> --}}
            </div>
            <div class="col-lg-6">
                <img src="{{asset('img/Local.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
        </div>

        <div class="row d-flex align-items-center py-4">
            <div class="col-lg-6 order-2 order-lg-1">
                <img src="{{asset('img/Permanent.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <h1 class="text-center text-lg-start">Permanent</h1>
                <p class="text-center text-lg-start">Have you reached a point where you're seeking stability and the
                    chance to settle down? Are you a
                    recent graduate ready for a more permanent role? We can assist you in securing a lasting position
                    within a hospital, simplifying the often complex onboarding process. Our team is dedicated to your
                    best interests, working diligently to find your ideal match. Access Healthcare simplifies the
                    intimidating job search process by assessing your skills and experience, providing personalized
                    guidance to link you with potential employers, and advocating on your behalf every step of the way.
                </p>
                {{-- <a href="permanent" class="btn  mb-4" style="background-color: #FFFF80">See More</a> --}}
            </div>
        </div>

        <div class="row d-flex align-items-center py-4 mb-4">
            <div class="col-lg-6">
                <h1 class="text-center text-lg-end">Locum Tenens</h1>
                <p class="text-center text-lg-end">
                    Access Healthcare specializes in connecting healthcare professionals, including physicians and
                    advanced practice providers, with opportunities nationwide.
                    Locum Tenens is the best opportunity to have flexibility in your work schedule while being able to
                    supplement your income and be able to explore and experience new hospital systems and geographic
                    locations! Join us and carve your path from a short to a long-term career opportunity.
                </p>
                {{-- <div class="d-flex flex-column justify-content-end">
                    <a href="locumtenens" class="btn custom-menu mb-4" style="background-color: #FFFF80">See More</a>
                </div> --}}
            </div>
            <div class="col-lg-6">
                <img src="{{asset('img/Locum Tenens.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
        </div>
    </div>
</section>

<section style="background-color: rgb(238, 238, 238)">
    <div class="container-xl py-5">
        <center>
            <h1 class="mb-4">Featured Locations</h1>
        </center>
        <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a target="_empty" style="text-decoration:none; color:black"
                    href="https://nexus-leap.laboredge.com/access/jobs?loc=PA&job=LOCAL,PERM,TRAVEL&highSort=weeklyPay&highSortOr=-1&exclSort=weeklyPay&exclSortOr=-1&featureSort=weeklyPay&featureSortOr=-1">
                    <center>
                        <img src="{{asset('img/Philadelphia Skyline.jpg')}}"
                            style="height:350px; min-width: 100px ;object-fit:cover;box-shadow: 0px 0px 52px -3px rgba(0,0,0,0.28);"
                            class="rounded-4 loc img-fluid">
                        <h5 class="my-2" style="z-index: 10">
                            Philadelphia
                        </h5>
                    </center>
                </a>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a target="_empty" style="text-decoration:none; color:black"
                    href="https://nexus-leap.laboredge.com/access/jobs?loc=NJ&job=LOCAL,PERM,TRAVEL&highSort=weeklyPay&highSortOr=-1&exclSort=weeklyPay&exclSortOr=-1&featureSort=weeklyPay&featureSortOr=-1">
                    <center>
                        <img src="{{asset('img/New Jersey Cape May Beach.jpg')}}"
                            style="height:350px; min-width: 100px ;object-fit:cover;box-shadow: 0px 0px 52px -3px rgba(0,0,0,0.28);"
                            class="rounded-4 loc img-fluid">
                        <h5 class="my-2" style="z-index: 10">
                            New Jersey
                        </h5>
                    </center>
                </a>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a target="_empty" style="text-decoration:none; color:black"
                    href="https://nexus-leap.laboredge.com/access/jobs?loc=CA&job=LOCAL,PERM,TRAVEL&highSort=weeklyPay&highSortOr=-1&exclSort=weeklyPay&exclSortOr=-1&featureSort=weeklyPay&featureSortOr=-1">

                    <center>
                        <img src="{{asset('img/California San Diego.jpg')}}"
                            style="height:350px; min-width: 100px ;object-fit:cover;box-shadow: 0px 0px 52px -3px rgba(0,0,0,0.28);"
                            class="rounded-4 loc img-fluid">
                        <h5 class="my-2" style="z-index: 10">
                            California
                        </h5>
                    </center>
                </a>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a target="_empty" style="text-decoration:none; color:black"
                    href="https://nexus-leap.laboredge.com/access/jobs?loc=WA&job=LOCAL,PERM,TRAVEL&highSort=weeklyPay&highSortOr=-1&exclSort=weeklyPay&exclSortOr=-1&featureSort=weeklyPay&featureSortOr=-1">
                    <center>
                        <img src="{{asset('img/Washington Seattle Skyline.jpg')}}"
                            style="height:350px; min-width: 100px ; object-fit:cover;box-shadow: 0px 0px 52px -3px rgba(0,0,0,0.28);"
                            class="rounded-4 loc img-fluid">
                        <h5 class="my-2" style="z-index: 10">
                            Washington
                        </h5>
                    </center>
                </a>
            </div>
        </div>

        <div class="py-3 d-none d-md-block">
            <center>
                <a href="https://nexus-leap.laboredge.com/access/jobs" target="_empty">
                    <button class="btn btn-dark">See More</button>
                </a>
            </center>
        </div>
        <div class="py-3 d-block d-md-none">
            <center>
                <a href="https://nexus-leap.laboredge.com/access/jobs" target="_empty">
                    <button class="btn btn-dark w-100">See More</button>
                </a>
            </center>
        </div>
    </div>
</section>

{{-- <section style="background-color: #ffff80">
    <div class="container-xl py-5">
        <div class="row d-flex align-items-center">

            <iframe src="https://www.youtube.com/embed/_twgLLdpVaY"
                title="Get To Know the Owner and CEO of Access Healthcare – Danielle Doyle" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen class="col-6" height="475"></iframe>


            <div class="col-6">
                <center>

                    <h1>Be Updated</h1>
                    <p>
                        Stay ahead of the curve by reading about innovative approaches to healthcare delivery, success
                        stories from our patients and partners, and expert analyses of emerging healthcare technologies.
                        Our commitment to keeping you informed drives us to deliver well-researched, engaging, and
                        informative articles that empower you to make informed decisions about your health.
                    </p>
                    <a href="https://www.youtube.com/@accesshealthcarellc">
                        <button class="btn btn-dark">See More</button>
                    </a>
                </center>
            </div>
        </div>

    </div>
</section> --}}

<section>
    <div class="container-xl py-5 my-5">
        <div class="row d-flex align-items-center mb-5">

            <div class="col-lg-6">
                <h1 class="text-center text-lg-end">T.G.I Live</h1>
                <p class="text-center text-lg-end">
                    Explore the World of Traveling with Access Healthcare's Social Media Live Sessions. Get
                    to know the Access Team, ask questions, learn what’s new in the world of healthcare, and more!
                </p>


                <div class="d-none d-lg-flex flex-column justify-content-end">
                    <button class="btn custom-menu mb-4" style="background-color: #FFFF80">See More</button>
                </div>
                <div class="d-flex d-lg-none flex-column">
                    <center>
                        <button class="btn custom-menu mb-4 mb-lg-0" style="background-color: #FFFF80">See
                            More</button><br>

                    </center>
                </div>

            </div>
            <div class="col-lg-6">
                <img src="{{asset('img/Website-SMMLive-ver1 2560x1706.png')}}"
                    class="d-block w-100 rounded-5 ms-0 ms-lg-2" alt="...">
            </div>

        </div>

        {{-- <div class="row d-flex align-items-center my-4">

            <div class="col-lg-6">
                <img src="{{asset('img/Website-WW-ver2 2560x1706.png')}}" class="d-block w-100 rounded-5 ms-0 ms-lg-2"
                    alt="...">
            </div>

            <div class="col-lg-6">
                <h1 class="text-center text-lg-start">Wellness Wednesday</h1>
                <p class="text-center text-lg-start">
                    Wellness Wednesday is a weekly online session focused on mental health, self-care, and personal
                    growth. Explore diverse topics led by the expert, Thomas Notarianni aka The Practical Buddha,
                    offering practical tips and resources for a balanced life. Whether you're a healthcare professional
                    or seeking self-improvement, be one with our supportive community for transformative insights and a
                    happier, healthier you. This is 100% free! JOIN US!
                </p>


                <button class="btn custom-menu mb-4 mb-lg-0" style="background-color: #FFFF80">See
                    More</button><br>

            </div>


        </div> --}}

    </div>
</section>

<section
    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.86) 0%, rgba(0, 0, 0, 0.86) 100%), url(img/money.jpg); background-position: 50%; background-size: cover; background-repeat: no-repeat;">


    <div class="container-xl py-3 text-white">
        <div class="py-5 my-5 container">
            <center>
                <h1>Unlock Rewards with<br>Our Referral Program!</h1>
                <p style="max-width: 800px">
                    At Access Healthcare, we believe that great things are meant to be shared. That's why we're excited
                    to introduce our Referral Program, designed to reward you for spreading the word about our
                    exceptional tea. Earn up to $1000 when your referral completes their first assignment.
                </p>
                <a href="/referrals">
                    <button class="btn btn-light">Referral Program</button>
                </a>
            </center>
        </div>
    </div>
</section>

@endsection

@push('jsscripts')
<script>
    $(document).ready(function () {


        var countdisplay = $("#jobcount");
        $.get('fetchJobCount', function (data){
            countdisplay.text(data);
        })



        var $searchButton = $('#searchbutton');

        $('#specialties').change(function () {
            updateSearchButtonHref();
        });

        $('#professions').change(function () {
            var selectedProfession = $(this).val();

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
            updateSearchButtonHref();
        });

        function updateSearchButtonHref() {
            var selectedProfession = $('#professions').val();
            var selectedSpecialty = $('#specialties').val();

            selectedSpecialty = selectedSpecialty.replace(/\s+/g, '-');

            var href = 'https://nexus-leap.laboredge.com/access/jobs?prof=' + selectedProfession +'&spec=' + selectedSpecialty +'&job=LOCAL,PERM,TRAVEL&highSort=clientName&highSortOr=-1&exclSort=clientName&exclSortOr=-1&featureSort=clientName&featureSortOr=-1'
            $searchButton.attr('href', href);
        }

        var $searchButtonsmall = $('#searchbuttonsmall');

        $('#specialtiessmall').change(function () {
            updateSearchButtonHrefSmall();
        });

        $('#professionssmall').change(function () {
            var selectedProfession = $(this).val();

            // Make an AJAX request to fetch specialties
            $.get('/fetch-specialties', { profession: selectedProfession }, function (data) {
                // Assuming data is an array of specialties
                var $specialtiesSelect = $('#specialtiessmall');
                $specialtiesSelect.empty();

                // Add the fetched specialties
                $.each(data, function (index, specialty) {
                    $specialtiesSelect.append($('<option>', {
                        value: specialty.id,
                        text: specialty.name
                    }));
                });
            });
            updateSearchButtonHrefSmall();
        });

        function updateSearchButtonHrefSmall() {
            var selectedProfession = $('#professionssmall').val();
            var selectedSpecialty = $('#specialtiessmall').val();

            selectedSpecialty = selectedSpecialty.replace(/\s+/g, '-');

            var href = 'https://nexus-leap.laboredge.com/access/jobs?prof=' + selectedProfession +'&spec=' + selectedSpecialty +'&job=LOCAL,PERM,TRAVEL&highSort=clientName&highSortOr=-1&exclSort=clientName&exclSortOr=-1&featureSort=clientName&featureSortOr=-1'
            $searchButtonsmall.attr('href', href);
        }
    });
</script>
@endpush