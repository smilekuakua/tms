<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('document.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf,doc,docx|max:20048',
        ]);
        $document = Document::create([
            'name' => '',
            'user_id' =>Auth()->user()->id,
        ]);

        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();

            // File upload location
            $location = 'uploads/documents';

            // Upload file
            $file->move($location, $filename);
            $document->name = $filename;
            $document->save();
        }
        notify()->success('document submited');
        return redirect()->route('document.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
