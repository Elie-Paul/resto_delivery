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
                <strong>Sélecteur de cuisine </strong>
                <a class="btn btn-info float-right mr-2 mb-2" href="{{Route('resto.reserv', ['restaurant' => $restaurant->id])}}" role="button" id="next"><b>Suivant</b>   <i class="fa fa-arrow-right"></i></a>
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
                            @foreach ($restaurant->cuisines as $cuisine)
                                <tr>
                                    <td class="font-italic">{{ $cuisine->libelle }}</td>
                                    <td>
                                        <form method="POST" action="{{ Route('cuisine.delete', ['restaurant' => $restaurant->id , 'cuisine' => $cuisine->id]) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn-supp btn-outline" id="del"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <form method="POST" action="{{ Route('cuisine.ajouter', ['restaurant' => $restaurant->id, 'id' => $cuisine->id ]) }}">
                            @csrf
                            <div class="form-row align-items-cente">
                                <div class="col-sm-9 mb-2">
                                    <select id="selectCuisine" class="form-control">
                                            <option id="0" selected disabled>Selecteur de cuisine</option>
                                        @foreach ($cuisines as $cuisine)
                                            <option value="{{ $cuisine->id }}">{{ $cuisine->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-1 mt-1">
                                    <!--button class="btn btn-secondary" id="addCombo">Ajouter</button-->
                                    <button href="#" class="btn btn-secondary btn-sm" role="button">Ajouter</button>
                                </div>
                        </form>
                                <form method="POST" action="{{Route('cuisine.store', ['restaurant' => $restaurant->id])}}">
                                    @csrf
                                    <div class="form-row align-items-cente">
                                        <div class="col-sm-10 md-2 mr-2 ml-1">
                                            <input type="text" class="form-control" id="libelle" placeholder="Ajouter votre spécialité">
                                        </div>
                                        <div class="col-sm-1 mb-1 ml-4">
                                            <button class="btn btn-secondary" id="addCuisine">Ajouter une cuisine</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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

        $("#addCuisine").click(function(e){
            e.preventDefault();

            var libelle = $("#libelle").val();
            console.log(libelle);


            $.ajax({
                type: 'POST',
                url: '{{Route('cuisine.store', ['restaurant' => $restaurant->id])}}',
                data: {libelle:libelle},
                success: function(data){
                    //alert("success");
                    window.location.href = '{{Route('resto.cuisine', ['restaurant' => $restaurant->id])}}' ;
                }
            });
        });

        $(".btn-sm").click(function(e){
            //var cuisine = $("#selectCuisine option:selected").text();
            let id = $("#selectCuisine").val();
            if (id === null) {
                alert("Vous devez selectionner une cuisine");
            } else {
                $.ajax({
                    type: 'POST',
                    url: '{{ Route('cuisine.ajouter', ['restaurant' => $restaurant->id, 'id' => $cuisine->id]) }}',
                    data: {id:id},// Le premier id représente le 'id' dans la route comme paramètre
                    success: function(data){
                        alert("success");
                        window.location.reload() ;
                    }
                });
            }
            console.log(cuisine);

        });

        /*$(".btn-supp").click(function(e){
            console.log("test");

            let restaurant_id = "{{ $restaurant->id }}";
            let cuisine_id = "{{ $cuisine->id }}";

            console.log(restaurant_id+'---'+cuisine_id);

            $.ajax({
                type: 'POST',
                url: '{{ Route('cuisine.delete', ['restaurant' => $restaurant->id , 'cuisine' => $cuisine->id]) }}',
                data: {libelle:libelle},
                success: function(data){
                    alert("success");
                    window.location.reload() ;
                }
            });*/



        });

</script>
@endsection
