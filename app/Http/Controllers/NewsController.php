<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        //return home page for news
    }

    public function create()
    {
        return view('admin.home');
        //return the create new news page
    }

    public function storeNews(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'bail|required|max:255',
            'content' => 'required',
        ]);
        //customizing error bag
        $errors = $this->getErrorBag();
        $errors->add('title', 'Title cannot be empyty');
        $errors->add('content', 'Content cannot be empty');

        //add new news to the database
        $dateTime = Carbon::now();
        $news = new News();

        $file = $request->file('pdf_file');
        $image = $request->file('image');
        if ($file != null) {
            $fileName = $file->getClientOriginalName();
            $file_path = $file->storeAs('notices', $dateTime->toDateTimeString() . $fileName);
            $news->file_uri = $file_path;
        }
        if ($image != null) {
            $imageName = $image->getClientOriginalName();
            $image_path = $image->storeAs('images', $dateTime->toDateTimeString() . $imageName);
            $news->image_uri = $image_path;
        }
        $news->title = $request->input('title');
        $news->content = $request->input('content');

        $news->save();
        return redirect('/blog');
    }
}
