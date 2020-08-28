<?php


namespace App\Http\Controllers;

use App\Staff;
use Carbon\Carbon;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        //return home page for news
    }

    public function create()
    {
        return view('admin.home#addStaff');
        //return the create new news page
    }
    public function addStaff(Request $request)
    {
        $dateTime = Carbon::now();
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image_path = $image->storeAs('images', $dateTime->toDateTimeString() . $imageName);
    

        $validatedData = $request->validate([
            'name' => 'required',
            'image_uri' => 'required'
        ]);
        //if validation fails, it will redirected to the same page


        //customizing error bag
        $errors = $this->getErrorBag();
        $errors->add('name', 'You must give a name');
        $errors->add('image', 'please specify an image link');
       
        //get all the staff values from form and store it in model
        $staff = new Staff();
        $staff->name = $request->input('name');
        $staff->description = $request->input('description');
        $staff->image_uri = $image_path;

        $staff->post = $request->input('post');
        $staff->save();
        redirect('/teacher');
        
    }
}
