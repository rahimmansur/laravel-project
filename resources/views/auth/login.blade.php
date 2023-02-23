@extends('layouts.auth-master')

@section('content')

    <div>
    <form method="post" action="{{ route('login.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
{{--        <img class="mb-5 col-md-12" src="{!! url('images/logo-ar-3.gif') !!}" alt="" width="400px" height="150px">--}}

        <h1 class="h3 mb-4fw-normal">Login</h1>
        <p></p>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email or Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
            <p><a href="{{ route('register.perform') }}" style="color:dodgerblue"></p>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <p></p>
        <p><a href="{{ route('register.perform') }}" style="color:dodgerblue">Create An Account</a></p>
        <p></p>
        <p><a href="#" style="color:dodgerblue">Forgot Password?</a></p>

        @include('auth.partials.copy')
    </form>
    </div>
@endsection
