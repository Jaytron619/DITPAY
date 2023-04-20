<?php

namespace App\Http\Controllers;

use App\Models\personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class personnelController extends Controller
{
    //
    public function index()
    {
        //
        $data = personnel::latest()->paginate(15);

        return view('admin.index', compact('data'))->with(request()->input('page'));

    }
    public function create()
    {
        //
        return view('admin.create');

    }

    public function login()
    {
        //
        return view('login');

    }

    public function store(Request $request)
    {
        //saving data on the database
        $request->validate([

            'SvnNo' => 'required|String|max:6',
            'UnNo' => 'required|string|max:30',
            'Surname' => 'required|string|max:30',
            'Othernames' => 'required|string|max:30',
            'DailyAllawa' => 'required|String|max:30',
            'EntertainmentAllawa' => 'required|string|max:30',
            'EarnedDollarDebit' => 'required|String|max:30',
            'TotalAmount' => 'required|String|max:30'

        ]);


        $inputs = new personnel();

        $inputs->SvnNo = $request->input('SvnNo');
        $inputs->UnNo = $request->input('UnNo');
        $inputs->Surname = $request->input('Surname');
        $inputs->Othernames = $request->input('Othernames');
        $inputs->DailyAllawa = $request->input('DailyAllawa');
        $inputs->EntertainmentAllawa = $request->input('EntertainmentAllawa');
        $inputs->EarnedDollarDebit = $request->input('EarnedDollarDebit');
        $inputs->TotalAmount = $request->input('TotalAmount');
        $inputs->save();


        return redirect()->route('personnel.index')->with('success', 'Data inserted successfully.');

    }


    public function edit($id)
    {
        $data = personnel::where('id', '=', $id)->first();
        return view('admin.edit', compact('data'));
    }

    public function update(Request $request)
    {
        //saving data on the database
        $request->validate([

            'SvnNo' => 'required|String|max:6',
            'UnNo' => 'required|string|max:30',
            'Surname' => 'required|string|max:30',
            'Othernames' => 'required|string|max:30',
            'DailyAllawa' => 'required|String|max:30',
            'EntertainmentAllawa' => 'required|string|max:30',
            'EarnedDollarDebit' => 'required|String|max:30',
            'TotalAmount' => 'required|String|max:30'

        ]);


        $id = $request->input('id');
        $SvnNo = $request->input('SvnNo');
        $UnNo = $request->input('UnNo');
        $Surname = $request->input('Surname');
        $Othernames = $request->input('Othernames');
        $DailyAllawa = $request->input('DailyAllawa');
        $EntertainmentAllawa = $request->input('EntertainmentAllawa');
        $EarnedDollarDebit = $request->input('EarnedDollarDebit');
        $TotalAmount = $request->input('TotalAmount');

        personnel::where('id', '=', $id)->update([
            'SvnNo' => $SvnNo,
            'UnNo' => $UnNo,
            'Surname' => $Surname,
            'Othernames' => $Othernames,
            'DailyAllawa' => $DailyAllawa,
            'EntertainmentAllawa' => $EntertainmentAllawa,
            'EarnedDollarDebit' => $EarnedDollarDebit,
            'TotalAmount' => $TotalAmount
        ]);

        return redirect()->route('personnel.index')->with('success', 'Data updated successfully.');

    }


    public function destroy(string $id)
    {
        //
        $dr = personnel::find($id);

        if (empty($dr)) {

            return Redirect::route('personnel.index')->with('error', 'Personnel details not found');
        }

        personnel::destroy($id);

        return Redirect::route('personnel.index')->with('error', 'Personnel details deleted successfully.');

    }


    public function search(Request $request)
    {
        $search = $request->search;

        $data = personnel::Where('SvnNo', 'like', '%' . $search . '%')
        ->orWhere('UnNo', 'like', '%' . $search . '%')
        ->orWhere('Surname', 'like', '%' . $search . '%')
        ->orWhere('Othernames', 'like', '%' . $search . '%')->get();

        return view('admin.index', compact('data'));
    }

}