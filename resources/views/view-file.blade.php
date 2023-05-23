<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <p>File berhasil di-upload ke</p>
    <a href="/{fileName}/{fileType}">{{ $fileName }}.jpg</a>


    @if (strpos($filePath, '.jpg' !== false || strpos($filePath, '.jpeg') !== false || strpos($filePath, '.png') !== false))
        <img src = "{{ asset($filePath) }}">
    @elseif (strpos($filePath, '.mp3') !== false)
        <audio controls>
            <source src = "{{ asset($filePath) }}" type = "audio/mpeg">
        </audio>
    @elseif (strpos($filePath, '.mp4') !== false)
        <video controls>
            <source src = "{{ asset($filePath) }} type = "video\mp4">
        </video>
        {{-- audio dan video controls sehingga audio dan video bisa di-play dan di-pause --}}
        {{-- berdasarkan code php artisan tinker di terminal vscode, asset() untuk menambahkan http://localhost/ --}}
        {{-- alt di <img> untuk memunculkan teks ketika gambar tidak muncul --}}
    @else
        <p>Sorry, there's error when viewing your file as your file type isn't supported. Please re-upload again.</p>
    @endif
</body>
</html>