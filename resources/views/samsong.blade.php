<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة المنتجات</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            /* لجعل النص من اليمين إلى اليسار */
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: space-around;
        }

        .product-card {
            flex: 1 1 calc(25% - 1rem);
            /* عرض 4 بطاقات في كل صف */
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.2s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
            /* لضمان وجود مسافة بين البطاقات */
        }

        .product-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: whitesmoke
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
    <div class="product-grid">
        @foreach ($samsong as $item)
            <div class="product-card">
                <a href="https://www.laptopmag.com/best-picks/best-apple-laptops#section-affordable-big-screen-macbook"
                    target="_blank">
                    <img src="{{ $item->img }}" alt="MacBook Air 15 M3 open facing the camera on a white background">
                </a>
                <div class="product-details">
                    <a href="https://www.laptopmag.com/best-picks/best-apple-laptops#section-affordable-big-screen-macbook"
                        class="product-title" target="_blank">{{ $item->title }}</a>
                    <div class="price-range">{{ $item->range }}</div>
                    <div class="shipping">{{ $item->shipping }}</div>
                    <div class="location">{{ $item->location }}</div>
                    <div class="seller-info">View at <a
                            href="https://www.amazon.com/dp/B0CX251F4X/ref=asc_df_B0CX251F4X1722420000000?tag=hawk-future-20&creative=395261&creativeASIN=B0CX251F4X&linkCode=asn&ascsubtag=laptopmag-eg-1526703467655452016-20"
                            target="_blank">Amazon</a></div>
                </div>
            </div>
        @endforeach

    </div>
</body>

</html>
