<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCricketerRequest;
use App\Http\Requests\UpdateCricketerRequest;
use App\Models\Cricketer;
use Illuminate\Support\Facades\Session;

class CricketerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('cricketers.index', ['cricketers' => Cricketer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cricketers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCricketerRequest $request)
    {
        Cricketer::create($request->validated());
        Session::flash('success', 'Cricketer info added successfully');
        return redirect() -> route('cricketers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cricketer $cricketer)
    {
        return view('cricketers.show', compact('cricketer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cricketer $cricketer)
    {
        return view('cricketers.edit', compact('cricketer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCricketerRequest $request, Cricketer $cricketer)
    {
        $cricketer->update($request->validated());
        Session::flash('success', 'Cricketer info updated successfully');
        return redirect() -> route('cricketers.index');
    }

    /*** Remove the specified resource from storage.*/
    public function trash($id){
        Cricketer::Destroy($id);
        Session::Flash('success', 'Cricketer trashed successfully');
        return redirect() -> route('cricketers.index');
    }
    
    public function destroy($id)
    {
        $cricketer = Cricketer::withTrashed()->where('id', $id)->first();
        $cricketer->forceDelete();
        Session::flash('success', 'Cricketer deleted successfully');
        return redirect()->route('cricketer.index');
    }

    public function restore($id)
    {
        $cricketer = Cricketer::withTrashed()->where('id', $id)->first();
        $cricketer->restore();
        Session::flash('success', 'Cricketer restored successfully');
        return redirect()->route('cricketer.trashed');
    }

}
