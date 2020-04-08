@extends('layouts.app')

@section('content')
<div class='text-center login'>
    <h1>Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type='text' name='email'>
        <input type='password' name='password'><br/>

        <button><i class="fas fa-door-open fa-2x"></i></button>
    </form>

    <br/>
    <a href='/help/login' class='helper'><img src='/img/helper.png'></a>
</div>
@endsection
