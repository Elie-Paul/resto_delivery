@extends('layoutAdmin.resto.main')

@section('content')
<!--div id="example"></div-->
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
    <div class="col-xs-6 col-sm-6">
        <div class="card mt-4">
            <div class="card-header">
                <strong>Les informations du restaurant {{$restaurant->nom}} </strong>
            </div>
            <form method="POST" action="{{ Route('resto.update', ['restaurant' => $restaurant->id]) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="card-body">
                    <div class="input-group mb-3 mt-2">
                        <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-pie-chart"></i></button>
                        </div>
                        <input type="hidden" class="" id="id" value="{{ $restaurant->id }}">
                        <input type="text" class="form-control" id="nom" placeholder="Nom du restaurant" value="{{ $restaurant->nom }}" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-phone"></i></button>
                        </div>
                        <input type="text" class="form-control" id="tel1" placeholder="Numéro de téléphone" value="{{ $restaurant->tel1 }}" aria-label="" aria-describedby="basic-addon1">
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
                            <input type="text" class="form-control" id="tel2" placeholder="Numéro de téléphone (facultatif) " value="{{ $restaurant->tel2 }}" aria-label="" aria-describedby="basic-addon1">
                        </div>
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
                        <input type="text" placeholder="Ville" id="ville" value="{{ $restaurant->ville }}" class="form-control">
                        <input type="text" placeholder="Code Postal" id="code_postal" value="{{ $restaurant->code_postal }}" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-pie-chart"></i></button>
                        </div>
                        <input type="text" class="form-control" id="num_rue" placeholder="Numéro de la rue" value="{{ $restaurant->num_rue }}" aria-label="" aria-describedby="basic-addon1">
                    </div>

                    <hr>
                    <small>Heures d'ouverture</small>

                    <div class="input-group mb-3 mt-2">
                        <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-dribbble"></i></button>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
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
                    <div>
                        <button class="btn btn-info float-right mr-2 mb-2" type="submit" id="next"><b>Suivant</b>  <i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#next").click(function(e){
                e.preventDefault();
                console.log("test");

                let id = $("#id").val();

                let nom = $("#nom").val();
                let tel1 = $("#tel1").val();
                let tel2 = $("#tel2").val();
                let ville = $("#ville").val();
                let code_postal = $("#code_postal").val();
                let num_rue = $("#num_rue").val();

                console.log(nom+"-"+tel1+"-"+id);

                $.ajax({
                    type: 'PATCH',
                    url: '{{ Route('resto.update', ['restaurant' => $restaurant->id]) }}',
                    data: {nom:nom, tel1:tel1, ville:ville, code_postal:code_postal, num_rue:num_rue, _token:  "{{ csrf_token() }}"},
                    success: function(data){
                        alert("success");
                        window.location.href = '{{Route('resto.cuisine', ['restaurant' => $restaurant->id])}}' ;
                        //window.location.reload();
                    }
                });

            });
      } );
  </script>
@endsection
