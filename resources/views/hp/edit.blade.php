<h1>create post mac </h1>

<form action="{{ route('mac.update') }}" method="get">
    <input type="text" name="title" placeholder="enter title" required><br><br>
    <input type="text" name="type" placeholder="enter type" required><br><br>
    <input type="text" name="price" placeholder="enter price" required><br><br>
    <input type="text" name="discount" placeholder="enter discount" required><br><br>
    <input type="text" name="watch" placeholder="enter watch" required><br><br>
    <input type="url" name="img" placeholder="enter url img">
    <br><br>
<button type="submit">supmit</button>

</form>
