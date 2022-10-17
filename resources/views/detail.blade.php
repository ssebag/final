@extends('layout.layout')
@section('content')
@section('title') {{$data->more_details}}  {{$data->model_name}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection


<div class="container" style="display:grid ;gap:6rem;grid-template-columns:0.5fr 0.8fr ;">


    <div class="row" style="">
        <img src="{{$data->image_url}}" class="w-100" alt="" style="height: 30rem">
    </div>
    <div class="row" style="">
        <div style=" position:relative; padding-top:4%">
         <form action="{{url('cart/add').$data->id}}" method="POST">
            @csrf
            <table class="table table-borderless" style="font-size:1.2rem; ">
                <thead>
                  <tr>
                    <th scope="col" style="width: 11rem" >Model Number :</th>
                    <th scope="col">{{$data->model_name}}</th>
                  </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="col">Details :</th>
                        <td scope="col">{{$data->more_details}}</td>
                   </tr>

                   <tr>
                    <th scope="col">Texture :</th>
                    <td scope="col">{{$data->texture}}</td>
                   </tr>

                  <tr>
                    <th scope="col">Color :</th>
                    <td scope="col">{{$data->color}}</td>
                 </tr>
                 <tr>
                    <th scope="col">Size :</th>
                    <td scope="col">{{$data->size}}</td>
                 </tr>   <tr>
                    <th scope="col">Height :</th>
                    <td scope="col">{{$data->height}}</td>
                 </tr>   <tr>
                    <th scope="col">Price :</th>
                    <td scope="col">{{$data->price}}</td>
                 </tr>
                 <tr>
                    <th scope="col">Sale :</th>
                    <td scope="col">{{$data->sale}}</td>
                 </tr>

                </tbody>
            </table>
            <div style="margin-top:10%;margin-bottom:2%; margin-left:-4%;display: grid; grid-template-columns: 1fr 1fr; gap:0.5rem">

                <button type="submit" class="btn btn-success text-center " style="font-size: 1.5rem; ">Add To Cart</button>

                <a href="#" class="btn btn-info text-light" style="font-size: 1.5rem;">Buy</a>
               </div>
         </form>
        <div class="containt" style="height:80%; width:100%;background-color: black; position:absolute; top:0;left:-4%; opacity:20%;">
        </div>
       </div>


    </div>


</div>
@endsection
