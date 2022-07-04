<div class="header_absolute ">
    <!-- header with two Bootstrap columns - left for logo and right for navigation -->
    <header style="background-color:rgb(223, 10, 129) !important; opacity:none !important;"
        class="page_header ds ms  justify-nav-center s-overlay s-py-10 ">

        <div class="container-fluid" style="background-color:rgb(223, 10, 129) !important; opacity:none !important;">

            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3 col-md-7 col-8"
                    style="background-color:white; padding-left: 9px; padding-right: 9px; border-radius: 20px">
                    <a href="/" class="logo">
                        <img style="border-radius: 6px; height:120px;" src="{{ asset('img/logo.png') }}"
                            alt="">
                    </a>

                </div>

                <div class="col-xl-10 col-lg-9 col-md-5 col-1">
                    <div class="nav-wrap">
                        <!-- main nav start -->
                        <nav class="top-nav justify-nav-center">
                            <ul class="nav sf-menu">


                                <li class=""> <a href="/" style="font-weight: 500">Home</a> </li>
                                @include('nav.links')
                                <!-- eof pages -->



                            </ul>


                        </nav>
                        <!-- eof main nav -->
                        {{-- <span class=" text-left text-md-right d-none d-xl-block">
                            <a href="#" class="btn btn-outline-maincolor">Locate Us</a>
                        </span> --}}
                        <ul class="top-includes d-none d-xl-block text-right">
                            <li>
                                <div class=""
                                    style="background-color:white; padding-left: 9px; padding-right: 9px; border-radius: 20px">
                                    <a target="_blank" href="https://www.mak.ac.ug/" class="logo">
                                        <img style=" height:60px; border-radius: 6px" src="{{ asset('img/Mak.png') }}"
                                            alt="">
                                    </a>

                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- header toggler -->
        <span class="toggle_menu"><span></span></span>
    </header>
</div>
