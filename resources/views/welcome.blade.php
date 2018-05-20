<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel-Vue.js - ToDo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container" id="app">
            <div class="col-md-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link extra-margin" href="#">
                            <img width="300px" height="auto" src="{{ asset('images/logo.png')}}">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">  
                    <div class="bd-example mt-5 mb-4">
                        <form class="form-inline">
                            <div class="form-group col-md-10">
                                <input type="text" class="form-control col-md-10" placeholder="Type your todo...">
                            </div>
                            <button type="submit" class="btn btn-primary ml-2">Add</button>
                        </form>
                    </div>
                    <div class="todo-container">
                        <div class="todo-item">
                            <label><input type="checkbox" name="" value=""></label>
                            <span>
                                dadsdsadasd
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>

        </script>
    </body>
</html>
