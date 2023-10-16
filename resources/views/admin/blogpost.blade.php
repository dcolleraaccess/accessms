<form action="blogpost" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="image">

    title
    <input type="text" name="title">

    content
    <input type="text" name="content">

    <button type="submit">submit</button>
</form>