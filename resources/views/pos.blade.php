<?php $page = "pos"; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="header">
        <!-- Logo -->
        <div class="header-left border-0 ">
            <a href="{{url('index')}}" class="logo">
                <img src="{{ URL::asset('/assets/img/logo.png')}}" alt="">
            </a>
            <a href="{{url('index')}}" class="logo-small">
                <img src="{{ URL::asset('/assets/img/logo-small.png')}}" alt="">
            </a>
        </div>
        <!-- /Logo -->

        <!-- Header Menu -->
        <ul class="nav user-menu">

            <!-- Search -->
            <li class="nav-item">
                <div class="top-nav-search">

                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                    <form action="#">
                        <div class="searchinputs">
                            <input type="text" placeholder="Search Here ...">
                            <div class="search-addon">
                                <span><img src="{{ URL::asset('/assets/img/icons/closes.svg')}}" alt="img"></span>
                            </div>
                        </div>
                        <a class="btn" id="searchdiv"><img src="{{ URL::asset('/assets/img/icons/search.svg')}}"
                                                           alt="img"></a>
                    </form>
                </div>
            </li>
            <!-- /Search -->

            <!-- Flag -->
            <li class="nav-item dropdown has-arrow flag-nav">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                    <img src="{{ URL::asset('/assets/img/flags/us1.png')}}" alt="" height="20">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/us.png')}}" alt="" height="16"> English
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/fr.png')}}" alt="" height="16"> French
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/es.png')}}" alt="" height="16"> Spanish
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/de.png')}}" alt="" height="16"> German
                    </a>
                </div>
            </li>
            <!-- /Flag -->

            <!-- Notifications -->
            <li class="nav-item dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <img src="{{ URL::asset('/assets/img/icons/notification-bing.svg')}}" alt="img"> <span
                        class="badge rounded-pill">4</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="{{url('activities')}}">
                                    <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                    </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">John Doe</span> added new
                                                task <span class="noti-title">Patient appointment booking</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{url('activities')}}">
                                    <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}">
                                    </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                                changed the task name <span class="noti-title">Appointment booking with payment gateway</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{url('activities')}}">
                                    <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg')}}">
                                    </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Misty Tison</span> added
                                                <span class="noti-title">Domenic Houston</span> and <span
                                                    class="noti-title">Claire Mapes</span> to project <span
                                                    class="noti-title">Doctor available module</span></p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{url('activities')}}">
                                    <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-17.jpg')}}">
                                    </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                completed task <span class="noti-title">Patient and Doctor video conferencing</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{url('activities')}}">
                                    <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}">
                                    </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                                added new task <span class="noti-title">Private chat module</span></p>
                                            <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="{{url('activities')}}">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <li class="nav-item dropdown has-arrow main-drop">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-img"><img src="{{ URL::asset('/assets/img/profiles/avator1.jpg')}}" alt="">
                <span class="status online"></span></span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilename">
                        <div class="profileset">
                        <span class="user-img"><img src="{{ URL::asset('/assets/img/profiles/avator1.jpg')}}" alt="">
                        <span class="status online"></span></span>
                            <div class="profilesets">
                                <h6>John Doe</h6>
                                <h5>Admin</h5>
                            </div>
                        </div>
                        <hr class="m-0">
                        <a class="dropdown-item" href="{{url('profile')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-user me-2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            My Profile</a>
                        <a class="dropdown-item" href="{{url('generalsettings')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-settings me-2">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                            </svg>
                            Settings</a>
                        <hr class="m-0">
                        <a class="dropdown-item logout pb-0" href="{{url('signin')}}"><img
                                src="{{ URL::asset('/assets/img/icons/log-out.svg')}}" class="me-2" alt="img">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- /Header Menu -->
        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
               aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{url('profile')}}">My Profile</a>
                <a class="dropdown-item" href="{{url('generalsettings')}}">Settings</a>
                <a class="dropdown-item" href="{{url('signin')}}">Logout</a>
            </div>
        </div>
        <!-- /Mobile Menu -->
    </div>
    <div class="page-wrapper ms-0 px-2">
        <div class="content">
            <div class="row">
                <div class="col-lg-5 col-sm-12 ">
                    <div class="order-list w-100">
                        <div class="card card-order w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 w-100">
                                        <a href="javascript:void(0);" class="btn btn-adds" data-bs-toggle="modal"
                                           onclick="validateCustomer()">تعريف الزبون</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="select-split ">
                                            <div class="select-group w-100">
                                                <select hidden class="select" id="active-customers">
                                                    <option disabled selected>الزبائن الحاليين</option>
                                                    @foreach($customers_list as $customer)
                                                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <input class="form-control" name="barcode"
                                               id="search" type="search" autofocus
                                               placeholder="الباركود او اسم المنتج">
                                    </div>
                                    @if(!empty($active_customer))
                                        <div class="col-12 py-3 mt-3">
                                            <div class="rounded border border-warning mt-3 p-2">
                                                <div class="d-flex justify-content-between ">
                                                    <div class="d-flex w-50">
                                                        <p class="fs-6">
                                                            اسم الزبون :
                                                        </p>
                                                        <p class="fs-6">
                                                            {{$active_customer->name}}
                                                        </p>
                                                    </div>
                                                    <div class="d-flex w-50">
                                                        <p class="fs-6">
                                                            وقت البدء :
                                                        </p>
                                                        <p class="fs-6">
                                                            {{$active_customer->created_at->diffForHumans()}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="fs-6">
                                                        هاتف الزبون :
                                                    </p>
                                                    <p class="fs-6">
                                                        {{$active_customer->mobile_number}}
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="split-card">
                            </div>
                            <div class="card-body pt-0 pb-2">
                                <div class="setvalue">
                                    <ul>
                                        <li class="total-value">
                                            <h5>المجموع </h5>
                                            <h6>{{data_get($cart,'total',0)}}</h6>
                                        </li>
                                    </ul>
                                </div>
                                <form id="order-form">
                                    <div class="setvaluecash">
                                        <div class="select-group w-100">
                                            {{csrf_field()}}
                                            <select required class="select form-control" id="payment-method-select"
                                                    name="payment-method">
                                                <option disabled>طريقة الدفع</option>
                                                <option value="cash">كاش</option>
                                                <option value="debit">ذمم</option>
                                            </select>
                                        </div>
                                    </div>
                                    <a class="w-100 btn btn-primary" id="order-creation-button" >
                                        تاكيد الطلب
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12 h-100">
                    <div class="card-body pt-0 h-100">
                        <div class="totalitem">
                            <h4> عدد الاصناف: {{data_get($cart,'count',0)}}</h4>
                            <a href="javascript:void(0);">Clear all</a>
                        </div>
                        <span class="d-none" id="cart-items-count">{{data_get($cart,'count',0)}}</span>
                        <div class="product-table " style="height: 75vh">
                            @if($cart)
                                @foreach(data_get($cart,'items') as $item)
                                    <ul class="product-lists">
                                        <li>
                                            <div class="productimg">
                                                <div class="productcontet">
                                                    <h4>{{$item->product->name}}
                                                        <a href="javascript:void(0);" class="ms-2"
                                                           data-bs-toggle="modal" data-bs-target="#edit"><img
                                                                src="{{ URL::asset('/assets/img/icons/edit-5.svg')}}"
                                                                alt="img"></a>
                                                    </h4>
                                                    <div class="increment-decrement">
                                                        <div class="input-groups">
                                                            <input type="button" value="-"
                                                                   class="button-minus dec button">
                                                            <input type="text" name="child" value="{{$item->quantity}}"
                                                                   class="quantity-field">
                                                            <input type="button" value="+"
                                                                   class="button-plus inc button ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>{{$item->product->price}}</li>
                                        <li><a class="confirm-text" id="deleteItemById" data="{{$item->id}}"><img
                                                    src="{{ URL::asset('/assets/img/icons/delete-2.svg')}}"
                                                    alt="img"></a></li>
                                    </ul>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Check customer exists -->
            <div class="modal fade" id="validateCustomerData" tabindex="-1" aria-labelledby="create" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Check customer data </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <span id="message" class="d-none"> تعريف زبون جديد </span>
                                <form class="form-inline">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label for="mobileNumber" class="sr-only">Password</label>
                                        <input type="text" class="form-control" name="mobile_number"
                                               id="mobileNumber" placeholder="رقم الهاتف" required>
                                    </div>
                                    <a class="btn btn-primary mb-2" onclick="validateMobileNumber()">
                                        التحقق من اسم الزبون
                                    </a>
                                </form>
                            </div>
                            <div id="extension-validate-user-form" class="d-none">
                                <form method="post" action="{{route('create-customer')}}" id="create-user-form"
                                      class="form-inline">
                                    {{csrf_field()}}
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label for="inputName" class="sr-only">Name</label>
                                        <input type="text" class="form-control" name="name" id="inputName"
                                               placeholder="اسم الزبون" required>
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label for="inputMobileNumber" class="sr-only">MobileNumber</label>
                                        <input type="text" class="form-control" name="mobile_number"
                                               id="inputMobileNumber" placeholder="رقم الهاتف" required>
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label for="inputCityName" class="sr-only">City</label>
                                        <input type="text" class="form-control" name="city"
                                               id="inputCityName" placeholder="المدينه" required>
                                    </div>
                                    <div class="select-group">
                                        <select class="select" name="customer-type" required>
                                            @foreach($types as $type)
                                                <option value="{{$type->id}}">{{$type->value}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary mb-2">
                                        تعريف زبون
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Check customer exists -->
            <!-- add to cart modal -->
            <div id="addToCartModal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">اضافة منتج الى السلة</h5>
                            <button type="button" class="close" data-dismiss="modal" id="add-product-to-cart-modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{route('addItemToCart')}}">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <p class="fs-6">اسم المنتج :</p>
                                        <p class="fs-6" id="product-name"></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="fs-6"> كمية المنتج :</p>
                                        <p class="fs-6" id="product-qty"></p>
                                    </div>
                                </div>
                                <input hidden name="product_id" id="product-id"/>
                                <input type="number" class="form-control" value="1"
                                       id="quantity" name="quantity" placeholder="stock" required/>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">اضافه</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end add to cart modal -->
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script async>
            const data = {}
            $(document).ready(function () {
                $('#search').on('input', function () {
                    if (this.value.length >= 10) {
                        console.log(this.value)
                        $.ajax({
                            type: 'GET',
                            url: "{{config('app.url')}}/api/products?task=" + this.value,
                            headers: {'Accept': 'Application/json'},
                            success: function (data) {
                                if (data.data.length > 0 ) {
                                    const product = data.data[0]
                                    $('#product-name').text(product.name)
                                    $('#product-qty').text(product.quantity)
                                    $('#product-id').val(product.id)

                                    $('#addToCartModal').modal('show')
                                }else{
                                    Swal.fire({
                                        icon: 'error',
                                        title: "المنتج غير معرف",
                                        text: 'يرجِى اضافه المنتج او التإكد من اسم المنتج',
                                    })
                                }
                            }
                        });
                    }
                });

                $('#active-customers').on('change', function () {
                    console.log(this.value);
                    $.ajax({
                        type: 'POST',
                        url: "{{config('app.url')}}/api/active_customer",
                        headers: {'Accept': 'Application/json'},
                        data: {customerId: this.value},
                        success: function (response) {
                            console.log(response.data)
                            location.reload()
                        },
                    });
                })
                $('#add-product-to-cart-modal').click(() => {
                    $('#addToCartModal').modal('hide');
                })
                $('#order-creation-button').click(function () {
                    const itemCount = parseInt($('#cart-items-count').text());
                    if(!itemCount){
                        Swal.fire({
                            icon: 'error',
                            title: "الفاتوره فارغه",
                            text: 'يرجِى اضافه عناصر الى الفاتوره',
                        })
                    }

                    const paymentMethod = $('#payment-method-select').find(":selected").val();
                    if(!paymentMethod){
                        Swal.fire({
                            icon: 'error',
                            title: "Payment Error",
                            text: 'Please select a payment method',
                        })
                    }
                    $.ajax({
                        type: 'POST',
                        url: "{{config('app.url')}}/api/order",
                        headers: {'Accept': 'Application/json'},
                        data: {payment_method:paymentMethod},
                        success: function (response) {
                            Swal.fire({
                                icon: 'success',
                                title: "Order",
                                text: 'Order created successfully',
                            })
                            // location.reload()
                        },
                    });
                })
                $('#deleteItemById').on('click',function(){
                    console.log($(this).attr('data'))
                    $.ajax({
                        type: 'POST',
                        url: "{{config('app.url')}}/api/cart/deleteItemById",
                        headers: {'Accept': 'Application/json'},
                        data: {itemId: $(this).attr('data')},
                        success: function (response) {
                            console.log(response.data)
                            location.reload()
                        },
                    });
                });
            })

            const validateMobileNumber = function () {
                const mobileNumber = $('#mobileNumber').val();
                $.ajax({
                    type: 'GET',
                    url: "{{config('app.url')}}/api/customers?mobile_number=" + mobileNumber,
                    headers: {'Accept': 'Application/json'},
                    success: function (response) {
                        if (response.data.length == 0) {
                            $('#message').html('الزبون غير موجود').removeClass('d-none')
                            $("#extension-validate-user-form").removeClass('d-none')
                        } else {
                            $('#message').html('الزبون موجود').removeClass('d-none')
                            $('#validateCustomerData').modal('hide')
                            location.reload()
                        }

                    },
                });
            }
            const validateCustomer = function () {
                $('#validateCustomerData').modal('show');
            }
        </script>
    @component('components.modal-popup')
    @endcomponent
@endsection
