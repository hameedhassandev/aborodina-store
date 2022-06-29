@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #21b9b0">
                        <h2 class="text-center" style="color: #ffffff">
                            {{ __('عرض الاصناف') }}
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
                        @foreach($list as $item)
                            <div class="col-6 p-2">
                                <div class="card">
                                    <div class="text-center">
                                        <img src="{{ asset('upload/categories/'.$item->image)}}" class="card-img-top" style="width: 100%;height: 100%;" alt="صوره الصنف غير متوفره">
                                        <div class="card-body">
                                            <h4>{{ $item->category_name }}</h4>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ url('admin/delete-category').'/'.$item->id }}" class="btn btn-danger">حذف</a>
                                            <a href="{{ url('admin/update-category').'/'.$item->id }}" class="btn btn-success">تعديل</a>
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
    <hr class="link-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #21b9b0 ">
                        <h2 class="text-center" style="color: #ffffff">
                            {{ __('اضافة صنف') }}
                        </h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(Session::get('success'))
                            <div class="alert alert-success text-center">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if(Session::get('fail'))
                            <div class="alert alert-danger text-center">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                            <form action="{{ route('category.add') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-lg-end">{{ __('ادخل اسم الصنف') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required >

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-lg-end">{{ __('اختر صورة الصنف') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="file" class="form-control @error('image') is-invalid @enderror" name="image"  accept="image/png, image/gif, image/jpeg" required >

                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('اضافة الصنف') }}
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
