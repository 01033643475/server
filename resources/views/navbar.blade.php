<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .OffersBanners {
            padding: 20px;
            background-color: #f5f5f5;
        }

        .OfferCard {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .OfferCard__Link {
            display: block;
            position: relative;
        }

        .OfferCard picture img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .slider {
            display: flex;
            overflow-x: auto;
            padding: 10px 0;
            gap: 10px;
        }

        .OfferCard.relative {
            flex: 1;
            min-width: 212px;
        }

        .OfferCard__Triangle {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .OfferCard__Scrolldown {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #007aff;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .OfferCard__Scrolldown svg {
            width: 20px;
            height: 20px;
        }

        @media (max-width: 768px) {
            .slider {
                flex-direction: column;
            }

            .OfferCard.relative {
                margin: 10px 0;
            }

            .OfferCard__Triangle {
                display: none;
            }
        }

        .navbar {
            background-color: #007aff;
            padding: 15px;
            border-radius: 10px;
        }

        .navbar-brand img {
            height: 50px;
        }

        .search-bar {
            flex: 1;
            margin: 0 20px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .nav-items {
            display: flex;
            justify-content: space-evenly;
            background-color: darkblue;
            position: relative;
            top: 10px;
            border-radius: 10px;
        }

        .nav-items a:hover {
            color: rgb(179, 55, 55);
        }

        .nav-items a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav-items a:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <header style="    position: relative;">
        <div class="navbar d-flex align-items-center">
            {{-- <a class="navbar-brand" href="{{ route('contact') }}"> --}}
            <img src="logo.png" alt="Logo">
            </a>
            <div class="search-bar">
                <input type="text" placeholder="Search Products" style="width:50%;position: relative; left: 25%;">
            </div>
            <a href="" class="btn btn-light">ar</a>
        </div>
        <div class="mt-3 nav-items">
            <a href="{{ url('about') }}">Home</a>
            <a href="{{ url('laptop') }}">laptop$pc</a>
            <a class="nav-link" href="{{ url('hp') }}">hp</a>
            <a class="nav-link" href="{{ url('dell') }}">dell</a>
            <a class="nav-link" href="{{ url('lenovo') }}">lenovo</a>
            <a class="nav-link" href="{{ url('toshiba') }}">toshiba</a>
            <a class="nav-link" href="{{ url('mac') }}">mac</a>
            <a class="nav-link" href="{{ url('samsung') }}">samsong</a>
            <a class="nav-link" href="{{ url('microsoft') }}">microsoft</a>
            <a class="nav-link" href="{{ url('computer') }}">computer</a>
            <a class="nav-link" href="{{ url('admin') }}">admin</a>

            <a class="nav-link" href="{{ url('/') }}">contact</a>


        </div>
        <br><br><br>
    </header>
</body>

</html>
