<?php

namespace App\Http\Controllers;

use App\Models\CandidateModel;
use App\Models\EventModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Datatables;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();
        // $events = EventModel::where('users_id', $id)->pluck('title');
        $events = EventModel::where('users_id', $id)->pluck('title', 'id');

        $candidate = CandidateModel::all();
        // var_dump($events);
        // die();

        return view('pages.dashboard.candidate.view')->with('events', $events)->with('candidates', $candidate);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id = Auth::id();

        $events = EventModel::where('users_id', $id)->pluck('title', 'id');

        // $events = EventModel::pluck('title', 'id');

        return view('pages.dashboard.candidate.create', compact('events'));
        // $data = EventModel::where('users_id', $id)->pluck('title', 'id');
        // // var_dump($data);
        // // die();

        // return view('pages.dashboard.candidate.create', );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $data = EventModel::where('users_id', $id)->pluck('title');

        $request->validate([
            'event_id' => 'required',
            'name' => 'required|string',
            'department' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        CandidateModel::create([
            'event_id' => $request->event_id,
            'name' => $request->name,
            'department' => $request->department,
            'image' => $imageName,
        ]);

        return redirect()->route('candidate.index')
            ->with('success', 'Item candidate has been created successfully.');

        // return redirect()->route('candidate.index')->with('success', 'Data Berhasil Disimpan')->with('data', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
