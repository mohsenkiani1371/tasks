<!DOCTYPE html>
<html lang="fa" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="_token" content="{{csrf_token()}}">
    <title>مدیریت کارها</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header class="bg-primary text-center p-3">
      <strong>مدیریت کارها</strong>
    </header>
    <main class="p-3 text-right" dir="rtl">
      @include('fragments.flash')
      @yield('content')
    </main>

    <script>
      documentRoot = "{{url('/')}}";
    </script>
    <script src='{{asset("js/app.js")}}'></script>
    <script src='{{asset("js/main.js")}}'></script>

  </body>
</html>
