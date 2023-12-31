@extends('components.layout2');

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/Nurse Holding Clipboard - L.jpg')}}" style="height:300px;object-fit: cover">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-xl py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <h1 class="">Joint Commission</h1>
                <p>
                    By adhering to Joint Commission standards , Access Healthcare is dedicated to maintaining our
                    position as a
                    reputable and reliable partner in staffing and recruitment services. Through collaboration,
                    innovation, and
                    unwavering commitment to excellence, we strive to create a positive impact in the lives of our
                    clients and
                    candidates alike.<br>
                    <br>
                    Below are links to our employee handbook, handbook acknowledgement form and policy statement.
                </p>

                <ul>
                    <li class="my-2"><a style="text-decoration: none; color: black" target="_blank"
                            href="https://www.accesshealthcarestaffing.com/wp-content/uploads/2021/08/Access-Healthcare-LLC-EHB-07.21.pdf">
                            Access Healthcare Employee Handbook
                        </a>
                    </li>
                    <li class="my-2">
                        <a style="text-decoration: none; color: black" target="_blank"
                            href="https://www.accesshealthcarestaffing.com/wp-content/uploads/2021/09/Employee-Handbook-Acknowledgement-Form.pdf">
                            Employee Handbook Acknowledgement Form
                        </a>
                    </li>
                    <li class="my-2">
                        <a style="text-decoration: none; color: black" target="_blank"
                            href="https://www.accesshealthcarestaffing.com/wp-content/uploads/2021/09/Policy-Statement.pdf">
                            Policy Statement
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <center>
                    <img src="{{asset('img/tjc.jfif')}}" alt="" style="width: 50%">
                </center>
            </div>
        </div>
    </div>
</section>

@endsection