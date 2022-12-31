<?php $page = "customerlist"; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('components.pageheader')
                @slot('title')
                    Brand List
                @endslot
                @slot('title_1')
                    Manage your Brand
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
                    </div>
                    <div class="table-responsive">
                        <table class="table datanew">
                            <thead>
                            <tr>
                                <th>اسم الزبون</th>
                                <th>رقم الهاتف</th>
                                <th>عدد الطلبيات</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->mobile_number}}</td>
                                    <td>{{$customer->orders->count()}}</td>
                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu"  >
                                            <li>
                                                <a href="{{url('financial-account-details',['customer' => $customer->id])}}" class="dropdown-item"><img src="{{ URL::asset('/assets/img/icons/eye1.svg')}}" class="me-2" alt="img">كشف حساب</a>
                                            </li>
                                            <li>
                                                <a href="{{url('financial-account-details',['customer' => $customer->id])}}"  target="_blank"  class="dropdown-item"><img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" class="me-2" alt="img">التفاصيل</a>
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
@endsection
