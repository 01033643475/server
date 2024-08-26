<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Grid</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            transition: transform 0.2s, border-radius 0.2s;
        }

        .product-card:hover {
            transform: scale(1.04);
            border-radius: 40px;
        }

        .product-img {
            width: 100%;
            height: auto;
        }

        .product-title-text {
            font-size: 14px;
            margin-top: 10px;
        }

        .product-key-info {
            margin-top: 10px;
        }

        .product-price,
        .product-moq {
            margin-bottom: 5px;
        }

        .product-review {
            margin-top: 10px;
        }

        .product-review-score {
            font-size: 16px;
            font-weight: bold;
        }

        .product-action {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="container mt-5" style="max-width: none;">
        <div class="row">
            @foreach ($dell as $item)
                <div class="col-md-4 mb-4" style="max-width: 19.333333%;">
                    <div class="product-card">
                        <a class="product-image"
                            href="//www.alibaba.com/product-detail/Cheap-Price-Core-I3-I5-I7_60556411114.html?spm=a2700.7735675.0.0.60f2eQtneQtneU"
                            target="_blank" rel="noreferrer">
                            <img class="product-img" src="{{ $item->img }}" alt="Product Image">
                        </a>
                        <a class="product-title"
                            href="//www.alibaba.com/product-detail/Cheap-Price-Core-I3-I5-I7_60556411114.html?s=p"
                            target="_blank" rel="noreferrer">
                            <div class="product-title-text">
                                <strong>Cheap</strong> {{ $item->title }}<strong>laptop</strong>
                            </div>
                        </a>
                        <div class="product-key-info">
                            <div class="product-price">
                                <span class="price-number">{{ $item->price }}</span>
                                <span class="price-unit"> / unit</span>
                            </div>
                            <div class="product-moq">
                                <span class="product-moq-number">2 units</span>
                                <span class="product-moq-unit">Min. order</span>
                            </div>
                        </div>
                        <div class="product-extra">
                            <div class="product-extra-line">
                                <span class="product-supplier-country"
                                    title="Guangzhou Touch-Pie Electronic Technology Co., Ltd.">
                                    <img src="https://u.alicdn.com/mobile/g/common/flags/1.0.0/assets/cn.png"
                                        alt="country-icon" class="country-icon">CN
                                </span>
                                <a class="product-supplier-name" href="//touchpie.en.alibaba.com/company_profile.html"
                                    target="_blank" rel="noreferrer">{{ $item->Company }}</a>
                            </div>
                            <div class="product-extra-line">
                                <span class="product-supplier-years">9YRS</span>
                                <a href="https://fuwu.alibaba.com/page/verifiedsuppliers.htm?tracelog=search"
                                    class="product-supplier-verify" target="_blank" rel="noreferrer">
                                    <img src="https://img.alicdn.com/imgextra/i2/O1CN01YDryn81prCbNwab4Q_!!6000000005413-2-tps-168-42.png"
                                        alt="verified" class="verified-icon">
                                </a>
                            </div>
                            <div class="product-review">
                                <a class="product-review-out" rel="noreferrer" target="_blank"
                                    href="//touchpie.en.alibaba.com/company_profile/feedback.html">
                                    <div class="product-review-wrap">
                                        <div class="product-review-score">{{ $item->ratings }}</div>
                                        <div class="product-review-star"><i
                                                class="next-icon next-icon-collection-fill next-xs product-review-icon"></i>
                                        </div>
                                    </div>
                                    <div class="product-review-number">(29)</div>
                                    <div class="product-review-content">
                                        "good service"
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="product-action-wrap">
                            <div class="product-action">
                                <a target="_blank"
                                    href="//message.alibaba.com/msgsend/contact.htm?action=contact_action&amp;appForm=s_en&amp;chkProductIds=60556411114&amp;tracelog=contactOrg"
                                    class="btn btn-primary btn-sm">
                                    Contact supplier
                                </a>
                                <div class="action-item">
                                    <div class="im-alitalk-container" style="cursor: pointer;">
                                        <div class="alitalk-unit" title="Chat Now">
                                            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.327.5c.079.001.14.01.212.031l.093.022c.56.145 1.645.624 2.293 1.07A8.526 8.526 0 0 1 8.995.58c4.69 0 8.505 3.795 8.505 8.46 0 4.664-3.815 8.459-8.505 8.459C4.23 17.5.5 13.694.5 8.834c0-.355.177-1.922.332-2.362.043-.203.295-1.205 1.26-2.425.034-.474.084-1.683-.333-2.548a.891.891 0 0 1-.064-.302l-.007-.062a.594.594 0 0 1 .113-.37.64.64 0 0 1 .42-.26.309.309 0 0 1 .056-.004ZM8.75 6a.75.75 0 0 0-.75.75v1.5a.75.75 0 1 0 1.5 0v-1.5A.75.75 0 0 0 8.75 6Zm4 0a.75.75 0 0 0-.75.75v1.5a.75.75 0 1 0 1.5 0v-1.5a.75.75 0 0 0-.75-.75Z"
                                                    fill="#007FFC" fill-rule="nonzero"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img class="product-ad"
                            src="https://s.alicdn.com/@img/imgextra/i2/O1CN01DuT1eB1RVAoUqiqQS_!!6000000002116-2-tps-36-28.png"
                            alt="ad">
                    </div>
                </div>
            @endforeach
            {{-- @endfor --}}
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
