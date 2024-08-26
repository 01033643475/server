<h1>Create New Post post</h1>
<form action="{{ url('pos/insert') }}" method="post" enctype="multipart/form-data">
    @csrf
      <input type="text" name="type" placeholder="Enter type"><br><br>
    <input type="text" name="title" placeholder="Enter title"><br><br>
        <input type="text" name="price" placeholder="Enter price" ><br><br>
    <input type="text" name="Company" placeholder="Enter Company"><br><br>
        <input type="text" name="ratings" placeholder="Enter Ratings" ><br><br>
    <input type="text" name="img" placeholder="Enter image URL" >
    <input type="text" name="img" placeholder="Enter image URL" ><br><br>
    <button type="submit">Submit</button>
</form>



