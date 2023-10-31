@extends('components.layout2')


@section('styles')
<style>

</style>
@endsection

@section('content')
<div>
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/nursebene.jpg')}}"
                    style="height: 400px; object-fit:cover; object-position: 0px -500px">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-xl my-5">

        <div class="row d-flex align-items-center">
            <div class="col-6">
                <h1>Benefits and Extra</h1>
                <h2>You Need Access To Get In</h2>
                <p>
                    <i>
                        At Access Healthcare we let you take the wheel and help you navigate your travel career.
                    </i>
                    <br><br>
                    Amazing pay, unlimited opportunities and endless adventure are just a few of the reasons why
                    healthcare professionals choose to travel. Whether you want to explore the hottest spots in the
                    U.S.A. or find the ideal place to settle down, travel nursing provides an advantage to career
                    enhancement and personal fulfillment.
                </p>
            </div>
            <div class="col-6">
                <img src="{{asset('img/access-benefits.jpg')}}" alt="" class="img-fluid">
            </div>
        </div>

    </div>
</section>


<section>
    <div class="container-xl my-5">
        <h1>
            <center>
                Benefits and Pay
            </center>
        </h1>
        <p>
            <center>
                Taking a travel position doesn’t mean trading in your benefits. Let Access show you why our Benefit and
                Pay
                packages are the top in the industry
                <br><br>

                As a Healthcare Professional you can expect …
            </center>
            <br>
        </p>
        <div class="row gx-5">
            <div class="col-3 d-flex flex-column align-items-center">
                <i class="fa-solid fa-money-check-dollar mb-3" style="font-size:50px"></i>
                <h4>
                    PAY PACKAGE
                </h4>
                <center>
                    Customized pay package built just for you
                </center>
            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <i class="fa-solid fa-suitcase-medical mb-3" style="font-size:50px"></i>
                <h4>
                    MEDICAL PLAN
                </h4>
                <center>
                    Exceptional Health Insurance Plans including dental and vision serviced by Aetna
                </center>
            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <i class="fa-solid fa-chart-pie mb-3" style="font-size:50px"></i>
                <h4>
                    401K PLAN
                </h4>
                <center>
                    The best matching 401k plan in the industry serviced by Paychex
                </center>
            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <i class="fa-solid fa-house mb-3" style="font-size:50px"></i>
                <h4>
                    HOUSING ASSISTANCE
                </h4>
                <center>
                    Customized relocation aid for a seamless move, including financial support.
                </center>
            </div>
        </div>
    </div>
</section>

<section style="background-color: rgb(238, 238, 238)">
    <div class="container-xl my-5 py-5">
        <h1>
            Why Access Healthcare Staffing?
        </h1>
        <p>
            Ready to settle down and plant some roots but keep a hint of spice in your life? We’ve got you covered!
        </p>

        <ul>
            <li class="my-3">
                <b>
                    Jumping to the front of the line in the interview process<br>
                </b>
                We have long standing relationships with hospitals who trust us to provide top notch candidates
            </li>
            <li class="my-3">
                <b>
                    Avoiding the uncomfortable long wait time between interview and offer<br>
                </b>
                Securing a Staff position with a hospital can take weeks to months. We pride ourselves in placing
                candidate in under 2 weeks’ time.
            </li>
            <li class="my-3">
                <b>
                    Having a Recruiter who works just for you<br>
                </b>
                Your Recruiter will make it their personal mission to place you in a position that fits your needs.
            </li>
        </ul>
    </div>
</section>

