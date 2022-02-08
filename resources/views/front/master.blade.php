<!DOCTYPE html>
<html lang="en">

<head>
  @include('front.includes.meta')
    <title>Molla - @yield('title')</title>
    @include('front.includes.style')
</head>

<body>

    @include('front.includes.header')
    @yield('body')
   @include('front.includes.footer')




@include('front.includes.script')

</body>
</html>
