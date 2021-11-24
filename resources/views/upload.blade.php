<h1 style="color: green">upload file</h1>
<h1>{{ session("success") }}</h1>
<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id="">
<input type="submit" value="upload">

</form>