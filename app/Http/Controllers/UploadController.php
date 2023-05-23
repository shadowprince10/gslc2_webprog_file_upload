<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadFile(Request $request) {
        // kode validasi file upload, tipe file yang di-submit user sebagai input harus file dan tipe nama file yang diinput user harus string
       $request -> validate(['file' => 'required|file', 'fileName' => 'required|string|max:255']);

       if ($request -> hasFile('file')) {
            $file = $request -> file('file');
            $fileName = $request -> input('fileName');
            $fileType = $file -> getClientOriginalExtension(); // to obtain the file type, whether it's image, audio, or video
            $storagePath = "public/fileUploads/";
            // untuk uploadFile, file yang di-submit user di-upload ke direktori storage > app > public
            // direktori storage > app > public terhubung dengan direktori public > storage
            $file -> storeAs($storagePath, $fileName . '.' . $fileType);

            return redirect() -> route('file.upload.show', ['fileName' => $fileName, 'fileType' => $fileType]);
       }
       return "No file has been uploaded yet.";
    }
}
