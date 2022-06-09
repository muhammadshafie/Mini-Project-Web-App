@extends('header')
@section('login')

<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

</style>

    @if(session('status'))
        <div class="alert alert-warning position-absolute top-0 end-0 text-align-middle rounded-4" id="message">
            {{ session('status') }} <i class="bi bi-x-lg btn" onclick="closeFunction()" type="button"></i>
        </div>
    @endif

<div class="container text-center">
    <form action="login" method="post" class="form-signin">
    @csrf
        <img class="mb-2" src="/images/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 fw-normal">Sign in</h1>

        <div class="mb-3 form-floating">
            <input type="email" name="email" class="form-control" id="InputEmail" placeholder=" " required>
            <label for="InputEmail">Email Address</label>
        </div>
        <div class="mb-3 form-floating">
            <input type="password" name="password" class="form-control" id="InputPassword" placeholder=" " required>
            <label for="InputPassword">Password</label>
        </div>

        <button type="submit" class="w-100 btn btn-lg btn-primary mb-3">Login</button>
        <button type="button" onclick="window.location='/register'" class="w-100 btn btn-lg btn-secondary mb-3">Register</button>
        <p class="mt-5 mb-3 text-dark">&copy; 2022  MPUICT03 WAD Company, Inc</p>
    </form>

@endsection
</div>

