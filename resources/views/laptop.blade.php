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
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
            /* يضمن توزيع المساحة بالتساوي */
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 20px;
            text-align: center;
            transition: transform 0.2s, border-radius 0.2s;
            /* flex-basis: calc(25% - 15px); */
            /* حساب العرض بحيث يأخذ في الاعتبار الفجوة */
            box-sizing: border-box;
        }

        .product-card:hover {
            transform: scale(1.04);
            border-radius: 40px;
        }

        .product-image img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="product-container">
        @for ($i = 0; $i < 6; $i++)
            @foreach ($laptop as $item)
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ $item->img }}" alt="Product Image">
                    </div>
                    <div class="product-name">
                        <h4>{{ $item->type }}</h4>
                    </div>
                    <div class="product-info">
                        <p class="product-title">{{ $item->title }}</p>
                        <div class="product-price">
                            <span class="old-price">
                                <h2>Price</h2>
                                <span>$</span>{{ $item->price }}
                            </span>
                            <div class="product-label">
                                <h5>Discount</h5>{{ $item->discount }}
                            </div>
                        </div>
                        <div class="product-actions">
                            <button class="add-to-wishlist">Shop now</button>
                        </div>
                        <br>
                    </div>
                </div>
            @endforeach
        @endfor

    </div>




</body>

</html>
