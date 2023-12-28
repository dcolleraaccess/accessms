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
                <center>
                    <img src="{{ asset('/img/staff/danielle.jpg/')}}" style="object-fit:cover" class="rounded-4 mb-3"
                        height="300" width="250" alt="" loading="lazy" />
                    <h5 class="mb-0">Danielle Doyle</h5>
                    <p style="font-size: 13px">Chief Executive Officer</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/diego.jpg/')}}" style="object-fit:cover" class="rounded-4 mb-3"
                        height="300" width="250" alt="" loading="lazy" />
                    <h5 class="mb-0">Alexander Davis</h5>
                    <p style="font-size: 13px">Chief Financial Officer</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/tricia (2).jpg/')}}" style="object-fit:cover" class="rounded-4 mb-3"
                        height="300" width="250" alt="" loading="lazy" />
                    <h5 class="mb-0">Tricia Foo-Ying</h5>
                    <p style="font-size: 13px">Chief Accounting Officer</p>
                </center>
            </div>
        </div>

        <h3 class="text-center mb-4">Recruitment</h3>
        <div class="row gy-4 mb-4">
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Mindy Pierce.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Mindy Pierce</h5>
                    <p style="font-size: 13px">Recruitment Manager​</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Elizabeth Moore.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Elizabeth Moore</h5>
                    <p style="font-size: 13px">Senior Account Coordinator​</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/lauren.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Lauren Burnett</h5>
                    <p style="font-size: 13px">Senior Account Coordinator​</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Philippa Cabunoc1.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Philippa Cabunoc</h5>
                    <p style="font-size: 13px">Senior Account Coordinator​</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Angie Aco.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Angielene Aco</h5>
                    <p style="font-size: 13px">Contract Specialist</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Valda Carpenter.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Valda Carpenter</h5>
                    <p style="font-size: 13px">Regional Manager II</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Angelica Salera (1).png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Angelica Fantasia</h5>
                    <p style="font-size: 13px">Regional Manager II</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Marigold Sumaoang.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Marigold Sumaoang</h5>
                    <p style="font-size: 13px">Regional Manager II</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/blank.png/')}}" style="object-fit:cover" class="rounded-4 mb-3"
                        height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Deina Najarila</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/blank.png/')}}" style="object-fit:cover" class="rounded-4 mb-3"
                        height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Heather Cox</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/James Bertuso.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">James Bertuso</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Thamara.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Thamara Joers</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Ashley.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Ashley Lester</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Sherry Woods.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Sherry Woords</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Vielka Umanzor.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Vielka Umanzor</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/April Szymanski.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">April Szymanski</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Rachel Smith.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Rachel Smith</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/Brandon Bui.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Brandon Bui</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/blank.png/')}}" style="object-fit:cover" class="rounded-4 mb-3"
                        height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Jesumari Moleta</h5>
                    <p style="font-size: 13px">Recruiter</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/recruiter/derrick lam.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Derrick Lam</h5>
                    <p style="font-size: 13px">VIVIAN Quality Assurance Specialist</p>
                </center>
            </div>
        </div>

        <h3 class="text-center mb-4">Credentialing</h3>
        <div class="row gy-4 mb-4">
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/credential/mo.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Mo Gutierrez</h5>
                    <p style="font-size: 13px">Credentialing Manager</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/credential/Decal, Angel 1.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Angelica Decal</h5>
                    <p style="font-size: 13px">Asst. Credentialing Manager</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/credential/Cadelina, Jenina Micah (1).jpeg/')}}"
                        style="object-fit:cover" class="rounded-4 mb-3" height="250" width="200" alt=""
                        loading="lazy" />
                    <h5 class="mb-0">Jenina Micah Cadelina</h5>
                    <p style="font-size: 13px">Occupational Health Specialist</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/credential/kathy kiser.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Kathy Kiser</h5>
                    <p style="font-size: 13px">Credentialing Specialist</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/credential/Montalvo, May Anne.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">May Montalvo</h5>
                    <p style="font-size: 13px">Credentialing Specialist</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/credential/Daza, Janine Denise.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Janine Daza</h5>
                    <p style="font-size: 13px">Credentialing Specialist</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/credential/rhoda.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Rhoda Borgonia</h5>
                    <p style="font-size: 13px">Credentialing Specialist</p>
                </center>
            </div>

        </div>

        <h3 class="text-center mb-4">Compliance</h3>
        <div class="row gy-4 mb-4">
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/compliance/Princess.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Princess Capps</h5>
                    <p style="font-size: 13px">Compliance Manager</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/compliance/Karen Quiñones.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Karen Quinones</h5>
                    <p style="font-size: 13px">Compliance Coordinator</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/compliance/Lindsay.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Lindsay Shindel</h5>
                    <p style="font-size: 13px">Compliance Coordinator</p>
                </center>
            </div>
        </div>

        <h3 class="text-center mb-4">Accounting</h3>
        <div class="row gy-4 mb-4">
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/accounting/jody palmier.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Kelly Bowersox</h5>
                    <p style="font-size: 13px">Accounts Receivable Manager</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/accounting/kelly.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Jody Palmier</h5>
                    <p style="font-size: 13px">Payroll Manager / AP Retirement Specialist</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/accounting/michelle.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Michelle Sneller</h5>
                    <p style="font-size: 13px">Payroll Specialist</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/accounting/Amy Bushey Pic.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Amy Bushey</h5>
                    <p style="font-size: 13px">A/R Specialist</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/accounting/Figueroa, Rose 2.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Rose Figueroa</h5>
                    <p style="font-size: 13px">Accounting Assistant</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/accounting/Rona ID.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Rona Lyn Caneta</h5>
                    <p style="font-size: 13px">Accounting Assistant</p>
                </center>
            </div>
        </div>

        <h3 class="text-center">Admin</h3>
        <div class="row gy-4 mb-4">
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/admin/Melissa.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Melissa Byrd</h5>
                    <p style="font-size: 13px">Administrative Manager</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/admin/Karrie Brown.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Karrie Brown</h5>
                    <p style="font-size: 13px">Admin Assistant</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/admin/Salcedo, Sene Jessie James.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Jessie Salcedo</h5>
                    <p style="font-size: 13px">Admin Assistant</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/admin/vashti cayabyab.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Vashti Cayabyab</h5>
                    <p style="font-size: 13px">Admin Assistant</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/admin/JAYMARIE ACADEMIA.png/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Jaymarie Academia</h5>
                    <p style="font-size: 13px">Admin Assistant</p>
                </center>
            </div>
            <div class='col'>
                <center>
                    <img src="{{ asset('/img/staff/admin/demetria.jpg/')}}" style="object-fit:cover"
                        class="rounded-4 mb-3" height="250" width="200" alt="" loading="lazy" />
                    <h5 class="mb-0">Demetria Townsend</h5>
                    <p style="font-size: 13px">Admin Assistant</p>
                </center>
            </div>
        </div>

    </div>

</section>


@endsection