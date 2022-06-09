<div class="modal py-5" tabindex="-1" role="dialog" id="modalAdd">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-6 shadow">
            <div class="modal-header text-center py-2">
                <div class="modal-body py-2 text-center">
                    <h5>Add User</h5>
                </div>
            </div>
            <div class="modal-body container text-center">
                <form action="newuser" method="post">
                @csrf
                    <div class="mb-3 form-floating">
                        <input type="text" name="fullname" class="form-control" id="InputName" placeholder=" " required>
                        <label for="InputName" class="form-label">Full Name</label>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder=" "required>
                        <label for="InputEmail" class="form-label">Email Address</label>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="password" name="password" class="form-control" id="InputPassword" placeholder=" " required>
                        <label for="InputPassword" class="form-label">Password</label>
                    </div>
                    <button type="submit" class="w-100 btn btn-lg btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalSuccessAdd" data-bs-dismiss="modal">Add New User</button>
                    <button type="button" class="btn btn-lg btn-light w-100 mx-0" data-bs-dismiss="modal">Cancel</button>   
                </form>
            </div>
        </div>
    </div>
</div>
@include('modal.addsuccess')