<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form; 

class formcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $form = Form::all();
       return view('forms.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'name' =>'required',
            'email' =>'required',
            'password' =>'required'

        ]);
        $form = new form([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
            ]);
    
            $form->save();
            return redirect('/forms')->with('success', 'form has been saved');
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Form::all($id);
        return view('forms.edit', compact('forms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'password' => 'required'
          ]);
    
          $form = form::find($id);
          $form->name = $request->get('name');
          $form->email = $request->get('email');
          $form->address = $request->get('password');
          $form->save();
    
          return redirect('/forms')->with('success', 'forms has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
