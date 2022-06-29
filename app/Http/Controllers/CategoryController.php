<?php

namespace App\Http\Controllers;

use App\Models\Category;
//use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    function list(){
        $data = array(
            'list'=> DB::table('categories')->get()
        );
        return view('category.list', $data);
    }

    function create(Request $request){
        $category = new Category();
        $category->category_name = $request->input('name');
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/categories/',$filename);
            $category->image = $filename;
        }else{
            $category->image = NULL;
        }
        $category->save();
        if (!empty($category)){
            return back()->with('success','تم اضافة الصنف بتجاح');
        }else{
            return back()->with('fail','حدث خطأ لم يتم اضافة الصنف');
        }
    }

    function delete($id){
        $data = array(
            'list'=> DB::table('categories')->find($id)
        );
        return view('category.delete',$data);
    }

    function formOfUpdate($id){
        $data = array(
            'list'=> DB::table('categories')->find($id)
        );
        return view('category.update',$data);

    }

    function update(Request $request,$id){

        $category = Category::find($id);

        $category->category_name = $request->input('name');
        if ($request->hasFile('image')){
            $destination = 'upload/categories/'.$category->image;
            if (File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/categories/',$filename);
            $category->image = $filename;
        }

        $category->update();
        if (!empty($category)){
            return back()->with('success','تم تعديل الصنف بتجاح');
        }else{
            return back()->with('fail','حدث خطأ لم يتم تعديل الصنف');
        }
    }

}
