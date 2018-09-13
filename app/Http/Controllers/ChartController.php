<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $options = [
            'title' => 'Population of Largest U.S. Cities',
            'chartArea' => ['width' => '50%'],
            'hAxis' => [
                'title' => 'Total Population',
                'minValue' => 0
            ],
            'vAxis' => [
                'title' => 'City'
            ],
            'bars' => 'horizontal', //required if using material chart
            'axes' => [
                'y' => [0 => ['side' => 'right']]
            ]
        ];

        $cols = ['City', '2010 Population', '2000 PopulaÎtions'];
        $rows = [
            ['New York City, NY', 8175000, 8008000],
            ['Los Angeles, CA', 3792000, 3694000],
            ['Chicago, IL', 2695000, 2896000],
            ['Houston, TX', 2099000, 1953000],
            ['Philadelphia, PA', 1526000, 1517000]
        ];

     return view('charts');
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
