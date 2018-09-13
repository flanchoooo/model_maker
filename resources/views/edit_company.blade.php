@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6 col-lg-offset-3">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Company Profile</h3>
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
                <form role="form" action="edit_company/edit{id}" method="POST">
                    @csrf

                    @foreach($records as $record)
                    <div class="box-body">

                        <div class="form-group">
                            <input type="hidden" class="form-control"  placeholder="Company Name" id="exampleInputEmail1"  name="company_id"  value="{{$record->id}}">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Company Name" id="exampleInputEmail1"  name="company_name"  value="{{$record->name}}" required>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control"  placeholder="Company Name" id="textarea"  name="description"  value="{{$record->description}}" required>{{$record->description}}</textarea>
                        </div>
                    </div>
                    @endforeach
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
