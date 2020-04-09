@extends('layouts.app')

@section('content')
    <div class='text-center edit'>
        <marquee><h1>Edit</h1></marquee>

        <form method="POST" action="{{ route('user.update') }}">
            @csrf
            @method('PUT')

            <input id="name" type="text" name="name" placeholder='Name' class='input'>
            <input type='text' name='email' placeholder='Email' class='input'>
            <input type='password' name='password' placeholder='Password' class='input'>
            <input type='text' name='phone' placeholder='Phone' class='input'>
            <input type='text' name='age' placeholder='Age' class='input'><br/>

            <button>Edit</button>
        </form>

        <br/>
        <a href='/help/edit' class='helper'><img src='/img/helper.png'></a>
    </div>
@endsection

@section('scripts')
    <script>
        $('.input').blur(function() {
            value = $(this).val();
            let sure = null;

            if(value) {
                sure = confirm("Are you sure?");
                if (sure === false)
                    $(this).val('')
            }
        });
    </script>
@endsection