<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('WEB_TITLE'))</title>

    <link rel="stylesheet" href="{{ asset('css/mdb.min.css')}}">
    <link rel="icon" type="image/ico" href="{{ asset('favicon/favicon.ico') }}">

    <script src="https://kit.fontawesome.com/55faa7e024.js" crossorigin="anonymous"></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            color: black;
        }

        .center-login {
            max-width: 400px;
            width: 100%;
        }

        body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ececec;
        }
    </style>

</head>

<body>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card center-login">
            <div style="font-size: 12px">
                <a href="/">
                    <i class="fas fa-angle-left ps-2 pt-2" style="color: #b1b1b1"></i>
                    <span style="color: #b1b1b1">HOME</span>
                </a>
            </div>

            <div class="card-body p-5">
                <center>
                    <img src="{{asset('img/Logo Only - NO BG.png')}}" alt="ahclogo" style="max-width: 150px"
                        class="mb-3">

                    <h5 class="mb-3">Sign In</h5>
                </center>

                @isset($err)
                <div class="sumb-alert alert alert-{{ !empty($errors[$err][1]) ? $errors[$err][1] : 'alert' }}"
                    role="alert">
                    {{ !empty($errors[$err][0]) ? $errors[$err][0] : 'error' }}
                </div>
                @endisset

                <form method="POST" action="/loginProcess">
                    @csrf
                    <div class="form-outline mt-4 mb-3" style="min-width:200px">
                        <input type="text" id="email" class="form-control" name="email" required />
                        <label class="form-label" for="username">Email</label>
                    </div>

                    <div class="form-outline mb-3" style="min-width:200px">
                        <a id="show1" href="#" style="color: inherit;"><i class="fas fa-eye-slash trailing pe-auto"
                                id="eye1"></i></a>
                        <input type="password" id="password" class="form-control" name="password" required />
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>

            </div>
        </div>
    </div>


    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/mdb.min.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function(){

        $('#show1').on('click', function() {
            if($('#password').attr('type') == "text"){
                $('#password').attr('type', 'password');
                $('#eye1').addClass( "fa-eye-slash" );
                $('#eye1').removeClass( "fa-eye" );
            } else{
                $('#password').attr('type', 'text');
                $('#eye1').addClass( "fa-eye" );
                $('#eye1').removeClass( "fa-eye-slash" );
            }
        });
        $('#show2').on('click', function() {
            if($('#password2').attr('type') == "text"){
                $('#password2').attr('type', 'password');
                $('#eye2').addClass( "fa-eye-slash" );
                $('#eye2').removeClass( "fa-eye" );
            } else{
                $('#password2').attr('type', 'text');
                $('#eye2').addClass( "fa-eye" );
                $('#eye2').removeClass( "fa-eye-slash" );
            }
        });
    });
    </script>

</body>

</html>