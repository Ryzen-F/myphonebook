<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collaborateur;

class CollaborateursController extends Controller
{
    public function listcolla()
    {
        $collaborateurs = Collaborateur::all();
        return view('collaborateur.visualisation',['collaborateurs'=>$collaborateurs]);
    }
    public function create()
    {
        $collaborateurs = Collaborateur::all();
        return view('collaborateur.create', compact('collaborateurs'));
    }
    public function store()
    {
      $data = request()->validate([
        'civility'=>'required',
        'last_name'=>'required',
        'first_name'=>'required|min:5',
        'address'=>'required',
        'postal_code'=>'required',
        'city'=>'required',
        'phone'=>'required',
        'email'=>'required|email',
        'company_name'=>'required',
      ]);
      Collaborateur::create($data);
      return back();
    }
    public function show($collaborateur)
    {
        // $entreprise = Entreprise::find($name);
        $collaborateur = Collaborateur::where('id', $collaborateur)->firstOrFail();
        return view('collaborateur.show', compact('collaborateur'));
    }
    public function edit($collaborateur)
    {
        $collaborateurs= Collaborateur::all();
        $collaborateur = Collaborateur::where('id', $collaborateur)->firstOrFail();
        return view('collaborateur.edit',compact('collaborateur','collaborateurs'));
    }

    public function update($collaborateur)
    {
      $collaborateur = Collaborateur::where('id', $collaborateur)->firstOrFail();
      $data = request()->validate([
          'civility'=>'required',
          'last_name'=>'required',
          'first_name'=>'required|min:5',
          'address'=>'required',
          'postal_code'=>'required',
          'city'=>'required',
          'phone'=>'required',
          'email'=>'required|email',
          'company_name'=>'required',
        ]);
        // Entreprise::update($data);
        $collaborateur->update($data);
        return redirect('collaborateur/' . $collaborateur->id);
    }
    public function destroy($collaborateur)
    {
        $collaborateurs= Collaborateur::all();
        $collaborateur = Collaborateur::where('id', $collaborateur)->firstOrFail();
        $collaborateur->delete();
        return redirect('/collaborateur/id');
    }
}
