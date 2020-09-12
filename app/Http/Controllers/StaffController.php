<?php


namespace App\Http\Controllers;

use App\Staff;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public function index()
    {
        $staffList = DB::table('staff')->get();
        foreach ($staffList as $staff) {
            $staff->image_uri = Storage::url($staff->image_uri);
        }
        return view('teacher', ['staffList' => $staffList]);
    }

    public function create()
    {
        return view('admin.home');
        //return the create new news page
    }
    public function addStaff(Request $request)
    {


        //if validation fails, it will redirected to the same page

        $validatedData = $request->validate([
            'name' => 'required',
            'image_uri' => 'required'
        ]);

        //uploading and determining image path
        $dateTime = Carbon::now();
        $image = $request->file('image_uri');
        $imageName = $image->getClientOriginalName();
        $image_path = $image->storeAs('public/images', $dateTime->toDateTimeString() . $imageName);


        //get all the staff values from form and store it in model
        $staff = new Staff();
        $staff->name = $request->input('name');
        $staff->description = $request->input('description');
        $staff->image_uri = $image_path;

        $staff->post = $request->input('post', 'no post');
        $staff->save();
        return redirect('/teacher');
    }
}
