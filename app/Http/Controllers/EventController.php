<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        // $events = DB::table('events')->select(['description', 'name'])->get();
        $events = Event::all();
        $sql = Event::where('name', 'like', '%2023%')->withTrashed()->toSql();
        $search = request('search');

        return view('welcome', ['events' => $events, 'sql' => $sql, 'search' => $search]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event();
        
        $event->name = $request->name;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');
    }
}
