<header>
    @if(isset($admin))
        @include('layouts.navbar-admin')
    @else
        @include('layouts.navbar-site')
    @endif
</header>
