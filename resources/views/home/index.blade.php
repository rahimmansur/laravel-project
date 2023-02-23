@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Dashboard</h1>
            <p class="lead"> LOGIN SUCCESS</p>
{{--            <a class="btn btn-lg btn-primary" href="" role="button"></a>--}}
        @endauth

        @guest
            <h1>Features</h1>
            <p class="lead"> NEED TO LOGIN </p>
        @endguest
    </div>
@endsection
