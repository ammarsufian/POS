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
    </div>
    <div class="post-page-wrapper">
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-4">
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
                    <div class="invoice-box table-height"
                         style="max-width: 1600px;width:100%;overflow: auto;margin:15px auto;padding: 0;font-size: 14px;line-height: 24px;color: #555;">

                        <table style="width: 100%;line-height: inherit;text-align: left;">
                            @if(!empty($active_customer))
                                <tr>
                                    <td style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                                        <font style="vertical-align: inherit;margin-bottom:25px;"><font
                                                style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">معلومات
                                                الزبون</font></font><br>
                                        <font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">{{$active_customer->name?? ''}}</font></font><br>
                                        <font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">{{$active_customer->mobile_number ??''}}</font></font><br>
                                    </td>
                                    <td style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                                        <font style="vertical-align: inherit;margin-bottom:25px;"><font
                                                style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">معلومات
                                                الفاتوره</font></font><br>
                                        <font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">
                                                رصيد الذمم </font></font><br>
                                    </td>
                                    <td style="padding:5px;vertical-align:top;text-align:right;padding-bottom:20px">
                                        <font style="vertical-align: inherit;margin-bottom:25px;"><font
                                                style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; "></font></font><br>
                                        <font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;font-size: 14px;color:#2E7D32;font-weight: 400;">{{$debit_amount}}</font></font><br>
                                    </td>
                                </tr>
                            @endif

                        </table>
                        <div class="row col-lg-12">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>اسم المنتج</label>
                                    <input id="search" type="text" autofocus>
                                    <div id="productsDropDownParent" class=w-20">
                                        <div class="d-none" id="productsDropDownMenu"
                                             style="position: absolute;z-index: 8;width:400px;max-width:400px;background-color: #fff">
                                            <a class="dropdown-header" href="#">Action</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>سعر الحبه</label>
                                    <input id="input-selling-price" class="form-control" type="number" step="any">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>الكميه</label>
                                    <input id="quantity-field" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <table width="100%">
                            <tr class="heading " style="background: #F3F2F7;">
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    اسم المنتج
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    سعر الحبه
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    الكميه
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    المجموع
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    عمليات
                                </td>
                            </tr>
                            @if(!empty($cart))
                                @foreach(data_get($cart,'items') as $item)
                                    <tr class="details" style="border-bottom:1px solid #E9ECEF ;">
                                        <td>
                                            {{$item->product->name}}
                                        </td>
                                        <td style="padding: 10px;vertical-align: top; ">
                                            {{$item->price}}
                                        </td>
                                        <td style="padding: 10px;vertical-align: top; ">
                                            {{$item->quantity}}
                                        </td>
                                        <td style="padding: 10px;vertical-align: top; ">
                                            {{$item->total}}
                                        </td>
                                        <td style="padding: 10px;vertical-align: top; ">
                                            <a class="confirm-text" id="deleteItemById" data="{{$item->id}}"><img
                                                    src="{{ URL::asset('/assets/img/icons/delete-2.svg')}}"
                                                    alt="img"></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>

                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="total-order w-100 max-widthauto m-auto mb-4">
                                    <ul>
                                        <li>
                                            <h4>قيمه الفاتوره</h4>
                                            <h5>{{data_get($cart,'total',0)}}</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="total-order w-100 max-widthauto m-auto mb-4">
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

                                                <input class="form-control mt-3 d-none" name="debit_amount"
                                                       id="debit_amount" type="text" autofocus autocomplete="off"
                                                       placeholder="قيمة الذمم">
                                            </div>
                                        </div>
                                    </form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a id="order-creation-button" class="btn btn-primary">تاكيد الطلب</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  start define new customer modal  --}}
    <div id="define-new-customer" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex flex-column">
                        <div class="flex-1 mx-sm-3 mb-2">
                            <label for="mobileNumber">اسم الزبون</label>
                            <input type="text" class="form-control"
                                   style="max-width:40vw" name="customerName"
                                   id="customerName" placeholder="اسم الزبون"
                                   autocomplete="off" required autofocus>
                            <div class="d-float w-20">
                                <div class="d-none" id="customersDropDownMenu"
                                     style="position: absolute;z-index: 1000;width:400px;max-width:400px;background-color: #fff">
                                </div>
                            </div>
                        </div>
                        <div id="customerTypeSelect" class="d-none flex-2 mx-sm-3 mb-2">
                            <label for="mobileNumber">نوع الزبون</label>
                            <div class="select-group" style="max-width:40vw">
                                <select class="select" name="customer-type"
                                        id="select-customer-type" required>
                                    <option disabled selected> customer type</option>
                                    @foreach($types as $type)
                                        <option
                                            value="{{$type->id}}">{{$type->value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end define new customer modal   --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script async>
        let productData = {};
        $(document).ready(function () {
            $(document).on('keydown',function(event){
                if(event.keyCode === 16){
                    $("#define-new-customer").show()
                    $("#customerName").focus()
                }else if(event.keyCode === 27){
                    $("#define-new-customer").hide()
                }
                console.log(event.keyCode);
            })

            $('.close-modal').on('click',function (){
                $("#define-new-customer").hide()
            })

            $('#search').on('input', function () {
                if (!this.value.match(/^[0-9]+$/)) {
                    if (this.value) {
                        $.ajax({
                            type: 'GET',
                            url: "{{config('app.url')}}/api/products?name=" + this.value,
                            headers: {'Accept': 'Application/json'},
                            success: function (data) {
                                const productDropDown = $("#productsDropDownMenu");
                                $('.suggestions').remove();
                                if (data.data.length > 0) {
                                    data.data.forEach(function (product, index) {
                                        productDropDown.append("<a class='dropdown-item suggestions' id='product-suggestions-" + index + "' data-id='" + product.id + "'data-price='" + product.price_value + "'>" + product.name + "</a>")
                                    });
                                    productDropDown.removeClass('d-none');
                                } else {
                                    $("#productsDropDownMenu").addClass('d-none');
                                }
                            }
                        });
                    } else {
                        $("#productsDropDownMenu").addClass('d-none');
                    }
                } else {
                    if (this.value.length >= 13) {
                        $.ajax({
                            type: 'GET',
                            url: "{{config('app.url')}}/api/products?barcode=" + this.value,
                            headers: {'Accept': 'Application/json'},
                            success: function (data) {

                                if (data.data.length > 0) {
                                    const product = data.data[0]
                                    $('#search').val(product.name)
                                    $('.suggestions').remove()
                                    $('#input-selling-price').val(product.price_value)
                                    $('#input-selling-price').focus()
                                    productData = {
                                        "product_id": product.id,
                                        "price": product.price_value
                                    }
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: "المنتج غير معرف",
                                        text: 'يرجِى اضافه المنتج او التإكد من اسم المنتج',
                                    })
                                }
                            }
                        });
                    }
                }
            })
            $('#search').on('keydown', function (event) {
                console.log(this.value)
                const productsDropDown = $("#productsDropDownMenu");
                let activeChild = productsDropDown.attr('active-child-index')
                if (productsDropDown.children().length) {
                    activeChild = parseInt(activeChild)
                    if (event.keyCode === 40) {
                        if (isNaN(activeChild)) {
                            $("#product-suggestions-0").addClass('bg-secondary')
                            productsDropDown.attr('active-child-index', 0)
                        } else if (activeChild >= productsDropDown.children().length - 1) {
                            $("#product-suggestions-" + activeChild).removeClass('bg-secondary')
                            nextActiveChild = 0
                            productsDropDown.attr('active-child-index', nextActiveChild)
                            $("#product-suggestions-" + nextActiveChild).addClass('bg-secondary')
                        } else {
                            $("#product-suggestions-" + activeChild).removeClass('bg-secondary')
                            nextActiveChild = parseInt(activeChild) + 1
                            productsDropDown.attr('active-child-index', nextActiveChild)
                            $("#product-suggestions-" + nextActiveChild).addClass('bg-secondary')
                        }
                    } else if (event.keyCode === 13) {
                        const selectedProductSuggestion = $("#product-suggestions-" + activeChild)
                        $('#search').val(selectedProductSuggestion.text())
                        $('.suggestions').remove()
                        $('#input-selling-price').val(selectedProductSuggestion.attr("data-price"))
                        $('#input-selling-price').focus()
                        productData = {
                            "product_id": selectedProductSuggestion.attr("data-id"),
                            "price": selectedProductSuggestion.attr("data-price")
                        }
                    }
                }
            })
            $('#quantity-field').on('change', function (event) {
                productData['quantity'] = this.value
                $.ajax({
                    type: 'POST',
                    url: "{{config('app.url')}}/api/cart/addItemToCart",
                    headers: {'Accept': 'Application/json'},
                    data: productData,
                    success: function (data) {
                        if (data.success) {
                            location.reload()
                        }
                    }
                });
            })
            $('#customerName').on('input', function () {
                if (this.value) {
                    $.ajax({
                        type: 'POST',
                        url: "{{config('app.url')}}/api/customer",
                        headers: {'Accept': 'Application/json'},
                        data: {task: this.value},
                        success: function (data) {
                            const customerDropDown = $("#customersDropDownMenu");
                            $('.customer-suggestions').remove();
                            if (data.data.length > 0) {
                                data.data.forEach(function (customer, index) {
                                    customerDropDown.append("<a class='dropdown-item customer-suggestions' id='customer-suggestions-" + index + "' data-id='" + customer.id + "'>" + customer.name + "</a>")
                                });
                                customerDropDown.removeClass('d-none');
                            } else {
                                $("#customersDropDownMenu").addClass('d-none');
                                $("#customerTypeSelect").removeClass('d-none');
                            }
                        }
                    });
                } else {
                    $("#customersDropDownMenu").addClass('d-none');
                }
            })
            $('#customerName').on('keydown', function (event) {
                const customerDropDown = $("#customersDropDownMenu");
                let activeChild = customerDropDown.attr('active-child-index')
                if (event.keyCode === 9) {
                    $('.customer-suggestions').remove();
                    $("#customerTypeSelect").removeClass('d-none')
                }

                if (customerDropDown.children().length) {
                    activeChild = parseInt(activeChild)
                    if (event.keyCode === 40) {
                        if (isNaN(activeChild)) {
                            $("#customer-suggestions-0").addClass('bg-secondary')
                            customerDropDown.attr('active-child-index', 0)
                        } else if (activeChild >= customerDropDown.children().length - 1) {
                            $("#customer-suggestions-" + activeChild).removeClass('bg-secondary')
                            nextActiveChild = 0
                            customerDropDown.attr('active-child-index', nextActiveChild)
                            $("#customer-suggestions-" + nextActiveChild).addClass('bg-secondary')
                        } else {
                            $("#customer-suggestions-" + activeChild).removeClass('bg-secondary')
                            nextActiveChild = parseInt(activeChild) + 1
                            customerDropDown.attr('active-child-index', nextActiveChild)
                            $("#customer-suggestions-" + nextActiveChild).addClass('bg-secondary')
                        }
                    } else if (event.keyCode === 38) {
                        console.log("key up cursor")
                    } else if (event.keyCode === 13) {
                        const selectedCustomerId = $("#customer-suggestions-" + activeChild).attr('data-id')
                        setActiveCustomer(selectedCustomerId)
                    }
                }
            })
            $("#select-customer-type").on('change', function () {
                createCustomer($("#customerName").val(), this.value)
            })
            $('#payment-method-select').on('change', function () {
                if (this.value === 'cash') {
                    $("#debit_amount").addClass('d-none')
                } else {
                    $("#debit_amount").removeClass('d-none')
                }
            })
            $('#order-creation-button').click(function () {
                const itemCount = parseInt($('#cart-items-count').text());
                if (!itemCount) {
                    Swal.fire({
                        icon: 'error',
                        title: "الفاتوره فارغه",
                        text: 'يرجِى اضافه عناصر الى الفاتوره',
                    })
                }

                const paymentMethod = $('#payment-method-select').find(":selected").val();
                const debit_amount = $("#debit_amount").val()
                if (!paymentMethod) {
                    Swal.fire({
                        icon: 'error',
                        title: "Payment Error",
                        text: 'Please select a payment method',
                    })
                }
                if (paymentMethod === 'debit') {
                    if (!debit_amount) {
                        Swal.fire({
                            icon: 'error',
                            title: "",
                            text: 'الرجاء إضافة قيمه الذمم لعملية الذمم',
                        })
                    }
                    if (debit_amount > parseFloat($("#total_amount").text())) {
                        Swal.fire({
                            icon: 'error',
                            title: "",
                            text: 'لا يمكن لقيمه الذمم ان تكون اكبر من قيمه الفاتوره',
                        })
                    }
                }
                $.ajax({
                    type: 'POST',
                    url: "{{config('app.url')}}/api/order",
                    headers: {'Accept': 'Application/json'},
                    data: {payment_method: paymentMethod, debit_amount_label: debit_amount},
                    success: function (response) {
                        console.log(response.data.id)
                        Swal.fire({
                            icon: 'success',
                            title: "Order",
                            text: 'Order created successfully',
                        }).then(function () {
                            window.open("{{config('app.url').'/print/'}}" + response.data.id);
                            location.reload();
                        })
                    },
                });
            })
            $('#deleteItemById').on('click', function () {
                $.ajax({
                    type: 'POST',
                    url: "{{config('app.url')}}/api/cart/deleteItemById",
                    headers: {'Accept': 'Application/json'},
                    data: {itemId: $(this).attr('data')},
                    success: function () {
                        location.reload()
                    },
                });
            });
            $('#active-customers').on('change', function () {
                setActiveCustomer(this.value)
            })
        });

        const createCustomer = function (name, type) {
            $.ajax({
                type: 'POST',
                url: "{{config('app.url')}}/api/customers",
                headers: {'Accept': 'Application/json'},
                data: {
                    'name': name,
                    'customer_type_id': type
                },
                success: function (response) {
                    console.log(response.data)
                    location.reload()
                },
            });
        }
        const setActiveCustomer = function (id) {
            $.ajax({
                type: 'POST',
                url: "{{config('app.url')}}/api/active_customer",
                headers: {'Accept': 'Application/json'},
                data: {customerId: id},
                success: function (response) {
                    console.log(response.data)
                    location.reload()
                },
            });
        }
    </script>
@endsection
