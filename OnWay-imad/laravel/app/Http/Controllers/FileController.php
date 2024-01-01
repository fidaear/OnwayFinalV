<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    //
    public function cv($filename)
    {
        $filePath = storage_path("app/public/jobseekers_cv/{$filename}");

        return response()->file($filePath);
    }
    public function picture($filename)
    {
        $filePath = storage_path("app/public/pictures/{$filename}");

        return response()->file($filePath);
    }
    public function overview($filename)
    {
        $filePath = storage_path("app/public/company_overviews/{$filename}");

        return response()->file($filePath);
    }
}
