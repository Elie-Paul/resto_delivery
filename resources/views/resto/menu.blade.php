@extends('layoutAdmin.resto.main')

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tableau de bord</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{Route('admin')}}">Tableau de bord</a></li>
                            <li class="active">Name restaurant</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col mr-3 ml-3">
        <div class="card mt-4">
            <div class="card-body">
                <div class="rows">
                    <button class="btn btn-secondary" id="btnCat" data-toggle="modal" data-target="#scrollmodal">Ajouter une catégorie</button>
                    <button class="btn btn-primary" id="btnCat">Ajouter une extension</button>
                    <div class="float-right">
                        <a class="btn btn-info float-right mr-2 mb-2" href="#" role="button"><b>Suivant</b>  <i class="fa fa-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card-deck">
        <div class="card">
            <img src="{{asset('images/beef/1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><b>Card title</b></h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <button class="btn btn-secondary">Ajouter un article</button>
            </div>
            <div class="card-footer">
                <div class="rows">
                    <div class="float-right">
                        <span><i class="fa fa-trash-o"></i></span>
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-eye"></i>
                    </div>
                </div>
            <!--small class="text-muted">Last updated 3 mins ago</small-->
            </div>
        </div>
        <div class="card">
            <img src="{{asset('images/beef/1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><b>Card title</b></h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <button class="btn btn-secondary">Ajouter un article</button>
            </div>
            <div class="card-footer">
            <div class="rows">
                <div class="float-right">
                    <span><i class="fa fa-trash-o"></i></span>
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-eye"></i>
                </div>
            </div>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('images/beef/1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><b>Card title</b></h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <button class="btn btn-secondary" data-toggle="modal" data-target="#modalarticle">Ajouter un article</button>
            </div>
            <div class="card-footer">
            <div class="rows">
                    <div class="float-right">
                        <span><i class="fa fa-trash-o"></i></span>
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-eye"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col mr-3 ml-3">
        <div class="card mt-4">
            <div class="card-body">
                <div class="rows">
                    <button class="btn btn-secondary" id="btnCat" data-toggle="modal" data-target="#scrollmodal">Ajouter une catégorie</button>
                    <button class="btn btn-primary" id="btnCat">Ajouter une extension</button>
                    <div class="float-right">
                        <a class="btn btn-info float-right mr-2 mb-2" href="#" role="button"><b>Suivant</b>  <i class="fa fa-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal add Categorie -->
<div class="animated">
        <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="scrollmodalLabel">Add a categori</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <div class="card">
                                    <div class="card-body card-block">
                                        <form action="#" method="post" class="">
                                            <div class="input-group mb-3 mt-2">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-pie-chart"></i></button>
                                                </div>
                                                <input type="text" class="form-control" id="nom" placeholder="Nom de la catégorie*" aria-label="" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3 mt-2">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-envelope"></i></button>
                                                </div>
                                                <input type="text" class="form-control" id="desc" placeholder="Description de la catégorie*" aria-label="" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success"><span class="fa fa-send"> Save </span></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Fin du Modal add Categorie -->

    <!-- Modal add article -->
<div class="animated">
    <div class="modal fade" id="modalarticle" tabindex="-1" role="dialog" aria-labelledby="modalarticleLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalarticleLabel">Add a categori</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <div class="card">
                                <div class="card-body card-block">
                                    <form action="#" method="post" class="">
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <input type="text" class="form-control" id="nomArt" placeholder="Nom de l'article">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="number" class="form-control" id="descArt" placeholder="Prix">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <input type="text" class="form-control" id="descArt" placeholder="Description de l'article">
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-outline-secondary">Grandeur multiple</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success"><span class="fa fa-send"> Save </span></button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    jQuery(document).ready(function($){

     $( "#option2" ).click(function() {
        $("#collapseOne").hide();
        });
    $( "#option1" ).click(function() {
        $("#collapseOne").show();
        });
    });
</script>
@endsection
