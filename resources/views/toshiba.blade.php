<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة المنتجات</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            /* لجعل النص من اليمين إلى اليسار */
        }

        .product-actions .add-to-wishlist {
            background-color: #3498db;
            /* لون الخلفية الأساسي */
            color: #fff;
            /* لون النص */
            border: none;
            padding: 10px 20px;
            margin-bottom: 20px;
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

        .col-md-2-4 {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .product-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            overflow: hidden;
            transition: transform 0.2s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
            /* لضمان وجود مسافة بين البطاقات */
        }

        .product-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
            margin: 10px 0;
            display: block;
        }

        .product-title:hover {
            text-decoration: underline;
        }

        .price-range {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }

        .shipping,
        .location,
        .seller-info {
            font-size: 12px;
            color: #888;
            margin: 5px 0;
        }

        .watch-count {
            font-weight: bold;
            color: #000;
        }

        .product-details {
            padding: 15px;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="container">
        <div class="row">
            {{-- @for ($i = 0; $i < 10; $i++) --}}
            @foreach ($toshiba as $item)
                <div class="mb-4 col-md-2-4">
                    <div class="product-card">
                        <a href="https://www.ebay.com/itm/375547794239" target="_blank">
                            <img src="{{ $item->img }}" alt="Product Image">
                        </a>
                        <div class="product-details">
                            <a href="https://www.ebay.com/itm/375547794239" class="product-title"
                                target="_blank">{{ $item->title }}</a>
                            <div class="price-range">{{ $item->price }}</div>
                            <div class="shipping">{{ $item->shipping }}</div>
                            <div class="location">{{ $item->location }}</div>
                            <div class="seller-info">{{ $item->seller }}</div>
                            <div class="watch-count">{{ $item->watch }}</div>
                        </div>
                        <div class="product-actions">
                            <button class="add-to-wishlist">Shop now</button>
                        </div>
                    </div>

                </div>
            @endforeach
            {{-- @endfor --}}
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
