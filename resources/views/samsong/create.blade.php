@extends('all')
@section('one')
<br><br><br><br>

<h1>create New Post samsong</h1>
<form action="{{ url('samsung/insert') }}" method="post" ">
    @csrf
    <input type="text" name="title" placeholder="Enter title" value=""><br><br>
    <input type="text" name="price" placeholder="Enter price" value=""><br><br>
    <input type="text" name="range" placeholder="Enter range" value=""><br><br>
    <input type="text" name="shipping" placeholder="Enter shipping" value=""><br><br>
    <input type="text" name="location" placeholder="Enter location" value=""><br><br>
    <input type="text" name="img" placeholder="Enter image URL" value="">
    <input type="text" name="img" placeholder="Enter image URL" value=""><br><br>
    <button type="submit">Submit</button>
</form>
`
