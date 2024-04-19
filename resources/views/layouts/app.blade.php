 <!DOCTYPE html>
 <html> 
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Stylesheets-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap.min.js') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A700"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inika%3A700"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- jQuery UI for drag and drop -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <style type="text/css">
        body {
            background-color: #ffffff;
        }
        .logo{
            max-width: 50px;
            height: 50px;
        }
        .landing-head{
            text-align: center;
        }
        </style>
        <title> @yield('title')</title>
    </head>
    <body>
        <main>
            @yield('content')
        </main>
