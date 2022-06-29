@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" >
                    <div class="card-header" style="background-color: #d010ae">
                        <h2 class="text-center" style="color: #ffffff">
                            {{ __('اضافة منتج') }}
                        </h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="card-body">
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
                                <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('اسم المنتج') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('سعر المنتج') }}</label>

                                        <div class="col-md-6">
                                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required>

                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                           </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="category_id" class="col-md-4 col-form-label text-md-end">{{ __('اختر الصنف') }}</label>

                                        <div class="col-md-6">
                                            <select name="category_id" id="category_id" class="form-control" required>
                                                <option value="" class="text-center">--- اختر صنف ---</option>
                                                @foreach ($categories as $category)
                                                    <option class="text-center" value="{{ $category->id }}">"{{ $category->name }}"</option>">
                                                @endforeach
                                            </select>
{{--                                            <input id="category" type="" class="form-control @error('category') is-invalid @enderror" name="category" required>--}}

                                            @error('category_id')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-lg-end">{{ __('اختر صورة المنتج') }}</label>

                                        <div class="col-md-6">
                                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image"  accept="image/png, image/gif, image/jpeg" required >

                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('اضافة المنتج') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
