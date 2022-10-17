<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{


    public function index(){
        $data=Product::all();
        return view('index',['data'=>$data]);

    }
    public function home_page(){
        $data=Product::all();
        return view('ourProduct',['data'=>$data]);
    }
    public function find($id){
        $data=Product::find($id);
        return view('detail',['data'=>$data]);
    }

    public function sort_jacket(){
        $data=Product::all()->where('more_details','jacket');
        return view('ourProduct',['data'=>$data]);
    }

    public function sort_dresses(){
        $data=Product::all()->where('more_details','dress');
        return view('ourProduct',['data'=>$data]);
    }

    public function sort_sweaters(){
        $data=Product::all()->where('more_details','sweater');
        return view('ourProduct',['data'=>$data]);
    }

    public function sort_pants(){
        $data=Product::all()->where('more_details','pant');
        return view('ourProduct',['data'=>$data]);
    }
    public function sort_shoes(){
        $data=Product::all()->where('more_details','shoes');
        return view('ourProduct',['data'=>$data]);
    }
    public function sort_skirts(){
        $data=Product::all()->where('more_details','skirt');
        return view('ourProduct',['data'=>$data]);
    }

    public function search(Request $req)
    {

        $res1=Product::where('model_name','LIKE','%'.$req['query'].'%')->orWhere('texture','LIKE','%'.$req['query'].'%')->orWhere('color','LIKE','%'.$req['query'].'%')->orWhere('size','LIKE','%'.$req['query'].'%')->get();

        {return view('ourProduct',['data'=>$res1]);}
    }



}
