@yield('one')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar-nav {
            margin: 0 auto;
            text-align: center;
        }

        .nav-item {
            display: inline-block;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top" style="background-color: antiquewhite;">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://th.bing.com/th?q=Home+Web+Page+Icon&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-XA&cc=EG&setlang=en&adlt=strict&t=1&mw=247"
                style="border-radius: 70%;width: 70px;" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">&#9776;</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('laptop') }}">laptop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('hp') }}">hp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('dell') }}">dell</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('lenovo') }}">lenovo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('toshiba') }}">toshiba</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('mac') }}">mac</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('samsung') }}">samsong</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('microsoft') }}">microsoft</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('computer') }}">computer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">contact</a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
