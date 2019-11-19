
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('inc.head')
<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 left-side-blue flex-center position-ref full-height display-flex font-white">
                    <h1>Welcome to Tweeter</h1>
                </div>
                <div class="flex-center position-ref full-height col-md-6 display-flex">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <ul>
                                    <li>
                                        <a class="landing-link" href="{{ url('/home') }}">Home</a>
                                    </li>
                                @else
                                    <li>
                                        <a class="landing-link" href="{{ route('login') }}">Login</a>
                                    </li>
                                @if (Route::has('register'))
                                    <li>
                                            <a class="landing-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                </ul>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </body>
</html>