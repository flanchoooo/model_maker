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
                <form role="form" action="edit_input/edit{id}" method="POST">
                    @csrf

                    @foreach($records as $record)
                    <div class="box-body">

                        <div class="form-group">
                            <label>Company Name</label>
                            <input id="text" type="text" class="form-control" value="@php

                                $name = \App\Company::all()->where('id',$record->co_id);
                                  foreach ($name as $n){
                                  echo $n->name;
                                  }
                            @endphp" name="company_name"   readonly>
                        </div>

                        <div class="form-group">
                            <input id="text" type="hidden" class="form-control" value="{{$record->id}}" name="id" required>
                        </div>

                        <div class="form-group">
                            <label>Input:ZFC</label>
                            <input id="text" type="text" class="form-control" value="{{$record->zfc}}" name="zfc" required>
                        </div>

                        <div class="form-group">
                            <label>Input:Ominia</label>
                            <input id="text" type="text" class="form-control" value="{{$record->ominia}}" name="ominia" required>
                        </div>

                        <div class="form-group">
                            <label>Input:Commmand Agriculture</label>
                            <input id="text" type="text" class="form-control" value="{{$record->command}}" name="command" required>
                        </div>

                        <div class="form-group">
                            <label>Input:Presidental Input Scheme</label>
                            <input id="text" type="text" class="form-control" value="{{$record->pres_input_scheme}}" name="pres_inputs" required>
                        </div>

                        <div class="form-group">
                            <label>Input:Selling Price</label>
                            <input id="text" type="text" class="form-control" value="{{$record->selling_price}}" name="selling_price" required>
                        </div>

                        </div>
                    @endforeach

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
