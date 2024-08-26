@extends('all')
@section('one')
<br><br><br><br>

<h1>create New Post lenovo</h1>
<form action="{{ url('lenovo/insert') }}" method="post" ">
    @csrf
    <input type="text" name="title" placeholder="Enter title" value=""><br><br>
    <input type="text" name="type" placeholder="Enter type" value=""><br><br>
    <input type="text" name="price" placeholder="Enter price" value=""><br><br>
    <input type="text" name="discount" placeholder="Enter discount" value=""><br><br>
    <input type="text" name="shipping" placeholder="Enter shipping" value=""><br><br>
    <input type="text" name="location" placeholder="Enter location" value=""><br><br>
    <input type="text" name="watch" placeholder="Enter watch" value=""><br><br>
    <input type="text" name="seller" placeholder="Enter seller" value=""><br><
    <input type="text" name="img" placeholder="Enter image URL" value="">
    <input type="text" name="img" placeholder="Enter image URL" value=""><br><br>
    <button type="submit">Submit</button>
</form>
`
