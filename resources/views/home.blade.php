@extends('components.layout')

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/1 - Traveler on Boat Deck Exploring.jpg')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/2 - Caregiver Assist Senior Woman.jpg')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/3 - Hiker Woman Rising Arms in Victory.jpg')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/4 - Female Medical Practitioner Reassuring Patient.jpg')}}"
                    class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/5 - Elegant Woman Enjoys the View to a Canal.jpg')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/6 - Medical Technicians Doctor Looking at the Microscope.jpg')}}"
                    class="d-block w-100">
            </div>
        </div>
    </div>

    <div style="position:absolute; bottom: 10%; left:5%; max-width: 40%; z-index: 10" class="text-white">
        <h1 style="font-size: 72px; font-family: 'Times New Roman'; " class="mb-0 pb-0">Adventure or
            Fortune</h1>
        <h1 style="font-family: 'Times New Roman';">Why not <span
                style="font:  italic 1em Georgia, Times, 'Times New Roman', serif;">both</span>?</h1>
        <p style="font-family: 'Raleway';">Explore our site to discover why our Healthcare Professionals love working
            with
            us while discovering some of
            the best opportunities in the industry
        </p>
    </div>
</div>


<section style="background-color: #FFEC40">
    <div class="container-xl py-3">
        <div class="row">
            <h3 class="fw-bold col">
                Search Jobs Content Here
            </h3>
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Specialties</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Location</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-auto">
                <button class="btn btn-dark" type="button">Search</button>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container-xl py-5">
        <div class="py-4">
            <center>
                <h1>Access Healthcare Was Founded by Nurses for Healthcare Professionals Like You</h1>
                <p>Are you a passionate healthcare professional ready to embark on the adventure of a lifetime? Discover
                    open positions with us and take your career to new heights. Our platform connects talented
                    professionals like you with incredible assignments across the country. Unlike other agencies, we
                    offer a true family feel and work with you to find the placement that is right for you. We offer one
                    of the top leading pay packages in the industry and we are ready to get you the money you deserve!
                </p>
            </center>
        </div>

        <div class="row d-flex align-items-center py-4">
            <div class="col-6">
                <img src="{{asset('img/ahs_slideA.jpg')}}" class="d-block w-100 rounded-5" alt="...">
            </div>
            <div class="col-6 ">
                <h1>Travel</h1>
                <p>Our team of traveling healthcare professionals operates on a temporary contract basis providing you
                    the opportunity to work in diverse healthcare facilities and discover new cities and states along
                    the way. Let us help you unlock "Access" to your next adventure all while enjoying competitive pay,
                    valuable benefits and the freedom to decide when your next journey begins. Expand your skillset by
                    encountering a variety of medical conditions and patient populations, thus sharpening your clinical
                    care skills and judgment. </p>
                <button class="btn btn-warning mb-4">See More</button>
            </div>
        </div>

        <div class="row d-flex align-items-center py-2">
            <div class="col-6 ">
                <h1 class="text-end">Local</h1>
                <p class="text-end">
                    Explore the world of wellness and healthcare with our brand new podcast, 'See U Next Tuesday!' Join
                    us as we delve into a variety of captivating health-related topics, offering insights into the
                    latest medical advancements, wellness trends, and discussions on promoting a healthier lifestyle.
                </p>
                <div class="d-flex flex-column justify-content-end">
                    <button class="btn btn-warning custom-menu mb-4">See More</button>
                </div>
            </div>
            <div class="col-6">
                <img src="{{asset('img/ahs_slideA.jpg')}}" class="d-block w-100 rounded-5" alt="...">
            </div>
        </div>

        <div class="row d-flex align-items-center py-2">
            <div class="col-6">
                <img src="{{asset('img/ahs_slideA.jpg')}}" class="d-block w-100 rounded-5" alt="...">
            </div>
            <div class="col-6 ">
                <h1>Permanent</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium quis nesciunt quidem accusamus
                    natus, animi asperiores. Amet nemo ullam dignissimos, sunt alias voluptatibus? Doloremque quod
                    deleniti veritatis laudantium ab dolorum, doloribus aspernatur corrupti nihil placeat eveniet
                    eligendi nesciunt pariatur illo ad animi est! Laudantium deserunt voluptate exercitationem
                    necessitatibus consequuntur eius.</p>
                <button class="btn btn-warning mb-4">See More</button>
            </div>
        </div>

        <div class="row d-flex align-items-center py-2">
            <div class="col-6 ">
                <h1 class="text-end">Locum</h1>
                <p class="text-end">
                    Explore the world of wellness and healthcare with our brand new podcast, 'See U Next Tuesday!' Join
                    us as we delve into a variety of captivating health-related topics, offering insights into the
                    latest medical advancements, wellness trends, and discussions on promoting a healthier lifestyle.
                </p>
                <div class="d-flex flex-column justify-content-end">
                    <button class="btn btn-warning custom-menu mb-4">See More</button>
                </div>
            </div>
            <div class="col-6">
                <img src="{{asset('img/ahs_slideA.jpg')}}" class="d-block w-100 rounded-5" alt="...">
            </div>
        </div>
    </div>
