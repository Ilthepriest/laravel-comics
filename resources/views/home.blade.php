@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/prova.css')}}">
@endsection

@section('content') 
<!-- Jumbo -->
    <div class="jumbotron"></div>
    
    <!-- fumetti -->
    <div class="content p-5">
    <section class="container text-center">
        <div class="row">
            @foreach($fumetti as $fumetto)
                <div class="col">
                    <div class="product">
                        <img src="{{$fumetto['thumb']}}" alt="">
                        <div class="titolo-fumetto">
                            <h6>{{$fumetto['title']}}</h6>
                        </div>
                    </div>  
                </div>
            @endforeach    
        </div>
        <button class="loadMore">LoadMore</button>
    </section>
    </div>

    <!-- Infomative -->
    <div class="information">
        <div class="container img-center">
            <div class="carda">
                <img src="../img/buy-comics-digital-comics.png" alt="">
                <div class="text">Digital Comics</div>
            </div>
            <div class="carda">
                <img src="../img/buy-comics-merchandise.png" alt="">
                <div class="text">Dc Merchandise</div>
            </div>
            <div class="carda">
                <img src="../img/buy-comics-subscriptions.png" alt="">
                <div class="text">Subscription</div>
            </div>
            <div class="carda">
                <img src="../img/buy-comics-shop-locator.png" alt="">
                <div class="text">Comic Shop Locator</div>
            </div>
            <div class="carda">
                <img src="../img/buy-dc-power-visa.svg" alt="">
                <div class="text">Dc Power Visa</div>
            </div>
            
        </div>
    </div>
@endsection