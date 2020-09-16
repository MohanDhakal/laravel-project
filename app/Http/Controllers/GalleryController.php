<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index()
    {

        return view('photo_gallery');
    }

    public function getImagesWithTag($tag = 'all')
    {

        $files = DB::table('filemanager')->get();
        $images = [];

        foreach ($files as $file) {
            // strpos($mystring, $word) !== false;

            $extension = $file->ext;
            if ($extension == 'gif' || $extension == 'png' || $extension == 'jpeg' || $extension == 'jpg') {

                switch ($tag) {
                    case 'anniversary':
                        if (strpos($file->name, $tag) !== false) {
                            array_push($images, $file);
                        }
                        break;
                    default:
                        array_push($images, $file);
                        break;
                }
            }
        }

        return response()->json($images, 200);
    }
}
