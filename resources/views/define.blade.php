@extends('layouts.app')

@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-6 col-lg-offset-3">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Input Variable</h3>
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
                <form role="form" action="define/store" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company</label>

                            <select type="email" class="form-control" id="exampleInputEmail1"  name="table_name">

                                <option value="@php
                                    use Illuminate\Support\Facades\DB;
                                    $records = DB::select("SHOW TABLES LIKE '%inputs%'");
                                    foreach ($records as $record){
                                     echo  $table = head($record);
                                    }
                                @endphp" name="table_name">
                                    @php
                                        $record = DB::select("SHOW TABLES LIKE '%inputs%'");
                                        foreach ($records as $record){
                                        echo head($record);
                                        }
                                    @endphp
                                </option>
                            </select>

                            <br>
                            <div class="form-group">

                                @php
                                    use Illuminate\Support\Facades\Schema;
                                  $columns = Schema::getColumnListing($table);
                                foreach ($columns as $col){


                               // insert into DB upon creation and echo out the results reading from the DB.
                               //
                               session('ids',$col);


                               echo $name= '<label for="exampleInputPassword1">'.$col.'</label>'.'<input id="text" type="text" class="form-control" '.'name="'.$col.'".'.'" required>'.'<br>';


                                }

                                @endphp

                            </div>
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
