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
                            <li class="active">{{$restaurant->nom}}</li>
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
                <strong>Accepter la réservation </strong>
            </div>
            <div class="card-body">
                <div class="d-flex-align-items-center md-4">
                    Offrez-vous la réservation de table?
                    <div class="btn-group btn-group-toggle float-right pb-3" data-toggle="buttons">
                        <!--label class="btn btn-success active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Oui
                        </label-->
                        <button class="btn btn-success" id="option1">Oui</button>
                        <!--label class="btn btn-danger">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Non
                        </label-->
                        <button class="btn btn-secondary" id="option2">Non</button>
                    </div>
                </div>
                <div id="accordion">
                    <div class="card mt-5">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Paramètres de réservation de table
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                    <strong> Je permets aux clients de faire une réservation de table, mais ... </strong>
                                <div class="form-group row mt-3">
                                    <label for="min" class="col-form-label">Minimum:</label>
                                    <div class="input-group mb-3 col-sm-5 ml-auto">
                                        <input type="number" class="form-control col-sm-3" placeholder="2" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">personnes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="min" class="col-form-label">Seulement pour jusqu'à:</label>
                                    <div class="input-group mb-3 col-sm-5 ml-auto">
                                        <input type="number" class="form-control col-sm-3" placeholder="8" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">personnes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="min" class="col-form-label">La table est conservée pour:</label>
                                    <div class="input-group mb-3 col-sm-5 ml-auto">
                                        <input type="number" class="form-control col-sm-3" placeholder="15" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">min</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="min" class="col-form-label">La réservation doit être au moins pour:</label>
                                    <div class="input-group mb-3 col-sm-5 ml-auto">
                                        <input type="number" class="form-control col-sm-3" placeholder="15" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">min</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="min" class="col-form-label">Et peut pas venir plus que:</label>
                                    <div class="input-group mb-3 col-sm-5 ml-auto">
                                        <input type="number" class="form-control col-sm-3" placeholder="8" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">jours</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rows">
                <a class="btn btn-info float-right mr-2 mb-2" href="{{Route('resto.hours', ['restaurant' => $restaurant->id])}}" id="next" role="button"><b>Suivant</b>   <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    jQuery(document).ready(function($){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

     $( "#option2" ).click(function() {
        $("#collapseOne").hide();
        alert("ttt");
        });
    $( "#option1" ).click(function() {
        $("#collapseOne").show();

        $.ajax({
            type: 'POST',
            url: '{{ route('resto.updateReserv',['restaurant' => $restaurant->id]) }}',
            success: function(data){
                alert(data);
                console.log(data);

            }
        });
        });
    });
</script>
@endsection
