@extends('layouts.app')


@section('content')


    <!--Div that will hold the pie chart-->


    <div class="row">
        <!-- left column -->
        <div class="col-md-8 col-lg-offset-2">
            <div class="box">
                <div class="center-block" id="chart_div"></div>
            </div>
        </div>
    </div>

    @php




    use App\Inputs;

        $result = Inputs::all()->where('co_id',session('company'))->where('month',1);foreach($result as $m) {$rev1 =$m->revenue;};
        $result2 = Inputs::all()->where('co_id',session('company'))->where('month',2);foreach($result2 as $m) {$rev2=$m->revenue;};
        $result3 = Inputs::all()->where('co_id',session('company'))->where('month',3);foreach($result3 as $m) {$rev3 = $m->revenue;};
        $result4 = Inputs::all()->where('co_id',session('company'))->where('month',4);foreach($result4 as $m) {$rev4 =$m->revenue;};
        $result5 = Inputs::all()->where('co_id',session('company'))->where('month',5);foreach($result5 as $m) {$rev5 = $m->revenue;};
        $result6 = Inputs::all()->where('co_id',session('company'))->where('month',6);foreach($result6 as $m) {$rev6 = $m->revenue;};
        $result7 = Inputs::all()->where('co_id',session('company'))->where('month',7);foreach($result7 as $m) {$rev7 = $m->revenue;};
        $result8 = Inputs::all()->where('co_id',session('company'))->where('month',8);foreach($result8 as $m) {$rev8= $m->revenue;};
        $result9 = Inputs::all()->where('co_id',session('company'))->where('month',9);foreach($result9 as $m) {$rev9 = $m->revenue;};
        $result10 = Inputs::all()->where('co_id',session('company'))->where('month',10);foreach($result10 as $m) {$rev10= $m->revenue;};
        $result11 = Inputs::all()->where('co_id',session('company'))->where('month',11);foreach($result11 as $m) {$rev11= $m->revenue;};
        $result12 = Inputs::all()->where('co_id',session('company'))->where('month',12);foreach($result12 as $m) {$rev12= $m->revenue;};
        $result13 = Inputs::all()->where('co_id',session('company'))->where('month',13);foreach($result13 as $m) {$rev13= $m->revenue;};
        $result14= Inputs::all()->where('co_id',session('company'))->where('month',14);foreach($result14 as $m) {$rev14= $m->revenue;};
        $result15 = Inputs::all()->where('co_id',session('company'))->where('month',15);foreach($result15 as $m) {$rev15= $m->revenue;};
        $result16 = Inputs::all()->where('co_id',session('company'))->where('month',16);foreach($result16 as $m) {$rev16= $m->revenue;};
        $result17 = Inputs::all()->where('co_id',session('company'))->where('month',17);foreach($result17 as $m) {$rev17= $m->revenue;};
        $result18 = Inputs::all()->where('co_id',session('company'))->where('month',18);foreach($result18 as $m) {$rev18= $m->revenue;};
        $result19 = Inputs::all()->where('co_id',session('company'))->where('month',19);foreach($result19 as $m) {$rev19= $m->revenue;};
        $result20 = Inputs::all()->where('co_id',session('company'))->where('month',20);foreach($result20 as $m) {$rev20= $m->revenue;};
        $result21 = Inputs::all()->where('co_id',session('company'))->where('month',21);foreach($result21 as $m) {$rev21= $m->revenue;};
        $result22 = Inputs::all()->where('co_id',session('company'))->where('month',22);foreach($result22 as $m) {$rev22= $m->revenue;};
        $result23 = Inputs::all()->where('co_id',session('company'))->where('month',23);foreach($result23 as $m) {$rev23= $m->revenue;};
        $result24 = Inputs::all()->where('co_id',session('company'))->where('month',24);foreach($result24 as $m) {$rev24= $m->revenue;};
        $result25 = Inputs::all()->where('co_id',session('company'))->where('month',25);foreach($result25 as $m) {$rev25= $m->revenue;};
        $result26 = Inputs::all()->where('co_id',session('company'))->where('month',26);foreach($result26 as $m) {$rev26= $m->revenue;};
        $result27 = Inputs::all()->where('co_id',session('company'))->where('month',27);foreach($result27 as $m) {$rev27= $m->revenue;};
        $result28 = Inputs::all()->where('co_id',session('company'))->where('month',28);foreach($result28 as $m) {$rev28= $m->revenue;};
        $result29 = Inputs::all()->where('co_id',session('company'))->where('month',29);foreach($result29 as $m) {$rev29= $m->revenue;};
        $result30 = Inputs::all()->where('co_id',session('company'))->where('month',30);foreach($result30 as $m) {$rev30= $m->revenue;};
        $result31= Inputs::all()->where('co_id',session('company'))->where('month',31);foreach($result31 as $m) {$rev31= $m->revenue;};
        $result32 = Inputs::all()->where('co_id',session('company'))->where('month',32);foreach($result32 as $m) {$rev32= $m->revenue;};
        $result33 = Inputs::all()->where('co_id',session('company'))->where('month',33);foreach($result33 as $m) {$rev33= $m->revenue;};
        $result34 = Inputs::all()->where('co_id',session('company'))->where('month',34);foreach($result34 as $m) {$rev34= $m->revenue;};
        $result35 = Inputs::all()->where('co_id',session('company'))->where('month',35);foreach($result35 as $m) {$rev35= $m->revenue;};
        $result36 = Inputs::all()->where('co_id',session('company'))->where('month',36);foreach($result36 as $m) {$rev36= $m->revenue;};



    @endphp



    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Revenue');
            data.addRows([
                ['Month 1',@php   if(!isset($rev1)){ echo $rev1 = '0';}else{ echo $rev1;} @endphp],
                ['Month 2', @php if(!isset($rev2)){  echo $rev1 = '0';}else{ echo $rev2;} @endphp],
                ['Month 3',@php  if(!isset($rev3)){   echo$rev1 = '0';}else{echo $rev3;} @endphp],
                ['Month 4', @php  if(!isset($rev4)){   echo $rev1 = '0';}else{echo $rev4;} @endphp],
                ['Month 5', @php  if(!isset($rev5)){  echo $rev1 = '0';}else{echo $rev5;} @endphp],
                    ['Month 6',@php if(!isset($rev6)){   echo $rev1 = '0';}else{ echo $rev6;} @endphp],
                    ['Month 7', @php if(!isset($rev7)){   echo $rev1 = '0';}else{echo $rev7;} @endphp],
                    ['Month 8', @php if(!isset($rev8)){   echo$rev1 = '0';}else{ echo $rev8;} @endphp],
                    ['Month 9', @php  if(!isset($rev9)){  echo $rev1 = '0';}else{echo $rev9;} @endphp],
                    ['Month 10', @php  if(!isset($rev10)){   echo$rev1 = '0';}else{echo $rev10;} @endphp],
                    ['Month 11', @php  if(!isset($rev11)){  echo $rev1 = '0';}else{echo $rev11;} @endphp],
                    ['Month 12', @php  if(!isset($rev12)){  echo $rev1 = '0';}else{echo $rev12;} @endphp],
                    ['Month 13', @php if(!isset($rev13)){  echo $rev1 = '0';}else{echo $rev13;} @endphp],
                    ['Month 14', @php  if(!isset($rev14)){   echo$rev1 = '0';}else{echo $rev14;} @endphp],
                    ['Month 15',@php  if(!isset($rev15)){ echo $rev1 = '0';}else{echo $rev15;} @endphp],
                    ['Month 16', @php  if(!isset($rev16)){  echo $rev1 = '0';}else{echo $rev16;} @endphp],
                    ['Month 17', @php  if(!isset($rev17)){  echo $rev1 = '0';}else{echo $rev17;} @endphp],
                    ['Month 18', @php  if(!isset($rev18)){ echo $rev1 = '0';}else{echo $rev18;} @endphp],
                    ['Month 19', @php  if(!isset($rev19)){  echo $rev1 = '0';}else{echo $rev19;} @endphp],
                    ['Month 20', @php  if(!isset($rev20)){  echo $rev1 = '0';}else{echo $rev20;} @endphp],
                    ['Month 21', @php  if(!isset($rev21)){  echo $rev1 = '0';}else{echo $rev21;} @endphp],
                    ['Month 22', @php  if(!isset($rev22)){  echo $rev1 = '0';}else{echo $rev22;} @endphp],
                    ['Month 23', @php  if(!isset($rev23)){  echo $rev1 = '0';}else{echo $rev23;} @endphp],
                    ['Month 24', @php  if(!isset($rev24)){  echo $rev1 = '0';}else{echo $rev24;} @endphp],
                    ['Month 25', @php  if(!isset($rev25)){  echo $rev1 = '0';}else{echo $rev25;} @endphp],
                    ['Month 26', @php  if(!isset($rev26)){  echo $rev1 = '0';}else{echo $rev26;} @endphp],
                    ['Month 27', @php  if(!isset($rev27)){  echo $rev1 = '0';}else{echo $rev27;} @endphp],
                    ['Month 28', @php  if(!isset($rev28)){  echo $rev1 = '0';}else{echo $rev28;} @endphp],
                    ['Month 29', @php  if(!isset($rev29)){   echo $rev1 = '0';}else{echo $rev29;} @endphp],
                    ['Month 30',@php  if(!isset($rev30)){  echo $rev1 = '0';}else{echo $rev30;} @endphp],
                    ['Month 31',@php  if(!isset($rev31)){  echo $rev1 = '0';}else{echo $rev31;} @endphp],
                    ['Month 32', @php if(!isset($rev32)){   echo $rev1 = '0';}else{ echo $rev32;} @endphp],
                    ['Month 33', @php  if(!isset($rev33)){  echo $rev1 = '0';}else{echo $rev33;} @endphp],
                    ['Month 34', @php  if(!isset($rev34)){  echo $rev1 = '0';}else{echo $rev34;} @endphp],
                    ['Month 35',@php  if(!isset($rev35)){  echo $rev1 = '0';}else{echo $rev35;}@endphp],
                    ['Month 36', @php  if(!isset($rev36)){   echo $rev1 = '0';}else{echo $rev36;} @endphp]

            ]);

            // Set chart options
            var options = {'title':'Revenue',
                'width':800,
                'height':600};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>

@endsection

