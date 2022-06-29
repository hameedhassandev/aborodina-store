
@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #21b9b0">
                        <h2 class="text-center" style="color: #ffffff">
                            {{ __('حذف الصنف') }}
                        </h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="text-center">

                            <h2> {{ $list->category_name }}</h2>
                            <img src="{{ asset('upload/categories/'.$list->image)}}" class="card-img-top" style="width: 100%;height: 100%;" alt="صوره الصنف غير متوفره">
                        </div>
                        <div class="p-4">
                            <a href="" class="btn btn-danger">حذف الصنف</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
