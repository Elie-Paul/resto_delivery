@extends('layout.main')

@section('content')
<div class="slider__area slider--one">
    <div class="slider__activation--1">
        <!-- Start Single Slide -->
        <div class="slide fullscreen bg-image--1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="slider__content">
                            <div class="slider__inner">
                                <h2>“Gaaw Food”</h2>
                                <h1>Livraison de nourriture et service</h1>
                                <!--div class="slider__input">
                                    <input type="text" placeholder="Type Place, City.Division">
                                    <input class="res__search" type="text" placeholder="Restaurant">
                                    <div class="src__btn">
                                        <a href="#">Search</a>
                                    </div>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
</div>
    <!-- End Slider Area -->
    <!-- Start Service Area -->
    <section class="fd__service__area bg-image--2 section-padding--xlg">
        <div class="container">
            <div class="service__wrapper bg--white">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            <p>Le processus de notre service</p>
                            <h2 class="title__line">Comment ça marche</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--30">
                    <!-- Start Single Service -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service">
                            <div class="service__title">
                                <div class="ser__icon">
                                    <img src="{{ asset('images/icon/color-icon/1.png') }}" alt="icon image">
                                </div>
                                <h2><a href="#">Choisissez un restaurant</a></h2>
                            </div>
                            <div class="service__details">
                                <p>Dans la liste des restaurants, vous pouvez choisir le restaurant où vous souhaitez manger.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service">
                            <div class="service__title">
                                <div class="ser__icon">
                                    <img src="{{ asset('images/icon/color-icon/2.png') }}" alt="icon image">
                                </div>
                                <h2><a href="#">Sélectionnez ce que vous voulez manger</a></h2>
                            </div>
                            <div class="service__details">
                                <p>Une fois le restaurant choisi, vous pouvez selectionner dans son menu le plat souhaité.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service">
                            <div class="service__title">
                                <div class="ser__icon">
                                    <img src="{{asset('images/icon/color-icon/3.png')}}" alt="icon image">
                                </div>
                                <h2><a href="#">Ramassage ou livraison</a></h2>
                            </div>
                            <div class="service__details">
                                <p>Votre commande sera livrée en un temps record.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->
    <!-- Start Menu Grid Area -->
    <section class="food__menu__grid__area section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid__show d-flex justify-content-between align-items-center">
                        <div class="grid__show__item">
                            <p>Showing 1-9 of 18 Result </p>
                        </div>
                        <!--div class="grid__show__btn">
                            <a class="food__btn" href="#">Default Sorting</a>
                        </div-->
                    </div>
                </div>
            </div>
            <div class="row mt--30">
                @foreach ($restaurants as $restaurant)
                    <!-- Start Single Menu Item -->
                <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="menu__grid__item wow fadeInUp">
                            <div class="menu__grid__thumb">
                                <a href="menu-details.html">
                                    <img src="{{ asset('storage') . '/' . $restaurant->image }}" alt="grid item images">
                                </a>
                            </div>
                            <div class="menu__grid__inner">
                                <div class="menu__grid__details">
                                    <h2><a href="menu-details.html">{{$restaurant->nom}}</a></h2>
                                    <ul class="grid__prize__list">
                                        @foreach ($restaurant->cuisines as $cuisine)
                                            <!--li class="old__prize">{{$cuisine->libelle}}</li-->
                                            <li><!--i class="menu-icon fa fa-cutlery"></i-->{{$cuisine->libelle}}</li>
                                        @endforeach
                                        <!--li>$50</li-->
                                    </ul>
                                    <p>{{$restaurant->num_rue}}, {{$restaurant->ville}}</p>
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                    </ul>
                                </div>
                                <div class="grid__addto__cart__btn">
                                    <div class="row">
                                        <div class="col-md-6 mt-2">
                                            <!--button class="btn btn-danger">Voir le menu</button-->
                                            <a href="{{route('restaurant.menu',['restaurant' => $restaurant])}}">Voir le menu</a>
                                            <!--span class="glf-button" data-glf-cuid="9e78b3e2-d7f5-4f84-838f-c5decd2f9caa" data-glf-ruid="026b18ca-746e-4aec-9a05-2fed59ae3f49" > Commandez maintenant</span>
