@extends('components.layout2');

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/tjc.jpg')}}" style="height:300px;object-fit: cover;object-position: 0px -400px;">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-xl mt-5 mb-5 py-3">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-5">Joint Commission</h1>
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
            <div class="col-6">
                <img src="{{asset('img/tjc.jfif')}}" alt="" style="width: 100%">
            </div>
        </div>


    </div>
</section>
@endsection