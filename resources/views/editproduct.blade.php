<?php $page = "editproduct"; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('components.pageheader')
                @slot('title')
                    Product Edit
                @endslot
                @slot('title_1')
                    Update your product
                @endslot
            @endcomponent
            <!-- /add -->
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update-product',['product'=> $product->id])}}" method="post">
                        {{@csrf_field()}}
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>اسم المنتج</label>
                                    <input type="text" name="name" value="{{$product->name}}" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>الباركود</label>
                                    <input type="text" name="barcode" value="{{$product->barcode}}">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>الكمية</label>
                                    <input type="number" name="quantity" value="{{$product->quantity}}" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>سعر مفرق</label>
                                    <input type="number" name="price" step="any" value="{{$product->price}}" required>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>سعر الجملة</label>
                                    <input type="number" name="wholesale_price" step="any" value="{{$product->wholesale_price}}"
                                           required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>سعر جملة الجملة</label>
                                    <input type="number" name="traders_price" step="any" value="{{$product->traders_price}}"
                                           required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label> سعر التكلفه</label>
                                    <input type="number" name="cost_price" step="any" value="{{$product->cost_price}}"
                                           required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label> الحالة</label>
                                    <select class="select" name="status" required>
                                        <option value="not-available">غير موجود</option>
                                        <option value="available" selected>موجود</option>
                                    </select>
                                </div>
                            </div>
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label> Product Image</label>--}}
{{--                                    <div class="image-upload">--}}
{{--                                        <input type="file">--}}
{{--                                        <div class="image-uploads">--}}
{{--                                            <img src="{{ URL::asset('/assets/img/icons/upload.svg')}}" alt="img">--}}
{{--                                            <h4>Drag and drop a file to upload</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="product-list">--}}
{{--                                    <ul class="row">--}}
{{--                                        <li>--}}
{{--                                            <div class="productviews">--}}
{{--                                                <div class="productviewsimg">--}}
{{--                                                    <img src="{{ URL::asset('/assets/img/icons/macbook.svg')}}"--}}
{{--                                                         alt="img">--}}
{{--                                                </div>--}}
{{--                                                <div class="productviewscontent">--}}
{{--                                                    <div class="productviewsname">--}}
{{--                                                        <h2>macbookpro.jpg</h2>--}}
{{--                                                        <h3>581kb</h3>--}}
{{--                                                    </div>--}}
{{--                                                    <a href="javascript:void(0);" class="hideset">x</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2">حفظ التغييرات</button>
                                <a href="{{url('productlist')}}" class="btn btn-cancel">الغاء</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /add -->
        </div>
    </div>
@endsection
