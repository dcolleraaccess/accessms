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

    <div style="position:absolute; bottom: 10%; left:5%; max-width: 40%; z-index: 10" class="text-white">
        <h1 style="font-size: 64px; font-family: 'Times New Roman';" class="mb-0 pb-0">You Need Access to Get In</h1>
        <h4 style="font-family: 'Times New Roman';">Unlock Opportunities with your Dependable Healthcare Staffing
            Partner
        </h4>
        <p style="font-family: 'Raleway';">Connecting Healthcare Professionals with Quality Opportunities since 2015
        </p>
    </div>
</div>


<section style="background-color: #FFFF00">
    <div class="container-xl py-3">
        <div class="row">
            <h3 class="fw-bold col">
                Search Jobs
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
    <div class="container-xl py-5 ">
        <div class="py-4">
            <center>
                <h1 class="mb-3">Adventure or Fortune<br><span style="font-size: 32px">Why not <i>both</i>?</span></h1>
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
                <img src="{{asset('img/Travel.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
            <div class="col-6 ">
                <h1>Travel</h1>
                <p>Our team of traveling healthcare professionals operates on a temporary contract basis providing you
                    the opportunity to work in diverse healthcare facilities and discover new cities and states along
                    the way. Let us help you unlock "Access" to your next adventure all while enjoying competitive pay,
                    valuable benefits and the freedom to decide when your next journey begins. Expand your skillset by
                    encountering a variety of medical conditions and patient populations, thus sharpening your clinical
                    care skills and judgment. </p>
                <button class="btn mb-4" style="background-color: #FFFF00">See More</button>
            </div>
        </div>

        <div class="row d-flex align-items-center py-4">
            <div class="col-6 ">
                <h1 class="text-end">Local</h1>
                <p class="text-end">
                    If you're seeking the ideal blend of a staff position and the adventure of travel, our local
                    placements are designed for those deeply rooted in their local communities who value flexibility.
                    Whether your preference is for short or long-term contracts, you'll enjoy compensation that exceeds
                    typical staff positions, all while preserving the benefits of a travel healthcare professional. Stay
                    close to friends and family while infusing your career with excitement at Access Healthcare!
                </p>
                <div class="d-flex flex-column justify-content-end">
                    <button class="btn custom-menu mb-4" style="background-color: #FFFF00">See More</button>
                </div>
            </div>
            <div class="col-6">
                <img src="{{asset('img/Local.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
        </div>

        <div class="row d-flex align-items-center py-4">
            <div class="col-6">
                <img src="{{asset('img/Permanent.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
            <div class="col-6 ">
                <h1>Permanent</h1>
                <p>Have you reached a point where you're seeking stability and the chance to settle down? Are you a
                    recent graduate ready for a more permanent role? We can assist you in securing a lasting position
                    within a hospital, simplifying the often complex onboarding process. Our team is dedicated to your
                    best interests, working diligently to find your ideal match. Access Healthcare simplifies the
                    intimidating job search process by assessing your skills and experience, providing personalized
                    guidance to link you with potential employers, and advocating on your behalf every step of the way.
                </p>
                <button class="btn  mb-4" style="background-color: #FFFF00">See More</button>
            </div>
        </div>

        <div class="row d-flex align-items-center py-4 mb-4">
            <div class="col-6 ">
                <h1 class="text-end">Locum Tenens</h1>
                <p class="text-end">
                    Access Healthcare specializes in connecting healthcare professionals, including physicians, nurse
                    practitioners, physician assistants, and various clinical specialists, with opportunities
                    nationwide. Are you interested in reaping the rewards of flexibility, a wide range of experiences,
                    and competitive compensation? Our Locum Tenens positions have become a preferred option for
                    healthcare providers who prioritize the autonomy to select assignments and discover diverse
                    healthcare environments.
                </p>
                <div class="d-flex flex-column justify-content-end">
                    <button class="btn custom-menu mb-4" style="background-color: #FFFF00">See More</button>
                </div>
            </div>
            <div class="col-6">
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
            <div class="col-3">
                <img src="{{asset('img/Philadelphia Skyline.jpg')}}"
                    style="height:350px; min-width: 100px ;object-fit:cover;box-shadow: 0px 0px 52px -3px rgba(0,0,0,0.28);"
                    class="rounded-4 loc img-fluid">
                <center>
                    <h5 class="my-2" style="z-index: 10">
                        Philadelphia
                    </h5>
                </center>
            </div>
            <div class="col-3">
                <img src="{{asset('img/New Jersey Cape May Beach.jpg')}}"
                    style="height:350px; min-width: 100px ;object-fit:cover;box-shadow: 0px 0px 52px -3px rgba(0,0,0,0.28);"
                    class="rounded-4 loc img-fluid">
                <center>
                    <h5 class="my-2" style="z-index: 10">
                        New Jersey
                    </h5>
                </center>
            </div>
            <div class="col-3">
                <img src="{{asset('img/California San Diego.jpg')}}"
                    style="height:350px; min-width: 100px ;object-fit:cover;box-shadow: 0px 0px 52px -3px rgba(0,0,0,0.28);"
                    class="rounded-4 loc img-fluid">
                <center>
                    <h5 class="my-2" style="z-index: 10">
                        California
                    </h5>
                </center>
            </div>
            <div class="col-3">
                <img src="{{asset('img/Washington Seattle Skyline.jpg')}}"
                    style="height:350px; min-width: 100px ; object-fit:cover;box-shadow: 0px 0px 52px -3px rgba(0,0,0,0.28);"
                    class="rounded-4 loc img-fluid">
                <center>
                    <h5 class="my-2" style="z-index: 10">
                        Washington
                    </h5>
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

<section style="background-color: #ffff00">
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
                    <button class="btn custom-menu mb-4" style="background-color: #FFFF00">See More</button>
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
                <h1>Unlock Rewards with<br>Our Referral Program!</h1>
                <p>
                    At Access Healthcare, we believe that great things are meant to be shared. That's why we're excited
                    to introduce our Referral Program, designed to reward you for spreading the word about our
                    exceptional tea. Earn up to $1000 when your referral completes their first assignment.
                </p>
                <button class="btn btn-light">Referral Program</button>
            </center>
        </div>
    </div>
</section>


@endsection