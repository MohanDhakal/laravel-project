<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ResultRoutineController extends Controller
{

  
    public function showResultFiles()
    {
        $files = Storage::files('public/results');
        return view('/file_download', ['files' => $files, 'tag' => 'Results']);
        //return the create new news page

    }
    public function showRoutineFiles()
    {
        $files = Storage::files('public/routines');
        return view('/file_download', ['files' => $files, 'tag' => 'Routines']);
        //return the create new news page
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
    
    /**
     * download the specified file.
     * @param  string  $file
     */
    public function downloadFile($i, $tag)
    {
        $files = Storage::files('public/' . strtolower($tag));
        return Storage::download($files[$i]);
    }
}
