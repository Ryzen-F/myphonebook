<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;

class EntreprisesController extends Controller
{
    public function list()
    {
        $entreprises = Entreprise::all();
        return view('entreprise.visualisation',['entreprises'=>$entreprises]);
    }
    public function create()
    {
        $entreprises = Entreprise::all();
        return view('entreprise.create', compact('entreprises'));
    }
    public function store()
    {
        $data = request()->validate([
            'name'=>'required',
            'address'=>'required',
            'postal_code'=>'required|min:5',
            'city'=>'required',
            'phone'=>'required|min:9',
            'email'=>'required|email',
        ]);
        Entreprise::create($data);

        return back();
    }
    public function show($name)
    {
        // $entreprise = Entreprise::find($name);
        $entreprise = Entreprise::where('id', $name)->firstOrFail();
        return view('entreprise.show', compact('entreprise'));
    }
    public function edit($entreprise)
    {
        $entreprises= Entreprise::all();
        $entreprise = Entreprise::where('id', $entreprise)->firstOrFail();
        return view('entreprise.edit',compact('entreprise','entreprises'));
    }

    public function update($entreprise)
    {
        $entreprise = Entreprise::find($entreprise);
        $data = request()->validate([
            'name'=>'required',
            'address'=>'required',
            'postal_code'=>'required|min:5',
            'city'=>'required',
            'phone'=>'required|min:9',
            'email'=>'required|email',
        ]);
        // Entreprise::update($data);
        $entreprise->update($data);
        return redirect('entreprise/' . $entreprise->id);
    }

    public function destroy($entreprise)
    {
        $entreprises= Entreprise::all();
        $entreprise = Entreprise::where('id', $entreprise)->firstOrFail();
        $entreprise->delete();
        return redirect('/entreprise/id');
    }
}
