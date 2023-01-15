<?php $page = "productlist"; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('components.pageheader')
                @slot('title')
                    Product List
                @endslot
                @slot('title_1')
                    Manage your products
                @endslot
            @endcomponent
            <!-- /product list -->
            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{ URL::asset('/assets/img/icons/filter.svg')}}" alt="img">
                                    <span><img src="{{ URL::asset('/assets/img/icons/closes.svg')}}" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img
                                        src="{{ URL::asset('/assets/img/icons/search-white.svg')}}" alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="{{ URL::asset('/assets/img/icons/pdf.svg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="{{ URL::asset('/assets/img/icons/excel.svg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                     <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                            <tr>
                                <th>صورة المنتج</th>
                                <th>اسم المنتج</th>
                                <th>الباركود</th>
                                <th>الكمية</th>
                                <th>سعر المفرق</th>
                                <th>سعر الجملة</th>
                                <th>سعر جملة الجملة</th>
                                <th>الحالة</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="{{ URL::asset('/assets/img/product/product1.jpg')}}"
                                                 alt="product">
                                        </a>
                                        <a href="javascript:void(0);">{{$product->name}}</a>
                                    </td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->barcode}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->wholesale_price}}</td>
                                    <td>{{$product->traders_price}}</td>
                                    <td>{{$product->status}}</td>
                                    <td>
                                        <a class="me-3" href="{{url('product-details',['product' => $product->id])}}">
                                            <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                        </a>
                                        <a class="me-3" href="{{url('editproduct',['product' => $product->id])}}">
                                            <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /product list -->
        </div>
    </div>
@endsection
