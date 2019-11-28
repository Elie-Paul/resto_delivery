<!-- Start Footer Area -->
<footer class="footer__area footer--1">
        <div class="footer__wrapper bg__cat--1 section-padding--lg">
            <div class="container">
                <div class="row">
                    <!-- Start Single Footer -->
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="footer">
                            <h2 class="ftr__title">A propos de Gaaw Food</h2>
                            <div class="footer__inner">
                                <div class="ftr__details">
                                    <!--p>Lorem ipsum dolor sit amconsectetur adipisicing elit,</p-->
                                    <div class="ftr__address__inner">
                                        <div class="ftr__address">
                                            <div class="ftr__address__icon">
                                                <i class="zmdi zmdi-home"></i>
                                            </div>
                                            <div class="frt__address__details">
                                                <p>Résidence Falba, Médina Rue 39, Dakar</p>
                                            </div>
                                        </div>
                                        <div class="ftr__address">
                                            <div class="ftr__address__icon">
                                                <i class="zmdi zmdi-phone"></i>
                                            </div>
                                            <div class="frt__address__details">
                                                <p><a href="#">+0221 77 446 94 15</a></p>
                                                <p><a href="#">+0221 33 820 00 22</a></p>
                                            </div>
                                        </div>
                                        <div class="ftr__address">
                                            <div class="ftr__address__icon">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="frt__address__details">
                                                <p><a href="#">exemple@gamil.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="social__icon">
                                        <li><a href="https://www.facebook.com/eliepaul.moubotouto"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer -->
                    <!-- Start Single Footer -->
                    <div class="col-md-6 col-lg-3 col-sm-12 sm--mt--40">
                        <div class="footer gallery">
                            <h2 class="ftr__title">Notre galerie</h2>
                            <div class="footer__inner">
                                <ul class="sm__gallery__list">
                                    <li><a href="#"><img src="{{asset('images/gallery/sm-img/1.jpg')}}" alt="gallery images"></a></li>
                                    <li><a href="#"><img src="{{asset('images/gallery/sm-img/2.jpg')}}" alt="gallery images"></a></li>
                                    <li><a href="#"><img src="{{asset('images/gallery/sm-img/3.jpg')}}" alt="gallery images"></a></li>
                                    <li><a href="#"><img src="{{asset('images/gallery/sm-img/4.jpg')}}" alt="gallery images"></a></li>
                                    <li><a href="#"><img src="{{asset('images/gallery/sm-img/5.jpg')}}" alt="gallery images"></a></li>
                                    <li><a href="#"><img src="{{asset('images/gallery/sm-img/6.jpg')}}" alt="gallery images"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer -->
                    <!-- Start Single Footer -->
                    <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                        <div class="footer">
                            <h2 class="ftr__title">Horaire d'ouverture</h2>
                            <div class="footer__inner">
                                <ul class="opening__time__list">
                                    <li>Lundi<span>...............</span>9h00 à 00h00</li>
                                    <li>Mardi<span>...............</span>9h00 à 00h00</li>
                                    <li>Mercredi<span>.........</span>9h00 à 00h00</li>
                                    <li>Jeudi<span>................</span>9h00 à 00h00</li>
                                    <li>Vendredi<span>........</span>9h00 à 00h00</li>
                                    <li>Samedi<span>............</span>9h00 à 00h00</li>
                                    <li>Dimanche<span>.......</span>9h00 à 00h00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer -->
                </div>
            </div>
        </div>
        <div class="copyright bg--theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="copyright__inner">
                            <div class="cpy__right--left">
                                <p>@All Right 2019 Gaaw Food</a></p>
                            </div>
                            <div class="cpy__right--right">
                                <a href="#">
                                    <img src="{{asset('images/icon/shape/2.png')}}" alt="payment images">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
    <!-- End Footer Area -->
    <!-- Login Form -->
    <div class="accountbox-wrapper">
        <div class="accountbox text-left">
            <ul class="nav accountbox__filters" id="myTab" role="tablist">
                <li>
                    <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
                </li>
                <li>
                    <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>
            </ul>
            <div class="accountbox__inner tab-content" id="myTabContent">
                <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                    <!-- Login -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="single-input">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="single-input">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--div class="form-group row">
                            <div class="col-md-6 mr-2 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div-->
                        <div class="single-input">
                            <button type="submit" class="food__btn">{{ __('Login') }}</button>
                        </div>
                        <div class="accountbox-login__others">
                            <h6>Or login with</h6>
                            <div class="social-icons">
                                <ul>
                                    <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="#">
                        <div class="single-input">
                            <input class="cr-round--lg" type="text" placeholder="User name">
                        </div>
                        <div class="single-input">
                            <input class="cr-round--lg" type="email" placeholder="Email address">
                        </div>
                        <div class="single-input">
                            <input class="cr-round--lg" type="password" placeholder="Password">
                        </div>
                        <div class="single-input">
                            <input class="cr-round--lg" type="password" placeholder="Confirm password">
                        </div>
                        <div class="single-input">
                            <button type="submit" class="food__btn"><span>S'inscrire</span></button>
                        </div>
                    </form>
                </div>
                <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
            </div>
        </div>
    </div><!-- //Login Form -->
    <!-- Cartbox -->
    <div class="cartbox-wrap">
        <div class="cartbox text-right">
            <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
            <div class="cartbox__inner text-left">
                <div class="cartbox__items">
                    <!-- Cartbox Single Item -->
                    <div class="cartbox__item">
                        <div class="cartbox__item__thumb">
                            <a href="product-details.html">
                                <img src="{{asset('images/blog/sm-img/1.jpg')}}" alt="small thumbnail">
                            </a>
                        </div>
                        <div class="cartbox__item__content">
                            <h5><a href="product-details.html" class="product-name">Vanila Muffin</a></h5>
                            <p>Qty: <span>01</span></p>
                            <span class="price">$15</span>
                        </div>
                        <button class="cartbox__item__remove">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div><!-- //Cartbox Single Item -->
                </div>
                <div class="cartbox__total">
                    <ul>
                        <li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
                        <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$05</span></li>
                        <li class="grandtotal">Total<span class="price">$75</span></li>
                    </ul>
                </div>
                <div class="cartbox__buttons">
                    <a class="food__btn" href="{{route('cart.index')}}"><span>View cart</span></a>
                    <a class="food__btn" href="{{route('order.index')}}"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div><!-- //Cartbox -->
</div><!-- //Main wrapper -->

<!-- JS Files -->
<script src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/active.js') }}"></script>
</body>
</html>
