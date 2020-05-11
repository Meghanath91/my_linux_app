
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','Labs')}}</title>

        <!-- Fonts -->
  <!-- Styles -->
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">

    </head>
    @include('inc.navbar')
    <body>
@yield('content')
    </body>
</html>
