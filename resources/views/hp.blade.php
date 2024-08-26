<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        .product-label {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    @include('navbar')

    <div class="container" style="max-width: 1387px;">
        <div class="row" style="margin-right: 0; margin-left: 0;">
            @foreach ($hp as $item)
                <div class="mb-4 col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="card h-100">
                        <img src="{{ $item->img }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">
                                <span class="text-muted text-decoration-line-through"></span>
                                <span class="font-weight-bold">
                                    <h3 style="color: orange">price</h3>{{ $item->price }}
                                </span>
                            </p>
                        </div>
                        <div class="product-label">
                            <h5 style="color: orangered">Discount</h5>
                            <span>{{ $item->discount }}</span>
                        </div>
                        <div class="card-footer">
                            {{-- <a href="{{ route('product.show', $item->id) }}" class="btn btn-primary">View Details</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
