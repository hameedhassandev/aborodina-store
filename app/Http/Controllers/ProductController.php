<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    function list(){
        return view('product.list');
    }
    function create(){
        return view('product.add');
    }
    function store(){
        return 'done';
    }
    function delete($id){
        return view('product.delete',['id'=>$id]);
    }
    function update($id){
        return view('product.update',['id'=>$id]);

    }
}
