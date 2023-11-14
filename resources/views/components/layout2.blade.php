<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('WEB_TITLE'))</title>

    {{-- Font Awesome Icons Free CDN --}}
    <script src="https://kit.fontawesome.com/193851b937.js" crossorigin="anonymous"></script>

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css"
        integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css"
        integrity="sha512-L+sMmtHht2t5phORf0xXFdTC0rSlML1XcraLTrABli/0MMMylsJi3XA23ReVQkZ7jLkOEIMicWGItyK4CAt2Xw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


        * {
            font-family: 'Poppins', sans-serif;
            /* border: 1px solid #000; */
        }

        .custom-menu {
            margin-left: auto;
        }

        .carousel-item img {
            max-height: 800px;
            width: 100%;
            object-fit: cover;
            display: block;
        }

        .carousel-item:first-child img {
            object-position: 0px 0px;
        }

        .carousel-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(0deg, rgba(49, 49, 49, 0.324) 0%, rgba(255, 255, 255, 0) 100%);
            z-index: 1;
        }

        .loc {
            transition: transform 0.3s ease;
        }

        .loc:hover {
            transform: scale(1.02);
        }

        .contentimg {
            max-height: 400px;
            object-fit: cover;
        }

        .footersocials {
            text-decoration: none;
            color: white;
            margin-right: 10px;
            font-size: 20px;
        }

        .mapdiv {
            width: 100%;
            /* Set a max width if needed */
        }

        .xd:hover {
            fill: yellow;
            transition: fill 500ms;

        }

        .xd {
            fill: black;
            transition: fill 500ms;

        }

        .borders {
            stroke: #FFFFFF;
            stroke-width: 1.5
        }

        svg {
            width: 60%;
            height: auto;
            display: block;
            margin: 0 auto;
            /* Center the SVG in its container */
        }

        /* color and width of borders between states */
        .dccircle {
            display: yes
        }

        /* set display to yes to show the circle for the District of Columbia, or none to hide it */
        .separator {
            stroke: #B0B0B0;
            stroke-width: 0
        }

        /* color and width of lines around Alaska and Hawaii */

        /* Individual states can be colored as follows:

        /* Hover Nav */
        @media all and (min-width: 992px) {
            .navbar .nav-item .dropdown-menu {
                display: none;
            }

            .navbar .nav-item:hover .nav-link {}

            .navbar .nav-item:hover .dropdown-menu {
                display: block;
            }

            .navbar .nav-item .dropdown-menu {
                margin-top: 0;
            }
        }
    </style>
    @yield('styles')
</head>

<body>
    @include('components.navbar')


    @yield('content')

    <footer style="background-color: black">
        <div class="container-xl text-white py-5">
            <div class="row">
                <div class="col-3">
                    <h4>Contacts</h4>
                    14 Farber Road, Princeton, NJ 08540<br>
                    1-800-257-5837<br>
                    info@accesshealthcarestaffing.com


                    <hr>
                    <a href="https://www.facebook.com/accesshealthcarestaffing" target="_empty"
                        class="fa fa-facebook footersocials"></a>
                    <a href="https://www.instagram.com/accesshealthcare/" class="fa fa-instagram footersocials"
                        target="_empty"></a>
                    <a href="https://twitter.com/AHCSTAFFINGLLC" class="fa fa-brands fa-x-twitter footersocials"
                        target="_empty"></a>
                    <a href="https://www.threads.net/@accesshealthcare" class="fa fa-brands fa-threads footersocials"
                        target="_empty"></a>
                    <a href="https://www.tiktok.com/@accesshealthcarestaffing"
                        class="fa fa-brands fa-tiktok footersocials" target="_empty"></a>
                    <a href="https://www.youtube.com/@accesshealthcarellc" class="fa fa-brands fa-youtube footersocials"
                        target="_empty"></a>
                    <a href="https://www.linkedin.com/company/10786322/admin/" class="fa fa-linkedin footersocials"
                        target="_empty"></a>


                </div>
                <div class="col-9" style="padding-left:100px">

                    <div class="row row-cols-4">
                        <div class="col-12 col-lg-4">
                            <center>
                                <img src="{{asset('img/SIA1.jpg')}}" class="img-fluid"
                                    style="max-height: 75px; min-height:75px; object-fit:contain">
                            </center>
                        </div>
                        <div class="col-12 col-lg-4">
                            <center>
                                <img src="{{asset('img/SIA2.png')}}" class="img-fluid"
                                    style="max-height: 75px; min-height:75px; object-fit:contain">
                            </center>
                        </div>
                        <div class="col-12 col-lg-4">
                            <center>
                                <img src="{{asset('img/natho copy.png')}}" class="img-fluid"
                                    style="max-height: 75px; min-height:75px; object-fit:contain">
                            </center>
                        </div>
                        <div class="col-12 col-lg-3">
                            <center>
                                <img src="{{asset('img/NALTO Member Logo - Affiliate.png')}}" class="img-fluid"
                                    style="max-height: 75px; min-height:75px; object-fit:contain">
                            </center>
                        </div>
                        <div class="col-12 col-lg-3">
                            <center>
                                <img src="{{asset('img/tjc.png')}}" class="img-fluid"
                                    style="max-height: 75px; min-height:75px; object-fit:contain">
                            </center>
                        </div>
                        <div class="col-12 col-lg-3">
                            <center>
                                <img src="{{asset('img/Vivian_Wordmark.svg')}}" class="img-fluid"
                                    style="max-height: 75px; min-height:75px; object-fit:contain">
                            </center>
                        </div>
                        <div class="col-12 col-lg-3">
                            <center>
                                <img src="{{asset('img/thumbnail_FMP_Logo_FullColor_RGB.png')}}" class="img-fluid"
                                    style="max-height: 75px; min-height:75px; object-fit:contain">
                            </center>
                        </div>
                    </div>





                </div>
            </div>

        </div>
        <div>
            <center>
                <p class="text-white mb-0 py-2" style="font-size: 12px">
                    Copyright © Access Healthcare Staffing. <a href="privacypolicy" style="color:white">Privacy
                        Policy</a>
                </p>
            </center>
        </div>
    </footer>


    {{-- Bootstrap 5 CDN Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/fetchData.js') }}"></script>

    @stack('jsscripts')
</body>

</html>