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

    <div class="content">

            <div class="row h-100 justify-content-center align-items-center">

                <div class="col-xs-6 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Quelle est addresse de votre restaurant ?</strong>
                        </div>
                        <div class="input-group mb-3 mt-2">
                            <div class="input-group-prepend">
                                <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-pie-chart"></i></button>
                            </div>
                            <input type="text" class="form-control" placeholder="Nom du restaurant" aria-label="" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-phone"></i></button>
                            </div>
                            <input type="text" class="form-control" placeholder="Numéro de téléphone" aria-label="" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <button class="btn btn-secondary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" type="button"><i class="menu-icon fa fa-plus-square"></i></button>
                            </div>
                        </div>

                        <!-- Collapse-->
                        <div class="collapse" id="collapseExample">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-phone"></i></button>
                                </div>
                                <input type="text" class="form-control" placeholder="Numéro de téléphone (facultatif) " aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-dribbble"></i></button>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Pays</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <!--div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-dribbble"></i></button>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Pays</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div-->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-dribbble"></i></button>
                            </div>
                            <input type="text" placeholder="Ville" class="form-control">
                            <input type="text" placeholder="Code Postal" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-pie-chart"></i></button>
                            </div>
                            <input type="text" class="form-control" placeholder="Numéro de la rue" aria-label="" aria-describedby="basic-addon1">
                        </div>
                        <div>
                            <a class="btn btn-info float-right mr-2 mb-2" href="#" role="button">Suivant  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>


@endsection
