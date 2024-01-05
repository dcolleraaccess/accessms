@extends('components.layout2')


@section('styles')

@endsection

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/Teamwork of doctors and nurses - L.jpg')}}"
                    style="height:300px;object-fit: cover">
            </div>
        </div>
    </div>
</div>

<section style="min-height: 500px;">
    <div class="container-xl py-5">


        <h1 class="text-center">Meet Your Team</h1>
        <p class="text-center mb-5">
            At Access Healthcare Staffing, our foundation is built upon the remarkable individuals who form our team.
            They transcend the label of mere employees; they are the very pulse of our organization, propelling our
            success forward with their unyielding dedication and expertise. Our team comprises passionate individuals
            who infuse every task with unparalleled passion, expertise, and innovative thinking. Let us introduce you to
            the incredible individuals steering our journey to success.
        </p>

        <div class="row gy-4 mb-4">
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Danielle Doyle" data-pos="Chief Executive Officer" data-image="{{ asset('/img/staff/danielle.jpg/')}}">
                <center>
                    <img src="{{ asset('/img/staff/danielle.jpg/')}}" style="object-fit:cover; " class="rounded-circle mb-3"
                        height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Danielle Doyle</h5>
                    <p style="font-size: 13px">Chief Executive Officer</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Diego Davis" data-pos="Chief Financial Officer" data-image="{{ asset('/img/staff/diego.jpg/')}}">
                <center>
                    <img src="{{ asset('/img/staff/diego.jpg/')}}" style="object-fit:cover" class="rounded-circle mb-3"
                        height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Alexander Davis</h5>
                    <p style="font-size: 13px">Chief Financial Officer</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Tricia Foo-Ying" data-pos="Chief Accounting Officer" data-image="{{ asset('/img/staff/tricia (2).jpg/')}}">
                <center>
                    <img src="{{ asset('/img/staff/tricia (2).jpg/')}}" style="object-fit:cover" class="rounded-circle mb-3"
                        height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Tricia Foo-Ying</h5>
                    <p style="font-size: 13px">Chief Accounting Officer</p>
                </center>
                </a>
            </div>
        </div>
        <h3 class="text-center mb-4">Human Resources and Training</h3>
        <div class="row gy-4 mb-4">
            <div class="row gy-4 mb-4">
                <div class='col'>
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="Denise Bertola" data-pos="HR Manager" data-email="hr@accesshealthcarestaffing.com" data-image="{{ asset('/img/staff/hr/Denise Bertola.jpg/')}}">
                    <center>
                        <img src="{{ asset('/img/staff/hr/Denise Bertola.jpg/')}}" style="object-fit:cover"
                             class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                        <h5 class="mb-0">Denise Bertola</h5>
                        <p style="font-size: 13px">HR Manager​</p>
                    </center>
                    </a>
                </div>
                <div class='col'>
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="Leslie Andress" data-pos="Workforce Development Manager" data-email="landress@accesshealthcarestaffing.com" data-image="{{ asset('/img/staff/hr/Leslie2.jpg')}}">
                    <center>
                        <img src="{{ asset('/img/staff/hr/Leslie2.jpg')}}" style="object-fit:cover"
                             class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                        <h5 class="mb-0">Leslie Andress</h5>
                        <p style="font-size: 13px">Workforce Development Manager​</p>
                    </center>
                    </a>
                </div>
                <div class='col'>
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Ferdie Adriano" data-pos="Corporate Trainer" data-image="{{ asset('/img/staff/hr/ferdie.jpg')}}">
                        <center>
                            <img src="{{ asset('/img/staff/hr/ferdie.jpg')}}" style="object-fit:cover"
                                 class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                            <h5 class="mb-0">Ferdie Adriano</h5>
                            <p style="font-size: 13px">Corporate Trainer​</p>
                        </center>
                    </a>
                </div>
        </div>
        <h3 class="text-center mb-4">Account Management</h3>
        <div class="row gy-4 mb-4">
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Elizabeth Moore" data-pos="Senior Account Coordinator" data-email="emoore@accesshealthcarestaffing.com" data-num="(609) 803-3086" data-image="{{ asset('/img/staff/recruiter/Elizabeth Moore.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Elizabeth Moore.jpg/')}}" style="object-fit:cover"
                         class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Elizabeth "Biz" Moore</h5>
                    <p style="font-size: 13px">Senior Account Coordinator​</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Lauren Burnett" data-pos="Senior Account Coordinator" data-email="lburnett@accesshealthcarestaffing.com" data-num="(609) 613-5990" data-image="{{ asset('/img/staff/recruiter/lauren.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/lauren.png/')}}" style="object-fit:cover"
                         class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Lauren Burnett</h5>
                    <p style="font-size: 13px">Senior Account Coordinator​</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Philippa Cabunoc" data-pos="Senior Account Coordinator" data-email="pcabunoc@accesshealthcarestaffing.com" data-num="(225) 254-2495" data-image="{{ asset('/img/staff/recruiter/Philippa Cabunoc1.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Philippa Cabunoc1.jpg/')}}" style="object-fit:cover"
                         class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Philippa Cabunoc</h5>
                    <p style="font-size: 13px">Senior Account Coordinator​</p>
                </center>
                </a>
            </div>
        </div>

        <h3 class="text-center mb-4">Recruitment</h3>
        <div class="row gy-4 mb-4">
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Mindy Pierce" data-pos="Recruitment Manager" data-email="mpierce@accesshealthcarestaffing.com" data-num="(609) 905-0848" data-image="{{ asset('/img/staff/recruiter/Mindy Pierce.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Mindy Pierce.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Mindy Pierce</h5>
                    <p style="font-size: 13px">Recruitment Manager​</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Angielene Aco" data-pos="Contract Specialist" data-image="{{ asset('/img/staff/recruiter/Angie Aco.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Angie Aco.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Angielene Aco</h5>
                    <p style="font-size: 13px">Contract Specialist</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Valda Carpenter" data-pos="Regional Manager II" data-email="vcarpenter@accesshealthcarestaffing.com" data-num="(609) 905-0853" data-image="{{ asset('/img/staff/recruiter/Valda Carpenter.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Valda Carpenter.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Valda Carpenter</h5>
                    <p style="font-size: 13px">Regional Manager II</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Angelica Fantasia" data-pos="Regional Manager II" data-email="afantasia@accesshealthcarestaffing.com" data-num="(609) 297-8794"  data-image="{{ asset('/img/staff/recruiter/Angelica Salera (1).png')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Angelica Salera (1).png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Angelica Fantasia</h5>
                    <p style="font-size: 13px">Regional Manager II</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Marigold Sumaoang" data-pos="Regional Manager II" data-email="msumaoang@accesshealthcarestaffing.com" data-num="(609) 905-0793" data-image="{{ asset('/img/staff/recruiter/Marigold Sumaoang.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Marigold Sumaoang.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Marigold Sumaoang</h5>
                    <p style="font-size: 13px">Regional Manager II</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Deina Najarila" data-pos="Recruiter" data-email="dnajarila@accesshealthcarestaffing.com" data-num="(225) 209-1661" data-image="{{ asset('/img/staff/recruiter/deina.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/deina.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Deina Najarila</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Heather Cox" data-pos="Recruiter" data-email="hcox@accesshealthcarestaffing.com" data-num="(609) 269-2343" data-image="{{ asset('/img/staff/blank.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/blank.png/')}}" style="object-fit:cover" class="rounded-circle mb-3"
                        height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Heather Cox</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
                </a>
            </div>

            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Thamara Joers" data-pos="Recruiter" data-email="tjoers@accesshealthcarestaffing.com" data-num="(225) 254-2430" data-image="{{ asset('/img/staff/recruiter/Thamara.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Thamara.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Thamara Joers</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Ashley Lester" data-pos="Recruiter" data-email="alester@accesshealthcarestaffing.com" data-num="(225) 217-3739" data-image="{{ asset('/img/staff/recruiter/Ashley.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Ashley.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Ashley Lester</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Sherry Woods" data-pos="Recruiter" data-email="swoods@accesshealthcarestaffing.com" data-num="(225) 230-0443" data-image="{{ asset('/img/staff/recruiter/Sherry Woods.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Sherry Woods.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Sherry Woords</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Vielka Umanzor" data-pos="Recruiter" data-email="vumanzor@accesshealthcarestaffing.com" data-num="(225) 208-9931" data-image="{{ asset('/img/staff/recruiter/Vielka Umanzor.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Vielka Umanzor.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Vielka Umanzor</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="April Szymanski" data-pos="Recruiter" data-email="aszymanski@accesshealthcarestaffing.com" data-num="(225) 208-9935"  data-image="{{ asset('/img/staff/recruiter/April Szymanski.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/April Szymanski.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">April Szymanski</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Rachel Smith" data-pos="Recruiter" data-email="rasmith@accesshealthcarestaffing.com" data-num="(225) 243-1675" data-image="{{ asset('/img/staff/recruiter/Rachel Smith.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Rachel Smith.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Rachel Smith</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="Brandon Bui" data-pos="Recruiter" data-email="bbui@accesshealthcarestaffing.com" data-num="(225) 254-2503" data-image="{{ asset('/img/staff/recruiter/Brandon Bui.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Brandon Bui.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Brandon Bui</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer; color:black; text-decoration:none" class="myt2" data-name="RR Moleta" data-pos="Recruiter" data-email="jmoleta@accesshealthcarestaffing.com" data-num="(225) 254-6229" data-image="{{ asset('/img/staff/recruiter/RR.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/RR.jpg')}}" style="object-fit:cover" class="rounded-circle mb-3"
                        height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">RR Moleta</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="Derrick Lam" data-pos="VIVIAN Quality Assurance Specialist"data-email="dlam@accesshealthcarestaffing.com" data-image="{{ asset('/img/staff/recruiter/derrick lam.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/recruiter/derrick lam.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Derrick Lam</h5>
                    <p style="font-size: 13px">VIVIAN Quality Assurance Specialist</p>
                </center>
                </a>
            </div>
        </div>

        <h3 class="text-center mb-4">Credentialing</h3>
        <div class="row gy-4 mb-4">
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="Mo Gutierrez" data-pos="Credentialing Manager"data-email="mogutierrez@accesshealthcarestaffing.com" data-image="{{ asset('/img/staff/credential/mo.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/credential/mo.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Mo Gutierrez</h5>
                    <p style="font-size: 13px">Credentialing Manager</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="Angelica Decal"data-pos="Asst. Credentialing Manager"data-email="adecal@accesshealthcarestaffing.com" data-image="{{ asset('/img/staff/credential/Decal, Angel 1.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/credential/Decal, Angel 1.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Angelica Decal</h5>
                    <p style="font-size: 13px">Asst. Credentialing Manager</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="Jenina Micah Cadelina"data-pos="Occupation Health Specialist"data-email="jmcadelina@accesshealthcarestaffing.com" data-image="{{ asset('/img/staff/credential/Cadelina, Jenina Micah (1).jpeg')}}">
                <center>
                    <img src="{{ asset('/img/staff/credential/Cadelina, Jenina Micah (1).jpeg/')}}"
                        style="object-fit:cover" class="rounded-circle mb-3" height="200" width="200" alt=""
                        loading="lazy" />
                    <h5 class="mb-0">Jenina Micah Cadelina</h5>
                    <p style="font-size: 13px">Occupational Health Specialist</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="Kathy Kiser"data-pos="Credentialing Specialist"data-email="kathrynkiser@accesshealthcarestaffing.com" data-image="{{ asset('/img/staff/credential/kathy kiser.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/credential/kathy kiser.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Kathy Kiser</h5>
                    <p style="font-size: 13px">Credentialing Specialist</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="May Montalvo"data-pos="Credentialing Specialist"data-email="mmontalvo@accesshealthcarestaffing.com" data-image="{{ asset('/img/staff/credential/Montalvo, May Anne.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/credential/Montalvo, May Anne.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">May Montalvo</h5>
                    <p style="font-size: 13px">Credentialing Specialist</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="Janine Daza"data-pos="Credentialing Specialist"data-email="jdaza@accesshealthcarestaffing.com" data-image="{{ asset('/img/staff/credential/Daza, Janine Denise.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/credential/Daza, Janine Denise.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Janine Daza</h5>
                    <p style="font-size: 13px">Credentialing Specialist</p>
                </center>
                </a>
            </div>


        </div>

        <h3 class="text-center mb-4">Compliance</h3>
        <div class="row gy-4 mb-4">
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="Princess Capps"data-pos="Compliance Manager"data-email="pcapps@accesshealthcarestaffing.com"  data-image="{{ asset('/img/staff/compliance/Princess.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/compliance/Princess.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Princess Capps</h5>
                    <p style="font-size: 13px">Compliance Manager</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="Karen Quinones" data-pos="Compliance Coordinator"data-email="kquinones@accesshealthcarestaffing.com" data-image="{{ asset('/img/staff/compliance/Karen Quiñones.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/compliance/Karen Quiñones.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Karen Quinones</h5>
                    <p style="font-size: 13px">Compliance Coordinator</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; color:black; text-decoration:none" class="myt" data-name="Lindsay Shindel" data-pos="Compliance Coordinator" data-email="lshindel@accesshealthcarestaffing.com" data-image="{{ asset('/img/staff/compliance/Lindsay.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/compliance/Lindsay.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Lindsay Shindel</h5>
                    <p style="font-size: 13px">Compliance Coordinator</p>
                </center>
                </a>
            </div>
        </div>

        <h3 class="text-center mb-4">Accounting</h3>
        <div class="row gy-4 mb-4">
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Kelly Bowersox" data-pos="Accounts Receivable Manager" data-image="{{ asset('/img/staff/accounting/kelly.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/accounting/kelly.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Kelly Bowersox</h5>
                    <p style="font-size: 13px">Accounts Receivable Manager</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Jody Palmier" data-pos="Payroll Manager / AP Retirement Specialist" data-image="{{ asset('/img/staff/accounting/jody palmier.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/accounting/jody palmier.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Jody Palmier</h5>
                    <p style="font-size: 13px">Payroll Manager / AP Retirement Specialist</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Michelle Sneller" data-pos="Payroll Specialist" data-image="{{ asset('/img/staff/accounting/michelle.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/accounting/michelle.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Michelle Sneller</h5>
                    <p style="font-size: 13px">Payroll Specialist</p>
                </center>
                </a>
            </div>

            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Rose Figueroa" data-pos="Accounting Assistant" data-image="{{ asset('/img/staff/accounting/Figueroa, Rose 2.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/accounting/Figueroa, Rose 2.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Rose Figueroa</h5>
                    <p style="font-size: 13px">Accounting Assistant</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Rona Lyn Caneta" data-pos="Accounting Assistant" data-image="{{ asset('/img/staff/accounting/Rona ID.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/accounting/Rona ID.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Rona Lyn Caneta</h5>
                    <p style="font-size: 13px">Accounting Assistant</p>
                </center>
                </a>
            </div>
        </div>

        <h3 class="text-center">Admin</h3>
        <div class="row gy-4 mb-4">
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Melissa Byrd" data-pos="Administrative Manager" data-image="{{ asset('/img/staff/admin/Melissa.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/admin/Melissa.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Melissa Byrd</h5>
                    <p style="font-size: 13px">Administrative Manager</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Karrie Brown" data-pos="Admin Assistant" data-image="{{ asset('/img/staff/admin/Karrie Brown.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/admin/Karrie Brown.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Karrie Brown</h5>
                    <p style="font-size: 13px">Admin Assistant</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Jessie Salcedo" data-pos="Admin Assistant" data-image="{{ asset('/img/staff/admin/Salcedo, Sene Jessie James.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/admin/Salcedo, Sene Jessie James.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Jessie Salcedo</h5>
                    <p style="font-size: 13px">Admin Assistant</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Vashti Cayabyab" data-pos="Admin Assistant" data-image="{{ asset('/img/staff/admin/vashti cayabyab.jpg')}}">
                <center>
                    <img src="{{ asset('/img/staff/admin/vashti cayabyab.jpg/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Vashti Cayabyab</h5>
                    <p style="font-size: 13px">Admin Assistant</p>
                </center>
                </a>
            </div>
            <div class='col'>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer; color:black; text-decoration:none" class="myt3" data-name="Jaymarie Academia" data-pos="Admin Assistant" data-image="{{ asset('/img/staff/admin/JAYMARIE ACADEMIA.png')}}">
                <center>
                    <img src="{{ asset('/img/staff/admin/JAYMARIE ACADEMIA.png/')}}" style="object-fit:cover"
                        class="rounded-circle mb-3" height="200" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Jaymarie Academia</h5>
                    <p style="font-size: 13px">Admin Assistant</p>
                </center>
                </a>
            </div>

        </div>

    </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 90%">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalname">Name</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-2">
                        <img src="" id="modalimage" style="object-fit:cover" class="rounded-4 mb-3"
                             height="300" width="250" alt="" loading="lazy" />
                        <center>
                        <h5 class="mb-1" id="modalpos">pos</h5>
                        <p style="font-size: 13px" id="modalemail">email</p>
                        </center>
                    </div>
                    <div class="col-10">
                        <div id="mytid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 90%">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalname2">Name</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-2">
                        <img src="" id="modalimage2" style="object-fit:cover" class="rounded-4 mb-3"
                             height="300" width="250" alt="" loading="lazy" />
                        <center>
                            <h5 class="mb-1" id="modalpos2">pos</h5>
                            <p style="font-size: 13px" id="modalemail2">email</p>
                            <p style="font-size: 13px" id="modalnum">num</p>
                        </center>

                    </div>
                    <div class="col-10">
                        <div id="mytid2">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 90%">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalname3">Name</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-2">
                        <img src="" id="modalimage3" style="object-fit:cover" class="rounded-4 mb-3"
                             height="300" width="250" alt="" loading="lazy" />
                        <center>
                            <h5 class="mb-1" id="modalpos3">pos</h5>
                        </center>
                    </div>
                    <div class="col-10">
                        <div id="mytid3">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection

@push('jsscripts')
    <script>
        $(document).ready(function (){
            $('.myt').click(function (){
                let name=$(this).data('name');
                let pos=$(this).data('pos');
                let email=$(this).data('email');
                let image=$(this).data('image');
                $('#modalname').html(name);
                $('#modalpos').html(pos);
                $('#modalemail').html(email);
                $('#modalimage').attr('src',image);
                $.get('mytgetcontent',{name:name},function (data){
                    $('#mytid').html(data);
                })
            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $('.myt2').click(function (){
                let name=$(this).data('name');
                let pos=$(this).data('pos');
                let email=$(this).data('email');
                let num=$(this).data('num')
                let image=$(this).data('image');
                $('#modalname2').html(name);
                $('#modalpos2').html(pos);
                $('#modalemail2').html(email);
                $('#modalnum').html(num);
                $('#modalimage2').attr('src',image);
                $.get('mytgetcontent',{name:name},function (data){
                    $('#mytid2').html(data);
                })
            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $('.myt3').click(function (){
                let name=$(this).data('name');
                let pos=$(this).data('pos');
                let image=$(this).data('image');
                $('#modalname3').html(name);
                $('#modalpos3').html(pos);
                $('#modalimage3').attr('src',image);
                $.get('mytgetcontent',{name:name},function (data){
                    $('#mytid3').html(data);
                })
            })
        })
    </script>
@endpush
