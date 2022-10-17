@extends('layout.layout')
@section('content')
@section('title'){{'Our Products'}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection



<div class="container-fluid" style=" margin-left:1rem;display:grid ;gap:1.8rem;grid-template-columns:1fr 1fr 1fr 1fr;">
    @foreach ($data as $product)
     <div class="card" style="width: 18rem; padding-bottom:2rem;">
        <img class="card-img-top " style="height: 17rem; width:15rem; align-self: center; " src="{{$product->image_url}}" alt="Card image cap">
        <div class="card-body"  style="font-size:1.2rem">
          <h5 class="card-title" style="text-shadow: 1px 1px 15px blue; font-weight: bolder;">{{$product->model_name}}</h5>
          <p class="card-text "><span style="color:rgb(38, 23, 126);font-weight: bolder; margin-right:0.2rem">Size :</span>  {{$product->size}}</p>

          <p class="card-text " ><span style="color:rgb(38, 23, 126);font-weight: bolder;margin-right:0.5rem">Sale :</span>{{$product->sale}}</p>

          <a href="ourProduct/{{$product->id}}" class="btn btn-primary ">For More Details</a>
        </div>
      </div>
    @endforeach

</div>
@endsection
