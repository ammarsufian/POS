<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'PT Sans', sans-serif;
        }

        @page {
            size: 2.8in 11in;
            margin-top: 0cm;
            margin-left: 0cm;
            margin-right: 0cm;
        }

        table {
            width: 100%;
        }

        tr {
            width: 100%;

        }

        h1 {
            text-align: center;
            vertical-align: middle;
        }

        #logo {
            width: 60%;
            text-align: center;
            -webkit-align-content: center;
            align-content: center;
            padding: 5px;
            margin: 2px;
            display: block;
            margin: 0 auto;
        }

        header {
            width: 100%;
            text-align: center;
            -webkit-align-content: center;
            align-content: center;
            vertical-align: middle;
        }

        .items thead {
            text-align: center;
        }

        .center-align {
            text-align: center;
        }

        .bill-details td {
            font-size: 12px;
        }

        .receipt {
            font-size: medium;
        }

        .items .heading {
            font-size: 12.5px;
            text-transform: uppercase;
            border-top: 1px solid black;
            margin-bottom: 4px;
            border-bottom: 1px solid black;
            vertical-align: middle;
        }

        .items thead tr th:first-child,
        .items tbody tr td:first-child {
            width: 47%;
            min-width: 47%;
            max-width: 47%;
            word-break: break-all;
            text-align: left;
        }

        .items td {
            font-size: 12px;
            text-align: right;
            vertical-align: bottom;
        }

        .price::before {
            content: "\20B9";
            font-family: Arial;
            text-align: right;
        }

        .sum-up {
            text-align: right !important;
        }

        .total {
            font-size: 13px;
            border-top: 1px dashed black !important;
            border-bottom: 1px dashed black !important;
        }

        .total.text, .total.price {
            text-align: right;
        }

        .total.price::before {
            content: "\20B9";
        }

        .line {
            border-top: 1px solid black !important;
        }

        .heading.rate {
            width: 20%;
        }

        .heading.amount {
            width: 25%;
        }

        .heading.qty {
            width: 5%
        }

        p {
            padding: 1px;
            margin: 0;
        }

        section, footer {
            font-size: 12px;
        }
    </style>
</head>

<body style="max-width: 80mm" dir="rtl">
<header>
    <div id="logo" class="media" data-src="logo.png" src="./logo.png"></div>

</header>
<table class="bill-details">
    <tbody>
    <tr>
        <th class="center-align" colspan="2"><span class="receipt">خيرات المستنده</span></th>
    </tr>
    <tr>
        <th class="center-align" colspan="2"><span class="receipt">0797341358</span></th>
    </tr>
    <tr>
        <td>التاريخ : <span>{{\Carbon\Carbon::parse($order->created_at)->format('d/m/Y')}}</span></td>
    </tr>
    <tr>
        <td>اسم العميل: <span>{{$customer->name}}</span></td>
        <td> #<span>{{$order->id}}</span></td>
    </tr>
    </tbody>
</table>

<table class="items">
    <thead>
    <tr>
        <th class="heading name">الصنف</th>
        <th class="heading qty">الكميه</th>
        <th class="heading rate">الحبه</th>
        <th class="heading amount">المجموع</th>
    </tr>
    </thead>

    <tbody>
    @foreach($order->items as $item)
        <tr>
            <td>{{$item->product->name}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->total}}</td>
        </tr>
    @endforeach
    <tr>
        <th colspan="3" class="total text">المجموع</th>
        <th class="total">{{$order->items->sum('total')}}</th>
    </tr>
    <tr>
        <th colspan="3" class="total text">طريقه الدفع</th>
        <th class="total">{{$order->payment_method}}</th>
    </tr>
    </tbody>
</table>
<section>
    <p style="text-align:center">
        شكرا لزيارتكم!
    </p>
</section>
</body>
<script>
    window.onload = function () {
        print();
    };
</script>
</html>
