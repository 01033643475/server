<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listings</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
        }

        .product-actions .add-to-wishlist {
            background-color: #3498db;
            /* لون الخلفية الأساسي */
            color: #fff;
            margin-top: 10px
                /* لون النص */
                border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            /* تأثيرات الانتقال */
        }

        .product-actions .add-to-wishlist:hover {
            background-color: #2980b9;
            /* لون الخلفية عند التمرير */
            transform: scale(1.05);
            /* تكبير الزرار قليلاً */
        }

        .product-actions .add-to-wishlist:active {
            background-color: #1f6391;
            /* لون الخلفية عند الضغط */
            transform: scale(0.95);
            /* تصغير الزرار قليلاً */
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: scale(1.04);
            border-radius: 40px;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
        }

        .product-title {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        .product-title:hover {
            text-decoration: underline;
        }

        .price-range {
            font-size: 18px;
            color: #333;
        }

        .discount {
            color: #e74c3c;
            font-size: 14px;
        }

        .details {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }

        .shipping,
        .location {
            font-size: 12px;
            color: #888;
        }

        .seller-info {
            font-size: 12px;
            color: #555;
        }

        .watch-count {
            font-weight: bold;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="container mt-5">
        <div class="product-grid">
            @foreach ($microsoft as $item)
                <div class="product-card">
                    <a href="{{ $item->img }}" target="_blank">
                        <img src="{{ $item->img }}" alt="{{ $item->title }}">
                    </a>
                    <div class="p-3">
                        <a href="" target="_blank" class="product-title">
                            {{ $item->title }}
                        </a>
                        <div class="discount">{{ $item->discount }}</div>
                        <div class="details">
                            <div class="price-range">{{ $item->price }}</div>
                            <div class="shipping">{{ $item->shipping }}</div>
                            <div class="location">{{ $item->location }}</div>
                            <div class="watch-count">{{ $item->watch }}</div>
                        </div>
                        <div class="seller-info">{{ $item->seller }}</div>
                    </div>
                    <div class="product-actions">
                        <button class="add-to-wishlist">Shop now</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
