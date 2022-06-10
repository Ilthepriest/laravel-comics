@extends('layouts.app')

@section('content')
<div class="div_blue">

</div>
<div class="single_fumetto">
    <div class="container py-5 position-relative">
        <img class="fumetto" src="{{$fumetto['thumb']}}" alt="">
        <div class="row row-cols-2">
            <div class="col-8">
                <h2 class="text-center">{{$fumetto['title']}}</h2>
                <div class="avaiable">
                    <div class="row mt-3">
                        <div class="col-8 d-flex justify-content-between py-2 align-items-center ">
                            <p class="mb-0 ms-3">U.S. Price: {{$fumetto['price']}}</p>
                            <span class="mb-0 me-3">AVAILABLE</span>
                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center border-1 border-dark border-start">
                            <p class="mb-0">Check Availability</p>
                        </div>
                    </div>
                </div>
                <div class="description mt-3">
                        {{$fumetto['description']}}
                </div>
            </div>
            <div class="col-4 text-end">
                <p>ADVERTISEMENT</p>
                <img src="../img/adv.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<div class="bg-light">
    <div class="container">
        <div class="row row-cols-2 py-3">
            <div class="col">
                <h4>Talent</h4>
                <hr>
                <div class="row row-cols-2 art ">
                    <div class="col-2">
                        <p>Art by:</p>
                    </div>
                    <div class="col-10 d-flex">
                        @foreach($fumetto['artists'] as $artist)
                            <p class="artisti">{{$artist}},</p>
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="row row-cols-2 art ">
                    <div class="col-2">
                        <p>Written by:</p>
                    </div>
                    <div class="col-10 d-flex">
                        @foreach($fumetto['writers'] as $writter)
                            <p class="scrittori">{{$writter}},</p>
                        @endforeach
                    </div>
                </div>
                <hr>
            </div>
            <div class="col">
                <h4>Specs</h4>
                <hr>
                <div class="row row-cols-2 art ">
                    <div class="col-2">
                        <p>Series:</p>
                    </div>
                    <div class="col-10 d-flex">
                        <p class="artisti">{{$fumetto['series']}}</p>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-2 art ">
                    <div class="col-2">
                        <p>U.S. Price:</p>
                    </div>
                    <div class="col-10 d-flex">
                        <p>{{$fumetto['price']}}</p>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-2 art ">
                    <div class="col-2">
                        <p>On Sale Date:</p>
                    </div>
                    <div class="col-10 d-flex">
                        <p>{{$fumetto['sale_date']}}</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    
</div>


@endsection