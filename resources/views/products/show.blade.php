@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col"> 
                <div class = "col"> 
                    <h2 class = "display-2"> {{$product-> title}} ({{$product->stock}}) </h2> 
                </div>
            </div>
            <div class = "col"> 
                    <a href="" class="btn btn-success btn-lh"> Purchase </a>
            </div>
        <div class="row"> 
            <div class="col-4">
                <div class = "card"> 
                    <img src="{{$product->picture}}" class="card-img-top"> 
                    <div class = "card-body">
                        <h5 class="card-title">{{$product->title}}</h5>
                        <p class = "card-text">{{$product->details}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection