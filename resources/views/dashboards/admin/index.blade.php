@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #1e2125">
                        <h2 class="text-center" style="color: #ffffff;">
                            {{ __('قائمة التحكم') }}
                        </h2>
                    </div>
{{--                    <h4 class="card-body">Admin: {{Auth::user()->name}}</h4>--}}
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
        <div class="container">
                 <div class="row">
                        <div class="col-6 p-2">
                            <a href="{{ route('product.add') }}" style="text-decoration:none">
                            <div class="card">
                                    <div class="text-center">
                                    <img src="{{ asset('images/add-product.png') }}" class="card-img-top" style="width: 100px;height: 100px;" alt="home">
                                        <h4 class="p-4 card-body" style="color: #ffff;background-color: #e0154e">{{ __('اضافة المنتجات') }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 p-2">
                            <a  href="{{ route('product.list') }}" style="text-decoration:none">
                            <div class="card">
                                <div class="text-center">
                                    <img src="{{ asset('images/allproduct.png') }}" class="card-img-top" style="width: 100px;height: 100px;" alt="home">
                                        <h4 class="p-4 card-body" style="color: #ffff;background-color: #0d7f8c">{{ __('عرض المنتجات') }}</h4>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-6 p-2">
                            <a href="{{ route('category.list') }}" style="text-decoration:none">
                            <div class="card">
                                <div class="text-center">
                                    <img src="{{ asset('images/allcategories.png') }}" class="card-img-top" style="width: 100px;height: 100px;" alt="home">
                                        <h4 class="p-4 card-body" style="color: #ffff;background-color: #21b9b0">{{ __('عرض الاصناف') }}</h4>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-6 p-2">
                            <a href="" style="text-decoration:none">
                            <div class="card">
                                <div class="text-center">
                                    <img src="{{ asset('images/users.png') }}" class="card-img-top" style="width: 100px;height: 100px;" alt="home">
                                        <h4 class="p-4 card-body" style="color: #ffff;background-color: #fd7e14">{{ __('عرض المستخدمين') }}</h4>
                                </div>
                            </div>
                            </a>
                        </div>
                     <div class="col-6 p-2">
                         <a href="{{ route('admin.profile') }}" style="text-decoration:none">

                         <div class="card">
                             <div class="text-center">
                                 <img src="{{ asset('images/profile.png') }}" class="card-img-top" style="width: 100px;height: 100px;" alt="home">
                                     <h4 class="p-4 card-body" style="color: #ffff;background-color: #1ca316">{{ __('الملف الشخصي') }}</h4>
                             </div>
                         </div>
                         </a>
                     </div>
{{--                     <div class="col-6 p-2">--}}
{{--                         <a href="{{ route('admin.profile') }}" style="text-decoration:none">--}}

{{--                         <div class="card">--}}
{{--                             <div class="text-center">--}}
{{--                                 <img src="{{ asset('images/orders.png') }}" class="card-img-top" style="width: 100px;height: 100px;" alt="home">--}}
{{--                                     <h4 class="p-4 card-body" style="color: #ffff;background-color: #055160">{{ __('عرض الاوردرات') }}</h4>--}}
{{--                             </div>--}}
{{--                         </div>--}}
{{--                         </a>--}}
{{--                     </div>--}}
             </div>
        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
