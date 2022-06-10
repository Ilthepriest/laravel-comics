@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/prova.css')}}">
@endsection

@section('content') 

    
    <!-- fumetti -->
    <div class="content p-5">
    <section class="container text-center">
        <div class="row">
            @foreach($fumetti as $index => $fumetto)
                <div class="col">
                    <a href="{{route('fumetti.show', $index)}}">
                        <div class="product">
                            <img src="{{$fumetto['thumb']}}" alt="">
                            <div class="titolo-fumetto">
                                <h6>{{$fumetto['title']}}</h6>
                            </div>
                        </div>
                    </a>  
                </div>
            @endforeach    
        </div>
        <button class="loadMore">LoadMore</button>
    </section>
    </div>
    
@endsection