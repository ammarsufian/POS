<?php $page="index";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget">
                    <div class="dash-widgetimg">
                        <span><img src="{{ URL::asset('/assets/img/icons/dash1.svg')}}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5 ><span class="counters" data-count="{{$today_debit_sales}}">{{$today_debit_sales}}</span></h5>
                        <h6>المبيعات اليوميه الذمم</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="{{ URL::asset('/assets/img/icons/dash2.svg')}}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5 ><span class="counters" data-count="{{$today_cash_sales}}">{{$today_cash_sales}}</span></h5>
                        <h6>مبيعات اليوميه الكاش</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash2">
                    <div class="dash-widgetimg">
                        <span><img src="{{ URL::asset('/assets/img/icons/dash3.svg')}}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5 ><span class="counters" data-count="{{$today_sales}}">{{$today_sales}}</span></h5>
                        <h6>مبيعات يوميه</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                        <span><img src="{{ URL::asset('/assets/img/icons/dash4.svg')}}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5 ><span class="counters" data-count="0">0</span></h5>
                        <h6>المشتريات اليوميه </h6>
                    </div>
                </div>
            </div>
        <!-- Button trigger modal -->
            <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">منتجات قاربت على النفاذ</h4>
                <div class="table-responsive dataview">
                    <table class="table datatable ">
                        <thead>
                            <tr>
                                <th>اسم المنتج</th>
                                <th>الكميه المتوفره</th>
                                <th>اشترت بتاريخ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($low_stock_products as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{\Carbon\Carbon::parse($product->updated_at)->format('d/m/y')}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
