<?php
/**
 * Created by PhpStorm.
 * User: D_Senanayake
 * Date: 9/19/2017
 * Time: 11:56 AM
 */?>
<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('users') }}">Users</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('users') }}">View All Users</a></li>
        <li><a href="{{ URL::to('users/create') }}">Create a User</a>
    </ul>
</nav>

<h1>All the Users</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->password}}</td>

            <td>

                {{ Form::open(array('url' => 'users/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this User', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}

                <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->id) }}">Show this User</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit this User</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>