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


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Privacy Policy</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Last updated: May 11, 2022

                    This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of
                    Your information when You use the Service and tells You about Your privacy rights and how the law
                    protects You.

                    We use Your Personal data to provide and improve the Service. By using the Service, You agree to the
                    collection and use of information in accordance with this Privacy Policy. This Privacy Policy has
                    been created with the help of the TermsFeed Privacy Policy Generator.

                    Interpretation and Definitions
                    Interpretation
                    The words of which the initial letter is capitalized have meanings defined under the following
                    conditions. The following definitions shall have the same meaning regardless of whether they appear
                    in singular or in plural.

                    Definitions
                    For the purposes of this Privacy Policy:

                    Account means a unique account created for You to access our Service or parts of our Service.
                    Affiliate means an entity that controls, is controlled by or is under common control with a party,
                    where “control” means ownership of 50% or more of the shares, equity interest or other securities
                    entitled to vote for election of directors or other managing authority.
                    Company (referred to as either “the Company”, “We”, “Us” or “Our” in this Agreement) refers to
                    Access Healthcare Staffing, 14 Farber Road, Princeton, NJ 08540.
                    Cookies are small files that are placed on Your computer, mobile device or any other device by a
                    website, containing the details of Your browsing history on that website among its many uses.
                    Country refers to: New Jersey, United States
                    Device means any device that can access the Service such as a computer, a cellphone or a digital
                    tablet.
                    Personal Data is any information that relates to an identified or identifiable individual.
                    Service refers to the Website.
                    Service Provider means any natural or legal person who processes the data on behalf of the Company.
                    It refers to third-party companies or individuals employed by the Company to facilitate the Service,
                    to provide the Service on behalf of the Company, to perform services related to the Service or to
                    assist the Company in analyzing how the Service is used.
                    Usage Data refers to data collected automatically, either generated by the use of the Service or
                    from the Service infrastructure itself (for example, the duration of a page visit).
                    Website refers to Access Healthcare Staffing, accessible from
                    https://www.accesshealthcarestaffing.com
                    You means the individual accessing or using the Service, or the company, or other legal entity on
                    behalf of which such individual is accessing or using the Service, as applicable.
                    Collecting and Using Your Personal Data
                    Types Of Data Collected
                    PERSONAL DATA
                    While using Our Service, We may ask You to provide Us with certain personally identifiable
                    information that can be used to contact or identify You. Personally identifiable information may
                    include, but is not limited to:

                    Email address
                    First name and last name
                    Phone number
                    Usage Data
                    USAGE DATA
                    Usage Data is collected automatically when using the Service.

                    Usage Data may include information such as Your Device’s Internet Protocol address (e.g. IP
                    address), browser type, browser version, the pages of our Service that You visit, the time and date
                    of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.

                    When You access the Service by or through a mobile device, We may collect certain information
                    automatically, including, but not limited to, the type of mobile device You use, Your mobile device
                    unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile
                    Internet browser You use, unique device identifiers and other diagnostic data.

                    We may also collect information that Your browser sends whenever You visit our Service or when You
                    access the Service by or through a mobile device.

                    TRACKING TECHNOLOGIES AND COOKIES
                    We use Cookies and similar tracking technologies to track the activity on Our Service and store
                    certain information. Tracking technologies used are beacons, tags, and scripts to collect and track
                    information and to improve and analyze Our Service. The technologies We use may include:

                    Cookies or Browser Cookies. A cookie is a small file placed on Your Device. You can instruct Your
                    browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not
                    accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your
                    browser setting so that it will refuse Cookies, our Service may use Cookies.
                    Web Beacons. Certain sections of our Service and our emails may contain small electronic files known
                    as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the
                    Company, for example, to count users who have visited those pages or opened an email and for other
                    related website statistics (for example, recording the popularity of a certain section and verifying
                    system and server integrity).
                    Cookies can be “Persistent” or “Session” Cookies. Persistent Cookies remain on Your personal
                    computer or mobile device when You go offline, while Session Cookies are deleted as soon as You
                    close Your web browser. You can learn more about cookies on TermsFeed website article.

                    We use both Session and Persistent Cookies for the purposes set out below:

                    Necessary / Essential CookiesType: Session CookiesAdministered by: Us
                    Purpose: These Cookies are essential to provide You with services available through the Website and
                    to enable You to use some of its features. They help to authenticate users and prevent fraudulent
                    use of user accounts. Without these Cookies, the services that You have asked for cannot be
                    provided, and We only use these Cookies to provide You with those services.

                    Cookies Policy / Notice Acceptance CookiesType: Persistent CookiesAdministered by: Us
                    Purpose: These Cookies identify if users have accepted the use of cookies on the Website.

                    Functionality CookiesType: Persistent CookiesAdministered by: Us
                    Purpose: These Cookies allow us to remember choices You make when You use the Website, such as
                    remembering your login details or language preference. The purpose of these Cookies is to provide
                    You with a more personal experience and to avoid You having to re-enter your preferences every time
                    You use the Website.

                    For more information about the cookies we use and your choices regarding cookies, please visit our
                    Cookies Policy or the Cookies section of our Privacy Policy.

                    Use Of Your Personal Data
                    The Company may use Personal Data for the following purposes:

                    To provide and maintain our Service, including to monitor the usage of our Service.
                    To manage Your Account: to manage Your registration as a user of the Service. The Personal Data You
                    provide can give You access to different functionalities of the Service that are available to You as
                    a registered user.
                    For the performance of a contract: the development, compliance and undertaking of the purchase
                    contract for the products, items or services You have purchased or of any other contract with Us
                    through the Service.
                    To contact You: To contact You by email, telephone calls, SMS, or other equivalent forms of
                    electronic communication, such as a mobile application’s push notifications regarding updates or
                    informative communications related to the functionalities, products or contracted services,
                    including the security updates, when necessary or reasonable for their implementation.
                    To provide You with news, special offers and general information about other goods, services and
                    events which we offer that are similar to those that you have already purchased or enquired about
                    unless You have opted not to receive such information.
                    To manage Your requests: To attend and manage Your requests to Us.
                    For business transfers: We may use Your information to evaluate or conduct a merger, divestiture,
                    restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets,
                    whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which
                    Personal Data held by Us about our Service users is among the assets transferred.
                    For other purposes: We may use Your information for other purposes, such as data analysis,
                    identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate
                    and improve our Service, products, services, marketing and your experience.
                    We may share Your personal information in the following situations:

                    With Service Providers: We may share Your personal information with Service Providers to monitor and
                    analyze the use of our Service, to contact You.
                    For business transfers: We may share or transfer Your personal information in connection with, or
                    during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a
                    portion of Our business to another company.
                    With Affiliates: We may share Your information with Our affiliates, in which case we will require
                    those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other
                    subsidiaries, joint venture partners or other companies that We control or that are under common
                    control with Us.
                    With business partners: We may share Your information with Our business partners to offer You
                    certain products, services or promotions.
                    With other users: when You share personal information or otherwise interact in the public areas with
                    other users, such information may be viewed by all users and may be publicly distributed outside.
                    With Your consent: We may disclose Your personal information for any other purpose with Your
                    consent.
                    Retention Of Your Personal Data
                    The Company will retain Your Personal Data only for as long as is necessary for the purposes set out
                    in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply
                    with our legal obligations (for example, if we are required to retain your data to comply with
                    applicable laws), resolve disputes, and enforce our legal agreements and policies.

                    The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally
                    retained for a shorter period of time, except when this data is used to strengthen the security or
                    to improve the functionality of Our Service, or We are legally obligated to retain this data for
                    longer time periods.

                    Transfer Of Your Personal Data
                    Your information, including Personal Data, is processed at the Company’s operating offices and in
                    any other places where the parties involved in the processing are located. It means that this
                    information may be transferred to — and maintained on — computers located outside of Your state,
                    province, country or other governmental jurisdiction where the data protection laws may differ than
                    those from Your jurisdiction.

                    Your consent to this Privacy Policy followed by Your submission of such information represents Your
                    agreement to that transfer.

                    The Company will take all steps reasonably necessary to ensure that Your data is treated securely
                    and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to
                    an organization or a country unless there are adequate controls in place including the security of
                    Your data and other personal information.

                    Delete Your Personal Data
                    You have the right to delete or request that We assist in deleting the Personal Data that We have
                    collected about You.

                    Our Service may give You the ability to delete certain information about You from within the
                    Service.

                    You may update, amend, or delete Your information at any time by signing in to Your Account, if you
                    have one, and visiting the account settings section that allows you to manage Your personal
                    information. You may also contact Us to request access to, correct, or delete any personal
                    information that You have provided to Us.

                    Please note, however, that We may need to retain certain information when we have a legal obligation
                    or lawful basis to do so.

                    Disclosure Of Your Personal Data
                    BUSINESS TRANSACTIONS
                    If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be
                    transferred. We will provide notice before Your Personal Data is transferred and becomes subject to
                    a different Privacy Policy.

                    LAW ENFORCEMENT
                    Under certain circumstances, the Company may be required to disclose Your Personal Data if required
                    to do so by law or in response to valid requests by public authorities (e.g. a court or a government
                    agency).

                    OTHER LEGAL REQUIREMENTS
                    The Company may disclose Your Personal Data in the good faith belief that such action is necessary
                    to:

                    Comply with a legal obligation
                    Protect and defend the rights or property of the Company
                    Prevent or investigate possible wrongdoing in connection with the Service
                    Protect the personal safety of Users of the Service or the public
                    Protect against legal liability
                    Security Of Your Personal Data
                    The security of Your Personal Data is important to Us, but remember that no method of transmission
                    over the Internet, or method of electronic storage is 100% secure. While We strive to use
                    commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute
                    security.

                    Children’s Privacy
                    Our Service does not address anyone under the age of 13. We do not knowingly collect personally
                    identifiable information from anyone under the age of 13. If You are a parent or guardian and You
                    are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware
                    that We have collected Personal Data from anyone under the age of 13 without verification of
                    parental consent, We take steps to remove that information from Our servers.

                    If We need to rely on consent as a legal basis for processing Your information and Your country
                    requires consent from a parent, We may require Your parent’s consent before We collect and use that
                    information.

                    Links to Other Websites
                    Our Service may contain links to other websites that are not operated by Us. If You click on a third
                    party link, You will be directed to that third party’s site. We strongly advise You to review the
                    Privacy Policy of every site You visit.

                    We have no control over and assume no responsibility for the content, privacy policies or practices
                    of any third party sites or services.

                    Changes to this Privacy Policy
                    We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the
                    new Privacy Policy on this page.

                    We will let You know via email and/or a prominent notice on Our Service, prior to the change
                    becoming effective and update the “Last updated” date at the top of this Privacy Policy.

                    You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy
                    Policy are effective when they are posted on this page.

                    Contact Us
                    If you have any questions about this Privacy Policy, You can contact us:

                    By email: info@accesshealthcarestaffing.com
                    By visiting this page on our website: https://www.accesshealthcarestaffing.com/privacy
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap 5 CDN Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/fetchData.js') }}"></script>

    @stack('jsscripts')
</body>

</html>
