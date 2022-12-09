<?php $page = "addproduct"; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('components.pageheader')
                @slot('title')
                    إضافة جديد
                @endslot
                @slot('title_1')
                    إضافة منتج جديد
                @endslot
            @endcomponent
            <!-- /add -->
            <div class="card">
                <div class="card-body">
                    <form action="{{route('addProduct')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>إسم المنتج</label>
                                    <input type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>الباركود</label>
                                    <input type="text" name="barcode" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>الكمية</label>
                                    <input type="number" name="quantity"   required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>سعر مفرق</label>
                                    <input type="number" name="price"   step="any" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>سعر الجملة</label>
                                    <input type="number" name="wholesale_price" step="any" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>سعر التكلفه</label>
                                    <input type="number" name="cost_price" step="any" required>
                                </div>
                            </div>
{{--                            <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>سعر جملة الجملة</label>--}}
{{--                                    <input type="number" name="traders_price" step="any" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label> الحالة</label>--}}
{{--                                    <select class="select" name="status">--}}
{{--                                        <option value="not-available">غير موجود</option>--}}
{{--                                        <option value="available" selected>موجود</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label> صورة المنتج</label>--}}
{{--                                    <div class="image-upload">--}}
{{--                                        <input type="file" name="image" required>--}}
{{--                                        <div class="image-uploads">--}}
{{--                                            <img src="{{ URL::asset('/assets/img/icons/upload.svg')}}" alt="img">--}}
{{--                                            <h4>Drag and drop a file to upload</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2">حفظ</button>
                                <a href="{{url('productlist')}}" class="btn btn-cancel">إلغاء</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /add -->
        </div>
    </div>

    <script>
        $('document').ready(function(){
            $('.datepicker').datepicker({
                inline: true
            });
        })
    </script>
@endsection
