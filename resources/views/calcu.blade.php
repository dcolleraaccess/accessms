@extends('components.layout')
@section('content')
<style>
    input[type=range] {
        height: 26px;
        -webkit-appearance: none;
        margin: 10px 0;
        width: 100%;
    }
    input[type=range]:focus {
        outline: none;
    }
    input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 10px;
        cursor: pointer;
        animate: 0.2s;
        box-shadow: 1px 1px 1px #000000;
        background: #FFFF80;
        border-radius: 5px;
        border: 1px solid #000000;
    }
    input[type=range]::-webkit-slider-thumb {
        box-shadow: 1px 1px 1px #000000;
        border: 1px solid #000000;
        height: 18px;
        width: 17px;
        border-radius: 5px;
        background: #000000;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -5px;
    }
    input[type=range]:focus::-webkit-slider-runnable-track {
        background: #FFFF80;
    }
    input[type=range]::-moz-range-track {
        width: 100%;
        height: 10px;
        cursor: pointer;
        animate: 0.2s;
        box-shadow: 1px 1px 1px #000000;
        background: #FFFF80;
        border-radius: 5px;
        border: 1px solid #000000;
    }
    input[type=range]::-moz-range-thumb {
        box-shadow: 1px 1px 1px #000000;
        border: 1px solid #000000;
        height: 18px;
        width: 17px;
        border-radius: 5px;
        background: #000000;
        cursor: pointer;
    }
    input[type=range]::-ms-track {
        width: 100%;
        height: 10px;
        cursor: pointer;
        animate: 0.2s;
        background: transparent;
        border-color: transparent;
        color: transparent;
    }
    input[type=range]::-ms-fill-lower {
        background: #FFFF80;
        border: 1px solid #000000;
        border-radius: 10px;
        box-shadow: 1px 1px 1px #000000;
    }
    input[type=range]::-ms-fill-upper {
        background: #FFFF80;
        border: 1px solid #000000;
        border-radius: 10px;
        box-shadow: 1px 1px 1px #000000;
    }
    input[type=range]::-ms-thumb {
        margin-top: 1px;
        box-shadow: 1px 1px 1px #000000;
        border: 1px solid #000000;
        height: 18px;
        width: 17px;
        border-radius: 5px;
        background: #000000;
        cursor: pointer;
    }
    input[type=range]:focus::-ms-fill-lower {
        background: #FFFF80;
    }
    input[type=range]:focus::-ms-fill-upper {
        background: #FFFF80;
    }

