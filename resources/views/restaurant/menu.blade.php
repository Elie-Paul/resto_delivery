@extends('layout.main')

@section('content')
<div class="ht__bradcaump__area bg-image--18">
    <div class="ht__bradcaump__wrap d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">{{$restaurant->nom}}</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="/">Acceuil</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                            <span class="breadcrumb-item active">Liste du menu</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="food__menu__grid__area section-padding--lg">
    <div class="container">
        <!--div class="row">
            <div class="col-lg-12">
                <div class="food__nav nav nav-tabs" role="tablist">
                    <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">All</a>
                    <a id="nav-breakfast-tab" data-toggle="tab" href="#nav-breakfast" role="tab">Breakfast</a>
                    <a id="nav-lunch-tab" data-toggle="tab" href="#nav-lunch" role="tab">Lunch</a>
                    <a id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab">Dinner</a>
                    <a id="nav-coffee-tab" data-toggle="tab" href="#nav-coffee" role="tab">Coffee</a>
                    <a id="nav-snacks-tab" data-toggle="tab" href="#nav-snacks" role="tab">Snacks</a>
                </div>
            </div>
        </div-->
        <div class="row mt--30">
            <div class="col-lg-12">
                <div class="fd__tab__content tab-content" id="nav-tabContent">

                    <div class="food__list__tab__content tab-pane fade show active" id="nav-all" role="tabpanel">

                        @foreach ($categories as $category)
                            <div class="single__food__list d-flex wow fadeInUp">
                                <div class="food__list__thumb">
                                    <a href="menu-details.html" style="width:450px;">
                                        <img src="{{asset('storage') . '/' . $category->image}}" alt="list food images">
                                    </a>
                                </div>
                                <div class="food__list__inner d-flex align-items-center justify-content-between">
                                    <div class="food__list__details" style="height: ">
                                        <h2><a href="menu-details.html">{{$category->nom}}</a></h2>
                                        <p>Lorem ipsum dolor sit aLorem ipsum dolor sit amet, consectetu adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolmagna aliqua. enim ad minim veniam, quis nomagni dolores eos qnumquam.</p>
                                        <div class="list__btn">
                                            <!--a class="food__btn grey--btn theme--hover" href="{{route('restaurant.article',['category' => $category->id, 'restaurant' => $restaurant->id])}}">Voir les plats</a-->
                                            <button class="btn btn-info" id="{{$category->id}}">Voir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="animated">
    <div class="modal fade" id="modalarticle" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalarticleLabel">Ajouter un article</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <div class="card">
                            <div class="card-body card-block" id="art">
                                    <table class="table table-hover" id="tableArticle">
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    jQuery(document).ready(function($){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".btn-info").click(function(){
            var id = $(this).attr('id');

            $.ajax({
                type: 'POST',
                url: '{{route('cat.article')}}',
                data: {id: id},
                success: function(data){
                    console.log(data);
                    $('#tableArticle tr').remove();  // vider le table avant
                    var tabHtml = "";
                    //var btnadd = '<button class="btn btn-danger addCart" id="ad" ><i class="fa fa-plus"></i></button>';

                    data.forEach(item => {
                        console.log(item.nom);
                        //const articles = document.getElementById('tableArticle');
                        var btnadd = '<button class="btn btn-danger addCart" id='+item.id+' ><i class="fa fa-plus"></i></button>';

                        // Remplir le tableau
                        $('#tableArticle').append("<tr><td class='' id='article_id'>"+item.id+"</td><td>"+item.nom+"</td><td>"+item.prix+"</td><td>"+btnadd+"</td></tr>");
                        jQuery('#modalarticle').modal('show');

                        // traitement du modal article
                        $(".addCart").click(function(){
                            var article_id = $(this).attr('id');
                            //alert(article_id);
                            $.ajax({
                                type: 'POST',
                                url: '{{route('cart.add',['restaurant' => $restaurant->id])}}',
                                data: {id: article_id},
                                success: function(data){
                                    console.log(data);

                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Article ajouté au panier',
                                        showConfirmButton: false,
                                        timer: 2000
                                    });
                                    window.location.reload();
                                }
                            });
                        });
                    });
                }
            });


            //$('#ad').append('<div class="form-group col">  <input type="text" name="category_id" value='+id+' /> </div>');
        });
    });
</script>

@endsection
