<h1>Create New samsong</h1>
<form action="{{ url('samsung/insert') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Enter title"><br><br>
    <input type="text" name="type" placeholder="Enter type"><br><br>
    <input type="text" name="price" placeholder="Enter price"><br><br>
    <input type="text" name="range" placeholder="Enter range"><br><br>
    <input type="text" name="shipping" placeholder="Enter shipping"><br><br>
    <input type="text" name="location" placeholder="Enter location"><br><br>
    <input type="text" name="img" placeholder="Enter image URL">
    <input type="file" name="img"><br><br>
    <button type="submit">Submit</button>
</form>



