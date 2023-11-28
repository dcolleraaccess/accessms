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

        .footersocials {
            text-decoration: none;
            color: white;
            margin-right: 10px;
            font-size: 20px;
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
                object-position: 0px -200px;
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

    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
    window.__lc.license = 14120712;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/14120712/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->


</body>

</html>