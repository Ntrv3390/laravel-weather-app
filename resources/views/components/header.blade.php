<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        @if(isset($weatherData["name"]))
            {{$weatherData["name"]}} Weather
        @else
            Chilling weather app.
        @endif
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container-fluid">
            <a class="navbar-brand mx-3" href="/">
                Chilling Weather App
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/Ntrv3390" target="_blank" rel="noreferrer">
                            GitHub
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://linkedin.com/in/mohammed-puthawala" target="_blank"
                            rel="noreferrer">
                            LinkedIn
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>