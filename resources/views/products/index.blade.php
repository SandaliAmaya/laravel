<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    {{--<nav class="navbar navbar-inverse">--}}
        {{--<div class="navbar-header">--}}
            {{--<a class="navbar-brand" href="{{ URL::to('products') }}">Nerd Alert</a>--}}
        {{--</div>--}}
        {{--<ul class="nav navbar-nav">--}}
            {{--<li><a href="{{ URL::to('nerds') }}">View All Products</a></li>--}}
            {{--<li><a href="{{ URL::to('nerds/create') }}">Add a Product</a>--}}
        {{--</ul>--}}
    {{--</nav>--}}

    <h1>All the Products</h1>

    {{--<!-- will be used to show any messages -->--}}
    {{--@if (Session::has('message'))--}}
        {{--<div class="alert alert-info">{{ Session::get('message') }}</div>--}}
    {{--@endif--}}
    <div class="panel-heading">Products
        <ul><a href="{{url('pros/create')}}">Add a New Product</a> </ul>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Name</td>
            <td>Decription</td>
            <td>Price</td>
            <td>Added By : </td>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key => $value)
            <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->price }}</td>
                <td>{{Auth::user()->name}}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the product (uses the show method found at GET /products/{id} -->
                    {{--<a class="btn btn-small btn-success" href="{{ URL::to('pros/' . $value->id) }}">Show this Product</a>--}}
                    <a class="btn btn-small btn-success" href="{{ action('ProController@show', $value['id']) }}" >Show</a>

                    {{--<!-- edit this product (uses the edit method found at GET /products/{id}/edit -->--}}
                    {{--<a class="btn btn-small btn-info" href="{{ URL::to('pros/' . $value->id . '/edit') }}">Edit this Product</a>--}}
                    <a class="btn btn-small btn-info" href="{{ action('ProController@edit', $value['id']) }}">Edit</a>

                    <!-- delete the product (uses the show method found at GET /products/{id} -->
                    {{--<a class="btn btn-danger" href="{{ action('ProController@destroy', $value['id']) }}">Delete</a>--}}
                    <form action="{{action('ProController@destroy', $value['id'])}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>