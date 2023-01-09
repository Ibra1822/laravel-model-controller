<header id="start">
    <nav>
        <ul>
            <li><a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a></li>
            <li><a class="{{Route::currentRouteName() === 'top' ? 'active' : ''}}" href="{{route('top')}}">Best Movies</a></li>
        </ul>
    </nav>
</header>
