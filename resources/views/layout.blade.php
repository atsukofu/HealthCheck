<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
  <title>HealthCheck</title>
  <style>body {padding: 80px;}</style>
</head>
<body>
  <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
    <a class='navbar-brand' href="{{route('staff.list')}}">HealthCheck</a>
  </nav>
  <div class='container'>
    @yield('content')
  </div>
</body>
</html>