{{ View:: make('title')}}
{{ View:: make('menu')}}

<div class="container py-5">
    @if(!empty($users))
    <form action="useredit?rid={{ $users->id }}" method="post">
    @csrf
        <h2 class="text-center">Edit Profile</h2>
        <div>
            <label class="form-label" for="InputName">Full Name</label>
            <input class="form-control" maxlength="100" value="{{ $users->name }}"type="text" name="fullname" id="InputName">
        </div>
        <div>
            <label class="form-label" for="InputEmail">Email Address</label>
            <input class="form-control" maxlength="100" value="{{ $users->email }}" type="email" name="email" id="InputEmail">
        </div>
        <div>
            <label class="form-label" for="InputPassword" class="form-label">Password</label>
            <input class="form-control" maxlength="50" value="{{ $users->password }}" type="password" name="password" id="InputPassword">
        </div>
        <div class="py-2">
        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUpdate" data-bs-dismiss="modal">Update</button>
        <button type="button" onclick="javascript:history.back()" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
</div>
    @else
    Record not found
    @endif
@include('modal.update')
{{ View:: make('footer')}}