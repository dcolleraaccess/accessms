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

        /* Image Crop */
        @media (min-width: 1280px) {
            .carousel-item:first-child img {
                object-position: 0px -0px;
            }

            .carousel-item:nth-child(2) img {
                object-position: 0px -50px;
            }

            .carousel-item:nth-child(3) img {
                object-position: 0px -50px;
            }

            .carousel-item:nth-child(4) img {
                object-position: 0px -50px;
            }

            .carousel-item:nth-child(6) img {
                object-position: 0px -50px;
            }
        }

        @media (min-width: 1582px) {
            .carousel-item:first-child img {
                object-position: 0px 0px;
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
                </div>
                <div class="col-9">
                    <img src="{{asset('img/new2023footer_logos-1-1-1.png')}}" alt="" class="float-end">
                </div>
            </div>

        </div>
        <div>
            <center>
                <p class="text-white mb-0 py-2" style="font-size: 12px">
                    Copyright © Access Healthcare Staffing. <a data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Privacy Policy</a>
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