@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <marquee><h1 class=text-center>Welcome {{Auth::user()->name}}</h1></marquee>
        <p>Don't forget to update your age after your birthday.</p>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{Auth::user()->id}}</td>
                    <td>{{Auth::user()->name}}</td>
                    <td>{{Auth::user()->email}}</td>
                    <td>{{Auth::user()->phone}}</td>
                    <td>{{Auth::user()->age}}</td>
                </tr>
            </tbody>
        </table>

        <a href='edit'>Edit</a>
    </div>

    <a href='/help/dashboard' class='helper'><img src='/img/helper.png'></a>
@endsection
