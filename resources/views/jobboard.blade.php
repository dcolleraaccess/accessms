@extends('components.layout')

@section('content')

<main style="padding-top: 110px; min-height: 110vh">

    <section class="mt-5">

        <div class="container-xl">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Inputs</h3>
                            <form action="" class="mt-4">
                                <div class="input-group my-4">
                                    <span class="input-group-text">Sample</span>
                                    <input type="text" aria-label="First name" class="form-control">
                                </div>
                                <div class="input-group my-4">
                                    <span class="input-group-text">Sample</span>
                                    <input type="text" aria-label="First name" class="form-control">
                                </div>
                                <div class="input-group my-4">
                                    <span class="input-group-text">Sample</span>
                                    <input type="text" aria-label="First name" class="form-control">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h2>Results</h2>

                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Result</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>

</main>





@endsection