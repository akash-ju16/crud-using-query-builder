<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('registarions')->get();
        return view('show', ['d'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //from user input data via FORM
        $name   = $request->input('fname');
        $mobile = $request->input('mobile');
        $email  = $request->input('email');

        //insert data via DB FACADES
        $data = ['name'=>$name, 'mobile'=>$mobile, 'email'=>$email];
        DB::table('registarions')->insert($data);
        
        //redirect
        return redirect(route('showpg'))->with('status','insert successfully');
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
        $editdata = DB::table('registarions')->find($id);
        return view('editform', ['ed'=>$editdata]);
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
        $name   = $request->input('fname');
        $mobile = $request->input('mobile');
        $email  = $request->input('email');

        $data = ['name'=>$name, 'mobile'=>$mobile, 'email'=>$email];
        //dd($data);
        DB::table('registarions')->where('id',$id)->update($data);
        return redirect(route('showpg'))->with('ustatus','update succesfulyy');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table('registarions')->where('id',$id)->delete();
       return redirect(route('showpg'));
    }
}
