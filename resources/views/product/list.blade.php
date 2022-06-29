@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #0d7f8c">
                        <h2 class="text-center" style="color: #ffffff">
                            {{ __('عرض المنتجات') }}
                        </h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    <div class="container">
                        <div class="row">
                            @foreach($list as $item)                            <div class="col-6 p-2">
                                    <div class="card">
                                        <div class="text-center">
                                            <img src="{{ asset('upload/products/'.$item->image)}}" class="card-img-top" style="width: 100%;height: 100%;" alt="صوره المنتج غير متوفره">
                                            <div class="card-body">

                                                <h4>{{ $item->name }}</h4>
                                                <h4>{{ $item->price }}ج.م</h4>
                                                <h4>{{ $item->category_name }}</h4>
                                            </div>
                                            <div class="card-footer">
                                                <a href="" class="btn btn-danger">حذف</a>
                                                <a href="" class="btn btn-success">تعديل</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
