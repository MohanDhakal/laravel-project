<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        //get the instance of staff controller
        $staffInstance = new StaffController();

        //get the instance of event controller
        $eventInstance = new EventController();

        //get the instace of news controller
        $newsInstance = new NewsController();

        $staffList = $staffInstance->getStaffInLimit();
        $eventList = $eventInstance->getEventInLimit();
        $newsList = $newsInstance->getNewsInLimit();

        return view("admin.home", [
            'staffList' => $staffList,
            'eventList' => $eventList,
            'newsList' => $newsList
        ]);
    }
}
