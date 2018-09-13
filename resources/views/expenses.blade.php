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

                    @if ($flash = session('fail'))
                        <div  class="alert alert-danger" role="alert">
                            {{$flash}}
                        </div>
                    @endif
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="/expenses/store" aria-label="{{ __('Add Product') }}">
                    @csrf
                    <div class="box-body">

                        <div class="col-lg-3">
                            <div class="form-group">
                                <select id="text" type="text" class="form-control" placeholder="Company Name" name="company"  required>
                                    @foreach($records as $record)
                                        <option value="{{$record->id}}">{{$record->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Raw Materials" name="raw_materials" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Payroll: Fixed" name="payroll_fixed" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Payroll: Variable" name="payroll_variable" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Repairs & Maintenance" name="repairs" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Electricity" name="electricity" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Raw Insurance" name="insurance" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Water" name="water" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Rates" name="rates" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="security" name="security" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Canteen" name="canteen" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Supplies" name="supplies" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Services" name="services" required>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Vehicle Expenses" name="vehicle" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Debt Facility:" name="debt_one" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Debt Facility:" name="debt_two" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Debt Facility:" name="debt_three" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Debt Facility:" name="debt_four" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Other" name="other" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <input id="text" type="text" class="form-control" placeholder="Number of Months" name="month" required>
                            </div>
                        </div>

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
