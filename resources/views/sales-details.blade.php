<?php $page = "sales-details"; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <div class="card-sales-split">
                        <h2>رقم الفاتوره : {{$order->id}}</h2>
                        <ul>
                            <li>
                                <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/edit.svg')}}"
                                                                   alt="img"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/pdf.svg')}}"
                                                                   alt="img"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/excel.svg')}}"
                                                                   alt="img"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><img
                                        src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="invoice-box table-height"
                         style="max-width: 1600px;width:100%;overflow: auto;margin:15px auto;padding: 0;font-size: 14px;line-height: 24px;color: #555;">
                        <table cellpadding="0" cellspacing="0"
                               style="width: 100%;line-height: inherit;text-align: left;">
                            <tbody>
                            <tr class="top">
                                <td colspan="6" style="padding: 5px;vertical-align: top;">
                                    <table style="width: 100%;line-height: inherit;text-align: left;">
                                        <tbody>
                                        <tr>
                                            <td style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                                                <font style="vertical-align: inherit;margin-bottom:25px;"><font
                                                        style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">معلومات
                                                        الزبون</font></font><br>
                                                <font style="vertical-align: inherit;"><font
                                                        style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">{{$order->customer->name}}</font></font><br>
                                                <font style="vertical-align: inherit;"><font
                                                        style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">{{$order->customer->mobile_number}}</font></font><br>
                                            </td>
                                            <td style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                                                <font style="vertical-align: inherit;margin-bottom:25px;"><font
                                                        style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">معلومات
                                                        الفاتوره</font></font><br>
                                                <font style="vertical-align: inherit;"><font
                                                        style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                        رقم الفاتوره </font></font><br>
                                                <font style="vertical-align: inherit;"><font
                                                        style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                        حاله الدفع</font></font><br>
                                            </td>
                                            <td style="padding:5px;vertical-align:top;text-align:right;padding-bottom:20px">
                                                <font style="vertical-align: inherit;margin-bottom:25px;"><font
                                                        style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; "></font></font><br>
                                                <font style="vertical-align: inherit;"><font
                                                        style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">#{{$order->id}} </font></font><br>
                                                <font style="vertical-align: inherit;"><font
                                                        style="vertical-align: inherit;font-size: 14px;color:#2E7D32;font-weight: 400;">{{$order->transactions->pluck('transaction_status')->count() == 1? 'كاش' : 'كاش /ذمم'}}</font></font><br>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr class="heading " style="background: #F3F2F7;">
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    اسم المنتج
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    الكميه
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    سعر الحبه
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    المجموع
                                </td>
                            </tr>
                            @foreach($order->items as $item)
                                <tr class="details" style="border-bottom:1px solid #E9ECEF ;">
                                    <td>
                                        {{$item->product->name}}
                                    </td>
                                    <td style="padding: 10px;vertical-align: top; ">
                                        {{$item->quantity}}
                                    </td>
                                    <td style="padding: 10px;vertical-align: top; ">
                                        {{$item->price}}
                                    </td>
                                    <td style="padding: 10px;vertical-align: top; ">
                                        {{$item->total}}
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row">
{{--                        <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Order Tax</label>--}}
{{--                                <input type="text">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Discount</label>--}}
{{--                                <input type="text">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Shipping</label>--}}
{{--                                <input type="text">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Status</label>--}}
{{--                                <select class="select">--}}
{{--                                    <option>Choose Status</option>--}}
{{--                                    <option>Completed</option>--}}
{{--                                    <option>Inprogress</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="total-order w-100 max-widthauto m-auto mb-4">
                                    <ul>
                                        <li>
                                            <h4>قيمه الفاتوره</h4>
                                            <h5>{{$order->items->sum('total')}}</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="total-order w-100 max-widthauto m-auto mb-4">
                                    <ul>
                                        <li>
                                            <h4>كاش</h4>
                                            <h5>{{$order->transactions->where('status','paid')->first()->total ?? 0.00}}</h5>
                                        </li>
                                        <li class="total">
                                            <h4>ذمم</h4>
                                            <h5>{{$order->transactions->where('status','pending')->first()->total ?? 0.00}}</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a href="{{url('saleslist')}}" class="btn btn-cancel">لائحه الطلبات</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
