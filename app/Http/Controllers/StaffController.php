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
        return view('teacher');
    }

    public function create()
    {
        return view('admin.home');
    }
    public function addStaff(Request $request)
    {

        //if validation fails, it will be redirected to the same page

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
        $staff->address = $request->input('address');
        $staff->description = $request->input('description');
        $staff->phone = $request->input('phone');

        $staff->image_uri = $image_path;

        $staff->post = $request->input('post', 'Staff');
        $staff->subject = $request->input('subject_of_study');
        $staff->level = $request->input('level');


        $staff->save();
        return redirect('/teacher');
    }

    public function getStaffInLimit($startLimit = 1, $endLimit = 5)
    {
        $staffList = DB::select('SELECT * FROM staff
        WHERE id BETWEEN :start AND :end', ['start' => $startLimit, 'end' => $endLimit]);
        return $staffList;
    }
    public function deleteStaffWithId($id)
    {
        $deleted = DB::delete('DELETE from staff where id = ?', [$id]);
        return redirect('/home');
    }
    public function updateStaff($id, $name, $description, $post)
    {

        $affected = DB::table('staff')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'description' => $description,
                'post' => $post
            ]);

        return redirect('/home#addStaff');
    }
    public function getStaffsWithTag($tag)
    {
        if ($tag = 'all') {
            $staffList = DB::table('staff')->get();
            foreach ($staffList as $staff) {
                $staff->image_uri = Storage::url($staff->image_uri);
            }

            return response()->json($staffList, 200);
        } else {
            $staffList = DB::table('staff')->where('level', $tag);
            foreach ($staffList as $staff) {
                $staff->image_uri = Storage::url($staff->image_uri);
            }
            return response()->json($staffList, 200);
        }
    }
}
