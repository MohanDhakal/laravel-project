<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\Storage;

class ResultRoutineController extends Controller
{

    public function index()
    {
        $files = Storage::files('public/results');
        return view('/file_download', ['files' => $files]);
        //return the create nsew news page
    }

    public function storeFile(Request $request)
    {

        $file = $request->file('pdf');
        $extension = $request->file('pdf')->getClientOriginalExtension();
        $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $dateTime = Carbon::now();

        if ($request->input('resultroutine') == 'result') {
            $file->storeAs('public/results', $fileName . $dateTime->toDateTimeString() . '.' . $extension);
        } else {
            $file->storeAs('public/routines', $fileName . $dateTime->toDateTimeString() . '.' . $extension);
        }
        return redirect(url()->previous() . '#resultroutine');
    }

    public function downloadFile()
    {
        $files = Storage::files('public/results');
        return Storage::download($files[0]);
    }
}
