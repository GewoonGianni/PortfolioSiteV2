<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- fontawesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Favicon and other icons -->
    <link rel="shortcut icon" href="/../images/logo.png"/>
    <link rel="apple-touch-icon" href="/../images/logo_dark.png"/>
    <link rel="icon" sizes="192x192" href="/../images/logo_dark.png">

    <title>Gianni Meesters | @yield('title')</title>
</head>
<body class="nav-bar-fix">
<!-- navbar -->
<nav class="navbar fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="/../">
        <img src="/../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo">
        Gianni
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{Request::path() === '/' ? 'active' : ''}}">
                <a class="nav-link" href="/../">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::path() === 'profile' ? 'active' : ''}}" href="/../profile">Profiel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::path() === 'blog' ? 'active' : ''}}" href="/../blog">Blog</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dashboard
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/../dashboard/monitor">Studie Monitor</a>
                    <a class="dropdown-item" href="/../dashboard/link">Studiewijzers</a>
                    <a class="dropdown-item" href="/../dashboard/motivation">Motivatie</a>
                    <a class="dropdown-item" href="/../dashboard/industry">beroepsbeeld</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

<!-- Footer -->
<footer class="footer bg-dark stay-at-bottom">
    <div class="">

        <div>
            <div class="container text-center text-md-left">

                <div class="row">

                    <div class="col mx-auto text-center">

                        <i class="fa fa-instagram p-3" style="color: #38c172; font-size: 3em"></i>

                        <br>

                        <a href="https://instagram.com/gewoongianni" class="text-light" target="_blank">
                            @gewoongianni</a>

                    </div>

                    <hr class="clearfix w-100 d-md-none">

                    <div class="col mx-auto text-center">

                        <i class="fa fa-github p-3" style="color: #38c172; font-size: 3em"></i>

                        <br>

                        <a href="https://github.com/GewoonGianni" class="text-light" target="_blank">
                            GewoonGianni</a>

                    </div>

                    <hr class="clearfix w-100 d-md-none">

                    <div class="col mx-auto text-center">

                        <i class="fa fa-linkedin p-3" style="color: #38c172; font-size: 3em"></i>

                        <br>

                        <a href="https://www.linkedin.com/in/gianni-meesters-022542196/" class="text-light"
                           target="_blank">
                            Gianni Meesters</a>

                    </div>

                </div>

            </div>

        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://instagram.com/gewoongianni" class="text-body" target="_blank"> @gewoongianni</a>
        </div>
        <!-- Copyright -->
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
