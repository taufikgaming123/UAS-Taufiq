<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo 5</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('/') }}assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
    </head>

  <body>
     <!-- start lwh nav -->
        <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel 10</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                <a class="nav-link {{ request()->segment('1')=='' || request()->segment('1') == 'home' ? 'active' : '' }}" aria-current="page" href="{{ url('home') }}">
                <i class="fas fa-tachometer-alt"></i> Home</a>
                </li>


                <li class="nav-item">
                <a class="nav-link {{ request()->segment('1') =='akuntransaksi'  ? 'active' : '' }}" aria-current="page" href="{{ url('akun') }}">
                <i class="fas fa-user"></i> Akuntansi Transaksi</a>
                </li>

                
                <li class="nav-item">
                <a class="nav-link {{ request()->segment('1') =='supplier'  ? 'active' : '' }}" aria-current="page" href="{{ url('supplier') }}">
                <i class="fas fa-ban"></i> Master Periode</a>
                </li>

                

            </ul>
            </div>
        </div>
        </nav>
        <!-- end lwh nav -->


        <!-- content -->
        <div class="mt-2">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <!-- end content -->

    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>