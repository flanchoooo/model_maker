@extends('layouts.app')

@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-6 col-lg-offset-3">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">View Models</h3>
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
                <form role="form" action="business" method="POST">
                    @csrf

                    @foreach($records as $record)
                    <div class="box-body">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <select id="text" type="text" class="form-control" placeholder="Company Name" name="company"  required>
                                    @foreach($records as $record)
                                        <option value="{{$record->id}}">{{$record->name}}</option>
                                    @endforeach
                                </select>
                            </div>
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
