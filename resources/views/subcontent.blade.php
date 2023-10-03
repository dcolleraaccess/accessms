@extends('components.layout')

@section('content')
{{-- Header with Image --}}
<div style="position:relative;">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <img src="{{asset('img/1 - Traveler on Boat Deck Exploring.jpg')}}" class="d-block w-100">
            </div>
        </div>
    </div>

    {{-- <div style="position:absolute; bottom: 10%; left:5%; max-width: 40%; z-index: 10" class="text-white">
        <h1 style="font-size: 72px; font-family: 'Times New Roman';" class="mb-0 pb-0">Title Here</h1>
        <h1 style="font-family: 'Times New Roman';">Why not <span
                style=" font: italic 1em Georgia, Times, 'Times New Roman' , serif;">both</span>?</h1>
        <p style="font-family: 'Raleway';">Explore our site to discover why our Healthcare Professionals
            love working
            with
            us while discovering some of
            the best opportunities in the industry
        </p>
    </div> --}}
</div>

<section>
    <div class="container-xl py-5 ">

        <div class="row d-flex align-items-center py-4">
            <div class="col-6">
                <img src="{{asset('img/Travel.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
            <div class="col-6 ">
                <h1 class="mb-4">Title Here</h1>
                <h4>Title Here</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione autem tenetur, quia nostrum
                    molestias mollitia iure quasi dolore dolores. Illum et, quia eum delectus neque alias eveniet iure
                    repellat accusamus itaque quam saepe reiciendis optio dolore consequuntur officia suscipit
                    similique? Consequuntur inventore, quasi recusandae quaerat tenetur ratione. Aliquid architecto quas
                    ipsum temporibus molestiae deleniti, voluptates libero doloremque animi assumenda quaerat nostrum
                    ullam ipsam, omnis quae vero corporis nisi inventore ducimus facere laborum deserunt sunt quia. Id
                    laudantium reprehenderit hic officia ipsum accusantium minus quos, esse ipsa magni! Modi reiciendis
                    enim natus ratione ea aliquam, quos facere illo dolore accusantium blanditiis!</p>
                <br>

                <h4>Title Here</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione autem tenetur, quia nostrum
                    molestias mollitia iure quasi dolore dolores. Illum et, quia eum delectus neque alias eveniet iure
                    repellat accusamus itaque quam saepe reiciendis optio dolore consequuntur officia suscipit
                    similique? Consequuntur inventore, quasi recusandae quaerat tenetur ratione. Aliquid architecto quas
                    ipsum temporibus molestiae deleniti, voluptates libero doloremque animi assumenda quaerat nostrum
                    ullam ipsam, omnis quae vero corporis nisi inventore ducimus facere laborum deserunt sunt quia. Id
                    laudantium reprehenderit hic officia ipsum accusantium minus quos, esse ipsa magni! Modi reiciendis
                    enim natus ratione ea aliquam, quos facere illo dolore accusantium blanditiis!</p>
            </div>
        </div>

        <div class="row d-flex align-items-center py-4 my-4">

            <div class="col-6 ">
                <h1 class="text-end">Locum</h1>
                <p class="text-end">
                    Explore the world of wellness and healthcare with our brand new podcast, 'See U Next Tuesday!' Join
                    us as we delve into a variety of captivating health-related topics, offering insights into the
                    latest medical advancements, wellness trends, and discussions on promoting a healthier lifestyle.
                </p>
            </div>
            <div class="col-6">
                <img src="{{asset('img/Locum Tenens.jpg')}}" class="d-block w-100 rounded-5 contentimg" alt="...">
            </div>
        </div>

        <div class="my-5">
            <center>
                <h1>Title Here</h1>
            </center>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Title Here</h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, alias nostrum animi
                                eum voluptate architecto quisquam totam neque excepturi quos?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Title Here</h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, alias nostrum animi
                                eum voluptate architecto quisquam totam neque excepturi quos?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Title Here</h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, alias nostrum animi
                                eum voluptate architecto quisquam totam neque excepturi quos?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Title Here</h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, alias nostrum animi
                                eum voluptate architecto quisquam totam neque excepturi quos?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>


<section
    style="background: linear-gradient(0deg, rgba(207, 255, 16, 0.86) 0%, rgba(0, 0, 0, 0.86) 100%), url(img/ahs_slideA.jpg); background-position: 50%; background-size: cover; background-repeat: no-repeat;">


    <div class="container-xl py-3 text-white">
        <div class="py-5 my-5">
            <center>
                <h1>Title Here</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, eum?
                </p>
                <button class="btn btn-light">Referral Program</button>
            </center>
        </div>
    </div>
</section>

<section>
    <div class="container-xl py-5 my-5">
        <div class="row d-flex align-items-center">

            <div class="">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Subscribe to job alerts</h3>
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

        </div>

    </div>
</section>



@endsection