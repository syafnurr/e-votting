<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = EventModel::all();

        // Retrieve the authenticated user's ID
        $users_id = Auth::id();

        // Retrieve events associated with the authenticated user
        $data = EventModel::where('users_id', $users_id)->get();
        $users = User::pluck('total_event')->toArray();

        // var_dump($users);
        // die();

        return view('pages.dashboard.event.view', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'users_id' => 'required',
            'title' => 'required|string|max:255',
            'tgl_pemilihan' => 'required|date',
            'jam_dimulai' => 'required|string',
            'jam_selesai' => 'required|string',
            'tgl_pengumuman' => 'nullable|date',
            'jam_pengumuman' => 'nullable|string'
        ]);

        EventModel::create([
            'users_id' => Auth::id(),
            'title' => $request->input('title'),
            'tgl_pemilihan' => $request->input('tgl_pemilihan'),
            'jam_dimulai' => $request->input('jam_dimulai'),
            'jam_selesai' => $request->input('jam_selesai'),
            'tgl_pengumuman' => $request->input('tgl_pengumuman'),
            'jam_pengumuman' => $request->input('jam_pengumuman'),
        ]);

        return redirect()->route('event.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = EventModel::findOrFail($id);

        // dd($data);
        // var_dump($data);
        // die();

        return view('pages.dashboard.event.show', compact('data'));
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
