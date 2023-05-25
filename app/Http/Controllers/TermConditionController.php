<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TermCondition;

class TermConditionController extends Controller
{
    public function index()
    { 
        $term = TermCondition::latest()->get();
        return view('admin.terms.index',compact('term'));
    }

    public function edit(TermCondition $term)
    {
        return view('admin.terms.edit', compact('term'));
    }

    public function update(Request $request, TermCondition $term)
    {
        $term->update($request->all());
        return redirect()->route('terms.edit', $term)
        ->with('success','Terms Condition update succesfully');
    }

}