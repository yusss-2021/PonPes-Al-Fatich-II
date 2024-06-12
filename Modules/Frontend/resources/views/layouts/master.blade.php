<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondok Pesantren Al Fatich 2</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous" />
      <style>
        .font-p{
          font-size: 12px;
        }
        .font-13{
          font-size: 13px;
        }
        .mr-1rem{
          margin-right: 1rem;
        }
        .card-title{
          font-weight: 500;
          line-height: 1.2;
          color: black;
        }
      </style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
     
</head>
<body>

    @section('header')
        @include('frontend::layouts.header')
    @show
    <main id="app">
        @yield('content')
    </main>
    @section('footer')
        @include('frontend::layouts.footer')
    @show
</body>
</html>
