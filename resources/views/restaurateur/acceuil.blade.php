<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Espace Restaurant</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('images/icon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                    <!--img src="{{asset('images/logo/foody.png')}}" alt="logo images"-->
                    <h1>Gaaw Food</h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

    <table class="table-responsive table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Nom du client</th>
                <th scope="col">Adresse</th>
                <!--th scope="col">Produit commander</th-->
                <th scope="col">Quantité</th>
                <th scope="col">Prix</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>{{$client->nom}}</td>
                  <td>{{$client->adresse}}</td>
                  <td>{{$commande->nombre_article}}</td>
                  <td>{{$commande->prix_total}}</td>
                  <td>
                    <a class="btn btn-success" href="{{route('restaurateur.sendMail',['client' => $client->id])}}" role="button">Confirmer</a>
                  </td>
              </tr>
            </tbody>
          </table>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
