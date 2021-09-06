<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/icon/developer.ico') }}">

    <title>@stack('title_base')</title>
    <!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-lava.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">


    @stack('styles')
    @livewireStyles

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            PYDO
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="menu-ite">Home</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">About</a></li>
                            <li class="scroll-to-section"><a href="#testimonials"
                                    class="menu-item">Testimonials</a>
                            </li>
                            <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Contact Us</a>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->utype === 'ADM')
                                        {{-- Admin --}}
                                        <li class="submenu">
                                            <a href="#">Menu</a>
                                            <ul>
                                                <li><a href="" class="menu-item">{{ Auth::user()->name }}</a></li>
                                                <li><a href="{{ route('admin.dashboard') }}"
                                                        class="menu-ite">Dashboard ADM</a>
                                                </li>
                                                <li><a href="" class="menu-item">FAQ's</a></li>
                                                <li><a href="" class="menu-item">Blog</a></li>

                                                <li class="menu-item">
                                                    <a title="Logout" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                </form>
                                            </ul>
                                        </li>
                                    @elseif(Auth::user()->utype === 'CLB')
                                        {{-- Colaborador --}}
                                        <li class="submenu">
                                            <a href="javascript:;">Menu</a>
                                            <ul>
                                                <li><a href="" class="menu-item">{{ Auth::user()->name }}</a></li>
                                                <li><a href="{{ route('collaborator.dashboard') }}"
                                                        class="menu-ite">Dashboard CLB</a></li>
                                                <li><a href="{{ url('user/profile') }}" class="menu-ite">Perfil</a>
                                                </li>
                                                <li><a href="" class="menu-item">Blog</a></li>
                                                <li class="menu-item">
                                                    <a title="Logout" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                </form>
                                            </ul>
                                        </li>
                                    @else
                                        <li class="submenu">
                                            <a href="javascript:;">Menu</a>
                                            <ul>
                                                <li><a href="" class="menu-item">{{ Auth::user()->name }}</a></li>
                                                <li><a href="" class="menu-item">Saldo {{ Auth::user()->usd }}</a>
                                                </li>
                                                <li><a href="{{ route('admin.dashboard') }}"
                                                        class="menu-ite">Dashboard USER</a></li>
                                                <li><a href="{{ url('user/profile') }}" class="menu-ite">Perfil</a>

                                                </li>
                                                <li class="menu-item">
                                                    <a title="Logout" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                </form>
                                            </ul>
                                        </li>

                                    @endif
                                @else
                                    <li class="scroll-to-section"><a href="{{ route('login') }}"
                                            class="pendiente">Login</a>
                                    </li>
                                    <li class="scroll-to-section"><a href="{{ route('register') }}"
                                            class="pendierte">Register</a>
                                    </li>
                                @endif
                                @endif

                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->


        {{ $slot }}


        <!-- ***** Footer Start ***** -->
        <footer id="contact-us">
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <!-- ***** Contact Form Start ***** -->
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="contact-form">
                                <form id="contact" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="name" type="text" id="name" placeholder="Full Name" required=""
                                                    style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="email" type="text" id="email" placeholder="E-Mail Address"
                                                    required="" style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" rows="6" id="message" placeholder="Your Message"
                                                    required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button">Send Message
                                                    Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- ***** Contact Form End ***** -->
                        <div class="right-content col-lg-6 col-md-12 col-sm-12">
                            <h2>More About <em>Lava</em></h2>
                            <p>Phasellus dapibus urna vel lacus accumsan, iaculis eleifend leo auctor. Duis at finibus odio.
                                Vivamus ut pharetra arcu, in porta metus. Suspendisse blandit pulvinar ligula ut elementum.
                                <br><br>If you need this contact form to send email to your inbox, you may follow our <a
                                    rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> page
                                for more detail.
                            </p>
                            <ul class="social">
                                <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sub-footer">
                            <p>Copyright &copy; 2020 Lava Landing Page

                                | Designed by <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('assets/js/popper.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        <!-- Plugins -->
        <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
        <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>

        <!-- Global Init -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        @stack('scripts')

        @livewireScripts

    </body>

    </html>
