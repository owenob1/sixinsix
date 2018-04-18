<?php

namespace App\Http\Controllers;

use App\Terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    /**
     * Display a listing of the terms.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = Terms::where(function ($query) {
            $query->where('name', 'like', '%'.request('q').'%');
        })->paginate(25);

        return view('terms.index', compact('terms'));
    }

    /**
     * Show the form for creating a new terms.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', new Terms);

        return view('terms.create');
    }

    /**
     * Store a newly created terms in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', new Terms);

        $this->validate($request, [
            'name' => 'required|max:60',
            'description' => 'nullable|max:255',
        ]);

        $newTerms = $request->only('name', 'description');
        $newTerms['creator_id'] = auth()->id();

        $terms = Terms::create($newTerms);

        return redirect()->route('terms.show', $terms);
    }

    /**
     * Display the specified terms.
     *
     * @param  \App\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function show(Terms $terms)
    {
        return view('terms.show', compact('terms'));
    }

    /**
     * Show the form for editing the specified terms.
     *
     * @param  \App\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function edit(Terms $terms)
    {
        $this->authorize('update', $terms);

        return view('terms.edit', compact('terms'));
    }

    /**
     * Update the specified terms in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terms $terms)
    {
        $this->authorize('update', $terms);

        $this->validate($request, [
            'name' => 'required|max:60',
            'description' => 'nullable|max:255',
        ]);

        $terms->update($request->only('name', 'description'));

        return redirect()->route('terms.show', $terms);
    }

    /**
     * Remove the specified terms from storage.
     *
     * @param  \App\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terms $terms)
    {
        $this->authorize('delete', $terms);

        $this->validate(request(), [
            'terms_id' => 'required',
        ]);

        $routeParam = request()->only('page', 'q');

        if (request('terms_id') == $terms->id && $terms->delete()) {
            return redirect()->route('terms.index', $routeParam);
        }

        return back();
    }
}
