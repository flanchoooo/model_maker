@extends('layouts.app')

@section('content')



    <div class="row">
        <!-- left column -->
        <div class="col-md-8 col-lg-offset-2">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Project Expenses</h3>
                    @if ($flash = session('success'))
                        <div  class="alert alert-success" role="alert">
                            {{$flash}}
                        </div>
                    @endif

                    @if ($flash = session('failure'))
                        <div  class="alert alert-dangeri" role="alert">
                            {{$flash}}
                        </div>
                    @endif
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="edit_expenses/edit{id}" aria-label="{{ __('Add Product') }}">
                    @csrf

                    @foreach($records as $record)
                    <div class="box-body">
                        <div class="col-lg-3">
                            <label>Company Name:</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="@php

                                    $name = \App\Company::all()->where('id',$record->co_id);
                                      foreach ($name as $n){
                                      echo $n->name;
                                      }
                                @endphp" name="raw_materials" required>
                            </div>
                        </div>



                        <div class="col-lg-3">
                            <label>Raw Materials:</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->raw_materials}}" name="raw_materials" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Payroll Fixed:</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control"value="{{$record->payroll_fixed}}" name="payroll_fixed" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Payroll Variable</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->payroll_variable}}" name="payroll_variable" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Maintenance</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->repairs}}" name="repairs" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Electricity</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->electricity}}" name="electricity" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Insurance</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->insurance}}" name="insurance" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Water</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->water}}" name="water" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Rates</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->rates}}" name="rates" required>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <label>Security</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->security}}" name="security" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Canteen</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->canteen}}" name="canteen" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Supplies</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->supplies}}" name="supplies" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Services</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->services}}" name="services" required>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <label>Vehicle</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control"value="{{$record->vehicle}}" name="vehicle" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Debt Facility:1</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" value="{{$record->debt_one}}" name="debt_one" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Debt Facility:2</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control"  value="{{$record->debt_two}}" name="debt_two" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Debt Facility:3</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control"  value="{{$record->debt_three}}" name="debt_three" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Debt Facility:3</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control"  value="{{$record->debt_four}}" name="debt_four" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <label>Other</label>
                            <div class="form-group">
                                <input id="text" type="text" class="form-control"  value="{{$record->other}}" name="other" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="hidden" class="form-control" value="{{$record->id}}" name="id" required>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <!-- /.box-body -->
                    <div class="box-footer col-sm" >
                        <button type="submit" class="btn btn-primary">   {{ __('Validate') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
