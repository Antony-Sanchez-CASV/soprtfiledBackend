<?php

namespace App\Http\Controllers;

use App\Models\Vcurse;
use App\Models\Instructor;
use App\Models\Room;
use App\Models\Activity;
use Illuminate\Http\Request;

/**
 * Class VcurseController
 * @package App\Http\Controllers
 */
class VcurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vcurses = Vcurse::paginate(5);

        return view('curse.vcurse.index', compact('vcurses'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vcurse = new Vcurse();
        $ins=Instructor::all();
        foreach($ins as $in){
            $instructors[]=$in->getName();
        }
        $rooms=Room::pluck('located','id');
        $activities=Activity::all();
        return view('curse.vcurse.create', compact('vcurse','instructors','rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vcurse::$rules);

        $vcurse = Vcurse::create($request->all());

        return redirect()->route('curse.vcurses.index')
            ->with('success', 'Vcurse created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vcurse = Vcurse::find($id);

        return view('curse.vcurse.show', compact('vcurse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vcurse = Vcurse::find($id);

        return view('curse.vcurse.edit', compact('vcurse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vcurse $vcurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vcurse $vcurse)
    {
        request()->validate(Vcurse::$rules);

        $vcurse->update($request->all());

        return redirect()->route('curse.vcurses.index')
            ->with('success', 'Vcurse updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vcurse = Vcurse::find($id)->delete();

        return redirect()->route('curse.vcurses.index')
            ->with('success', 'Vcurse deleted successfully');
    }
}
