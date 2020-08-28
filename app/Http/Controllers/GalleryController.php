<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index()
    {
        $files = DB::table('filemanager')->get();
        $images = [];

        foreach ($files as $file) {
            $extension = $file->ext;
            if ($extension == 'gif' || $extension == 'png' || $extension == 'jpeg' || $extension == 'jpg') {
                array_push($images,$file);
            }
        }
        return view('gallery', ['images' => $images]);
    }
}
