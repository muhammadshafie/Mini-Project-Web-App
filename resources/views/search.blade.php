<div class="mb-3 container">
    <form action="userlist" method="post" class="d-flex">
        @csrf
        <input type="search" name="search" id="search" value="{{request()->input('search')}}" placeholder="Search..." class="form-control me-2">
        <input type="submit" value="search" class="btn btn-primary">
    </form>
</div>
