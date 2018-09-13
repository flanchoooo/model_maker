<?php

namespace App\Http\Controllers;

use App\Company;
use App\Inputs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class EditInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $records = Inputs::all()->where('id',request('id'));
        return view('edit_input')->with('records',$records);

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
        //
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



        $total_inputs =  request('zfc') +  request('ominia') + request('command') + request('pres_inputs');
        $revenue =  $total_inputs * request('selling_price');
        Inputs::where('month',request('id'))->update([
            "zfc"=> request('zfc'),
            "ominia" =>  request('ominia'),
            "command" => request('command'),
            "pres_input_scheme" => request('pres_inputs'),
            "selling_price" => request('selling_price'),
            "revenue" => $revenue,
            "total_inputs"=> $total_inputs,

        ]);

        session()->flash('success', 'Input Variable Successfully Added');
        return Redirect::to('inputs');


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
        //
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
