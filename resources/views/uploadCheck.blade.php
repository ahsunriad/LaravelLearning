<h1>Upload any picture to check</h1>
<form action="uploadCheck" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="randomPic"><br><br>
    <button type="submit" name="upload">Submit</button>
</form>
