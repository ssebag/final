@extends('layout.layout')
@section('content')
@section('title'){{'Our Products'}} @endsection
@section('name1')Our Product <span class="sr-only">(current)</span>@endsection


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">


                <div class="">

                    <form method="POST" action="">
                        @csrf

                        <div class="row mb-3">
                            <label for="quantity" class="col-md-4 col-form-label text-md-end text-light">quantity</label>

                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control" name="email" value="" required autocomplete="email" autofocus>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="color" class="col-md-4 col-form-label text-md-end text-light">Color</label>

                            <div class="col-md-6">
                                <input id="color" type="text" class="form-control" name="color" value="" required autocomplete="email" autofocus>

                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <label for="size" class="col-md-4 col-form-label text-md-end text-light">Size</label>

                            <div class="col-md-6">
                                <input id="size" type="type" class="form-control" name="size" value="" required autocomplete="email" autofocus>

                            </div>
                        </div>
                        <div class="row mb-0 my-4 "  >
                            <div class=" my-4 " style="display: grid; grid-template-columns:1fr 1fr 0.5fr ">
                                <div></div>
                                <button type="submit" class="btn btn-primary">
                                 Buy
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
