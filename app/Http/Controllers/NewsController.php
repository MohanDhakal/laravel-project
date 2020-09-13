<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = DB::table('news')->get();
        return view('blog', ['newsList' => $newsList]);
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

        //add new news to the database
        $dateTime = Carbon::now();
        $news = new News();

        $file = $request->file('pdf_file');
        $image = $request->file('image');

        if ($file != null) {
            $fileName = $file->getClientOriginalName();
            $file_path = $file->storeAs('public/notices', $dateTime->toDateTimeString() . $fileName);
            $news->file_uri = $file_path;
        }
        if ($image != null) {
            $imageName = $image->getClientOriginalName();
            $image_path = $image->storeAs('public/images', $dateTime->toDateTimeString() . $imageName);
            $news->image_uri = $image_path;
        }
        $news->title = $request->input('title');
        $news->content = $request->input('content');

        $news->save();
        return redirect('/blog');
    }

    public function showNewsDetail($id)
    {
        $news = DB::table('news')->find($id);

        return view('/blog-single', [
            'news' => $news
        ]);
    }
    public function  getNewsInLimit($startLimit = 1, $endLimit = 5)
    {
        $newsList = DB::select('SELECT * FROM news
        WHERE id BETWEEN :start AND :end', ['start' => $startLimit, 'end' => $endLimit]);
        return $newsList;
    }

    public function deleteNewsWithId($id)
    {
        $deleted = DB::delete('DELETE from news where id = ?', [$id]);
        return redirect('/home');
    }
    public function updateNews($id, $title, $description)
    {

        $affected = DB::table('news')
            ->where('id', $id)
            ->update([
                'title' => $title,
                'content' => $description
            ]);

        return redirect('/home#addNews');
    }
}
