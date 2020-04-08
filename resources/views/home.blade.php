@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <h1 class=text-center>Welcome {{Auth::user()->name}}</h1>
        <p>You are logged in!</p>
        <a href='edit'>Edit</a>
    </div>
@endsection
