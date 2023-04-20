<?php

namespace App\Http\Controllers;

use App\Models\personnel_Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Redirect;

class personnel_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = personnel_Model::get();

        return view('admin.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $inputs = new personnel_Model;

        $inputs->SvnNo = $request->input('SvnNo');
        $inputs->UnNo = $request->input('UnNo');
        $inputs->Surname = $request->input('Surname');
        $inputs->Othernames = $request->input('Othernames');
        $inputs->DailyAllawa = $request->input('DailyAllawa');
        $inputs->EntertainmentAllawa = $request->input('EntertainmentAllawa');
        $inputs->EarnedDollarDebit = $request->input('EarnedDollarDebit');
        $inputs->TotalAmount = $request->input('TotalAmount');
        $inputs->save();
        
        return redirect('admin.index')->with('sucess', 'Data inserted successfully');




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
        $dr = personnel_Model::find($id);

        if (empty($dr)) {

            return Redirect::route('admin.index')->with('error', 'Driver details not found');
        }

        personnel_Model::destroy($id);



        return Redirect::route('admin.index')->with('error', 'Driver details deleted successfully.');

    }

}