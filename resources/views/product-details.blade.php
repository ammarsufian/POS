<?php $page="product-details";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
			@slot('title') Product Details @endslot
			@slot('title_1') Full details of a product @endslot
		@endcomponent
        <!-- /add -->
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="bar-code-view">
                            <img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="barcode">
                            <a class="printimg">
                                <img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="print">
                            </a>
                        </div>
                        <div class="productdetails">
                            <ul class="product-bar">
                                <li>
                                    <h4>إسم المنتج</h4>
                                    <h6>{{$product->name}}</h6>
                                </li>
                                <li>
                                    <h4>الباركود</h4>
                                    <h6>{{$product->barcode}}</h6>
                                </li>
                                <li>
                                    <h4>الكمية</h4>
                                    <h6>{{$product->quantity}}</h6>
                                </li>
                                <li>
                                    <h4>سعر مفرق</h4>
                                    <h6>{{$product->price}}</h6>
                                </li>
                                <li>
                                    <h4>Status</h4>
                                    <h6>Active</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="slider-product-details">
                            <div class="owl-carousel owl-theme product-slide">
                                <div class="slider-product">
                                    <img src="{{ URL::asset('/assets/img/product/product69.jpg')}}" alt="img">
                                    <h4>macbookpro.jpg</h4>
                                    <h6>581kb</h6>
                                </div>
                                <div class="slider-product">
                                    <img src="{{ URL::asset('/assets/img/product/product69.jpg')}}" alt="img">
                                    <h4>macbookpro.jpg</h4>
                                    <h6>581kb</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
