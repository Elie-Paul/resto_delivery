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

<div class="row h-100 justify-content-center align-items-center">
    <div class="col-xs-8 col-sm-8">
        <div class="card mt-4">
            <div class="card-header">
                <strong>Quand êtes-vous ouvert? </strong>
            </div>
            <div class="card-body">
                <div class="d-flex-align-items-center md-4">
                    Heures d'ouverture
                </div>
                <div class="border rounded bg-white mt-3">
                    <div class="d-flex mb-6" id="heure">
                        <div class="font-weight-blod mt-3 ml-2"><span id="days">Lundi-Dimanche:</span></div>
                        <div class="ml-auto mr-6 mt-3">11:00-23:00</div>
                        <div class="mr-2 ml-2 mt-2 supprimer" style="display:none;">
                            <button class="btn btn-outline-secondary supp" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                        <div class="ml-2 mt-2">
                            <button type="button" class="btn btn-outline-secondary mr-2" data-toggle="tooltip" data-placement="top" title="Modifier">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </div>
                    </div>
                    <!-- days week -->
                    <div class="collapse" id="collapse">
                        <div class="d-flex mb-6 align-items-start">
                                <div class="row mb-0">
                                    <div class="day-of-week col-4 d-flex align-items-center cursor-hand">
                                        <label class="d-flex m-0 align-items-baseline py-2">
                                            <input id="lundi" type="checkbox" class="ml-2 mt-2">
                                            <div class="ml-3 w100"></div>
                                        </label>
                                        Lundi
                                    </div>
                                    <div class="day-of-week col-4 d-flex align-items-center cursor-hand">
                                        <label class="d-flex m-0 align-items-baseline py-2">
                                            <input id="mardi" type="checkbox" class="ml-2 mt-2">
                                            <div class="ml-3 w100"></div>
                                        </label>
                                        Mardi
                                    </div>
                                    <div class="day-of-week col-4 d-flex align-items-center cursor-hand">
                                        <label class="d-flex m-0 align-items-baseline py-2">
                                            <input type="checkbox" class="ml-2 mt-2">
                                            <div class="ml-3 w100"></div>
                                        </label>
                                        Mercredi
                                    </div>
                                    <div class="day-of-week col-4 d-flex align-items-center cursor-hand">
                                        <label class="d-flex m-0 align-items-baseline py-2">
                                            <input type="checkbox" class="ml-2 mt-2">
                                            <div class="ml-3 w100"></div>
                                        </label>
                                        Jeudi
                                    </div>
                                    <div class="day-of-week col-4 d-flex align-items-center cursor-hand">
                                        <label class="d-flex m-0 align-items-baseline py-2">
                                            <input type="checkbox" class="ml-2 mt-2">
                                            <div class="ml-3 w100"></div>
                                        </label>
                                        Vendredi
                                    </div>
                                    <div class="day-of-week col-4 d-flex align-items-center cursor-hand">
                                        <label class="d-flex m-0 align-items-baseline py-2">
                                            <input type="checkbox" class="ml-2 mt-2">
                                            <div class="ml-3 w100"></div>
                                        </label>
                                        Samedi
                                    </div>
                                    <div class="day-of-week col-3 d-flex align-items-center cursor-hand">
                                        <label class="d-flex m-0 align-items-baseline py-2">
                                            <input type="checkbox" class="ml-2 mt-2">
                                            <div class="ml-3 w100"></div>
                                        </label>
                                        Dimanche
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div autoclose="outside" data-placement="bottom" aria-describedby="ngb-popover-6" class="ml-3 mt-2 mr-1 open-time px-3 py-2 border rounded bg-white d-flex align-items-center text-nowrap">
                                        <input placeholder="Selected time" type="time" id="time1" class="form-control">
                                    </div>
                                    <div>-</div>
                                    <div autoclose="outside" data-placement="bottom" aria-describedby="ngb-popover-6" class="ml-1 mr-2 mt-2 open-time px-3 py-2 border rounded bg-white d-flex align-items-center text-nowrap">
                                        <input placeholder="Selected time" value="now" type="time" id="time2" class="form-control">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- End days week -->
                    <div class="d-flex align-items-center mt-5 mb-2 ml-2">
                        <button id="ajout" class="btn btn-secondary">Ajouter</button>
                        <button id="annul" onclick="save()" class="btn btn-danger ml-3" style="display:none;">Annuler</button>
                    </div>
                </div>
            </div>
            <div class="rows">
                <a class="btn btn-info float-right mr-4 mb-2" href="{{Route('resto.menu')}}" id="next" role="button"><b>Suivant</b>   <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script-->

<script>
    jQuery(document).ready(function($){

    $( "#ajout" ).click(function() {
            $("#collapse").show();
            $(this).text("Sauvegarder");
            if ($(this).hasClass("btn-secondary")) {
                $(this).addClass("btn-success");
            } else {
                $(this).addClass("btn-secondary");
            }

            $("#annul").show();

            let lundi = $("#lundi").is(":checked"); // Recuperer un checkbox
            //let mardi = $("#mardi").is(":checked"); // Recuperer un checkbox
            /***** traitement des heures *********/

            let time1 = document.getElementById("time1").value;
            let time2 = document.getElementById("time2").value;
            console.log(time1);

            if (lundi) {
                //$("#heure").clone().appendTo("div.d-flex.mb-6.ml-2");
                $("#heure").after(`<div class="d-flex mb-6" id="heure">
                        <div class="font-weight-blod mt-3 ml-2"><span id="days">Lundi:</span></div>
                        <div class="ml-auto mr-6 mt-3">${time1}-${time2}</div>
                        <div class="mr-2 ml-2 mt-2">
                            <button class="btn btn-outline-secondary supp" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                        <div class="ml-2 mt-2">
                            <button type="button" class="btn btn-outline-secondary mr-2" data-toggle="tooltip" data-placement="top" title="Modifier">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </div>
                    </div>`);
                $('.supprimer').show();
                $("#collapse").hide();
                $("#annul").hide();
                $(this).text("Ajouter");
                $( "#ajout" ).removeClass("btn-success");
                $( "#ajout" ).addClass("btn-secondary");
                $("#lundi").prop("checked",false);
            }
            /*if (lundi && mardi) {
                alert("test");
            }*/

            /*$("#lundi").click(function(){
                alert("test");
            })*/

        });

    $("#annul").click(function(){
        $("#collapse").hide();
        $( "#ajout" ).text("Ajouter");
        $( "#ajout" ).removeClass("btn-success");
        $( "#ajout" ).addClass("btn-secondary");
        $(this).hide();
        $("#lundi").prop("checked",false);

    });

    $('.supp').click(function(){
        alert("remove success");
        $('.supprimer').remove();
        $('#heure').remove();
    })
/***** traitement des heures **

let time1 = $("#time1").val();
console.log(time1);*/


    });
</script>
@endsection
