<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadFile extends Controller
{
    public function index()
    {
        return view('pickfile');
    }
    public function store(Request $request)
    {
        $file = $request->file('pdf');
        $fileName = $file->getClientOriginalName();
        $dateTime = Carbon::now();
        $path = $file->storeAs('results',$dateTime->toDateTimeString().$fileName );

        return ['path' => $path, 'upload' => 'sucess'];
    }
}
