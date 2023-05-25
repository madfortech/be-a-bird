<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privacy;

class PrivacyController extends Controller
{
    public function index()
    { 
        $privacy = Privacy::latest()->get();
        return view('admin.privacy.index',compact('privacy'));
    }

    public function edit(Privacy $privacy)
    {
        return view('admin.privacy.edit', compact('privacy'));
    }

    public function update(Request $request, Privacy $privacy)
    {
        $privacy->update($request->all());
        return redirect()->route('privacy.edit', $privacy)
        ->with('success','Privacy update succesfully');
    }

}