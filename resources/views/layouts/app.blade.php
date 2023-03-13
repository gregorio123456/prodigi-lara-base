<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('head_title')</title>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <div class="collapse navbar-collapse "  id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('customer.index')}}">Customer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('order.index')}}">Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('invoice.index')}}">Invoice</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
   <h1 > @yield('content')</h1>
   @yield('table')
    </div>
</body>
</html>