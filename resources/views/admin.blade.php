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
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top" style="background-color:;">
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
                    <a class="nav-link" href="{{ url('/') }}">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('laptop/create') }}">create.laptop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('laptops') }}">laptops</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('hps') }}">hps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('hp/create') }}">create.hp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('posts') }}">posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('post/create') }}">create.dell</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('lenovo/create') }}">lenovo.create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('lenovos') }}">lenovos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('mac/create') }}">mac.create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('macs') }}">macs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('microsoft/create') }}">microsoft.create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('microsofts') }}">microsofts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('samsung/create') }}">samsung.create</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('samsungs') }}">samsungs</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('toshiba/create') }}">toshiba.create</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('toshibas') }}">toshibas</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('computer/create') }}">computer.create</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('computers') }}">computers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin') }}">admin</a>
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
