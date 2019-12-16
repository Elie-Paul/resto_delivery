@extends('layout.main')

@section('content')
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--18">
    <div class="ht__bradcaump__wrap d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Check-out {{$restaurant->nom}}</h2>
                        <nav class="bradcaump-inner">
                          <a class="breadcrumb-item" href="index.html">Home</a>
                          <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                          <span class="breadcrumb-item active">Check-out</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<section class="htc__checkout bg--white section-padding--lg">
    <!-- Checkout Section Start-->
    <div class="checkout-section">
        <div class="container">
            <div class="row">

                <div class="card-deck">
                    <div class="card w-75">
                        <div class="card-header"><h3 style="color: red">Informations du client</h3></div>
                        <div class="card-body">
                        <form action="{{route('restaurateur.addClient')}}" method="POST" class="billing-form checkout-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12 mb--20">
                                    <input type="text" placeholder="nom" name="nom" id="nom">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <input type="text" placeholder="prenom" name="prenom" id="prenom">
                                </div>
                                <div class="col-12 mb--20">
                                    <input placeholder="Adresse" type="text" name="adresse" id="adresse">
                                </div>
                                <div class="col-md-6 col-12">
                                    <input type="email" placeholder="email" name="email" id="email">
                                </div>
                                <div class="col-md-6 col-12">
                                    <input placeholder="Numero de telephone" type="text" id="telephone">
                                </div>
                                <div class="col-12 mb--20 mt-4">
                                    <!--button class="food__btn">
                                        Enregistrer
                                    </button>
                                    <button class="food__btn" id="test">
                                        client existant
                                    </button-->
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header"><h3 style="color: red">Votre commande</h3></div>
                        <div class="card-body">
                        <div class="order-details">
                            <form action="#" method="POST">
                                @csrf
                                <ul>
                                    <li><p class="strong">Produits</p><p class="strong">total</p></li>
                                    @foreach ($data as $item)
                                        <li><p>{{$item->name}} x{{$item->quantity}}</p><p>{{$item->price * $item->quantity}}</p></li>
                                    @endforeach
                                    <li><p class="strong">Commande totale</p><p class="strong">{{\Cart::getSubTotal()}}</p></li>
                                    <li><button class="food__btn send" id="send">Envoyer</button></li>
                                </ul>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>

        </div>
    </div><!-- Checkout Section End-->
 </section>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    jQuery(document).ready(function($){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#test").click(function(e){
            e.preventDefault();
            Swal.fire({
                    title: 'Entrez votre numéro de telephone',
                    input: 'text',
                    inputAttributes: {
                        autocapitalize: 'off'
                    },
                    showCancelButton: true,
                    confirmButtonText: 'Chercher',
                    showLoaderOnConfirm: true,
                    preConfirm: (login) => {
                        return fetch(`//api.github.com/users/${login}`)
                        .then(response => {
                            if (!response.ok) {
                            throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                            `Request failed: ${error}`
                            )
                        })
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                    }).then((result) => {
                    if (result.value) {
                        Swal.fire({
                        title: `${result.value.login}'s avatar`,
                        imageUrl: result.value.avatar_url
                        })
                    }
                    })

        });

        $(".send").click(function(e){
            e.preventDefault();
            let nom = $('#nom').val();
            let prenom = $('#prenom').val();
            let adresse = $('#adresse').val();
            let telephone = $('#telephone').val();
            let email = $('#email').val();
            console.log(nom);

            //alert("dddd"+nom);

            if (nom === "" || telephone === "" || adresse === "") {
                //alert('Ajoutez au moins votre nom et votre numéro de telephone' );
                Swal.fire('Renseignez votre nom, votre numéro de telephone et votre adresse');
            }else{
                    $.ajax({
                    type: 'POST',
                    url: '{{ route('order.add') }}',
                    data: {nom: nom,prenom: prenom,adresse: adresse,email: email, _token:  "{{ csrf_token() }}"},
                    success: function(cmd){
                        if (cmd === "error") {
                            Swal.fire('Votre panier est vide !!!!');
                        } else {
                            Swal.fire('Votre commande à été envoyé avec succès !!!');
                            console.log(cmd);
                            $.ajax({
                                type: 'GET',
                                url: '{{ route('cmd.article') }}',
                                data: {id: cmd.id,client_id: cmd.client_id,nbr_art: cmd.nombre_article,prix_total: cmd.prix_total,resto_id: cmd.restaurant_id,dateC: cmd.created_at},
                                success: function(cmdSend){
                                    alert(cmdSend);
                                    console.log(cmdSend);

                                }
                            });
                        }
                        /*Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Article ajouté au panier',
                            showConfirmButton: false,
                            timer: 2000
                            })*/
                        //window.location.reload();
                    }
                });
            }
        });
    });
</script>
@endsection
