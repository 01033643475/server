@extends('all')
@section('one')
    <br><br><br><br>

    <h1>edit New Post post</h1>
    <form action="{{ url('pos/update', $post->id) }}" method="post">
        @csrf
        <input type="text" name="type" placeholder="Enter type" value="{{ $post->type }}"><br><br>
        <input type="text" name="title" placeholder="Enter title" value="{{ $post->title }}"><br><br>
        <input type="text" name="price" placeholder="Enter price" value="{{ $post->price }}"><br><br>
        <input type="text" name="Company" placeholder="Enter Company" value="{{ $post->company }}"><br><br>
        <input type="text" name="ratings" placeholder="Enter Ratings" value="{{ $post->ratings }}"><br><br>
        <input type="text" name="img" placeholder="Enter image URL" value=""><br>
        <input type="text" name="img" placeholder="Enter image URL" value="{{ $post->img }}"><br><br>
        <button type="submit">Submit</button>
    </form>
