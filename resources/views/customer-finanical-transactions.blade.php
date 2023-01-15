<?php $page = "productlist"; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('components.pageheader')
                @slot('title')
                    كشف حساب
                @endslot
                @slot('title_1')
                    اسم الزبون: {{$customer->name}}
                @endslot
            @endcomponent
            <div class="pr-4 row d-inline-flex flex-row flex-nowrap">
                <div class="card flex-1 mr-3" style="width: 33vw;">
                    <div class="card-body">
                        <h5 class="card-title">رصيد الذمم</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{data_get($transactions,'debit_transactions')}}</h6>
                    </div>
                </div>
                <div class="card flex-2 pr-3" style="width: 33vw;">
                    <div class="card-body">
                        <h5 class="card-title">رصيد الكاش</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{data_get($transactions,'cash_customer_transactions')}}</h6>
                    </div>
                </div>
            </div>
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
                        <div>
                            <div class="page-btn">
                                @if(data_get($transactions,'debit_transactions') > 0)
                                    <a href="#" id="pay-on-account-btn" class="btn btn-primary"><img
                                            src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img">اضافه دفعه على
                                        الحساب</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table datanew">
                            <thead>
                            <tr>
                                <th>رقم الدفعه</th>
                                <th>الطلب</th>
                                <th>نوع الدفع</th>
                                <th>المبلغ</th>
                                <th>تاريخ التسجيل</th>
                                <th>بيان</th>
                                <th class="text-center">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customer_transactions as $transaction)
                                <tr>
                                    <td>{{$transaction->id}}</td>
                                    <td>{{$transaction->order_id}}</td>
                                    <td>{{$transaction->payment_type}}</td>
                                    <td>{{$transaction->total}}</td>
                                    <td>{{$transaction->created_at->toDateTimeString()}}</td>
                                    <td>{{$transaction->is_pay_on_debit_account ? 'دفعه على الحساب' : ''}}</td>
                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                           aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{url('financial-account-details',['customer' => $customer->id])}}"
                                                   class="dropdown-item"><img
                                                        src="{{ URL::asset('/assets/img/icons/eye1.svg')}}" class="me-2"
                                                        alt="img">كشف حساب</a>
                                            </li>
                                            <li>
                                                <a href="/print/{{$transaction->order_id}}" target="_blank"
                                                   class="dropdown-item"><img
                                                        src="{{ URL::asset('/assets/img/icons/printer.svg')}}"
                                                        class="me-2" alt="img">طباعه فاتوره الطلب</a>
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
            {{--create new pay on account modal --}}

            <div id="pay-on-account-modal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">اضافه دفعه على الحساب</h5>
                            <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="payment-on-account-form">
                                {{csrf_field()}}
                                <label for="customer name ">اسم الزبون</label>
                                <input type="text" class="form-control"
                                       style="max-width:40vw" name="customerName"
                                       id="customerName" value="{{$customer->name}}"
                                       autocomplete="off" readonly>
                                <br>
                                <label for="customer name ">مبلغ الدفعه</label>
                                <input type="number" class="form-control"
                                       style="max-width:40vw" name="payment-amount" id="payment-amount"
                                       autocomplete="off" required>
                            </form>
                        </div>
                        <div class="footer">
                            <button type="button" class="btn btn-primary m-3" id="submit-payment-on-account-btn">
                                تاكيد
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script async>
                $(document).ready(function () {
                    $('#pay-on-account-btn').on('click', function () {
                        $("#pay-on-account-modal").show()
                    })
                    $("#close").on('click', function () {
                        $("#pay-on-account-modal").hide()
                    })
                    $("#submit-payment-on-account-btn").on('click', function () {
                        $.ajax({
                            type: 'POST',
                            url: "{{config('app.url')}}/api/pay-on-account/" + {{$customer->id}},
                            headers: {'Accept': 'Application/json'},
                            data: {"payment_amount": $("#payment-amount").val()},
                            success: function (response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: "",
                                    text: 'تم الدفع بنجاح',
                                }).then(function () {
                                    window.open("{{config('app.url').'/print-income-invoice/'}}" + response.transaction.id);
                                    location.reload();
                                })
                            },
                        });
                    })
                })

            </script>
        </div>
    </div>
@endsection
