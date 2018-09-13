<?php

namespace App\Http\Controllers;

use App\Company;
use App\Inputs;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class InputVariableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $records = Company::all();
        return view('input')->with('records', $records);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {


        if(request('start_period') > 36){

            session()->flash('fail', 'You can only create a 3 year business model');
            return Redirect::to('input');
        }

        try {

            $number_of_months = request('start_period');

            $total_inputs = request('zfc') + request('ominia') + request('command') + request('pres_inputs');
            $revenue = $total_inputs * request('selling_price');

            for ($x = 1; $x <=   $number_of_months; $x++) {
                Inputs::create([
                    "co_id" => request('company'),
                    "zfc" => request('zfc'),
                    "ominia" => request('ominia'),
                    "command" => request('command'),
                    "pres_input_scheme" => request('pres_inputs'),
                    "selling_price" => request('selling_price'),
                    "revenue" => $revenue,
                    "total_inputs" => $total_inputs,
                    "month"=>$x,
                ]);
            }

            //session()->flash('success', 'Input Variable Successfully Added');
            return Redirect::to('inputs');

        }
        catch (QueryException $e){

            session()->flash('fail', 'Failed to Add Input Variable');
            return Redirect::to('input');
        }

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
        //
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
