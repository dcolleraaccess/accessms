@extends('components.layout2')

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/statenursing.jpg')}}" style="height:700px;object-fit: cover">
            </div>
        </div>
    </div>

    <div style="position:absolute; bottom: 10%; left:5%; max-width: 40%; z-index: 10" class="text-white">
        <h1 style="font-size: 72px; font-family: 'Times New Roman';" class="mb-0 pb-0">Lorem ipsum dolor sit amet.</h1>
    </div>
</div>

<section>
    <div class="container-xl py-5 ">
        <center>
            <h1>
                Per Diem Nursing
            </h1>
            <p>
                If you're seeking the ideal blend of a staff position and the adventure of travel, our local
                placements are designed for those deeply rooted in their local communities who value flexibility.
                Whether your preference is for short or long-term contracts, you'll enjoy compensation that exceeds
                typical staff positions, all while preserving the benefits of a travel healthcare professional. Stay
                close to friends and family while infusing your career with excitement at Access Healthcare!

            </p>
        </center>
        <br>

        <div class="row d-flex align-items-center py-5">

            <iframe src="https://www.youtube.com/embed/_twgLLdpVaY"
                title="Get To Know the Owner and CEO of Access Healthcare – Danielle Doyle" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen class="col-6" height="475"></iframe>


            <div class="col-6">
                <h1>Lorem ipsum dolor sit.</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit vel officia et eos fugiat porro
                    temporibus deserunt nostrum maiores ab? Quas, corporis sed quos dolorem eius quidem exercitationem
                    sint atque perspiciatis cum facere, excepturi voluptatem magnam vitae tempore accusamus. Ut?
                </p>
                <a href="https://www.youtube.com/@accesshealthcarellc">
                    <button class="btn btn-dark">See More</button>
                </a>
            </div>
        </div>


    </div>
</section>

<section style="background-color: #ffff80">
    <div class="container-xl py-3">
        <div class="py-5 my-5 container">
            <center>
                <h1>Let's get started</h1>
                <p style="max-width: 800px">
                    Browse our jobs for ones that meet your needs and apply for what looks good. We'll be in touch to
                    talk about what you're looking for and walk you through all the steps to start a travel nurse
                    contract—from credentialing to interviewing and getting you there on time.
                </p>
                <a
                    href="/https://nexus-leap.laboredge.com/access/jobs?job=LOCAL,PERM,TRAVEL&highSort=weeklyPay&highSortOr=-1&exclSort=weeklyPay&exclSortOr=-1&featureSort=weeklyPay&featureSortOr=-1">
                    <button class="btn btn-dark text-white">View Open Jobs</button>
                </a>
            </center>
        </div>
    </div>
</section>
@endsection