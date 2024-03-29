<?php

namespace App\Http\Controllers;

use App\Models\UsersVotting;
use Illuminate\Http\Request;

class UsersVottingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = UsersVotting::all();
        // var_dump($data);
        // die();
        return view('pages.dashboard.users.view', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function import()
    {
        return view('pages.dashboard.users.import');
    }
}
