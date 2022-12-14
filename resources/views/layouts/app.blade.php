<html>

<head>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link type="text/css" href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css" rel="stylesheet" />
    <link type="text/css" href="/assets/css/admin.css" rel="stylesheet" />
  </head>
</head>

<body>
  <div class="d-flex bg-surface-secondary">
    @yield('sidenav')
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
      @yield('content-header')
      @yield('content')
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
  <script src="/assets/js/admin.js"></script>
</body>

</html>
