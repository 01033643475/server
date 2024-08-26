@extends('all')
@section('one')
<br><br><br><br>

<h1>edit New Post comuter</h1>
<form action="{{ url('comuter/update',$post->id) }}" method="post" >
    @csrf
    <input type="text" name="title" placeholder="Enter title" value="{{ $post->title }}"><br><br>
    <input type="text" name="type" placeholder="Enter type" value="{{ $post->type }}"><br><br>
    <input type="text" name="price" placeholder="Enter price" value="{{ $post->price }}"><br><br>
    <input type="text" name="Company" placeholder="Enter company" value="{{ $post->Company }}"><br><br>
    <input type="text" name="ratings" placeholder="Enter ratings" value="{{ $post->ratings }}"><br><br>
    <input type="text" name="img" placeholder="Enter image URL" value="{{ $post->img }}">
    <input type="file" name="img"><br><br>
    <button type="submit">Submit</button>
</form>
`
