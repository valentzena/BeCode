<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
</head>

<body>
  @include('layout.sidebar')

  <div class="main-content">
    <!-- Header -->
    @include('layout.header')

    <div class="content">
      @yield('content')
    </div>
    <!-- Footer -->
    @include('layout.footer')
  </div>
</body>

</html>