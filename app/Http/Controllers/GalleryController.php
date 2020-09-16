<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class GalleryController extends Controller
{
    public function index()
    {

        return view('photo_gallery');
    }

    public function getImagesWithTag(Request $request)
    {
        $tag = $request->tag;

        $files = DB::table('filemanager')->get();
        $images = [];

        foreach ($files as $file) {
            $extension = $file->ext;
              if ($extension == 'gif' || $extension == 'png' || $extension == 'jpeg' || $extension == 'jpg' || $extension == 'JPG') {
                switch ($tag) {
                    case 'anniversary':
                        if (strpos($file->name, $tag) !== false) {
                            array_push($images, $file);
                        }
                        break;
                    case 'all':
                        array_push($images, $file);
                        break;
                }
            }
        }
        return response()->json($images, 200);
    }
}
