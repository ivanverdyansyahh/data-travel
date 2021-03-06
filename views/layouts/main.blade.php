<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page Travel</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body class="pt-5">


    <main class="mt-5">
        @yield('content')
    </main>

    @include('partials.footer')


    {{-- SCRIPT --}}
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4264742291.js" crossorigin="anonymous"></script>
  </body>
</html>