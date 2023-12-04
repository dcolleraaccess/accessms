@extends('components.layout2')


@section('styles')

@endsection

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/Nurses walking in Hallway - L.jpg')}}" style="height:300px;object-fit: cover">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-xl py-3">

        <div class="row d-flex align-items-center py-4 my-4">

            <div class="col-12">
                <h1 class="text-center">Referral Program</h1>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga debitis vitae quas? Architecto nam
                    eligendi deleniti, quidem maiores mollitia, tenetur consectetur voluptatum unde numquam nesciunt eos
                    laboriosam itaque delectus illum deserunt animi vitae amet! Doloribus voluptatibus inventore dolorum
                    beatae eaque aliquam distinctio rem exercitationem veniam nostrum. Natus recusandae tempore tenetur.
                </p>
            </div>


        </div>

        <div class="row mt-5">
            <div class="col-4 d-flex flex-column align-items-center">
                <i class="fa-solid fa-money-check-dollar mb-3" style="font-size:50px"></i>
                <h4>
                    TITLE
                </h4>
                <center>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, at!
                </center>
            </div>
            <div class="col-4 d-flex flex-column align-items-center">
                <i class="fa-solid fa-money-check-dollar mb-3" style="font-size:50px"></i>
                <h4>
                    TITLE
                </h4>
                <center>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, at!
                </center>
            </div>
            <div class="col-4 d-flex flex-column align-items-center">
                <i class="fa-solid fa-money-check-dollar mb-3" style="font-size:50px"></i>
                <h4>
                    TITLE
                </h4>
                <center>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, at!
                </center>
            </div>
        </div>
    </div>

</section>

<section style="background-color:#FFFF80">
    <div class="container-xl py-5 my-5">
        <div class="row d-flex align-items-center py-4">
            <div class="col-6">
                <img src="{{asset('img/Local.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
            <div class="col-6 ">
                <h1 class="text-start">Refer and Earn</h1>
                <p class="text-start">
                <ul>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, consectetur.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, consectetur.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, consectetur.</li>
                </ul>
                </p>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container-xl py-5 my-5">
        <div class="row d-flex align-items-center">

            <div class="">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Send a Referral</h3>
                        <form action="" class="mt-4">
                            <h5>About You</h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control" placeholder="First Name*">
                                <input type="text" class="form-control" placeholder="Last Name*">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Email</span>
                                <input type="text" aria-label="First name" class="form-control" placeholder="Email*">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Phone</span>
                                <input type="text" aria-label="First name" class="form-control"
                                    placeholder="Phone Number*">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Recruiter</span>
                                <select class="form-select" aria-label="Default select example" id="recruiters">
                                    <option selected hidden>Recruiters</option>
                                </select>
                            </div>

                            <hr>

                            <h5>About Your Referral </h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control" placeholder="First Name">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Email</span>
                                <input type="text" aria-label="First name" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Phone</span>
                                <input type="text" aria-label="First name" class="form-control"
                                    placeholder="Phone Number">
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Profession*</span>
                                <select class="form-select" aria-label="Default select example" id="professions">
                                    <option selected hidden>Professions</option>
                                    @php
                                    $professions = DB::table('professions')
                                    ->get()
                                    ->toArray();
                                    @endphp

                                    @foreach ($professions as $pro)
                                    <option value="{{$pro->id}}">{{$pro->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Specialty*</span>
                                <select class="form-select" aria-label="Default select example" id="specialties">
                                    <option selected hidden>Specialties</option>
                                </select>
                            </div>
                            <div class="input-group my-3">
                                <span class="input-group-text">Preferred Communication*</span>
                                <select class="form-select" aria-label="Default select example" id="comms">
                                    <option selected>Email</option>
                                    <option>Phone</option>
                                    <option>Text</option>
                                </select>
                            </div>
                            <button class="btn" style="background-color: #FFFF80">Send Referral</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection

@push('jsscripts')
<script>
    $(document).ready(function () {
        var $searchButton = $('#searchbutton');

        $('#specialties').change(function () {
            updateSearchButtonHref();
        });

        $('#professions').change(function () {
            var selectedProfession = $(this).val();
            updateSearchButtonHref();
            // Make an AJAX request to fetch specialties
            $.get('/fetch-specialties', { profession: selectedProfession }, function (data) {
                // Assuming data is an array of specialties
                var $specialtiesSelect = $('#specialties');
                $specialtiesSelect.empty();

                // Add the fetched specialties
                $.each(data, function (index, specialty) {
                    $specialtiesSelect.append($('<option>', {
                        value: specialty.id,
                        text: specialty.name
                    }));
                });
            });
        });

        function updateSearchButtonHref() {
            var selectedProfession = $('#professions').val();
            var selectedSpecialty = $('#specialties').val();

            selectedSpecialty = selectedSpecialty.replace(/\s+/g, '-');

            var href = 'https://nexus-leap.laboredge.com/access/jobs?prof=' + selectedProfession +'&spec=' + selectedSpecialty +'&job=LOCAL,PERM,TRAVEL&highSort=clientName&highSortOr=-1&exclSort=clientName&exclSortOr=-1&featureSort=clientName&featureSortOr=-1'
            $searchButton.attr('href', href);
        }
    });


</script>
@endpush