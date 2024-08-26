@extends('all')
@section('one')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Posts</title>
</head>

<body>
    {{-- <a class="btn btn-danger" href="{{ route('posts.delete.all') }}" role="button"
        style="position: relative; bottom: -105px; left: 45%;">Delete All</a> --}}
    <table class="table" style="position: relative; bottom: -114px;">
        <thead>
            <tr>
                <td></td>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">shipping</th>
                <th scope="col">seller</th>
                <th scope="col">watch</th>
                <th scope="col">location</th>
                <th scope="col">img</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row"><input type="checkbox" name="post_id[]" value="{{ $post->id }}"></th>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->price }}</td>
                <td>{{ $post->shipping }}</td>
                <td>{{ $post->seller }}</td>
                <td>{{ $post->watch }}</td>
                <td>{{ $post->location }}</td>
                <td><img src="{{ asset('storage/'.$post->img) }}" alt="image" style="width: 100px;"></td>
                <td>
                    <a class="btn btn-primary" href="{{ route('toshiba.edit',$post->id) }}" role="button">Edit</a>
                    <a class="btn btn-danger" href="{{ route('toshiba.delete',$post->id) }}" role="button">delet</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
@endsection
