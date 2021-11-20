<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- CSS only -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css\style.css')}}">
    </head>
    <body>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

                <div class="container">
                    <a class="text-white nav-link h3" href="{{ url('/') }}">Students</a>
                </div>

                <div class="container d-flex align-items-center justify-content-end">
                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('add-students') }}">Add new student</a>
                          </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('show-students') }}">Student List</a>
                      </li>


                    </ul>
                </div>

              </nav>


          @yield('content')
    </body>
</html>
