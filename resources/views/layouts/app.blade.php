<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


        @include('inc/head')


    <body>

        <!-- Navbar  -->
        @include('inc/navbar')


        <!-- Main Content  -->
        <div id="app" class="container-fluid vr">

            @yield('content')

        </div>

    </body>
</html>
