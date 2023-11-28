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
                    style="height:600px;object-fit: cover;object-position: 0px -150px;">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-xl py-3">

        <div class="row d-flex align-items-center py-2 my-4">

            <div class="col-12">
                <h1 class="text-center">Who We Are</h1>
                <p class="text-center">
                    Access Healthcare LLC is a nurse-owned and operated company headquartered in the State of New
                    Jersey. As a Minority Designated Firm, we take pride in our extensive reach, serving clients in 48
                    out of the 50 states. With a triple Joint Commission Certification and the prestigious ranking of #3
                    Fastest Growing Agency by SIA in 2023, we stand as a testament to our commitment to excellence.
                    Founded by two nurses with firsthand experience as agency nurses, our mission is to transform the
                    staffing industry into a true partnership, where healthcare professionals work with us, not just for
                    us. Our expertise spans locum, travel nursing/allied, per diem, and permanent placement divisions,
                    supported by a dedicated offshore team in the Philippines for seamless back-office operations.
                </p>
            </div>
        </div>



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
                            Stay ahead of the curve by reading about innovative approaches to healthcare delivery,
                            success
                            stories from our patients and partners, and expert analyses of emerging healthcare
                            technologies.
                            Our commitment to keeping you informed drives us to deliver well-researched, engaging,
                            and
                            informative articles that empower you to make informed decisions about your health.
                        </p>
                        <a href="https://www.youtube.com/@accesshealthcarellc">
                            <button class="btn btn-dark">See More</button>
                        </a>
                    </center>
                </div>
            </div>

        </div>


    </div>

</section>



<section style="background-color:#FFFF80">
    <div class="container-xl py-5 my-3">
        <h1 class="text-center">Living Our Commitments</h1>
        <p class="text-center">At Access Healthcare, Success Begins with Our Core Values</p>
        <div class="row my-3 py-4">
            <div class="col-4 d-flex flex-column align-items-center">
                <i class="fa-solid fa-handshake mb-3" style="font-size:50px"></i>
                <h4>
                    Partnership
                </h4>
                <center>
                    Fostering true collaboration, defining success beyond employer-employee norms with shared goals.
                </center>
            </div>
            <div class="col-4 d-flex flex-column align-items-center">
                <i class="fa-solid fa-heart mb-3" style="font-size:50px"></i>
                <h4>
                    Compassion
                </h4>
                <center>
                    Mission-driven care, guiding decisions with genuine concern for clients and nurses.</center>
            </div>
            <div class="col-4 d-flex flex-column align-items-center">
                <i class="fa-solid fa-shield-alt mb-3" style="font-size:50px"></i>
                <h4>
                    Integrity
                </h4>
                <center>
                    Non-negotiable commitment to trust, founded on transparent and ethical practices.</center>
            </div>
        </div>
        <div class="row my-3 py-4">
            <div class="col-6 d-flex flex-column align-items-center">
                <i class="fa-solid fa-lightbulb mb-3" style="font-size:50px"></i>
                <h4>
                    Innovation
                </h4>
                <center>
                    Embracing evolution, staying ahead with forward-thinking strategies in healthcare staffing.</center>
            </div>
            <div class="col-6 d-flex flex-column align-items-center">
                <i class="fa-solid fa-rocket mb-3" style="font-size:50px"></i>
                <h4>
                    Empowerment
                </h4>
                <center>
                    Dedicated to nurse success through competitive pay, benefits, and 24/7 support.</center>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-xl py-3 my-5">

        <div class="row d-flex align-items-center py-4 mb-4">
            <div class="col-6 ">
                <h1 class="text-end">Our Expertise</h1>
                <p class="text-end">
                    Access Healthcare stands out with its fully developed divisions, including locum, travel
                    nursing/allied, per diem, and permanent placement. Our extensive reach spans 48 states, allowing us
                    to serve clients nationwide. The triple Joint Commission Certification underscores our commitment to
                    excellence in healthcare staffing. Additionally, we've been recognized as the #3 Fastest Growing
                    Agency by SIA in 2023, showcasing our dedication to continual growth and innovation in the industry.
                </p>
            </div>
            <div class="col-6">
                <img src="{{asset('img/Locum Tenens.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
        </div>


        <div class="row d-flex align-items-center py-4">
            <div class="col-6">
                <img src="{{asset('img/Permanent.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
            <div class="col-6 ">
                <h1>Global Reach and Local Impact</h1>
                <p>While based in New Jersey, our impact extends far beyond state borders. As a Minority Designated
                    Firm, we bring diversity and inclusivity to our services, contributing to the improvement of
                    healthcare access and delivery nationwide. Our offshore team in the Philippines further enhances our
                    operational efficiency, ensuring seamless back-office support. Through a combination of global reach
                    and local impact, Access Healthcare strives to make a meaningful difference in healthcare staffing.
                </p>
            </div>
        </div>

    </div>

</section>

@endsection