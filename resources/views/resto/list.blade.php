@extends('layoutAdmin.main')

@section('content')
<link rel="stylesheet" href="{{asset('assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

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

    <div class="container">
            <div class="animated fadeIn">
                <div class="row h-100 justify-content-center align-items-center">

                    <div class="col-md-12">
                        <div class="card mt-4">
                            <div class="card-header">
                                <strong class="card-title">Restaurants</strong>
                                <div class="float-right"><button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#scrollmodal">Add restaurant</button></div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nom </th>
                                            <th>Spécialité</th>
                                            <th>Tel</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($restaurants as $restaurant)
                                            <tr>
                                                <td>{{ $restaurant->nom }}</td>
                                                <td>Cuisine_restaurant</td>
                                                <td>{{$restaurant->tel1}} - {{$restaurant->tel2}}</td>
                                                <td>
                                                    <a class="btn btn-success" href="{{Route('resto.access', ['restaurant' => $restaurant->id])}}" role="button">Accès</a>
                                                    <!--a class="btn btn-success" href="{{Route('resto.access', ['restaurant' => $restaurant->id])}}" role="button">Accès</a-->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <!-- Modal add Restaurant -->
<div class="animated">
    <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="scrollmodalLabel">Add a restaurant</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <div class="card">
                                <div class="card-body card-block">
                                    <form method="POST" action="{{ Route('resto.store') }}">
                                        @csrf
                                        <div class="input-group mb-3 mt-2">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-pie-chart"></i></button>
                                            </div>
                                            <input type="text" class="form-control" id="nom" placeholder="Nom du restaurant *" aria-label="" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mb-3 mt-2">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-secondary" type="button"><i class="menu-icon fa fa-envelope"></i></button>
                                            </div>
                                            <input type="email" class="form-control" id="email" placeholder="Email *" aria-label="" aria-describedby="basic-addon1" required>
                                        </div>
                                        <!--button type="submit" id="addRest" class="btn btn-success">Créer</button-->
                                        <!--div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                                <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                            </div>
                                        </div-->
                                        <!--div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Submit</button></div-->
                                    </form>
                                </div>
                            </div>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="addRest" class="btn btn-success">Créer</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
</div>

        <!-- fin modal add restaurant -->


    <script src="{{asset('assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/js/init/datatables-init.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
         // $('#bootstrap-data-table-export').DataTable();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#addRest").click(function(e){
                e.preventDefault();

                let nom = $("#nom").val();
                let email = $("#email").val();

                console.log(nom+"-"+email);

                $.ajax({
                    type: 'POST',
                    url: '/restaurants',
                    data: {nom:nom, email:email},
                    success: function(data){
                        alert("success");
                        window.location.href = "{{Route('resto.access', ['restaurant' => $restaurant->id])}}" ;
                    }
                });

            });
      } );
  </script>



@endsection
