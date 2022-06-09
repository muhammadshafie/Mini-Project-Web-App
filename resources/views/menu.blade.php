<header class="p-3 bg-dark text-white mb-3">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="/images/logo.png" alt="mdo" width="32" height="32" class="rounded" style="background-color: white;">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="/userlist" class="nav-link px-2 text-white">Userlist</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input class="form-control" type="search" name="search" id="search" placeholder="Search" aria-label="Search" value="{{request()->input('search')}}" >
        </form>

        <div class="dropdown text-end">
          <a href="" class="d-block text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/images/profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle" style="background-color: grey;">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="/editmyuser?rid={{ session()->get('user')->id }}">Edit Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
</header>
