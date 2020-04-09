@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <marquee><h1 class=text-center>Help Login</h1></marquee>
        <p>
            I don't believe you couldn't understand the login screen!
            This is your first time using a computer that you don't know is required a username or password?!
        </p>

        <p>Well, let's go:</p>

        <ol>
            <li>Type your username on the first field</li>
            <li>Type your password on the first field</li>
            <li>Click the <i class="fas fa-door-open fa-2x"></i> button</li>
        </ol>

        <p><strong>PRO TIP:</strong> Username is your email</p>
    </div>

    <a href='/help/help' class='helper'><img src='/img/helper.png'></a>
@endsection
