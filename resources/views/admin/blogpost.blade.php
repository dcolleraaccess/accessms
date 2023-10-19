<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quill Editor with HTML Form</title>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</head>

<body>

    <form id="myForm" method="post" action="/newposttest">
        @csrf
        <div id="editor" style="height: 300px;">
        </div>
        <input type="hidden" name="content" id="contentInput">
        <button type="submit">Submit</button>
    </form>

    <script>
        var quill = new Quill('#editor', {
        theme: 'snow',
    });

    document.getElementById('myForm').onsubmit = function () {
        var content = quill.root.innerHTML;
        document.getElementById('contentInput').value = content;
        // You can also log the content or perform additional processing here
        console.log(content);
    };
    </script>

</body>

</html>