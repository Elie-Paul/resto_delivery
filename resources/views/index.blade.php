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
                            <p> </p>
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
                                            <a data-toggle="modal" class="reserv" id="{{ $restaurant->id}}" data-target="#modalreservation" href="">Réserver </a>
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
    <div class="animated">
        <div class="modal fade" id="modalreservation" tabindex="-1" role="dialog" aria-labelledby="modalreservationLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalarticleLabel">Réservation de table</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <div class="card">
                                    <div class="card-body card-block" id="art">
                                        <form action=" # " method="POST" class="formArt" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Nombre de personne(s)</label>
                                                <select id="personnes" class="form-control" id="exampleFormControlSelect1">
                                                    <option>1 personne</option>
                                                    <option>2 personnes</option>
                                                    <option>3 personnes</option>
                                                    <option>4 personnes</option>
                                                    <option>5 personnes</option>
                                                    <option>6 personnes</option>
                                                    <option>7 personnes</option>
                                                    <option>8 personnes</option>
                                                </select>
                                            </div>
                                            <!--div class="form-group">
                                                <label for="exampleFormControlSelect1">Date</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Aujourd'hui</option>
                                                    <option>Demain</option>
                                                </select>
                                            </div-->
                                            <div class="form-group date " id='datetimepicker2'>
                                                    <label> Date  </label>
                                                <input type="date" id="date" name="date" class="form-control">
                                            </div>
                                            <!--div class="form-group">
                                                <label for="exampleFormControlSelect1">Heure</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>10:30</option>
                                                    <option>11:00</option>
                                                    <option>11:30</option>
                                                    <option>12:00</option>
                                                    <option>12:30</option>
                                                    <option>13:00</option>
                                                    <option>13:30</option>
                                                    <option>14:00</option>
                                                    <option>14:30</option>
                                                    <option>15:00</option>
                                                    <option>15:30</option>
                                                    <option>16:00</option>
                                                    <option>16:30</option>
                                                    <option>17:00</option>
                                                    <option>17:30</option>
                                                    <option>18:00</option>
                                                    <option>18:30</option>
                                                    <option>19:00</option>
                                                </select>
                                            </div-->
                                            <div class="form-group date " id='datetimepicker2'>
                                                    <label> Heure  </label>
                                                <input type="time" id="time" name="time" class="form-control">
                                            </div>
                                            <button  class="btn btn-success" id="addArt"> Ajouter <i class="fa fa-arrow-right"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
jQuery(document).ready(function($){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#addArt").click(function(e){
        e.preventDefault();
        let date = document.getElementById('date').value;
        let heure = document.getElementById('time').value;
        let nbrPers = $("#personnes option:selected").text();
        console.log(date+'-----'+nbrPers+'-----'+heure);

    });

    $(".reserv").click(function(){
            var id = $(this).attr('id');
            //alert(id);

            /*$.ajax({
                type: 'POST',
                url: '{{route('resto.heure')}}',
                data: {id: id, _token:  "{{ csrf_token() }}"},
                success:function(data){
                    console.log(data);
                }
            });*/

           // $('#ad').append('<div class="form-group col">  <input type="hidden" name="category_id" value='+id+' /> </div>');
    });

});


</script>
@endsection