<span class="glf-button reservation" data-glf-cuid="9e78b3e2-d7f5-4f84-838f-c5decd2f9caa" data-glf-ruid="026b18ca-746e-4aec-9a05-2fed59ae3f49" data-glf-reservation="true" > Réservation de table </span>
<script src="https://www.fbgcdn.com/embedder/js/ewm2.js" defer async ></script-->
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <!--button class="btn btn-info">Réserver une table</button-->
                                            <a href="">Réserver </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Menu Item -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Menu Grid Area -->
    <!-- Start Special Menu -->
    <section class="fd__special__menu__area bg-image--3 section-pt--lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="section__title service__align--left">
                        <p>Le processus de notre service </p>
                        <h2 class="title__line">Restaurant avec menu spécial</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="special__food__menu mt--80">
            <div class="food__menu__prl bg-image--4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="food__nav nav nav-tabs" role="tablist">
                                <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">All</a>
                                <a id="nav-breakfast-tab" data-toggle="tab" href="#nav-breakfast" role="tab">Breakfast</a>
                                <a id="nav-lunch-tab" data-toggle="tab" href="#nav-lunch" role="tab">Lunch</a>
                                <a id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab">Dinner</a>
                                <a id="nav-coffee-tab" data-toggle="tab" href="#nav-coffee" role="tab">Coffee</a>
                                <a id="nav-snacks-tab" data-toggle="tab" href="#nav-snacks" role="tab">Snacks</a>
                            </div>
                            <div class="fd__tab__content tab-content" id="nav-tabContent">
                                <!-- Start Single tab -->
                                <div class="single__tab__panel tab-pane fade show active" id="nav-all" role="tabpanel">
                                    <div class="tab__content__wrap">
                                        <!-- Start Single Tab Content -->
                                        <div class="single__tab__content">
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/1.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Maxican Food Fev</a></h4>
                                                        <span class="menu__prize">$15</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free </p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/2.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">My Sweetest Desert </a></h4>
                                                        <span class="menu__prize">$18</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/3.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Burger Kings House</a></h4>
                                                        <span class="menu__prize">$22</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Cheeze Burger</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/4.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Marmaid Chicken Fry</a></h4>
                                                        <span class="menu__prize">$20</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Fry</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                        </div>
                                        <!-- End Single Tab Content -->
                                        <!-- Start Single Tab Content -->
                                        <div class="single__tab__content">
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/1.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                        <span class="menu__prize">$22</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/2.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Haven Of Juice</a></h4>
                                                        <span class="menu__prize">$14</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Mixed Fruit Juice</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/3.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$24</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type :Mixed Soup noodles</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/4.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$15</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                        </div>
                                        <!-- End Single Tab Content -->
                                    </div>
                                </div>
                                <!-- End Single tab -->
                                <!-- Start Single tab -->
                                <div class="single__tab__panel tab-pane fade" id="nav-breakfast" role="tabpanel">
                                    <div class="tab__content__wrap">
                                        <!-- Start Single Tab Content -->
                                        <div class="single__tab__content">
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/1.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                        <span class="menu__prize">$22</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/2.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Haven OF Juice </a></h4>
                                                        <span class="menu__prize">$14</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Mixed Fruit Juice</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/3.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$24</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type :Mixed Soup noodles</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/4.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$15</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                        </div>
                                        <!-- End Single Tab Content -->
                                        <!-- Start Single Tab Content -->
                                        <div class="single__tab__content">
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/1.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                        <span class="menu__prize">$22</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/2.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                        <span class="menu__prize">$14</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Mixed Fruit Juice</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                        </div>
                                        <!-- End Single Tab Content -->
                                    </div>
                                </div>
                                <!-- End Single tab -->
                                <!-- Start Single tab -->
                                <div class="single__tab__panel tab-pane fade" id="nav-lunch" role="tabpanel">
                                    <div class="tab__content__wrap">
                                        <!-- Start Single Tab Content -->
                                        <div class="single__tab__content">
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/1.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                        <span class="menu__prize">$22</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/2.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Haven OF Juice </a></h4>
                                                        <span class="menu__prize">$14</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Mixed Fruit Juice</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/3.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$24</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type :Mixed Soup noodles</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/4.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$15</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                        </div>
                                        <!-- End Single Tab Content -->
                                    </div>
                                </div>
                                <!-- End Single tab -->
                                <!-- Start Single tab -->
                                <div class="single__tab__panel tab-pane fade" id="nav-dinner" role="tabpanel">
                                    <div class="tab__content__wrap">
                                        <!-- Start Single Tab Content -->
                                        <div class="single__tab__content">
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/1.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                        <span class="menu__prize">$22</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/2.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Haven OF Juice </a></h4>
                                                        <span class="menu__prize">$14</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Mixed Fruit Juice</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/3.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$24</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type :Mixed Soup noodles</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/4.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$15</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                        </div>
                                        <!-- End Single Tab Content -->
                                        <!-- Start Single Tab Content -->
                                        <div class="single__tab__content">
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/1.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                        <span class="menu__prize">$15</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/2.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                        <span class="menu__prize">$18</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/3.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                        <span class="menu__prize">$22</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Cheeze Burger</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/4.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                        <span class="menu__prize">$20</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Fry</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                        </div>
                                        <!-- End Single Tab Content -->
                                    </div>
                                </div>
                                <!-- End Single tab -->
                                <!-- Start Single tab -->
                                <div class="single__tab__panel tab-pane fade" id="nav-coffee" role="tabpanel">
                                    <div class="tab__content__wrap">
                                        <!-- Start Single Tab Content -->
                                        <div class="single__tab__content">
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/1.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                        <span class="menu__prize">$22</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/2.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Haven OF Juice </a></h4>
                                                        <span class="menu__prize">$14</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Mixed Fruit Juice</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/3.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$24</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type :Mixed Soup noodles</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/4.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$15</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                        </div>
                                        <!-- End Single Tab Content -->
                                    </div>
                                </div>
                                <!-- End Single tab -->
                                <!-- Start Single tab -->
                                <div class="single__tab__panel tab-pane fade" id="nav-snacks" role="tabpanel">
                                    <div class="tab__content__wrap">
                                        <!-- Start Single Tab Content -->
                                        <div class="single__tab__content">
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/1.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                        <span class="menu__prize">$22</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/2.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Haven OF Juice </a></h4>
                                                        <span class="menu__prize">$14</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Mixed Fruit Juice</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/3.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$24</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type :Mixed Soup noodles</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/4.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$15</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                        </div>
                                        <!-- End Single Tab Content -->
                                        <!-- Start Single Tab Content -->
                                        <div class="single__tab__content">
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/1.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                        <span class="menu__prize">$22</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/2.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                        <span class="menu__prize">$14</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Mixed Fruit Juice</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/3.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                        <span class="menu__prize">$24</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type :Mixed Soup noodles</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                            <!-- Start Single Food -->
                                            <div class="food__menu">
                                                <div class="food__menu__thumb">
                                                    <a href="menu-details.html">
                                                        <img src="images/product/sm-img/4.jpg" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="food__menu__details">
                                                    <div class="fd__menu__title__prize">
                                                        <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                        <span class="menu__prize">$15</span>
                                                    </div>
                                                    <div class="fd__menu__details">
                                                        <p>Food Type : Chicken Stack</p>
                                                        <div class="delivery__time__rating">
                                                            <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                            <ul class="fd__rating">
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li><i class="zmdi zmdi-star"></i></li>
                                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Food -->
                                        </div>
                                        <!-- End Single Tab Content -->
                                    </div>
                                </div>
                                <!-- End Single tab -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Special Menu -->
    <!-- Start Download App Area -->
    <section class="food__download__app__area section-padding--lg bg--white bg__shape--1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="section__title service__align--left">
                        <p>le processus de notre service </p>
                        <h2 class="title__line">Téléchargez notre application</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--80">
                <div class="col-lg-12 poss--relative">
                    <div class="app__download__container">
                        <div class="app__download__inner inline__image__css--1" style="background-image: url(images/app/bg.png);">
                            <h2>Gaaw Food maintenant dans votre main</h2>
                            <h6>Télécharger! Un moyen plus rapide de commander de la nourriture</h6>
                        </div>
                        <ul class="dwn__app__list">
                            <li class="wow lightSpeedIn" data-wow-delay="0.2s"><a href="#"><img src="images/app/2.png" alt="app images"></a></li>
                            <li class="wow lightSpeedIn" data-wow-delay="0.3s"><a href="#"><img src="images/app/3.png" alt="app images"></a></li>
                        </ul>
                    </div>
                    <div class="app__phone wow fadeInLeft" data-wow-delay="0.2s">
                        <img src="images/app/1.png" alt="app images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Download App Area -->
@endsection
