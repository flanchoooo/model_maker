<?php

namespace App\Http\Controllers;

use App\Company;
use App\Expenses;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $records = Company::all();
        return view("expenses")->with("records",$records);
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
        if(request('month') > 36){

            session()->flash('fail', 'You can only create a 3 year business model');
            return Redirect::to('expenses');
        }


        try {

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
                request('production_overheads') +
                request('vehicle') +
                request('debt_one') +
                request('debt_two') +
                request('debt_three') +
                request('debt_four') +
                request('other');



            for ($x = 1; $x <=  request('month'); $x++) {
                Expenses::Create([

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
                    "production_overheads" => request('production_overheads'),
                    "vehicle" => request('vehicle'),
                    "debt_one" => request('debt_one'),
                    "debt_two" => request('debt_two'),
                    "debt_three" => request('debt_three'),
                    "debt_four" => request('debt_four'),
                    "total_expenses" => $total_expenses,
                    "co_id" => request('company'),
                    "other" => request('other'),
                    "month"=>$x,
                ]);
            }

        //session()->flash('success', 'Expenses Successfully Loaded');
        return Redirect::to('expense');

        } catch (QueryException $e){

            session()->flash('failure', 'Duplicate Entry');
           return  Redirect::to('expenses');


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
