<!doctype html>
<html lang="en">

<head>
    @include('admin.layouts.head-tag')

</head>

<body>

    @include('admin.layouts.partials.header')

    <div class="container-fluid">
        <div class="row">
            @include('admin.layouts.partials.sidebar')

            <main role="main " class="px-4 col-md-9 ml-sm-auto col-lg-10 ">
                @yield('content')


            </main>
        </div>
    </div>

    @include('admin.layouts.scripts')
    @include('admin.alerts.sweetalert.error')
    @include('admin.alerts.sweetalert.success')

</body>

</html>
