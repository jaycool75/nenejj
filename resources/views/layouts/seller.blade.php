<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.seller.head')
    @yield('styles')
</head>
<body>

    @include('inc.seller.sidebar')
    @yield('content')
    @include('inc.seller.footer')
    @yield('scripts')
   
</body>
</html>