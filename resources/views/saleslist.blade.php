<?php $page="saleslist";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
{{--        @component('components.pageheader')--}}
{{--			@slot('title') Sales List @endslot--}}
{{--			@slot('title_1') Manage your sales @endslot--}}
{{--		@endcomponent--}}
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
                            <a class="btn btn-searchset"><img src="{{ URL::asset('/assets/img/icons/search-white.svg')}}" alt="img"></a>
                        </div>
                    </div>
                </div>
                <!-- /Filter -->
                <div class="card" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Reference No">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Completed</option>
                                        <option>Paid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img src="{{ URL::asset('/assets/img/icons/search-whites.svg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Filter -->
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>رقم الفاتوره</th>
                                <th>اسم الزبون</th>
                                <th>الحاله</th>
                                <th>المجموع</th>
                                <th>مجموع الذمم</th>
                                <th>مجموع الكاش</th>
                                <th>تاريخ الشراء</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>#{{$order->id}}</td>
                                <td>{{$order->customer->name}}</td>
                                <td>{{$order->status}}</td>
                                <td>{{$order->items->sum('total')}}</td>
                                <td>{{$order->transactions->where('status','pending')->first()->total ?? 0}}</td>
                                <td>{{$order->transactions->where('status','paid')->first()->total ?? 0}}</td>
                                <td>{{$order->created_at->toDateTimeString()}}</td>
                                <td class="text-center">
                                    <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu"  >
                                        <li>
                                            <a href="{{url('sales-details',['order' => $order->id])}}" class="dropdown-item"><img src="{{ URL::asset('/assets/img/icons/eye1.svg')}}" class="me-2" alt="img">تفاصيل الفاتوره</a>
                                        </li>
                                        <li>
                                            <a href="/print/{{$order->id}}"  target="_blank"  class="dropdown-item"><img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" class="me-2" alt="img">طباعه الفاتوره</a>
                                        </li>
                                    </ul>
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
@component('components.modal-popup')
@endcomponent
@endsection
