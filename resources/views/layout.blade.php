<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telegram Bot Contact Form</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 50px;">
    <a class="navbar-brand" href="#">Telegram</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/updated-activity') }}">Check Activity</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/send-photo') }}">Send Photo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">GitHub Code</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>