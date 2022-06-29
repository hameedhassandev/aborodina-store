<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function list(){
        $data = array(
            'list'=> DB::table('categories')->get()
        );
        return view('category.list', $data);
    }
    function create(Request $request){
//        $request->validate([
//            'name'=>'required',
//            'image'=> 'required'
//
//        ]);
//        $query = DB::table('categories')->insert([
//            'name' => $request->input('name'),
//        ]);
//        if ($query){
//            return back()->with('success','تم اضافة الصنف بتجاح');
//        }else{
//            return back()->with('fail','حدث خطأ لم يتم اضافة الصنف');
//        }
        $category = new Category();
        $category->name = $request->input('name');
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/categories/',$filename);
            $category->image = $filename;
        }
        $category->save();
        if (!empty($category)){
            return back()->with('success','تم اضافة الصنف بتجاح');
        }else{
            return back()->with('fail','حدث خطأ لم يتم اضافة الصنف');
        }
    }

    function delete($id){
        return view('category.delete',['id'=>$id]);
    }
    function update($id){
        return view('category.update',['id'=>$id]);

    }
}
