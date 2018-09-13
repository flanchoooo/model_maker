<?php

namespace App\Http\Controllers;

use App\Expenses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EditExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Expenses::all()->where('month',request('id'));
        return view('edit_expenses')->with('records',$records);
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



            $total_expenses =
            request('raw_materials') +
            request('payroll_fixed') + request('payroll_variable') +
            request('repairs') +
            request('electricity') +
            request('insurance') +
            request('water') +
            request('rates') +
            request('security') +
            request('canteen') +
            request('supplies') +
            request('services') +
            request('vehicle') +
            request('debt_one') +
            request('debt_two') +
            request('debt_three') +
            request('debt_four') +
            request('other');


            Expenses::where('id',request('id'))->update([

            "raw_materials" => request('raw_materials'),
            "payroll_fixed" => request('payroll_fixed'),
            "payroll_variable" => request('payroll_variable'),
            "repairs" => request('repairs'),
            "electricity" => request('electricity'),
            "insurance" => request('insurance'),
            "water" => request('water'),
            "rates" => request('rates'),
            "security" => request('security'),
            "canteen" => request('canteen'),
            "supplies" => request('supplies'),
            "services" => request('services'),
            "vehicle" => request('vehicle'),
            "debt_one" => request('debt_one'),
            "debt_two" => request('debt_two'),
            "debt_three" => request('debt_three'),
            "debt_four" => request('debt_four'),
            "total_expenses" => $total_expenses,
            "other" => request('other'),
        ]);

        session()->flash('success', 'Expenses Successfully Loaded');
        return Redirect::to('expense');


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
