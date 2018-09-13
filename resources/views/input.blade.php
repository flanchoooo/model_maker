@extends('layouts.app')

@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-6 col-lg-offset-3">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Project Inputs</h3>
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
                <form role="form" action="input/store" method="POST">
                    @csrf
                    <div class="box-body">


                        <div class="form-group">

                            <select id="text" type="text" class="form-control" placeholder="Company Name" name="company"  required>
                                @foreach($records as $record)
                                <option value="{{$record->id}}">{{$record->name}}</option>
                                @endforeach
                            </select>


                            </div>

                        <div class="form-group">
                            <input id="text" type="text" class="form-control" placeholder="ZFC" name="zfc" required>
                        </div>

                        <div class="form-group">
                            <input id="text" type="text" class="form-control" placeholder="Ominia" name="ominia" required>
                        </div>

                        <div class="form-group">
                            <input id="text" type="text" class="form-control" placeholder="Command Agriculture" name="command" required>
                        </div>

                        <div class="form-group">
                            <input id="text" type="text" class="form-control" placeholder="Presidential Inputs" name="pres_inputs" required>
                        </div>

                        <div class="form-group">
                            <input id="text" type="text" class="form-control" placeholder="Period in Months" name="start_period" required>
                        </div>


                        <div class="form-group">
                            <input id="text" type="text" class="form-control" placeholder="Selling Price/tonne" name="selling_price" required>
                        </div>

                        </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
