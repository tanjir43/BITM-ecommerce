<!DOCTYPE html>
<html lang="en">

<head>
<title>Molla - @yield('title') </title>
    @include('admin.includes.style')
</head>



<body class="fixed-navbar">
<div class="page-wrapper">
@include('admin.includes.header')
@include('admin.includes.menu')
        <div class="content-wrapper">
@yield('body')
@include('admin.includes.footer')
        </div>

@include('admin.includes.script')
</div>

</body>
</html>
