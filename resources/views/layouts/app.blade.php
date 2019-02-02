<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Acme</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      <!-- check if in home router, show showcase -->
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
          <!-- add messages to show error -->
          @include('inc.messages')
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>
    <footer id ="footer" class="text-center">
      <p>Copyright 2017 &copy; Acme</p>
    </footer>
  </body>
</html>
