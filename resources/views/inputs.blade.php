@extends('layouts.app')


@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-10 col-lg-offset-1">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Project Inputs</h3><br>
                    <br>
                    <a href="{{'input'}}"><i class="fa fa-plus"></i></a>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example" class="table table-bordered table-striped table-responsive">

                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company</th>
                            <th>Revenue</th>
                            <th>Month</th>
                            <th>Selling $</th>
                            <th>Total Inputs</th>
                            <th>Add</th>
                            <th>Edit</th>
                            <th>Trash</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($records as $record => $values)
                            <tr class="odd gradeX">
                                <td>{{$values->id}}</td>
                                <td>
                                    @php

                                  $name = \App\Company::all()->where('id',$values->co_id);
                                    foreach ($name as $n){
                                    echo $n->name;
                                    }
                                    @endphp
                                </td>
                                <td>{{'$'.$values->revenue.'.00'}}</td>
                                <td>{{$values->month}}</td>
                                <td>{{$values->selling_price}}</td>
                                <td>{{$values->total_inputs}}</td>
                                <td>
                                    <a href="{{'input'}}">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                    </a>
                                </td>

                                <td>

                                    <form role="form" action="edit_input" method="POST">
                                        @csrf
                                        <input type="hidden" class="form-control"  placeholder="Company Name" value="{{$values->id}}"  name="id" >
                                        <button type="submit" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                    </form>

                                </td>

                                <td>
                                    <form role="form" action="drop_input" method="POST">
                                        @csrf
                                        <input type="hidden" class="form-control"  placeholder="Company Name" value="{{$values->id}}"  name="id" >
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>

@endsection

