<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
    <!-- Start Header Area -->
    <header class="htc__header bg--white">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                        <div class="logo">
                            <a href="/  ">
                                <img src="{{asset('images/logo/foody.png')}}" alt="logo images">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                        <div class="main__menu__wrap">
                            <nav class="main__menu__nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <li class="drop"><a href="/ ">Acceuil</a></li>
                                    <li><a href="#">Menu</a></li>
                                    <li><a href="#">A propos</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                        <div class="header__right d-flex justify-content-end">
                            <div class="log__in">
                                <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
                            </div>
                            <div class="shopping__cart">
                                <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                <div class="shop__qun">
                                    <span>{{\Cart::getContent()->count()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="mobile-menu d-block d-lg-none"></div>
                <!-- Mobile Menu -->
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
