<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $announcements = Announcement::all();
        $users = User::all();

        return view('announcement.index', compact('announcements', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $announcements = Announcement::all();
        return view('announcements.create', compact('announcements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "title" => "",
            "content" => "",


        ]);
        Announcement::create([
            "title" => $request->title,
            "content" => $request->content,
            "uid" => Auth()->user()->id,
        ]);
        notify()->success('Announce created');

            return redirect()->route('home');


    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
         $announcements = Announcement::find($id);
          return view('announcements.show', compact('announcements'));
    }

    //  * Show the form for editing the specified resource.
    //  */
    public function edit(Announcement $announcement)
    {
        return view('announcements.edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $announcement->update($request->all());

        return redirect()->route('announcement.create')
            ->with('success', 'Announcement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        return redirect()->route('announcement.index')
            ->with('success','Announcement  deleted successfully');
    }
}
