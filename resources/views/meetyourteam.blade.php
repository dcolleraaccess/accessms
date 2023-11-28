@extends('components.layout2')


@section('styles')

@endsection

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/referral.jpg')}}"
                    style="height:300px;object-fit: cover;object-position: 0px -150px;">
            </div>
        </div>
    </div>
</div>

<section style="min-height: 500px;">
    <div class="container-xl py-3">

        <div class="row d-flex align-items-center py-2 my-4">

            <div class="col-12">
                <h1 class="text-center">Meet Your Team</h1>
                <p class="text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic earum delectus officiis cumque nostrum
                    molestiae, et consequatur at repellat itaque! Maiores eos, nisi beatae hic dolores officiis sed ut
                    ea itaque corrupti ratione, in harum voluptatum possimus minus perferendis sunt. Dolor alias numquam
                    inventore quasi, possimus laborum nemo commodi facilis.
                </p>
            </div>
        </div>


    </div>

</section>


@endsection