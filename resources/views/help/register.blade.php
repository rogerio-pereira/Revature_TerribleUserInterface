@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <marquee><h1 class=text-center>Help Register</h1></marquee>
        <p>
            This is a trick page if you are illiterate. <strong>Read the fields!</strong>
        </p>

        <p>Really?! OK, then.</p>

        <ol>
            <li>Type your name on Name field</li>
            <li>Confirm that you typed right</li>
            <li>Type your email on Email field</li>
            <li>Confirm that you typed right</li>
            <li>Think a good (or not) password</li>
            <li>Memorize it</li>
            <li>Type your good (or not) password on Password field</li>
            <li>Confirm that you typed right</li>
            <li>Type your phone on Phone field</li>
            <li>Confirm that you typed right</li>
            <li>Type your age on Age field</li>
            <li>Confirm that you typed right</li>
            <li>Click the <i class="fas fa-file-alt fa-2x"></i> button</li>
        </ol>
    </div>

    <a href='/help/help' class='helper'><img src='/img/helper.png'></a>
@endsection
