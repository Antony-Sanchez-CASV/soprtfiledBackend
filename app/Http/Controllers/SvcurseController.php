<?php

namespace App\Http\Controllers;

use App\Models\Svcurse;
use Illuminate\Http\Request;

/**
 * Class SvcurseController
 * @package App\Http\Controllers
 */
class SvcurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $svcurses = Svcurse::paginate();

        return view('svcurse.index', compact('svcurses'))
            ->with('i', (request()->input('page', 1) - 1) * $svcurses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $svcurse = new Svcurse();
        return view('svcurse.create', compact('svcurse'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Svcurse::$rules);

        $svcurse = Svcurse::create($request->all());

        return redirect()->route('svcurses.index')
            ->with('success', 'Svcurse created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $svcurse = Svcurse::find($id);

        return view('svcurse.show', compact('svcurse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $svcurse = Svcurse::find($id);

        return view('svcurse.edit', compact('svcurse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Svcurse $svcurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Svcurse $svcurse)
    {
        request()->validate(Svcurse::$rules);

        $svcurse->update($request->all());

        return redirect()->route('svcurses.index')
            ->with('success', 'Svcurse updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $svcurse = Svcurse::find($id)->delete();

        return redirect()->route('svcurses.index')
            ->with('success', 'Svcurse deleted successfully');
    }
}
