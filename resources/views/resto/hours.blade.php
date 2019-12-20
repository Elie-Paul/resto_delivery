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
                <strong>Quand êtes-vous ouvert? </strong>
            </div>
            <div class="card-body">
                <div class="d-flex-align-items-center md-4 mb-2">
                    Heures d'ouverture :
                </div>
                <div class="border rounded bg-white mt-3">
                    <div class="d-flex mb-6" id="heure">
                        @foreach ($restaurant->businesshours as $business)
                            <div class="font-weight-blod mt-3 ml-2"><span id="days">{{$business->jours}}</span></div>
                            <div class="ml-auto mr-6 mt-3">{{$business->open_time}} à {{$business->close_time}}</div>
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
                        @endforeach
                    </div>

                    <div class="collapse" id="collapse">
                        <!--div class="d-flex mb-6 align-items-start">
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
                            </div-->
                            <form method="POST" action="{{ Route('resto.update_bis', ['restaurant' => $restaurant->id]) }}" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <div class="form-row">
                                <div class="form-group col-md-3 mt-2">
                                        <label> Du </label>
                                    <select id="jours" class="form-control">
                                        <option selected disabled>Jours</option>
                                        <option value="1">Lundi</option>
                                        <option value="2">Mardi</option>
                                        <option value="3">Mercredi</option>
                                        <option value="4">Jeudi</option>
                                        <option value="5">Vendredi</option>
                                        <option value="6">Samedi</option>
                                        <option value="7">Dimanche</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 mt-2">
                                        <label> AU </label>
                                    <select id="inputState" class="form-control">
                                    <option selected disabled>Jours</option>
                                        <option value="1">Lundi</option>
                                        <option value="2">Mardi</option>
                                        <option value="3">Mercredi</option>
                                        <option value="4">Jeudi</option>
                                        <option value="5">Vendredi</option>
                                        <option value="6">Samedi</option>
                                        <option value="7">Dimanche</option>
                                    </select>
                                </div>
                                <div class="form-group date col-md-3 mt-2" id='datetimepicker2'>
                                        <label> A partir de  </label>
                                    <input placeholder="Selected time" type="time" id="time1" name="open_time" class="form-control">
                                </div>
                                <div class="form-group date col-md-3 mt-2" id='datetimepicker2'>
                                        <label> Jusqu'à  </label>
                                    <input placeholder="Selected time" type="time" id="time2" name="close_time" class="form-control">
                                </div>
                                </div>
                            </form>
                    </div>

                    <div class="d-flex align-items-center mt-5 mb-2 ml-2">
                        <button id="ajout" class="btn btn-secondary">Ajouter</button>
                        <button id="annul" onclick="save()" class="btn btn-danger ml-3" style="display:none;">Annuler</button>
                    </div>
                </div>
                <!--form method="POST" action="{{ Route('resto.update_bis', ['restaurant' => $restaurant->id]) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                    <div class="form-row">
                      <div class="form-group col-md-3 mt-2">
                            <label> Du </label>
                        <select id="inputState" class="form-control">
                            <option selected disabled>Jours</option>
                            <option value="1">Lundi</option>
                            <option value="2">Mardi</option>
                            <option value="3">Mercredi</option>
                            <option value="3">Jeudi</option>
                            <option value="3">Vendredi</option>
                            <option value="3">Samedi</option>
                            <option value="3">Dimanche</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3 mt-2">
                            <label> AU </label>
                        <select id="inputState" class="form-control">
                          <option selected disabled>Jours</option>
                            <option value="1">Lundi</option>
                            <option value="2">Mardi</option>
                            <option value="3">Mercredi</option>
                            <option value="3">Jeudi</option>
                            <option value="3">Vendredi</option>
                            <option value="3">Samedi</option>
                            <option value="3">Dimanche</option>
                        </select>
                      </div>
                      <div class="form-group date col-md-3 mt-2" id='datetimepicker2'>
                            <label> A partir de  </label>
                        <input placeholder="Selected time" type="time" id="time" name="heure_ouverture" class="form-control">
                      </div>
                      <div class="form-group date col-md-3 mt-2" id='datetimepicker2'>
                            <label> Jusqu'à  </label>
                        <input placeholder="Selected time" type="time" id="time" class="form-control">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form-->
            </div>
            <div class="rows">
                <a class="btn btn-info float-right mr-4 mb-2" href="{{Route('category.index', ['restaurant' => $restaurant->id])}}" id="next" role="button"><b>Suivant</b>   <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script-->

<script>
    jQuery(document).ready(function($){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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

            let open_time = document.getElementById("time1").value;
            let close_time = document.getElementById("time2").value;

            let jours = $("#jours option:selected").text();
            //let jours = $("#jours").val();

            console.log(jours+'----'+open_time);

            if (jours === null) {
                alert("Vous devez selectionner un jour");
            } else {
                $.ajax({
                    type: 'POST',
                    url: '{{ Route('business.store', ['restaurant' => $restaurant->id]) }}',
                    data: {jours:jours, open_time:open_time, close_time:close_time, _token:  "{{ csrf_token() }}"},
                    success: function(data){
                        //alert("success");
                        window.location.reload() ;
                    }
                });
            }


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
