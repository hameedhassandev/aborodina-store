<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    function list(){
        $data = array(
            'list'=> DB::table('products')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->select('products.*','categories.category_name')
                    ->get()

        );
        return view('product.list',$data);


    }
    function create(){
        $data = array(
            'categories'=> DB::table('categories')->get()
        );
        return view('product.add',$data);
    }
    function store(Request $request){
//        return $request->input();
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/products/',$filename);
            $product->image = $filename;
        }else{
            $product->image = 'null';
        }
        $product->save();
        if (!empty($product)){
            return back()->with('success','تم اضافة المنتج بتجاح');
        }else{
            return back()->with('fail','حدث خطأ لم يتم اضافة المنتج');
        }
    }
    function delete($id){
        return view('product.delete',['id'=>$id]);
    }
    function update($id){
        return view('product.update',['id'=>$id]);

    }
}
