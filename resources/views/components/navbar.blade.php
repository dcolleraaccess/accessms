<div class="container-fluid bg-white shadow fixed-top">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-lg">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/Logo Only - NO BG.png')}}" alt="ahclogo" style="max-width: 150px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav custom-menu fw-bolder">
                    <li class="nav-item">
                        <a class="nav-link" href="https://nexus-leap.laboredge.com/access/jobs">Open Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/about" role="button" data-bs-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu font-weight-bold">
                            <li><a class="dropdown-item py-2" href="/about">Who We Are</a></li>
                            <li><a class="dropdown-item py-2" href="/blog">Access Blog</a></li>
                            <li><a class="dropdown-item py-2" href="/tjc">Joint Commission</a></li>
                            <li><a class="dropdown-item py-2" href="/meetyourteam">Meet Your Team</a></li>
                            <li><a class="dropdown-item py-2" href="/corporatecareers">Corporate Careers</a></li>
                            <li><a class="dropdown-item py-2" href="/connect">Connect With Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" role="button" data-bs-toggle="dropdown">
                            Resources
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item py-2"
                                    href="https://nexus-leap.laboredge.com/access/quicksignup">Quick Application</a>
                            </li>
                            <li><a class="dropdown-item py-2" href="https://nexus-leap.laboredge.com/access/signin">LEAP
                                    Portal Login</a></li>
                            <li><a class="dropdown-item py-2"
                                    href="https://myapps.paychex.com/landing_remote/login.do?lang=en">View
                                    Paystubs</a></li>
                            <li><a class="dropdown-item py-2" href="/referrals">Referral Program</a></li>
                            <li><a class="dropdown-item py-2" href="/benefits">Benefits and Extras</a></li>
                            <li><a class="dropdown-item py-2" href="/statenursinglicense">State Nursing License
                                    Requirements</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                            For Employers
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item py-2" href="/requeststaff">Staffing Request</a></li>
                            <li><a class="dropdown-item py-2" href="https://ahioas.com/">Workforce Solutions – BPO/RPO
                                    Services </a></li>
                            {{-- <li><a class="dropdown-item py-2" href="/sharelink">Access Sharelink</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://www.accessswag.com/">Swag Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
