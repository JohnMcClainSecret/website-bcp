<!DOCTYPE html>
<html lang="en">
    <body>
        @include('layouts.head')
        @include('layouts.topbar')
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        @include('layouts.scripts')
        @yield('scripts')

    </body>
</html>
