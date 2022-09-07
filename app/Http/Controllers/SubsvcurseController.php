<?php

namespace App\Http\Controllers;

use App\Models\Subsvcurse;
use Illuminate\Http\Request;

/**
 * Class SubsvcurseController
 * @package App\Http\Controllers
 */
class SubsvcurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsvcurses = Subsvcurse::paginate();

        return view('subsvcurse.index', compact('subsvcurses'))
            ->with('i', (request()->input('page', 1) - 1) * $subsvcurses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subsvcurse = new Subsvcurse();
        return view('subsvcurse.create', compact('subsvcurse'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Subsvcurse::$rules);

        $subsvcurse = Subsvcurse::create($request->all());

        return redirect()->route('subsvcurses.index')
            ->with('success', 'Subsvcurse created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subsvcurse = Subsvcurse::find($id);

        return view('subsvcurse.show', compact('subsvcurse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subsvcurse = Subsvcurse::find($id);

        return view('subsvcurse.edit', compact('subsvcurse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subsvcurse $subsvcurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subsvcurse $subsvcurse)
    {
        request()->validate(Subsvcurse::$rules);

        $subsvcurse->update($request->all());

        return redirect()->route('subsvcurses.index')
            ->with('success', 'Subsvcurse updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subsvcurse = Subsvcurse::find($id)->delete();

        return redirect()->route('subsvcurses.index')
            ->with('success', 'Subsvcurse deleted successfully');
    }
}
