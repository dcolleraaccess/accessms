@extends('components.layout2')


@section('styles')

@endsection

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/Asian Nurse with Mature Male Patient - L.jpg')}}"
                    style="height:500px;object-fit: cover">
            </div>
        </div>
    </div>
</div>

<section style="min-height: 500px">
    <div class="container-xl py-3">

        <div class="row  py-4 my-4">
            <h1 class="text-left mb-3">Staffing Request</h1>
            <p>
                Seeking assistance with healthcare staffing? Look no further—Access Healthcare Staffing is here to
                support your needs.
                <br><br>
                In the realm of healthcare professionals, we specialize in delivering top-notch candidates to meet your
                staffing requirements promptly. Our commitment is rooted in providing quality service, and we take pride
                in our swift placement process. Whether you're in need of travel healthcare professionals or on-site
                healthcare providers, our mission is to enhance the well-being of everyone we connect with.
                <br><br>
                As a comprehensive staffing agency, we take care of the entire recruitment process for you. Our services
                include:
            </p>
            <ul class="ps-5">
                <li>Credentialing</li>
                <li>Screening</li>
                <li>Skills Checklist</li>
                <li>Onboarding</li>
                <li>Social Security Verification</li>
                <li>Immunization & Licensing Verification</li>
                <li>Nationwide Criminal Search</li>
                <li>Drug Screening</li>
                <li>Medical Record Verification</li>
            </ul>
            <p>
                <br>
                With Access Healthcare Staffing, you can be assured that we've got everything covered to bring you the
                highest quality healthcare professionals. Request staff today and experience the difference in our
                commitment to excellence.
            </p>



        </div>

    </div>

</section>

<section style="background-color:#FFFF80">
    <div class="container-xl py-5">
        <div class="row d-flex align-items-center py-2">
            <div class="col-lg-6 order-2 order-lg-1">
                <img src="{{asset('img/Cropped shot of a senior woman holding hands with a nurse - L.jpg')}}"
                    class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <h3 class="text-center text-lg-start">Relieve Your Staffing Concerns with Access Healthcare Staffing
                </h3>
                <p class="text-start">
                    In the current landscape, healthcare facilities require unparalleled staffing support, and Access
                    Healthcare Staffing is here to provide the solution. We address both temporary and permanent
                    staffing needs, offering our expertise in various scenarios such as:
                <ul>
                    <li class="my-2"><b>Temporary and Temp-to-Hire Placements</b></li>
                    <li class="my-2"><b>Permanent Staffing Solutions</b></li>
                    <li class="my-2"><b>Managing Census Fluctuations</b></li>
                    <li class="my-2"><b>Covering Maternity Leave</b></li>
                    <li class="my-2"><b>Supporting Vacation Periods</b></li>
                    <li class="my-2"><b>Addressing Leaves of Absence</b></li>
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
    <div class="container-xl py-5">
        <div class="row">

            <div class="col-xl-3">
                <h2>Staffing support when you need it most.</h2>
                <p>Let us know what type of staffing solution you're looking for, and we'll handle the heavy lifting</p>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <form action="" class="mt-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Facility Name</span>
                                <input type="text" class="form-control" placeholder="Facility Name*">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Name</span>
                                <input type="text" aria-label="First name" class="form-control" placeholder="Name*">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Phone</span>
                                <input type="text" aria-label="First name" class="form-control"
                                    placeholder="Phone Number*">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Email</span>
                                <input type="text" aria-label="First name" class="form-control" placeholder="Email*">
                            </div>


                            <div class="row">
                                <div class="col-6">
                                    <b>Staffing Type</b>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Nursing
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Allied
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Locums
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Non Clinical
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Interim Leadership
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Labor Disruption/Strike
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <b>Job Type</b>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Travel
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Per Diem
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Permanent
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="input-group my-3">
                                <span class="input-group-text">Start Date</span>
                                <input type="date" class="form-control">
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Message</label>
                            </div>
                            <button class="btn" style="background-color: #FFFF80">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>