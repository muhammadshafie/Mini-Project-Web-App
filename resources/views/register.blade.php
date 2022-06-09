{{ View:: make('title')}}

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

    @media screen {
        
    }
</style>


<div class="container text-center">
    <form action="register" method="post" class="form-signin">
    @csrf
        <img class="mb-2" src="/images/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="mb-3 form-floating">
            <input type="text" name="fullname" class="form-control" id="InputName" placeholder=" " required>
            <label for="InputName" class="form-label">Full Name</label>
        </div>
        <div class="mb-3 form-floating">
            <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder=" "required>
            <label for="InputEmail" class="form-label">Email Address</label>
            <div id="emailHelp" class="form-text text-dark">We'll never share your email with anyone else</div>
        </div>
        <div class="mb-3 form-floating">
            <input type="password" name="password" class="form-control" id="InputPassword" placeholder=" " required>
            <label for="InputPassword" class="form-label">Password</label>
        </div>

        <button type="submit" class="w-100 btn btn-lg btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalRegister">Register</button>
        <button type="button" onclick="javascript:history.back()" class="w-100 btn btn-lg btn-secondary mb-3">Cancel</button>
    </form>
</div>
@include('modal.registered')