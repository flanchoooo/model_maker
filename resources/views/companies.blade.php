@extends('layouts.app')


@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-8 col-lg-offset-2">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Models</h3><br>
            <br>
            <a href="{{'company'}}"><i class="fa fa-plus"></i></a>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example" class="table table-bordered table-striped table-responsive">

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Add</th>
                    <th>Edit</th>
                    <th>Trash</th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as $record => $values)
                    <tr class="odd gradeX">
                        <td>{{$values->id}}</td>
                        <td>{{$values->name}}</td>
                        <td>{{$values->description}}</td>
                        <td>
                            <a href="{{'company'}}">
                                <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                               </a>
                        </td>

                        <td>

                                <form role="form" action="edit_company" method="POST">
                                    @csrf
                                    <input type="hidden" class="form-control"  placeholder="Company Name" value="{{$values->id}}"  name="id" >
                                    <button type="submit" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                </form>

                        </td>

                        <td>
                                <form role="form" action="drop_company" method="POST">
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

