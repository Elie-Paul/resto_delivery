@extends('layout.main')

@section('content')
<div class="ht__bradcaump__area bg-image--18">
    <div class="ht__bradcaump__wrap d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Panier</h2>
                        <nav class="bradcaump-inner">
                            <!--span class="breadcrumb-item active">Menu article</span-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area start -->
<div class="cart-main-area section-padding--lg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 ol-lg-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr class="title-top">
                                    <th class="product-name">Produit</th>
                                    <th class="product-price">Prix</th>
                                    <th class="product-quantity">Quantité</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="product-name"><a href="#">{{$item->name}}</a></td>
                                        <td class="product-price"><span class="amount">{{$item->price}}</span></td>
                                        <td class="product-quantity"><input type="number" value="{{$item->quantity}}" /></td>
                                        <td class="product-subtotal">{{$item->price * $item->quantity}}</td>
                                        <td class="product-remove"><a href="{{route('cart.remove', ['article' => $item->id])}}">X</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
                <div class="cartbox__btn">
                    <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                        <li><a href="#">Coupon Code</a></li>
                        <li><a href="#">Apply Code</a></li>
                        <li><a href="#">Update Cart</a></li>
                        <li><a href="{{route('order.index',['restaurant' => $restaurant->id])}}">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="cartbox__total__area">
                    <div class="cartbox-total d-flex justify-content-between">
                        <ul class="cart__total__list">
                            <li>Cart total</li>
                            <li>Sub Total</li>
                        </ul>
                        <ul class="cart__total__tk">
                            <li>{{\Cart::getTotal()}}</li>
                            <li>{{\Cart::getSubTotal()}}</li>
                        </ul>
                    </div>
                    <div class="cart__total__amount">
                        <span>Grand Total</span>
                        <span>{{\Cart::getTotal()}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->
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


                /*$.ajax({
                    type: 'PATCH',
                    url: '{{ Route('resto.update', ['restaurant' => $restaurant->id]) }}',
                    data: {nom:nom, tel1:tel1, ville:ville, code_postal:code_postal, num_rue:num_rue, _token:  "{{ csrf_token() }}"},
                    success: function(data){
                        alert("success");
                        window.location.href = '{{Route('resto.cuisine', ['restaurant' => $restaurant->id])}}' ;
                        //window.location.reload();
                    }
                });*/

            });
      } );
  </script>
@endsection
