
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('inc.head')
<body>
    <div id="app" class="container-fluid bg-pic">
        <div class="full-height">
            @if (Route::has('login'))
                <div class="center-content">
                    @auth
                        <ul>
                            <li>
                                <a class="links" href="{{ url('/home') }}">Home</a>
                            </li>
                        @else
                            <li>
                                <a class="links" href="{{ route('login') }}">Login</a>
                            </li>
                        @if (Route::has('register'))
                            <li>
                                    <a class="links" href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

    </div>
    <div class="container">
        <div class="media text-white mt-5">
            <img src="/img/chat-pic.jpg" class="mr-3 img-thumbnail img-size" alt="skate space">
            <div class="media-body">
              <h5 class="mt-0 ml-4 text-center">Connect, Battle, Share your favorite skate locations</h5>
              <p class="text-center mt-4">Connect with others. Challenge them to a S.K.A.T.E battle.</p> 
            </div>
          </div>
    </div>
</body>
</html>