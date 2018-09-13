@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6 col-lg-offset-3">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Model Name</h3>
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
                <form role="form" action="company/create" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Model Name" id="exampleInputEmail1"  name="company" required>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control"  placeholder="Description" id="exampleInputEmail1"  name="description" required></textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