</style>
    <div>
        <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/Doctor, surgeon and nurse join hands together - L.jpg')}}"
                         style="height: 300px; object-fit:cover">
                </div>
            </div>
        </div>
    </div>
    <section style="background-color: #ffff80">
        <div class="container-xl py-3">
            <div class="d-none d-lg-block">
                <div class="row" style="position: relative">
                    <div style="position: absolute" class="circle">
                        <div>
                            Open Jobs
                        </div>
                        <div>
                            @php
                                $jobcount = DB::table('jobcount')
                                ->first();
                            @endphp
                            {{ $jobcount->count }}
                            {{--                       <span id="jobcount">5132</span> --}}
                        </div>
                    </div>
                    <h3 class="col-4">

                    </h3>
                    <div class="col-8">

                        <div class="d-none d-md-block">
                            <div class="row">
                                <div class="col">
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
                                <div class="col">
                                    <select class="form-select" aria-label="Default select example" id="specialties">
                                        <option selected hidden>Specialties</option>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <a href="" class="btn btn-dark" type="button" id="searchbutton"
                                       target="_empty">Search</a>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none">
                <h3 class="fw-bold mb-2">
                    <center>
                        Search Jobs
                    </center>
                </h3>
                <select class="form-select mb-2" aria-label="Default select example" id="professionssmall">
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
                <div class="col">
                    <select class="form-select mb-2" aria-label="Default select example" id="specialtiessmall">
                        <option selected hidden>Specialties</option>
                    </select>
                </div>
                <a href="" class="btn btn-dark w-100" type="button" id="searchbuttonsmall" target="_empty">Search</a>


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
                            <h3 class="card-title">Take Home Pay Calculator</h3>
                            <form action="" class="mt-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Regular Pay Rate</span>
                                    <input type="number" class="form-control" id="regp" value="20">
                                    <span class="input-group-text" id="r1">Regular Hours Work: 36</span>
                                    <input type="range" class="form-control" id="regh" min="0" max="100" style="background: transparent; accent-color: black" value="36">
                                    <span class="input-group-text" id="regpay" style="background-color:#ffff80">Regular Hours Amount: $720.00 </span>

                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Overtime Pay Rate</span>
                                    <input type="number" class="form-control" id="otrate" value="40">
                                    <span class="input-group-text" id="r2">OT Hours Worked: 0</span>
                                    <input type="range" class="form-control" id="othours" min="0" max="50" style="background: transparent; accent-color: black" value="0">
                                    <span class="input-group-text" id="otpay" style="background-color:#ffff80">OT Hours Amount: $0</span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nontaxable (NTX) Stipend</span>
                                    <input type="number" class="form-control" id="ntx" value="0">
                                    <span class="input-group-text">Tax Rate</span>
                                    <select class="form-select" id="tax">
                                        <option value="0.22" selected>22%</option>
                                        <option value="0.24">24%</option>
                                        <option value="0.30">30%</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3" style="width: 100%">
                                    <span class="input-group-text" id="gweekly" style="width: 50%; background-color:#ffff80">Total Gross Weekly: $720.00</span>
                                    <span class="input-group-text" id="nweekly" style="width: 50%; background-color:#ffff80">Estimated Take Home Weekly: $561.60</span>
                                </div>
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

            // var countdisplay = $("#jobcount");
            //  var countdisplay2 = $("#jobcount2");
            // $.get('fetchJobCount', function (data){
            //      countdisplay.text(data);
            //      countdisplay2.text(data);
            //})

            var $searchButton = $('#searchbutton');

            $('#specialties').change(function () {
                updateSearchButtonHref();
            });

            $('#professions').change(function () {
                var selectedProfession = $(this).val();

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
                updateSearchButtonHref();
            });

            function updateSearchButtonHref() {
                var selectedProfession = $('#professions').val();
                var selectedSpecialty = $('#specialties').val();

                selectedSpecialty = selectedSpecialty.replace(/\s+/g, '-');

                var href = 'https://nexus-leap.laboredge.com/access/jobs?prof=' + selectedProfession +'&spec=' + selectedSpecialty +'&job=LOCAL,PERM,TRAVEL&highSort=clientName&highSortOr=-1&exclSort=clientName&exclSortOr=-1&featureSort=clientName&featureSortOr=-1'
                $searchButton.attr('href', href);
            }

            var $searchButtonsmall = $('#searchbuttonsmall');

            $('#specialtiessmall').change(function () {
                updateSearchButtonHrefSmall();
            });

            $('#professionssmall').change(function () {
                var selectedProfession = $(this).val();

                // Make an AJAX request to fetch specialties
                $.get('/fetch-specialties', { profession: selectedProfession }, function (data) {
                    // Assuming data is an array of specialties
                    var $specialtiesSelect = $('#specialtiessmall');
                    $specialtiesSelect.empty();

                    // Add the fetched specialties
                    $.each(data, function (index, specialty) {
                        $specialtiesSelect.append($('<option>', {
                            value: specialty.id,
                            text: specialty.name
                        }));
                    });
                });
                updateSearchButtonHrefSmall();
            });

            function updateSearchButtonHrefSmall() {
                var selectedProfession = $('#professionssmall').val();
                var selectedSpecialty = $('#specialtiessmall').val();

                selectedSpecialty = selectedSpecialty.replace(/\s+/g, '-');

                var href = 'https://nexus-leap.laboredge.com/access/jobs?prof=' + selectedProfession +'&spec=' + selectedSpecialty +'&job=LOCAL,PERM,TRAVEL&highSort=clientName&highSortOr=-1&exclSort=clientName&exclSortOr=-1&featureSort=clientName&featureSortOr=-1'
                $searchButtonsmall.attr('href', href);
            }
        });
    </script>
    <script>
        $(document).ready(function(){
            var regph;
            var otp;
            var tx;
            $('#regp,#regh').change(function(){
               var regpay = $('#regp').val();
               var reghours = $('#regh').val();
               regph = regpay * reghours;$('#r1').html("Regular Hours Worked: "+$("#regh").val());
               $('#regpay').html("Regular Hours Amount: $"+regph);
                var gw = (($('#regp').val()*$('#regh').val())+($('#otrate').val()*$('#othours').val()));
                var gwpay = gw + parseInt($('#ntx').val());
                tx = gwpay * parseFloat($('#tax').val());
                $('#gweekly').html("Total Gross Weekly: $"+gwpay);
                var nwx=  gwpay - tx;
                $('#nweekly').html("Estimated Take Home Weekly: $"+nwx);
            });

            $('#othours,#otrate').change(function(){
                $('#r2').html("OT Hours Worked: "+$("#othours").val());
                var otx = $('#otrate').val();
                var oty = $('#othours').val();
                otp = otx * oty;
                $('#otpay').html("OT Hours Amount: $"+otp);
                var gw = (($('#regp').val()*$('#regh').val())+($('#otrate').val()*$('#othours').val()));
                var gwpay = gw + parseInt($('#ntx').val());
                tx = gwpay * parseFloat($('#tax').val());
                $('#gweekly').html("Total Gross Weekly: $"+gwpay);
                var nwx=  gwpay - tx;
                $('#nweekly').html("Estimated Take Home Weekly: $"+nwx);
            });
            $('#ntx').change(function(){
                var gw = (($('#regp').val()*$('#regh').val())+($('#otrate').val()*$('#othours').val()));
                var gwpay = gw + parseInt($('#ntx').val());
                tx = gwpay * parseFloat($('#tax').val());
                $('#gweekly').html("Total Gross Weekly: $"+gwpay);
                var nwx=  gwpay - tx;
                $('#nweekly').html("Estimated Take Home Weekly: $"+nwx);
            });
            $('#tax').change(function(){
                var gw = (($('#regp').val()*$('#regh').val())+($('#otrate').val()*$('#othours').val()));
                var gwpay = gw + parseInt($('#ntx').val());
                tx = gwpay * parseFloat($('#tax').val());
                $('#gweekly').html("Total Gross Weekly: $"+gwpay);
                var nwx=  gwpay - tx;
                $('#nweekly').html("Estimated Take Home Weekly: $"+nwx);
            });
        });
    </script>
@endpush
