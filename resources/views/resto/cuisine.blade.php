@extends('layoutAdmin.resto.main')

@section('content')
<style>
    .btn-supp{
    background: white;
    box-shadow: 0 0 1px #ccc;
    -webkit-transition: all 0.5s ease-in-out;
    border: 0px;
    color: #85929E;
}
.btn-supp:hover{
    -webkit-transform: scale(1.4);
    color: red;
}
</style>
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

<div class="row h-100 justify-content-center align-items-center">
    <div class="col-xs-8 col-sm-8">
        <div class="card mt-4">
            <div class="card-header">
                <strong>Sélecteur de cuisine </strong>
                <a class="btn btn-info float-right mr-2 mb-2" href="{{Route('resto.reserv')}}" role="button" id="next"><b>Suivant</b>   <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="card-body">
                <div class="d-flex-align-items-center md-4">
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="font-italic">Chinoise</td>
                                <td><button type="button" class="btn-supp btn-outline" id="del"><i class="fa fa-trash-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="font-italic">Cuisine Africaine</td>
                                <td><button type="button" class="btn-supp btn-outline" id="del"><i class="fa fa-trash-o"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <form>
                            <div class="form-row align-items-cente">
                                <div class="col-sm-9 mb-2">
                                    <select id="selectCuisine" class="form-control">
                                        <option selected>Spécialité du restaurant</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-sm-9 my-1">
                                    <input type="text" class="form-control" id="cuisine" placeholder="Ajouter votre spécialité" required>
                                </div>
                                <div class="col-sm-1 my-1">
                                    <button type="submit" class="btn btn-secondary" id="addCuisine">Ajouter une cuisine</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    jQuery(document).ready(function($){

    });
</script>
@endsection
