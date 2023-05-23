<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><h1><b>File Upload</b></h1></title>
</head>
<body>
    <form method = "POST" action = "/file-upload-rename" enctype = "multipart/form-data">
        {{-- enctype = "multipart-form-data" has to be included for forms with multiple file type inputs --}}
        {{-- required autofocus supaya kursor langsung di bagian input nama file sehingga user tidak perlu lagi menggerakkan dan memindahkan kursor--}}
        {{-- nama untuk <input> penting karena dapat digunakan untuk bagian Controller --}}
        @csrf

        <div class = "file-upload-form-group">
            <label for = "file-name">Nama File</label>
            <input type = "text" name = "file-name" required autofocus>
        </div>
        
        <div class = "file-upload-form-group">
            <label for = "file-upload">Upload File</label>
            <input type = "file" name = "file" required>
        </div>
        
        <button type = "submit">Upload</button>
</body>
</html>