@extends('components.layout2')


@section('styles')
<style>
    /* i.fa:first-child {
        display: inline-block;
        border-radius: 1000px;
        box-shadow: 0 0 1px #000000;
        border: 2px solid black;
        padding: 1em 0.7em;

    } */

    .socials {
        display: flex;
        text-align: center;
        justify-content: center;
        flex-direction: column;
        align-self: center;

    }

    .fa {
        padding: 19px;
        font-size: 20px;
        width: 20px;
        text-align: center;
        text-decoration: none;
        margin: 4px 4px;
        /* margin-bottom: 20px; */
        border-radius: 50%;
        border: 2px black solid;
        transition-duration: 0.14s;
        box-sizing: initial;
        color: black;
    }

    .fa:hover {
        color: white;
        background: black;
    }
</style>
@endsection

@section('content')
<div>
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/connect.jpg')}}"
                    style="height: 300px; object-fit:cover; object-position: 0px -400px">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-xl my-5">

        <div class="row">
            <div class="col-6">
                <div>
                    <h1>Contact Us</h1>
                    <div>
                        <i href="https://www.facebook.com/xAzurine/" class="fa fa-location-dot"></i>
                        <span class="ms-4">14 Farber Road, Princeton, NJ 08540</span>
                    </div>
                    <div>
                        <i href="https://twitter.com/dmcollera" class="fa fa-phone"></i>
                        <span class="ms-4">
                            1-800-257-5837
                        </span>
                    </div>
                    <div>
                        <i href="https://github.com/dandrecollera" class="fa fa-envelope"></i>
                        <span class="ms-4">
                            info@accesshealthcarestaffing.com
                        </span>
                    </div>
                </div>
                <h1 class="mt-4">Socials</h1>
                <div>
                    <a href="https://www.facebook.com/accesshealthcarestaffing" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/accesshealthcare/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/AHCSTAFFINGLLC" class="fa fa-brands fa-x-twitter"></a>
                    <a href="https://www.threads.net/@accesshealthcare" class="fa fa-brands fa-threads"></a>
                    <a href="https://www.tiktok.com/@accesshealthcarestaffing" class="fa fa-brands fa-tiktok"></a>
                    <a href="https://www.youtube.com/@accesshealthcarellc" class="fa fa-brands fa-youtube"></a>
                    <a href="https://www.linkedin.com/company/10786322/admin/" class="fa fa-linkedin"></a>
                </div>
            </div>
            <div class="col-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3042.3688578246806!2d-74.6639865!3d40.311970599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3e1970562c767%3A0x21b144bd4bdbd95c!2sAccess%20Healthcare%20LLC!5e0!3m2!1sen!2sph!4v1698082544011!5m2!1sen!2sph"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
            </div>
        </div>
    </div>
</section>



@endsection