<section>
    <div class="container-xl my-5">
        <h1>
            <center>
                Discounts
            </center>
        </h1>
        <div class="row gx-5">
            <div class="col-3 d-flex flex-column align-items-center">
                <img src="{{asset('img/westin-logo.jpg')}}" style="width:80%">
                <h6>
                    <center>
                        The Westin Princeton at Forrestal Village
                    </center>
                </h6>
            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <img src="{{asset('img/logo-nordic.jpg')}}" style="width:80%">
                <h6>
                    <center>
                        Nordic Naturals
                    </center>
                </h6>

                <center>
                    Discounted price available<br>
                    (please email with order)
                </center>

            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <img src="{{asset('img/logo-hotelengine.jpg')}}" style="width:80%">
                <h6>
                    <center>
                        Hotel Engine
                    </center>
                </h6>

                <center>
                    Hotel Engine is an exclusive online hotel booking platform built specifically for business and
                    workforce travel.
                </center>

            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <img src="{{asset('img/logo_avis.jpg')}}" style="width:80%">
                <h6>
                    <center>
                        Avis & Budget Car Rentals
                    </center>
                </h6>

                <center>
                    Our Travelers will receive negotiated rates, Loss Damage Waiver included on business rental, a
                    Loyalty Status upgrade promotion, and discounts on personal leisure travel.
                    <br><br>
                    For Avis / For Budget
                </center>

            </div>
        </div>
    </div>
</section>



<section style="background-color: #ffff80">
    <div class="container-xl my-5 py-5">
        <div class="row d-flex align-items-center">
            <div class="col-6">
                <h1>Culture of Wellness</h1>
                <p>
                    Access Healthcare is dedicated to creating a motivating and inspiring environment for our healthcare
                    professionals that goes above and beyond what other agencies have to offer. We believe in healing
                    those who
                    heal others and have created a culture of wellness that centers around holistic practices.
                    <br><br>
                    The ability to offer our healthcare professionals a great health insurance plan is one thing, but we
                    want to
                    take it one step further by nurturing the mind and spirit by supporting and encouraging total
                    wellness. We
                    understand that if we take full care of our healthcare professionals they will be better able to
                    take care
                    of those who need it most… the patients.
                </p>
                <ul>
                    <li class="my-2">
                        <b>
                            Life Coaching
                        </b>
                    </li>
                    <li class="my-2">
                        <b>
                            Spiritual Mentoring
                        </b>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <img src="{{asset('img/culture.jpg')}}" class='img-fluid rounded-4'>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container-xl my-5">
        <h1 class="mb-2">
            Continuing Education
        </h1>
        Continuing education is a key component in compliance and making sure our healthcare professionals are
        expanding their minds and achieving their goals. Our credentialing specialists pay special attention to
        expiration dates of certifications and help you find classes suitable to your schedule and location.
        <br><br>
        We are partnered with BLS and ACLS providers to provide expedited service. Please ask your recruiter about
        this perk!
        <ul>
            <li class="my-3">
                American Heart Association Class Finder
            </li>
            <li class="my-3">
                NIHSS Certification
            </li>
            <li class="my-3">
                TNCC Certification
            </li>
            <li class="my-3">
                BLS/ACLS/PALS Certification & Re-certification Courses
            </li>
        </ul>

        <br>

        <div class="row">
            <div class="col-6">
                <b>
                    General Resources:
                </b>
                <ul>
                    <li class="my-3">
                        U.S. Department of Health & Human Services – http://www.hhs.gov </li>
                    <li class="my-3">
                        U.S. Department of State – http://www.travel.state.gov </li>
                    <li class="my-3">
                        U.S. Citizenship and Immigration Services – http://www.uscis.gov </li>
                    <li class="my-3">
                        World Health Organization – http://www.who.int </li>
                </ul>
            </div>
            <div class="col-6">
                <b>
                    Medicine Education Resources:
                </b>
                <ul>
                    <li class="my-3">
                        AMAedHub – https://edhub.ama-assn.org/ </li>
                    <li class="my-3">
                        Medical Education Resources, Inc. (MER) http://www.mer.org/ </li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <b>
                    Nursing Education Resources:
                </b>
                <ul>
                    <li class="my-3">
                        My Free CE – http://www.myfreece.com
                    </li>
                    <li class="my-3">
                        Virtual Lecture Hall – http://www.vlh.com
                    </li>
                    <li class="my-3">
                        AMN Healthcare Education Service – http://www.rn.com/
                    </li>

                </ul>
            </div>
            <div class="col-6">
                <b>
                    Certified Nursing Assistant Education Resources:
                </b>
                <ul>
                    <li class="my-3">
                        CNA CEUs – http://www.cnaceus.co/CourseCatalog.php
                    </li>
                    <li class="my-3">
                        CNA Continuing Education – https://cnazone.com/CourseList
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection