<?php


namespace App\Http\Controllers;

use App\Staff;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
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
        $image_path = $image->storeAs('public/images', str_replace(' ', '', $dateTime->toDateTimeString() . $imageName));

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

    public function getStaffs()
    {
        $staffList = DB::table('staff')->get();
        return $staffList;
    }
    public function deleteStaffWithId($id)
    {
        $deleted = DB::delete('DELETE from staff where id = ?', [$id]);
        return redirect('/home');
    }
    public function updateStaff( Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $phone = $request->input('phone');


        $post = $request->input('post', 'Staff');
        $subject = $request->input('subject_of_study');
        $level = $request->input('level');

        $affected = DB::table('staff')
            ->where('id', $request->input('staffId'))
            ->update([
                'name' => $name,
                'description' => $description,
                'post' => $post,
                'phone' => $phone,
                'level' => $level,
                'subject' => $subject
            ]);

        return redirect('/home#viewStaffs');
    }
    public function getStaffsWithTag(Request $request)
    {
        $tag = $request->tag;
        if ($tag == 'all') {
            $staffList = DB::table('staff')->get();
            foreach ($staffList as $staff) {
                $staff->image_uri = 'http://localhost:8000' . Storage::url($staff->image_uri);
            }

            return response()->json($staffList, 200);
        } else {
            $staffList = DB::table('staff')->where('level', $tag)->get();

            foreach ($staffList as $staff) {
                $staff->image_uri = 'http://localhost:8000' . Storage::url($staff->image_uri);
            }
            return response()->json($staffList, 200);
        }
        return;
    }
}
