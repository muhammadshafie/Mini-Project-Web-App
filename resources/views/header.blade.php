{{ View:: make('title') }} 

<div class="w-100 position-absolute top-0 start-50 translate-middle-x">
    @if(session()->has('user'))
        {{View:: make('menu')}}
        <div class="container">
            {{View:: make('user')}}
        </div>
        <div class="container">
            {{View:: make('footer')}}
        </div>
    @else
        <div class="container pt-5">
            @yield('login')
        </div>
    @endif
</div>

