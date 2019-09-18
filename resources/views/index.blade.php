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
                                <h2>“IRIS”</h2>
                                <h1>Livraison de nourriture et service</h1>
                                <div class="slider__input">
                                    <input type="text" placeholder="Type Place, City.Division">
                                    <input class="res__search" type="text" placeholder="Restaurant">
                                    <div class="src__btn">
                                        <a href="#">Search</a>
                                    </div>
                                </div>
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
                                <h2><a href="service.html">Choisissez un restaurant</a></h2>
                            </div>
                            <div class="service__details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
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
                                <h2><a href="service.html">Sélectionnez, vous aimez manger</a></h2>
                            </div>
                            <div class="service__details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
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
                                <h2><a href="service.html">Ramassage ou livraison</a></h2>
                            </div>
                            <div class="service__details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->
    <!-- Start Food Category -->
    <section class="food__category__area bg--white section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="section__title service__align--left">
                        <p>Le processus de notre service</p>
                        <h2 class="title__line">Recherche par catégorie d'aliments</h2>
                    </div>
                </div>
            </div>
            <div class="food__category__wrapper mt--40">
                <div class="row">
                    <!-- Start Single Category -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="food__item foo">
                            <div class="food__thumb">
                                <a href="menu-details.html">
                                    <img src="images/product/md-product/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="food__title">
                                <h2><a href="menu-details.html">Articles de petit déjeuner</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                    <!-- Start Single Category -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="food__item foo">
                            <div class="food__thumb">
                                <a href="menu-details.html">
                                    <img src="images/product/md-product/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="food__title">
                                <h2><a href="menu-details.html">Articles de déjeuner</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                    <!-- Start Single Category -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="food__item foo">
                            <div class="food__thumb">
                                <a href="menu-details.html">
                                    <img src="images/product/md-product/3.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="food__title">
                                <h2><a href="menu-details.html">Article de dîner</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Food Category -->
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
                            <h2>Aahar now in your hand</h2>
                            <h6>Télécharger! pour obtenir cette application Un moyen plus rapide de commander de la nourriture</h6>
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
    <!-- Start Testimonail Area -->
    <section class="fd__testimonial__area section-padding--lg bg-image--5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                    <div class="testimonial__activation--1 text-center bg--white owl-carousel owl-theme clearfix">
                        <!-- Start Single Testimonial -->
                        <div class="testimonial">
                            <div class="testimonial__thumb">
                                <img src="images/testimonial/clint/1.png" alt="testimonial images">
                            </div>
                            <div class="testimonial__details">
                                <h4>Mily Cyrus</h4>
                                <h6>Food Expert</h6>
                                <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="testimonial">
                            <div class="testimonial__thumb">
                                <img src="images/testimonial/clint/1.png" alt="testimonial images">
                            </div>
                            <div class="testimonial__details">
                                <h4>Mily Cyrus</h4>
                                <h6>Food Expert</h6>
                                <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonail Area -->
    <!-- Start Blog Area -->
    <section class="fb__blog__ara section-padding--lg bg--white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="section__title service__align--left">
                        <p>the process of our service </p>
                        <h2 class="title__line">Latest from Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--40">
                <!-- Start Single Blog -->
                <div class="col-md-6 col-lg-4 col-sm-12 foo">
                    <div class="blog">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="images/blog/md-blog/1.jpg" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__details">
                            <h2><a href="blog-details.html">Maxican Food Fev</a></h2>
                            <span>1st Feb, 2o17</span>
                            <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                            <div class="blog__btn">
                                <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-md-6 col-lg-4 col-sm-12 foo">
                    <div class="blog">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="images/blog/md-blog/2.jpg" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__details">
                            <h2><a href="blog-details.html">Italian Pizza Fev</a></h2>
                            <span>1st jan, 2o17</span>
                            <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                            <div class="blog__btn">
                                <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-md-6 col-lg-4 col-sm-12 foo">
                    <div class="blog">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="images/blog/md-blog/3.jpg" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__details">
                            <h2><a href="blog-details.html">Asian Food Fev</a></h2>
                            <span>1st Dec, 2o17</span>
                            <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                            <div class="blog__btn">
                                <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Single Blog -->
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
    <!-- Start Subscribe Area -->
    <section class="fd__subscribe__area bg-image--6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="subscribe__inner">
                        <h2>Subscribe to our newsletter</h2>
                        <div id="mc_embed_signup">
                            <div id="enter__email__address">
                                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                        <div class="news__input">
                                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your E-mail Address" required>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <div class="clearfix subscribe__btn"><input type="submit" value="Send Now" name="subscribe" id="mc-embedded-subscribe" class="sign__up food__btn">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
