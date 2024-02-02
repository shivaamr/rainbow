<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice  {{$orders->id}}</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Main Title</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoice Id: {{$orders->id}}</span> <br>
                    <span>Date: {{$orders->created_at->format('d-m-y')}}</span> <br>
                    <span>Zip code : 560077</span> <br>
                    <span>Address: #555, Main road, shivaji nagar, Bangalore, India</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Order Id:</td>
                <td>6</td>

                <td>Full Name:</td>
                <td>{{$orders->username}}</td>
            </tr>
            <tr>
                <td>Tracking Id/No.:</td>
                <td>{{$orders->tracking_no}}</td>

                <td>Email Id:</td>
                <td>{{$orders->email}}</td>
            </tr>
            <tr>
                <td>Ordered Date:</td>
                <td>{{$orders->created_at->format('d-m-y')}}</td>

                <td>Phone:</td>
                <td>{{$orders->phone}}</td>
            </tr>
            <tr>
                <td>Payment Mode:</td>
                <td>{{$orders->payment_mode}}</td>

                <td>Address:</td>
                <td>{{$orders->address}}</td>
            </tr>
            <tr>
                <td>Order Status:</td>
                <td>completed</td>

                <td>Pin code:</td>
                <td>{{$orders->pincode}}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Order Items
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        @php
                                                    $totalprice = 0;
                                                @endphp

                                                @foreach( $orders->orderItems as  $orderItem)
                                                    <tr>
                                                <td>{{$orderItem->id}}</td>


                                                    <td> {{ $orderItem->product->name}}</td>
                                                    <td>{{ $orderItem->price}}</td>
                                                    <td>{{ $orderItem->quantity}}</td>
                                                    <td>{{ $orderItem->quantity * $orderItem->price}}</td>
                                                    @php
                                                    $totalprice += $orderItem->quantity * $orderItem->price;
                                                @endphp
                                                    </tr>

                                                @endforeach

                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                    <td><p>Total Amount</p></td>
                                                    <td>{{ $totalprice}}</td>
                                                </tr>
        </tbody>
    </table>




</body>
</html>
