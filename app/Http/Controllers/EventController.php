<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    public function index()
    {
        $eventList = DB::table('events')->orderBy('date', 'asc')->get();

        return view('/index', ['events' => $eventList]);
    }

    public function create()
    {
        return view('admin.home', ['data' => '#addEvent']);
        //return the create new news page
    }

    public function storeEvent(Request $request)
    {
        $validatedData = $request->validate([
            'title1' => 'required',
            'description1' => 'bail|required|max:255',
            'date' => 'required',
            'venue' => 'required'
        ]);

        $event = new Event();

        $event->title = $request->input('title1');
        $event->description = $request->input('description1');
        $event->venue = $request->input('venue');
        $event->date = $request->input('date');
        $event->time = $request->input('hour') . ':' . $request->input('minute') . ' ' . $request->input('shift');
        $event->save();
        return redirect('/');
    }

    public function  getEvents()
    {
        $eventList = DB::table('events')->get();
        return $eventList;
    }

    public function deleteEventWithId($id)
    {
        $deleted = DB::delete('DELETE from events where id = ?', [$id]);
        return redirect('/home');
    }
    /**
     * Update the existing event.
     *
     * @param  Request  $request
     * @return Response
     */

    public function updateEvent(Request $request)
    {

        $description = $request->input('editEventDescription');
        $venue = $request->input('editVenue');
        $date = $request->input('editDate');
        $time = $request->input('editHour') . ':' . $request->input('editMinute') . ' ' . $request->input('editShift');
        $title = $request->editEventTitle;
        $id = $request->eventId;
     
        $affected = DB::table('events')
            ->where('id', $id)
            ->update([
                'title' => $title,
                'description' => $description,
                'venue' => $venue,
                'date' => $date,
                'time' => $time
            ]);

        return redirect('/home#viewEvents');
    }
}

