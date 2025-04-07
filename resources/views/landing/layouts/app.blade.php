<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Next Level Course</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon dan CSS-->
    @include('partials.css')

    </head>

<body class="rbt-header-sticky">
    <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                    <img src="{{ asset('assets/images/about/sun-01.svg') }}" alt="Sun images"><span title="Light Mode"> Light</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                    <img src="{{ asset('assets/images/about/vector.svg') }}" alt="Vector Images"><span title="Dark Mode"> Dark</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Start Header Area -->
    @include('partials.header')

    <!-- content -->
    @yield('content')

    <!-- JS dan Vendor JS  -->
    <!-- Vendor JS -->
    @include('partials.javascript')
</body>

</html>