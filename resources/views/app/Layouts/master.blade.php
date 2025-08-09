<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    @include('app.Layouts.head-tag')
</head>

<body>
    @include('app.Layouts.partials.header')

    <div class="site-main-container">
        @yield('content')
    </div>

    <!-- start footer Area -->
    @include('app.Layouts.partials.footer')
    <!-- End footer Area -->
    @include('app.Layouts.script')
</body>

</html>
