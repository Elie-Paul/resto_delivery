@extends('layout.main')

@section('content')
<div class="ht__bradcaump__area bg-image--18">
    <div class="ht__bradcaump__wrap d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">{{$category->nom}}</h2>
                        <nav class="bradcaump-inner">
                            <span class="breadcrumb-item active">Menu article</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body card-block" id="art">
        <table class="table table-hover">
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{$article->nom}}</td>
                        <td></td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <span>{{$article->prix}} Frcfa</span>
                                    <input type="hidden" name="article" id="article_id"  value="{{$article->id}}">
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger addCart" ><i class="fa fa-plus"></i></button>
                                    <!--a href="{{route('cart.add',['restaurant' => $restaurant->id])}}"><i class="fa fa-plus"></i></a-->
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    jQuery(document).ready(function($){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".addCart").click(function(){
            let article_id = $('#article_id').val()
            $.ajax({
                type: 'POST',
                url: '{{route('cart.add',['restaurant' => $restaurant->id])}}',
                data: {id: article_id},
                success: function(data){
                    console.log(data);

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Article ajouté au panier',
                        showConfirmButton: false,
                        timer: 2000
                        })
                    //window.location.reload();
                }
            });
        });
    });
</script>
@endsection
