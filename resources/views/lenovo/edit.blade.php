@extends('all')
@section('one')
<br><br><br><br>

<h1>edit New Post lenovo </h1>
<form action="{{ url('lenovo/update',$post->id) }}" method="post" >
    @csrf
    <input type="text" name="title" placeholder="Enter title" value="{{ $post->title }}"><br><br>
    <input type="text" name="type" placeholder="Enter type" value="{{ $post->type }}"><br><br>
    <input type="text" name="price" placeholder="Enter price" value="{{ $post->price }}"><br><br>
    <input type="text" name="discount" placeholder="Enter discount" value="{{ $post->discount }}"><br><br>
    <input type="text" name="shipping" placeholder="Enter shipping" value="{{ $post->shipping }}"><br><br>
    <input type="text" name="location" placeholder="Enter location" value="{{ $post->location }}"><br><br>
    <input type="text" name="watch" placeholder="Enter watch" value="{{ $post->watch }}"><br><br>
    <input type="text" name="seller" placeholder="Enter seller" value="{{ $post->seller }}"><br><br>
    <input type="text" name="img" placeholder="Enter image URL" value="{{ $post->img }}">
    <input type="file" name="img"><br><br>
    <button type="submit">Submit</button>
</form>
`
