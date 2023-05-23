<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function viewFile($fileName, $fileType) {
        $filePath = '/storage/uploads/' . $fileName . '.' . $fileType;
        // untuk viewFile, sistem mengambil file dari direktori public > storage
        // direktori storage > app > public terhubung dengan direktori public > storage

        if (Storage::exists($filePath)) {
            $MIMEType = Storage::mimeType($filePath); // to get MIME type based on the extension of the uploaded file

            $fileContent = Storage::get($filePath);

            $response = response(fileContent, 200, ['contentType' => $MIMEType]);

            return $response;
        }
        return redirect('/file-upload-rename');
        // 
    }
}
