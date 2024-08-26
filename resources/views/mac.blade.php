    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Professional Product Display</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="{{ asset('/resources/css/app.css') }}">
        <style>
            body {
                margin: 0;
                padding: 0;
            }

            .product-container {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .product-card {
                max-height: 450px;
                position: relative;
                width: 321px;
                border-radius: 20px;
                text-align: center;
                background-color: #fff;
                border: 1px solid #ddd;
                overflow: hidden;
                transition: transform 0.2s, border-radius 0.2s;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                margin-bottom: 1rem;
            }

            .product-card:hover {
                transform: scale(1.04);
                border-radius: 40px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .product-image img {
                max-width: 68%;
                height: auto;
            }

            .product-title {
                max-width: 400px;
                color: maroon;
                font-size: revert-layer;
            }

            .product-price {
                text-align: center;
                font-style: oblique;
                font-weight: 600;
            }

            .product-label h5 {
                color: orangered;
            }

            .product-actions button {
                border-radius: 15px;
                color: indigo;
            }
        </style>
    </head>

    <body>
        @include('navbar')
        <div class="product-container" style="display: ruby;">
            @foreach ($mac as $item)
                <div class="product-card">
                    <div class="product-image">
                        <img style="  margin-top: 5px;width: 150px;" src="{{ $item->img }}" alt="Product Image">
                    </div>
                    <div class="product-name">
                        <h4 style="text-align: center; color: coral">{{ $item->type }}</h4>
                    </div>
                    <div class="product-info">
                        <p class="product-title">{{ $item->title }}</p>
                        <div class="product-price">
                            <span class="old-price">
                                <h2 style="color: crimson">price</h2>
                                <span style="font-size: 18px">$</span>{{ $item->price }}
                            </span>
                            <div class="product-label">
                                <h5>discount</h5>{{ $item->discount }}
                            </div>
                        </div>
                        <div class="product-actions">
                            <button class="add-to-wishlist">Shop now</button>
                        </div>
                        <br>
                    </div>
                </div>
            @endforeach
        </div>
    </body>

    </html>