</section>

<section style="background-color: lightgrey">
    <div class="container-xl py-5">
        <center>
            <h1 class="mb-4">Featured Locations</h1>
        </center>
        <div class="row">
            <div class="col-3">
                <div style="background-color: gray; width: 100%; height: 300px" class="rounded-5">
                    image
                </div>
                <center>
                    location here
                </center>
            </div>
            <div class="col-3">
                <div style="background-color: gray; width: 100%; height: 300px" class="rounded-5">
                    image
                </div>
                <center>
                    location here
                </center>
            </div>
            <div class="col-3">
                <div style="background-color: gray; width: 100%; height: 300px" class="rounded-5">
                    image
                </div>
                <center>
                    location here
                </center>
            </div>
            <div class="col-3">
                <div style="background-color: gray; width: 100%; height: 300px" class="rounded-5">
                    image
                </div>
                <center>
                    location here
                </center>
            </div>
        </div>

        <div class="py-3">
            <center>
                <button class="btn btn-dark">See More</button>
            </center>
        </div>
    </div>
</section>

<section style="background-color: yellow">
    <div class="container-xl py-5">
        <div class="row d-flex align-items-center">
            <div class="col-6">
                <div class="card text-bg-dark">
                    <img src="{{asset('img/ahs_slide3.jpg')}}" class="d-block w-100 card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <center>

                    <h1>Be Updated</h1>
                    <p>
                        Stay ahead of the curve by reading about innovative approaches to healthcare delivery, success
                        stories from our patients and partners, and expert analyses of emerging healthcare technologies.
                        Our commitment to keeping you informed drives us to deliver well-researched, engaging, and
                        informative articles that empower you to make informed decisions about your health.
                    </p>
                    <button class="btn btn-dark">See More</button>
                </center>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container-xl py-5 my-5">
        <div class="row d-flex align-items-center">

            <div class="col-6">

                <h1 class="text-end">Check out our new Podcast</h1>
                <p class="text-end">
                    Explore the world of wellness and healthcare with our brand new podcast, 'See U Next Tuesday!' Join
                    us as we delve into a variety of captivating health-related topics, offering insights into the
                    latest medical advancements, wellness trends, and discussions on promoting a healthier lifestyle.
                </p>
                <div class="d-flex flex-column justify-content-end">
                    <button class="btn btn-warning custom-menu mb-4">See More</button>
                    <img src=" {{asset('img/youtube.png')}}" alt="..." style="max-width: 50%" class="custom-menu">
                </div>

            </div>
            <div class="col-6">
                <img src="{{asset('img/ahs_slideA.jpg')}}" class="d-block w-100 rounded-5 ms-2" alt="...">
            </div>

        </div>

    </div>
</section>

<section
    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.86) 0%, rgba(0, 0, 0, 0.86) 100%), url(img/money.jpg); background-position: 50%; background-size: cover; background-repeat: no-repeat;">


    <div class="container-xl py-3 text-white">
        <div class="py-5 my-5">
            <center>
                <h1>Earn up<br>to $1000</h1>
                <p>
                    If you’ve enjoyed working with us,<br>
                    why not refer your friends?
                </p>
                <button class="btn btn-light">Referral Program</button>
            </center>
        </div>
    </div>
</section>


@endsection