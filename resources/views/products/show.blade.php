<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <h1>Showing {{ $pro->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $pro->name }}</h2>
        <p>
            <strong>Description:</strong> {{ $pro->description }}<br>
            <strong>Price:</strong> {{ $pro->price }}
        </p>
    </div>

</div>
</body>
</html>