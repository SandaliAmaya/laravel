@extends('layouts.app')

@section('content')

    <style>
        /** cart table **/
        #cart {
            display: block;
            border-collapse: collapse;
            margin: 0;
            width: 100%;
            font-size: 1.2em;
            color: #444;
        }

        #cart thead th {
            padding: 8px 0;
            font-weight: bold;
        }

        #cart thead th.first {
            width: 175px;
        }
        #cart thead th.second {
            width: 150px;
        }
        #cart thead th.third {
            width: 300px;
        }
        #cart thead th.fourth {
            width: 150px;
        }
        #cart thead th.fifth {
            width: 150px;
        }

        #cart tbody td {
            text-align: center;
            margin-top: 4px;
        }

        tr.productitm {
            height: 65px;
            line-height: 65px;
            border-bottom: 1px solid #d7dbe0;
        }

    </style>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home
                    <ul><a href="{{url('/pros')}}">View Products</a> </ul>
                </div>
                        {{--<tr>--}}
                            {{--<th class="first">Product Name</th>--}}
                            {{--<th class="second">Description</th>--}}
                            {{--<th class="third">Price</th>--}}
                            {{--<th class="fourth">Added By: </th>--}}

                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--<tr>--}}
                        {{--@foreach($products as $key => $value)--}}
                            {{--<tr>--}}
                                {{--<th>{{$value->name}}</th>--}}
                                {{--<th>{{$value->description}}</th>--}}
                                {{--<th>{{$value->price}}</th>--}}
                                {{--<th> {{ Auth::user()->name }}</th>--}}
                            {{--</tr>--}}
                            {{--@endforeach--}}
                        {{--</tr>--}}
                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
                {{--<div class="panel-body">--}}
                    {{--You are logged in!--}}
                    {{--<table id="cart">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th class="first">Photo</th>--}}
                            {{--<th class="second">Qty</th>--}}
                            {{--<th class="third">Product</th>--}}
                            {{--<th class="fourth">Line Total</th>--}}
                            {{--<th class="fifth">&nbsp;</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}

                        {{--<!-- shopping cart contents -->--}}
                        {{--<tr class="productitm">--}}
                            {{--<!-- http://www.inkydeals.com/deal/ginormous-bundle/ -->--}}
                            {{--<td><img src="images\choco.jpg" class="thumb"></td>--}}
                            {{--<td><input type="number" value="1" min="0" max="99" class="qtyinput" style="height:35px"></td>--}}
                            {{--<td>Design Bundle Package</td>--}}
                            {{--<td>$79.00</td>--}}
                            {{--<td><span class="remove">Added By : {{ Auth::user()->name }}</span></td>--}}
                        {{--</tr>--}}

                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>

@endsection
