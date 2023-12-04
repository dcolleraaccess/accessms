@extends('components.layout2')


@section('styles')
<style>
    a {
        text-decoration: none;
        color: black;
    }
</style>
@endsection

@section('content')
<div>
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/Doctor holding piggy bank - L.jpg')}}" style="height: 400px; object-fit:cover">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-xl my-5">

        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <h1>Benefits and Extras</h1>
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
            <div class="col-lg-6">
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
            <div class="col-lg-3 mb-2 mb-lg-0 d-flex flex-column align-items-center">
                <i class="fa-solid fa-money-check-dollar mb-3" style="font-size:50px"></i>
                <h4 class="text-center">
                    PAY PACKAGE
                </h4>
                <center>
                    Customized pay package built just for you
                </center>
            </div>
            <div class="col-lg-3 mb-2 mb-lg-0  d-flex flex-column align-items-center">
                <i class="fa-solid fa-suitcase-medical mb-3" style="font-size:50px"></i>
                <h4 class="text-center">
                    MEDICAL PLAN
                </h4>
                <center>
                    Exceptional Health Insurance Plans including dental and vision serviced by Aetna
                </center>
            </div>
            <div class="col-lg-3 mb-2 mb-lg-0  d-flex flex-column align-items-center">
                <i class="fa-solid fa-chart-pie mb-3" style="font-size:50px"></i>
                <h4 class="text-center">
                    401K PLAN
                </h4>
                <center>
                    The best matching 401k plan in the industry serviced by Paychex
                </center>
            </div>
            <div class="col-lg-3 mb-2 mb-lg-0 d-flex flex-column align-items-center">
                <i class="fa-solid fa-house mb-3" style="font-size:50px"></i>
                <h4 class="text-center">
                    HOUSING ASSISTANCE
                </h4>
                <center>
                    Assistance in locating both furnished and unfurnished housing options tailored to the duration of
                    your assignment </center>
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
            <div class="col-lg-3 d-flex flex-column align-items-center">
                <a style="text-decoration: none; color: black"
                    href="https://www.marriott.com/event-reservations/reservation-link.mi?id=1619024221266&key=CORP&app=resvlink">
                    <center>
                        <img src="{{asset('img/westin-logo.jpg')}}" style="width:80%">
                    </center>
                    <h6>
                        <center>
                            The Westin Princeton at Forrestal Village
                        </center>
                    </h6>
                </a>

            </div>


            <div class="col-lg-3 d-flex flex-column align-items-center">
                <a style="text-decoration: none; color:black"
                    href="https://nordic-naturals.dcatalog.com/r/Order-Form/?page=1">
                    <center>
                        <img src="{{asset('img/logo-nordic.jpg')}}" style="width:80%">
                    </center>
                    <h6>
                        <center>
                            Nordic Naturals
                        </center>
                    </h6>
                    <center>
                        Discounted price available<br>
                        (please email with order)
                    </center>
                </a>


            </div>

            <div class="col-lg-3 d-flex flex-column align-items-center">
                <a style="text-decoration: none; color:black" href="https://join.hotelengine.com/join/5bac504">
                    <center>
                        <img src="{{asset('img/logo-hotelengine.jpg')}}" style="width:80%">
                    </center>
                    <h6>
                        <center>
                            Hotel Engine
                        </center>
                    </h6>
                    <center>
                        Hotel Engine is an exclusive online hotel booking platform built specifically for business and
                        workforce travel.
                    </center>
                </a>
            </div>

            <div class="col-lg-3 d-flex flex-column align-items-center">
                <a style="text-decoration: none; color:black" href="https://www.budget.com/en/corporate/R319700">
                    <center>
                        <img src="{{asset('img/logo_avis.jpg')}}" style="width:80%">
                    </center>
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

                </a>

            </div>

        </div>
    </div>
</section>



<section style="background-color: #ffff80">
    <div class="container-xl my-5 py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
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
                            <a href="https://www.manifestwithash.com/" style="text-decoration:none; color:black">
                                Life Coaching
                            </a>
                        </b>
                    </li>
                    <li class="my-2">
                        <b>
                            <a href="http://peacefulminds.org/" style="text-decoration:none; color:black">
                                Spiritual Mentoring
                            </a>
                        </b>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('img/Working Medical Professionals - L.jpg')}}" class='img-fluid rounded-4'>
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
                <a
                    href="https://ahainstructornetwork.americanheart.org/AHAECC/classConnector.jsp?pid=ahaecc.classconnector.home">
                    American Heart Association Class Finder
                </a>
            </li>
            <li class="my-3">
                <a
                    href="https://secure.trainingcampus.net/uas/modules/trees/windex.aspx?rx=nihss-english.trainingcampus.net">
                    NIHSS Certification
                </a>
            </li>
            <li class="my-3">
                <a href="https://www.ena.org/education/tncc">
                    TNCC Certification
                </a>
            </li>
            <li class="my-3">
                <a href="http://www.mobile-certifications.com/">
                    BLS/ACLS/PALS Certification & Re-certification Courses
                </a>
            </li>
        </ul>

        <br>

        <div class="row">
            <div class="col-lg-6">
                <b>
                    General Resources:
                </b>
                <ul>
                    <li class="my-3">
                        <a href="http://www.hhs.gov/">
                            U.S. Department of Health & Human Services
                        </a>
                    </li>
                    <li class="my-3">
                        <a href="http://www.travel.state.gov/">
                            U.S. Department of State
                        </a>
                    </li>
                    <li class="my-3">
                        <a href="http://www.uscis.gov/">
                            U.S. Citizenship and Immigration Services
                        </a>
                    </li>
                    <li class="my-3">
                        <a href="http://www.who.int">
                            World Health Organization
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <b>
                    Medicine Education Resources:
                </b>
                <ul>
                    <li class="my-3">
                        <a href="https://edhub.ama-assn.org/">
                            AMAedHub
                        </a>
                    </li>
                    <li class="my-3">
                        <a href="http://www.mer.org/">
                            Medical Education Resources, Inc. (MER)</a>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <b>
                    Nursing Education Resources:
                </b>
                <ul>
                    <li class="my-3">
                        <a href="http://www.myfreece.com">
                            My Free CE
                        </a>
                    </li>
                    <li class="my-3">
                        <a href="http://www.vlh.com">
                            Virtual Lecture Hall
                        </a>
                    </li>
                    <li class="my-3">
                        <a href="http://www.rn.com/">
                            AMN Healthcare Education Service
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <b>
                    Certified Nursing Assistant Education Resources:
                </b>
                <ul>
                    <li class="my-3">
                        <a href="http://www.cnaceus.co/CourseCatalog.php">
                            CNA CEUs </a>
                    </li>
                    <li class="my-3">
                        <a href="https://cnazone.com/CourseList">
                            CNA Continuing Education
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection