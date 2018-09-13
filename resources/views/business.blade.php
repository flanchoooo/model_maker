@extends('layouts.app')


@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12 col-lg-offset-0">
    <div class="box">

        <!-- /.box-header -->
        <div class="box-body">
            <table id="example" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                    <th>Details</th>
                    <th>Month 1</th>
                    <th>Month 2</th>
                    <th>Month 3</th>
                    <th>Month 4</th>
                    <th>Month 5</th>
                    <th>Month 6</th>
                    <th>Month 7</th>
                    <th>Month 8</th>
                    <th>Month 9</th>
                    <th>Month 10</th>
                    <th>Month 11</th>
                    <th>Month 12</th>
                    <th class="hidden">Month 13</th>
                    <th class="hidden">Month 14</th>
                    <th class="hidden">Month 15</th>
                    <th class="hidden">Month 16</th>
                    <th class="hidden">Month 17</th>
                    <th class="hidden">Month 18</th>
                    <th class="hidden">Month 19</th>
                    <th class="hidden">Month 20</th>
                    <th class="hidden">Month 21</th>
                    <th class="hidden">Month 22</th>
                    <th class="hidden">Month 23</th>
                    <th class="hidden">Month 24</th>
                    <th class="hidden">Month 25</th>
                    <th class="hidden">Month 26</th>
                    <th class="hidden">Month 27</th>
                    <th class="hidden">Month 28</th>
                    <th class="hidden">Month 29</th>
                    <th class="hidden">Month 30</th>
                    <th class="hidden">Month 31</th>
                    <th class="hidden">Month 32</th>
                    <th class="hidden">Month 33</th>
                    <th class="hidden">Month 34</th>
                    <th class="hidden">Month 35</th>
                    <th class="hidden">Month 36</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>a. ZFC</td>
                    <td>{{session('month1')}}</td>
                    <td>{{session('month2')}}</td>
                    <td>{{session('month3')}}</td>
                    <td>{{session('month4')}}</td>
                    <td>{{session('month5')}}</td>
                    <td>{{session('month6')}}</td>
                    <td>{{session('month7')}}</td>
                    <td>{{session('month8')}}</td>
                    <td>{{session('month9')}}</td>
                    <td>{{session('month10')}}</td>
                    <td>{{session('month11')}}</td>
                    <td>{{session('month12')}}</td>
                    <td class="hidden">{{session('month13')}}</td>
                    <td class="hidden">{{session('month14')}}</td>
                    <td class="hidden">{{session('month15')}}</td>
                    <td class="hidden">{{session('month16')}}</td>
                    <td class="hidden">{{session('month17')}}</td>
                    <td class="hidden">{{session('month18')}}</td>
                    <td class="hidden">{{session('month19')}}</td>
                    <td class="hidden">{{session('month20')}}</td>
                    <td class="hidden">{{session('month21')}}</td>
                    <td class="hidden">{{session('month22')}}</td>
                    <td class="hidden">{{session('month23')}}</td>
                    <td class="hidden">{{session('month24')}}</td>
                    <td class="hidden">{{session('month25')}}</td>
                    <td class="hidden">{{session('month26')}}</td>
                    <td class="hidden">{{session('month27')}}</td>
                    <td class="hidden">{{session('month28')}}</td>
                    <td class="hidden">{{session('month29')}}</td>
                    <td class="hidden">{{session('month30')}}</td>
                    <td class="hidden">{{session('month31')}}</td>
                    <td class="hidden">{{session('month32')}}</td>
                    <td class="hidden">{{session('month33')}}</td>
                    <td class="hidden">{{session('month34')}}</td>
                    <td class="hidden">{{session('month35')}}</td>
                    <td class="hidden">{{session('month36')}}</td>
                </tr>

                <tr>
                    <td>b. Ominia</td>
                    <td>{{session('ominia1')}}</td>
                    <td>{{session('ominia2')}}</td>
                    <td>{{session('ominia3')}}</td>
                    <td>{{session('ominia4')}}</td>
                    <td>{{session('ominia5')}}</td>
                    <td>{{session('ominia6')}}</td>
                    <td>{{session('ominia7')}}</td>
                    <td>{{session('ominia8')}}</td>
                    <td>{{session('ominia9')}}</td>
                    <td>{{session('ominia10')}}</td>
                    <td>{{session('ominia11')}}</td>
                    <td>{{session('ominia12')}}</td>
                    <td class="hidden">{{session('ominia13')}}</td>
                    <td class="hidden">{{session('ominia14')}}</td>
                    <td class="hidden">{{session('ominia15')}}</td>
                    <td class="hidden">{{session('ominia16')}}</td>
                    <td class="hidden">{{session('ominia17')}}</td>
                    <td class="hidden">{{session('ominia18')}}</td>
                    <td class="hidden">{{session('ominia19')}}</td>
                    <td class="hidden">{{session('ominia20')}}</td>
                    <td class="hidden">{{session('ominia21')}}</td>
                    <td class="hidden">{{session('ominia22')}}</td>
                    <td class="hidden">{{session('ominia23')}}</td>
                    <td class="hidden">{{session('ominia24')}}</td>
                    <td class="hidden">{{session('ominia25')}}</td>
                    <td class="hidden">{{session('ominia26')}}</td>
                    <td class="hidden">{{session('ominia27')}}</td>
                    <td class="hidden">{{session('ominia28')}}</td>
                    <td class="hidden">{{session('ominia29')}}</td>
                    <td class="hidden">{{session('ominia30')}}</td>
                    <td class="hidden">{{session('ominia31')}}</td>
                    <td class="hidden">{{session('ominia32')}}</td>
                    <td class="hidden">{{session('ominia33')}}</td>
                    <td class="hidden">{{session('ominia34')}}</td>
                    <td class="hidden">{{session('ominia35')}}</td>
                    <td class="hidden">{{session('ominia36')}}</td>
                </tr>
                <tr>
                    <td>c. Command Agriculture</td>
                    <td>{{session('command1')}}</td>
                    <td>{{session('command2')}}</td>
                    <td>{{session('command3')}}</td>
                    <td>{{session('command4')}}</td>
                    <td>{{session('command5')}}</td>
                    <td>{{session('command6')}}</td>
                    <td>{{session('command7')}}</td>
                    <td>{{session('command8')}}</td>
                    <td>{{session('command9')}}</td>
                    <td>{{session('command10')}}</td>
                    <td>{{session('command11')}}</td>
                    <td>{{session('command12')}}</td>
                    <td class="hidden">{{session('command13')}}</td>
                    <td class="hidden">{{session('command14')}}</td>
                    <td class="hidden">{{session('command15')}}</td>
                    <td class="hidden">{{session('command16')}}</td>
                    <td class="hidden">{{session('command17')}}</td>
                    <td class="hidden">{{session('command18')}}</td>
                    <td class="hidden">{{session('command19')}}</td>
                    <td class="hidden">{{session('command20')}}</td>
                    <td class="hidden">{{session('command21')}}</td>
                    <td class="hidden">{{session('command22')}}</td>
                    <td class="hidden">{{session('command23')}}</td>
                    <td class="hidden">{{session('command24')}}</td>
                    <td class="hidden">{{session('command25')}}</td>
                    <td class="hidden">{{session('command26')}}</td>
                    <td class="hidden">{{session('command27')}}</td>
                    <td class="hidden">{{session('command28')}}</td>
                    <td class="hidden">{{session('command29')}}</td>
                    <td class="hidden">{{session('command30')}}</td>
                    <td class="hidden">{{session('command31')}}</td>
                    <td class="hidden">{{session('command32')}}</td>
                    <td class="hidden">{{session('command33')}}</td>
                    <td class="hidden">{{session('command34')}}</td>
                    <td class="hidden">{{session('command35')}}</td>
                    <td class="hidden">{{session('command36')}}</td>
                </tr>

                <tr>
                    <td>d. Presidential Input Scheme</td>
                    <td>{{session('pres_input_scheme1')}}</td>
                    <td>{{session('pres_input_scheme2')}}</td>
                    <td>{{session('pres_input_scheme3')}}</td>
                    <td>{{session('pres_input_scheme4')}}</td>
                    <td>{{session('pres_input_scheme5')}}</td>
                    <td>{{session('pres_input_scheme6')}}</td>
                    <td>{{session('pres_input_scheme7')}}</td>
                    <td>{{session('pres_input_scheme8')}}</td>
                    <td>{{session('pres_input_scheme9')}}</td>
                    <td>{{session('pres_input_scheme10')}}</td>
                    <td>{{session('pres_input_scheme11')}}</td>
                    <td>{{session('pres_input_scheme12')}}</td>
                    <td class="hidden">{{session('pres_input_scheme13')}}</td>
                    <td class="hidden">{{session('pres_input_scheme14')}}</td>
                    <td class="hidden">{{session('pres_input_scheme15')}}</td>
                    <td class="hidden">{{session('pres_input_scheme16')}}</td>
                    <td class="hidden">{{session('pres_input_scheme17')}}</td>
                    <td class="hidden">{{session('pres_input_scheme18')}}</td>
                    <td class="hidden">{{session('pres_input_scheme19')}}</td>
                    <td class="hidden">{{session('pres_input_scheme20')}}</td>
                    <td class="hidden">{{session('pres_input_scheme21')}}</td>
                    <td class="hidden">{{session('pres_input_scheme22')}}</td>
                    <td class="hidden">{{session('pres_input_scheme23')}}</td>
                    <td class="hidden">{{session('pres_input_scheme24')}}</td>
                    <td class="hidden">{{session('pres_input_scheme25')}}</td>
                    <td class="hidden">{{session('pres_input_scheme26')}}</td>
                    <td class="hidden">{{session('pres_input_scheme27')}}</td>
                    <td class="hidden">{{session('pres_input_scheme28')}}</td>
                    <td class="hidden">{{session('pres_input_scheme29')}}</td>
                    <td class="hidden">{{session('pres_input_scheme30')}}</td>
                    <td class="hidden">{{session('pres_input_scheme31')}}</td>
                    <td class="hidden">{{session('pres_input_scheme32')}}</td>
                    <td class="hidden">{{session('pres_input_scheme33')}}</td>
                    <td class="hidden">{{session('pres_input_scheme34')}}</td>
                    <td class="hidden">{{session('pres_input_scheme35')}}</td>
                    <td class="hidden">{{session('pres_input_scheme36')}}</td>
                </tr>
                <tr>
                    <td>e. Total Inputs</td>
                <td>{{session('total_inputs1')}}</td>
                <td>{{session('total_inputs2')}}</td>
                <td>{{session('total_inputs3')}}</td>
                <td>{{session('total_inputs4')}}</td>
                <td>{{session('total_inputs5')}}</td>
                <td>{{session('total_inputs6')}}</td>
                <td>{{session('total_inputs7')}}</td>
                <td>{{session('total_inputs8')}}</td>
                <td>{{session('total_inputs9')}}</td>
                <td>{{session('total_inputs10')}}</td>
                <td>{{session('total_inputs11')}}</td>
                <td>{{session('total_inputs12')}}</td>
                <td class="hidden">{{session('total_inputs13')}}</td>
                <td class="hidden">{{session('total_inputs14')}}</td>
                <td class="hidden">{{session('total_inputs15')}}</td>
                <td class="hidden">{{session('total_inputs16')}}</td>
                <td class="hidden">{{session('total_inputs17')}}</td>
                <td class="hidden">{{session('total_inputs18')}}</td>
                <td class="hidden">{{session('total_inputs19')}}</td>
                <td class="hidden">{{session('total_inputs20')}}</td>
                <td class="hidden">{{session('total_inputs21')}}</td>
                <td class="hidden">{{session('total_inputs22')}}</td>
                <td class="hidden">{{session('total_inputs23')}}</td>
                <td class="hidden">{{session('total_inputs24')}}</td>
                <td class="hidden">{{session('total_inputs25')}}</td>
                <td class="hidden">{{session('total_inputs26')}}</td>
                <td class="hidden">{{session('total_inputs27')}}</td>
                <td class="hidden">{{session('total_inputs28')}}</td>
                <td class="hidden">{{session('total_inputs29')}}</td>
                <td class="hidden">{{session('total_inputs30')}}</td>
                <td class="hidden">{{session('total_inputs31')}}</td>
                <td class="hidden">{{session('total_inputs32')}}</td>
                <td class="hidden">{{session('total_inputs33')}}</td>
                <td class="hidden">{{session('total_inputs34')}}</td>
                <td class="hidden">{{session('total_inputs35')}}</td>
                <td class="hidden">{{session('total_inputs36')}}</td>
                </tr>

                <tr>
                    <td>f. Selling Price</td>
                    <td>{{session('selling_price1')}}</td>
                    <td>{{session('selling_price2')}}</td>
                    <td>{{session('selling_price3')}}</td>
                    <td>{{session('selling_price4')}}</td>
                    <td>{{session('selling_price5')}}</td>
                    <td>{{session('selling_price6')}}</td>
                    <td>{{session('selling_price7')}}</td>
                    <td>{{session('selling_price8')}}</td>
                    <td>{{session('selling_price9')}}</td>
                    <td>{{session('selling_price10')}}</td>
                    <td>{{session('selling_price11')}}</td>
                    <td>{{session('selling_price12')}}</td>
                    <td class="hidden">{{session('selling_price13')}}</td>
                    <td class="hidden">{{session('selling_price14')}}</td>
                    <td class="hidden">{{session('selling_price15')}}</td>
                    <td class="hidden">{{session('selling_price16')}}</td>
                    <td class="hidden">{{session('selling_price17')}}</td>
                    <td class="hidden">{{session('selling_price18')}}</td>
                    <td class="hidden">{{session('selling_price19')}}</td>
                    <td class="hidden">{{session('selling_price20')}}</td>
                    <td class="hidden">{{session('selling_price21')}}</td>
                    <td class="hidden">{{session('selling_price22')}}</td>
                    <td class="hidden">{{session('selling_price23')}}</td>
                    <td class="hidden">{{session('selling_price24')}}</td>
                    <td class="hidden">{{session('selling_price25')}}</td>
                    <td class="hidden">{{session('selling_price26')}}</td>
                    <td class="hidden">{{session('selling_price27')}}</td>
                    <td class="hidden">{{session('selling_price28')}}</td>
                    <td class="hidden">{{session('selling_price29')}}</td>
                    <td class="hidden">{{session('selling_price30')}}</td>
                    <td class="hidden">{{session('selling_price31')}}</td>
                    <td class="hidden">{{session('selling_price32')}}</td>
                    <td class="hidden">{{session('selling_price33')}}</td>
                    <td class="hidden">{{session('selling_price34')}}</td>
                    <td class="hidden">{{session('selling_price35')}}</td>
                    <td class="hidden">{{session('selling_price36')}}</td>
                </tr>
                <tr>
                    <td>g. Revenue</td>
                    <td>{{session('revenue1')}}</td>
                    <td>{{session('revenue2')}}</td>
                    <td>{{session('revenue3')}}</td>
                    <td>{{session('revenue4')}}</td>
                    <td>{{session('revenue5')}}</td>
                    <td>{{session('revenue6')}}</td>
                    <td>{{session('revenue7')}}</td>
                    <td>{{session('revenue8')}}</td>
                    <td>{{session('revenue9')}}</td>
                    <td>{{session('revenue10')}}</td>
                    <td>{{session('revenue11')}}</td>
                    <td>{{session('revenue12')}}</td>
                    <td class="hidden">{{session('revenue13')}}</td>
                    <td class="hidden">{{session('revenue14')}}</td>
                    <td class="hidden">{{session('revenue15')}}</td>
                    <td class="hidden">{{session('revenue16')}}</td>
                    <td class="hidden">{{session('revenue17')}}</td>
                    <td class="hidden">{{session('revenue18')}}</td>
                    <td class="hidden">{{session('revenue19')}}</td>
                    <td class="hidden">{{session('revenue20')}}</td>
                    <td class="hidden">{{session('revenue21')}}</td>
                    <td class="hidden">{{session('revenue22')}}</td>
                    <td class="hidden">{{session('revenue23')}}</td>
                    <td class="hidden">{{session('revenue24')}}</td>
                    <td class="hidden">{{session('revenue25')}}</td>
                    <td class="hidden">{{session('revenue26')}}</td>
                    <td class="hidden">{{session('revenue27')}}</td>
                    <td class="hidden">{{session('revenue28')}}</td>
                    <td class="hidden">{{session('revenue29')}}</td>
                    <td class="hidden">{{session('revenue30')}}</td>
                    <td class="hidden">{{session('revenue31')}}</td>
                    <td class="hidden">{{session('revenue32')}}</td>
                    <td class="hidden">{{session('revenue33')}}</td>
                    <td class="hidden">{{session('revenue34')}}</td>
                    <td class="hidden">{{session('revenue35')}}</td>
                    <td class="hidden">{{session('revenue36')}}</td>
                </tr>

                <tr>
                    <td>h. Raw Materials</td>
                    <td>{{session('raw_materials1')}}</td>
                    <td>{{session('raw_materials2')}}</td>
                    <td>{{session('raw_materials3')}}</td>
                    <td>{{session('raw_materials4')}}</td>
                    <td>{{session('raw_materials5')}}</td>
                    <td>{{session('raw_materials6')}}</td>
                    <td>{{session('raw_materials7')}}</td>
                    <td>{{session('raw_materials8')}}</td>
                    <td>{{session('raw_materials9')}}</td>
                    <td>{{session('raw_materials10')}}</td>
                    <td>{{session('raw_materials11')}}</td>
                    <td>{{session('raw_materials12')}}</td>
                    <td class="hidden">{{session('raw_materials13')}}</td>
                    <td class="hidden">{{session('raw_materials14')}}</td>
                    <td class="hidden">{{session('raw_materials15')}}</td>
                    <td class="hidden">{{session('raw_materials16')}}</td>
                    <td class="hidden">{{session('raw_materials17')}}</td>
                    <td class="hidden">{{session('raw_materials18')}}</td>
                    <td class="hidden">{{session('raw_materials19')}}</td>
                    <td class="hidden">{{session('raw_materials20')}}</td>
                    <td class="hidden">{{session('raw_materials21')}}</td>
                    <td class="hidden">{{session('raw_materials22')}}</td>
                    <td class="hidden">{{session('raw_materials23')}}</td>
                    <td class="hidden">{{session('raw_materials24')}}</td>
                    <td class="hidden">{{session('raw_materials25')}}</td>
                    <td class="hidden">{{session('raw_materials26')}}</td>
                    <td class="hidden">{{session('raw_materials27')}}</td>
                    <td class="hidden">{{session('raw_materials28')}}</td>
                    <td class="hidden">{{session('raw_materials29')}}</td>
                    <td class="hidden">{{session('raw_materials30')}}</td>
                    <td class="hidden">{{session('raw_materials31')}}</td>
                    <td class="hidden">{{session('raw_materials32')}}</td>
                    <td class="hidden">{{session('raw_materials33')}}</td>
                    <td class="hidden">{{session('raw_materials34')}}</td>
                    <td class="hidden">{{session('raw_materials35')}}</td>
                    <td class="hidden">{{session('raw_materials36')}}</td>
                </tr>


                <tr>
                    <td>i. Payroll Fixed</td>
                    <td>{{session('payroll_fixed1')}}</td>
                    <td>{{session('payroll_fixed2')}}</td>
                    <td>{{session('payroll_fixed3')}}</td>
                    <td>{{session('payroll_fixed4')}}</td>
                    <td>{{session('payroll_fixed5')}}</td>
                    <td>{{session('payroll_fixed6')}}</td>
                    <td>{{session('payroll_fixed7')}}</td>
                    <td>{{session('payroll_fixed8')}}</td>
                    <td>{{session('payroll_fixed9')}}</td>
                    <td>{{session('payroll_fixed10')}}</td>
                    <td>{{session('payroll_fixed11')}}</td>
                    <td>{{session('payroll_fixed12')}}</td>
                    <td class="hidden">{{session('payroll_fixed13')}}</td>
                    <td class="hidden">{{session('payroll_fixed14')}}</td>
                    <td class="hidden">{{session('payroll_fixed15')}}</td>
                    <td class="hidden">{{session('payroll_fixed16')}}</td>
                    <td class="hidden">{{session('payroll_fixed17')}}</td>
                    <td class="hidden">{{session('payroll_fixed18')}}</td>
                    <td class="hidden">{{session('payroll_fixed19')}}</td>
                    <td class="hidden">{{session('payroll_fixed20')}}</td>
                    <td class="hidden">{{session('payroll_fixed21')}}</td>
                    <td class="hidden">{{session('payroll_fixed22')}}</td>
                    <td class="hidden">{{session('payroll_fixed23')}}</td>
                    <td class="hidden">{{session('payroll_fixed24')}}</td>
                    <td class="hidden">{{session('payroll_fixed25')}}</td>
                    <td class="hidden">{{session('payroll_fixed26')}}</td>
                    <td class="hidden">{{session('payroll_fixed27')}}</td>
                    <td class="hidden">{{session('payroll_fixed28')}}</td>
                    <td class="hidden">{{session('payroll_fixed29')}}</td>
                    <td class="hidden">{{session('payroll_fixed30')}}</td>
                    <td class="hidden">{{session('payroll_fixed31')}}</td>
                    <td class="hidden">{{session('payroll_fixed32')}}</td>
                    <td class="hidden">{{session('payroll_fixed33')}}</td>
                    <td class="hidden">{{session('payroll_fixed34')}}</td>
                    <td class="hidden">{{session('payroll_fixed35')}}</td>
                    <td class="hidden">{{session('payroll_fixed36')}}</td>
                </tr>

                <tr>
                    <td>j. Payroll Variable</td>
                    <td>{{session('payroll_variable1')}}</td>
                    <td>{{session('payroll_variable2')}}</td>
                    <td>{{session('payroll_variable3')}}</td>
                    <td>{{session('payroll_variable4')}}</td>
                    <td>{{session('payroll_variable5')}}</td>
                    <td>{{session('payroll_variable6')}}</td>
                    <td>{{session('payroll_variable7')}}</td>
                    <td>{{session('payroll_variable8')}}</td>
                    <td>{{session('payroll_variable9')}}</td>
                    <td>{{session('payroll_variable10')}}</td>
                    <td>{{session('payroll_variable11')}}</td>
                    <td>{{session('payroll_variable12')}}</td>
                    <td class="hidden">{{session('payroll_variable13')}}</td>
                    <td class="hidden">{{session('payroll_variable14')}}</td>
                    <td class="hidden">{{session('payroll_variable15')}}</td>
                    <td class="hidden">{{session('payroll_variable16')}}</td>
                    <td class="hidden">{{session('payroll_variable17')}}</td>
                    <td class="hidden">{{session('payroll_variable18')}}</td>
                    <td class="hidden">{{session('payroll_variable19')}}</td>
                    <td class="hidden">{{session('payroll_variable20')}}</td>
                    <td class="hidden">{{session('payroll_variable21')}}</td>
                    <td class="hidden">{{session('payroll_variable22')}}</td>
                    <td class="hidden">{{session('payroll_variable23')}}</td>
                    <td class="hidden">{{session('payroll_variable24')}}</td>
                    <td class="hidden">{{session('payroll_variable25')}}</td>
                    <td class="hidden">{{session('payroll_variable26')}}</td>
                    <td class="hidden">{{session('payroll_variable27')}}</td>
                    <td class="hidden">{{session('payroll_variable28')}}</td>
                    <td class="hidden">{{session('payroll_variable29')}}</td>
                    <td class="hidden">{{session('payroll_variable30')}}</td>
                    <td class="hidden">{{session('payroll_variable31')}}</td>
                    <td class="hidden">{{session('payroll_variable32')}}</td>
                    <td class="hidden">{{session('payroll_variable33')}}</td>
                    <td class="hidden">{{session('payroll_variable34')}}</td>
                    <td class="hidden">{{session('payroll_variable35')}}</td>
                    <td class="hidden">{{session('payroll_variable36')}}</td>
                </tr>

                <tr>
                    <td>k. Repairs</td>
                    <td>{{session('repairs1')}}</td>
                    <td>{{session('repairs2')}}</td>
                    <td>{{session('repairs3')}}</td>
                    <td>{{session('repairs4')}}</td>
                    <td>{{session('repairs5')}}</td>
                    <td>{{session('repairs6')}}</td>
                    <td>{{session('repairs7')}}</td>
                    <td>{{session('repairs8')}}</td>
                    <td>{{session('repairs9')}}</td>
                    <td>{{session('repairs10')}}</td>
                    <td>{{session('repairs11')}}</td>
                    <td>{{session('repairs12')}}</td>
                    <td class="hidden">{{session('repairs13')}}</td>
                    <td class="hidden">{{session('repairs14')}}</td>
                    <td class="hidden">{{session('repairs15')}}</td>
                    <td class="hidden">{{session('repairs16')}}</td>
                    <td class="hidden">{{session('repairs17')}}</td>
                    <td class="hidden">{{session('repairs18')}}</td>
                    <td class="hidden">{{session('repairs19')}}</td>
                    <td class="hidden">{{session('repairs20')}}</td>
                    <td class="hidden">{{session('repairs21')}}</td>
                    <td class="hidden">{{session('repairs22')}}</td>
                    <td class="hidden">{{session('repairs23')}}</td>
                    <td class="hidden">{{session('repairs24')}}</td>
                    <td class="hidden">{{session('repairs25')}}</td>
                    <td class="hidden">{{session('repairs26')}}</td>
                    <td class="hidden">{{session('repairs27')}}</td>
                    <td class="hidden">{{session('repairs28')}}</td>
                    <td class="hidden">{{session('repairs29')}}</td>
                    <td class="hidden">{{session('repairs30')}}</td>
                    <td class="hidden">{{session('repairs31')}}</td>
                    <td class="hidden">{{session('repairs32')}}</td>
                    <td class="hidden">{{session('repairs33')}}</td>
                    <td class="hidden">{{session('repairs34')}}</td>
                    <td class="hidden">{{session('repairs35')}}</td>
                    <td class="hidden">{{session('repairs36')}}</td>
                </tr>

                <tr>
                    <td>l. Electricity</td>
                    <td>{{session('electricity1')}}</td>
                    <td>{{session('electricity2')}}</td>
                    <td>{{session('electricity3')}}</td>
                    <td>{{session('electricity4')}}</td>
                    <td>{{session('electricity5')}}</td>
                    <td>{{session('electricity6')}}</td>
                    <td>{{session('electricity7')}}</td>
                    <td>{{session('electricity8')}}</td>
                    <td>{{session('electricity9')}}</td>
                    <td>{{session('electricity10')}}</td>
                    <td>{{session('electricity11')}}</td>
                    <td>{{session('electricity12')}}</td>
                    <td class="hidden">{{session('electricity13')}}</td>
                    <td class="hidden">{{session('electricity14')}}</td>
                    <td class="hidden">{{session('electricity15')}}</td>
                    <td class="hidden">{{session('electricity16')}}</td>
                    <td class="hidden">{{session('electricity17')}}</td>
                    <td class="hidden">{{session('electricity18')}}</td>
                    <td class="hidden">{{session('electricity19')}}</td>
                    <td class="hidden">{{session('electricity20')}}</td>
                    <td class="hidden">{{session('electricity21')}}</td>
                    <td class="hidden">{{session('electricity22')}}</td>
                    <td class="hidden">{{session('electricity23')}}</td>
                    <td class="hidden">{{session('electricity24')}}</td>
                    <td class="hidden">{{session('electricity25')}}</td>
                    <td class="hidden">{{session('electricity26')}}</td>
                    <td class="hidden">{{session('electricity27')}}</td>
                    <td class="hidden">{{session('electricity28')}}</td>
                    <td class="hidden">{{session('electricity29')}}</td>
                    <td class="hidden">{{session('electricity30')}}</td>
                    <td class="hidden">{{session('electricity31')}}</td>
                    <td class="hidden">{{session('electricity32')}}</td>
                    <td class="hidden">{{session('electricity33')}}</td>
                    <td class="hidden">{{session('electricity34')}}</td>
                    <td class="hidden">{{session('electricity35')}}</td>
                    <td class="hidden">{{session('electricity36')}}</td>
                </tr>

                <tr>
                <td>m. Insurance</td>
                <td>{{session('insurance1')}}</td>
                <td>{{session('insurance2')}}</td>
                <td>{{session('insurance3')}}</td>
                <td>{{session('insurance4')}}</td>
                <td>{{session('insurance5')}}</td>
                <td>{{session('insurance6')}}</td>
                <td>{{session('insurance7')}}</td>
                <td>{{session('insurance8')}}</td>
                <td>{{session('insurance9')}}</td>
                <td>{{session('insurance10')}}</td>
                <td>{{session('insurance11')}}</td>
                <td>{{session('insurance12')}}</td>
                <td class="hidden">{{session('insurance13')}}</td>
                <td class="hidden">{{session('insurance14')}}</td>
                <td class="hidden">{{session('insurance15')}}</td>
                <td class="hidden">{{session('insurance16')}}</td>
                <td class="hidden">{{session('insurance17')}}</td>
                <td class="hidden">{{session('insurance18')}}</td>
                <td class="hidden">{{session('insurance19')}}</td>
                <td class="hidden">{{session('insurance20')}}</td>
                <td class="hidden">{{session('insurance21')}}</td>
                <td class="hidden">{{session('insurance22')}}</td>
                <td class="hidden">{{session('insurance23')}}</td>
                <td class="hidden">{{session('insurance24')}}</td>
                <td class="hidden">{{session('insurance25')}}</td>
                <td class="hidden">{{session('insurance26')}}</td>
                <td class="hidden">{{session('insurance27')}}</td>
                <td class="hidden">{{session('insurance28')}}</td>
                <td class="hidden">{{session('insurance29')}}</td>
                <td class="hidden">{{session('insurance30')}}</td>
                <td class="hidden">{{session('insurance31')}}</td>
                <td class="hidden">{{session('insurance32')}}</td>
                <td class="hidden">{{session('insurance33')}}</td>
                <td class="hidden">{{session('insurance34')}}</td>
                <td class="hidden">{{session('insurance35')}}</td>
                <td class="hidden">{{session('insurance36')}}</td>
                </tr>

                <tr>
                    <td>n. Water</td>
                    <td>{{session('water1')}}</td>
                    <td>{{session('water2')}}</td>
                    <td>{{session('water3')}}</td>
                    <td>{{session('water4')}}</td>
                    <td>{{session('water5')}}</td>
                    <td>{{session('water6')}}</td>
                    <td>{{session('water7')}}</td>
                    <td>{{session('water8')}}</td>
                    <td>{{session('water9')}}</td>
                    <td>{{session('water10')}}</td>
                    <td>{{session('water11')}}</td>
                    <td>{{session('water12')}}</td>
                    <td class="hidden">{{session('water13')}}</td>
                    <td class="hidden">{{session('water14')}}</td>
                    <td class="hidden">{{session('water15')}}</td>
                    <td class="hidden">{{session('water16')}}</td>
                    <td class="hidden">{{session('water17')}}</td>
                    <td class="hidden">{{session('water18')}}</td>
                    <td class="hidden">{{session('water19')}}</td>
                    <td class="hidden">{{session('water20')}}</td>
                    <td class="hidden">{{session('water21')}}</td>
                    <td class="hidden">{{session('water22')}}</td>
                    <td class="hidden">{{session('water23')}}</td>
                    <td class="hidden">{{session('water24')}}</td>
                    <td class="hidden">{{session('water25')}}</td>
                    <td class="hidden">{{session('water26')}}</td>
                    <td class="hidden">{{session('water27')}}</td>
                    <td class="hidden">{{session('water28')}}</td>
                    <td class="hidden">{{session('water29')}}</td>
                    <td class="hidden">{{session('water30')}}</td>
                    <td class="hidden">{{session('water31')}}</td>
                    <td class="hidden">{{session('water32')}}</td>
                    <td class="hidden">{{session('water33')}}</td>
                    <td class="hidden">{{session('water34')}}</td>
                    <td class="hidden">{{session('water35')}}</td>
                    <td class="hidden">{{session('water36')}}</td>
                </tr>

                <tr>
                    <td>o. Rates</td>
                    <td>{{session('rates1')}}</td>
                    <td>{{session('rates2')}}</td>
                    <td>{{session('rates3')}}</td>
                    <td>{{session('rates4')}}</td>
                    <td>{{session('rates5')}}</td>
                    <td>{{session('rates6')}}</td>
                    <td>{{session('rates7')}}</td>
                    <td>{{session('rates8')}}</td>
                    <td>{{session('rates9')}}</td>
                    <td>{{session('rates10')}}</td>
                    <td>{{session('rates11')}}</td>
                    <td>{{session('rates12')}}</td>
                    <td class="hidden">{{session('rates13')}}</td>
                    <td class="hidden">{{session('rates14')}}</td>
                    <td class="hidden">{{session('rates15')}}</td>
                    <td class="hidden">{{session('rates16')}}</td>
                    <td class="hidden">{{session('rates17')}}</td>
                    <td class="hidden">{{session('rates18')}}</td>
                    <td class="hidden">{{session('rates19')}}</td>
                    <td class="hidden">{{session('rates20')}}</td>
                    <td class="hidden">{{session('rates21')}}</td>
                    <td class="hidden">{{session('rates22')}}</td>
                    <td class="hidden">{{session('rates23')}}</td>
                    <td class="hidden">{{session('rates24')}}</td>
                    <td class="hidden">{{session('rates25')}}</td>
                    <td class="hidden">{{session('rates26')}}</td>
                    <td class="hidden">{{session('rates27')}}</td>
                    <td class="hidden">{{session('rates28')}}</td>
                    <td class="hidden">{{session('rates29')}}</td>
                    <td class="hidden">{{session('rates30')}}</td>
                    <td class="hidden">{{session('rates31')}}</td>
                    <td class="hidden">{{session('rates32')}}</td>
                    <td class="hidden">{{session('rates33')}}</td>
                    <td class="hidden">{{session('rates34')}}</td>
                    <td class="hidden">{{session('rates35')}}</td>
                    <td class="hidden">{{session('rates36')}}</td>
                </tr>

                <tr>
                    <td>q. Security</td>
                    <td>{{session('security1')}}</td>
                    <td>{{session('security2')}}</td>
                    <td>{{session('security3')}}</td>
                    <td>{{session('security4')}}</td>
                    <td>{{session('security5')}}</td>
                    <td>{{session('security6')}}</td>
                    <td>{{session('security7')}}</td>
                    <td>{{session('security8')}}</td>
                    <td>{{session('security9')}}</td>
                    <td>{{session('security10')}}</td>
                    <td>{{session('security11')}}</td>
                    <td>{{session('security12')}}</td>
                    <td class="hidden">{{session('security13')}}</td>
                    <td class="hidden">{{session('security14')}}</td>
                    <td class="hidden">{{session('security15')}}</td>
                    <td class="hidden">{{session('security16')}}</td>
                    <td class="hidden">{{session('security17')}}</td>
                    <td class="hidden">{{session('security18')}}</td>
                    <td class="hidden">{{session('security19')}}</td>
                    <td class="hidden">{{session('security20')}}</td>
                    <td class="hidden">{{session('security21')}}</td>
                    <td class="hidden">{{session('security22')}}</td>
                    <td class="hidden">{{session('security23')}}</td>
                    <td class="hidden">{{session('security24')}}</td>
                    <td class="hidden">{{session('security25')}}</td>
                    <td class="hidden">{{session('security26')}}</td>
                    <td class="hidden">{{session('security27')}}</td>
                    <td class="hidden">{{session('security28')}}</td>
                    <td class="hidden">{{session('security29')}}</td>
                    <td class="hidden">{{session('security30')}}</td>
                    <td class="hidden">{{session('security31')}}</td>
                    <td class="hidden">{{session('security32')}}</td>
                    <td class="hidden">{{session('security33')}}</td>
                    <td class="hidden">{{session('security34')}}</td>
                    <td class="hidden">{{session('security35')}}</td>
                    <td class="hidden">{{session('security36')}}</td>
                </tr>

                <tr>
                    <td>r. canteen</td>
                    <td>{{session('canteen1')}}</td>
                    <td>{{session('canteen2')}}</td>
                    <td>{{session('canteen3')}}</td>
                    <td>{{session('canteen4')}}</td>
                    <td>{{session('canteen5')}}</td>
                    <td>{{session('canteen6')}}</td>
                    <td>{{session('canteen7')}}</td>
                    <td>{{session('canteen8')}}</td>
                    <td>{{session('canteen9')}}</td>
                    <td>{{session('canteen10')}}</td>
                    <td>{{session('canteen11')}}</td>
                    <td>{{session('canteen12')}}</td>
                    <td class="hidden">{{session('canteen13')}}</td>
                    <td class="hidden">{{session('canteen14')}}</td>
                    <td class="hidden">{{session('canteen15')}}</td>
                    <td class="hidden">{{session('canteen16')}}</td>
                    <td class="hidden">{{session('canteen17')}}</td>
                    <td class="hidden">{{session('canteen18')}}</td>
                    <td class="hidden">{{session('canteen19')}}</td>
                    <td class="hidden">{{session('canteen20')}}</td>
                    <td class="hidden">{{session('canteen21')}}</td>
                    <td class="hidden">{{session('canteen22')}}</td>
                    <td class="hidden">{{session('canteen23')}}</td>
                    <td class="hidden">{{session('canteen24')}}</td>
                    <td class="hidden">{{session('canteen25')}}</td>
                    <td class="hidden">{{session('canteen26')}}</td>
                    <td class="hidden">{{session('canteen27')}}</td>
                    <td class="hidden">{{session('canteen28')}}</td>
                    <td class="hidden">{{session('canteen29')}}</td>
                    <td class="hidden">{{session('canteen30')}}</td>
                    <td class="hidden">{{session('canteen31')}}</td>
                    <td class="hidden">{{session('canteen32')}}</td>
                    <td class="hidden">{{session('canteen33')}}</td>
                    <td class="hidden">{{session('canteen34')}}</td>
                    <td class="hidden">{{session('canteen35')}}</td>
                    <td class="hidden">{{session('canteen36')}}</td>
                </tr>

                <tr>
                    <td>s. Supplies</td>
                    <td>{{session('supplies1')}}</td>
                    <td>{{session('supplies2')}}</td>
                    <td>{{session('supplies3')}}</td>
                    <td>{{session('supplies4')}}</td>
                    <td>{{session('supplies5')}}</td>
                    <td>{{session('supplies6')}}</td>
                    <td>{{session('supplies7')}}</td>
                    <td>{{session('supplies8')}}</td>
                    <td>{{session('supplies9')}}</td>
                    <td>{{session('supplies10')}}</td>
                    <td>{{session('supplies11')}}</td>
                    <td>{{session('supplies12')}}</td>
                    <td class="hidden">{{session('supplies13')}}</td>
                    <td class="hidden">{{session('supplies14')}}</td>
                    <td class="hidden">{{session('supplies15')}}</td>
                    <td class="hidden">{{session('supplies16')}}</td>
                    <td class="hidden">{{session('supplies17')}}</td>
                    <td class="hidden">{{session('supplies18')}}</td>
                    <td class="hidden">{{session('supplies19')}}</td>
                    <td class="hidden">{{session('supplies20')}}</td>
                    <td class="hidden">{{session('supplies21')}}</td>
                    <td class="hidden">{{session('supplies22')}}</td>
                    <td class="hidden">{{session('supplies23')}}</td>
                    <td class="hidden">{{session('supplies24')}}</td>
                    <td class="hidden">{{session('supplies25')}}</td>
                    <td class="hidden">{{session('supplies26')}}</td>
                    <td class="hidden">{{session('supplies27')}}</td>
                    <td class="hidden">{{session('supplies28')}}</td>
                    <td class="hidden">{{session('supplies29')}}</td>
                    <td class="hidden">{{session('supplies30')}}</td>
                    <td class="hidden">{{session('supplies31')}}</td>
                    <td class="hidden">{{session('supplies32')}}</td>
                    <td class="hidden">{{session('supplies33')}}</td>
                    <td class="hidden">{{session('supplies34')}}</td>
                    <td class="hidden">{{session('supplies35')}}</td>
                    <td class="hidden">{{session('supplies36')}}</td>
                </tr>


                <tr>
                    <td>t. Vehicle</td>
                    <td>{{session('vehicle1')}}</td>
                    <td>{{session('vehicle2')}}</td>
                    <td>{{session('vehicle3')}}</td>
                    <td>{{session('vehicle4')}}</td>
                    <td>{{session('vehicle5')}}</td>
                    <td>{{session('vehicle6')}}</td>
                    <td>{{session('vehicle7')}}</td>
                    <td>{{session('vehicle8')}}</td>
                    <td>{{session('vehicle9')}}</td>
                    <td>{{session('vehicle10')}}</td>
                    <td>{{session('vehicle11')}}</td>
                    <td>{{session('vehicle12')}}</td>
                    <td class="hidden">{{session('vehicle13')}}</td>
                    <td class="hidden">{{session('vehicle14')}}</td>
                    <td class="hidden">{{session('vehicle15')}}</td>
                    <td class="hidden">{{session('vehicle16')}}</td>
                    <td class="hidden">{{session('vehicle17')}}</td>
                    <td class="hidden">{{session('vehicle18')}}</td>
                    <td class="hidden">{{session('vehicle19')}}</td>
                    <td class="hidden">{{session('vehicle20')}}</td>
                    <td class="hidden">{{session('vehicle21')}}</td>
                    <td class="hidden">{{session('vehicle22')}}</td>
                    <td class="hidden">{{session('vehicle23')}}</td>
                    <td class="hidden">{{session('vehicle24')}}</td>
                    <td class="hidden">{{session('vehicle25')}}</td>
                    <td class="hidden">{{session('vehicle26')}}</td>
                    <td class="hidden">{{session('vehicle27')}}</td>
                    <td class="hidden">{{session('vehicle28')}}</td>
                    <td class="hidden">{{session('vehicle29')}}</td>
                    <td class="hidden">{{session('vehicle30')}}</td>
                    <td class="hidden">{{session('vehicle31')}}</td>
                    <td class="hidden">{{session('vehicle32')}}</td>
                    <td class="hidden">{{session('vehicle33')}}</td>
                    <td class="hidden">{{session('vehicle34')}}</td>
                    <td class="hidden">{{session('vehicle35')}}</td>
                    <td class="hidden">{{session('vehicle36')}}</td>
                </tr>

                <tr>
                    <td>u. Debt One</td>
                    <td>{{session('debt_one1')}}</td>
                    <td>{{session('debt_one2')}}</td>
                    <td>{{session('debt_one3')}}</td>
                    <td>{{session('debt_one4')}}</td>
                    <td>{{session('debt_one5')}}</td>
                    <td>{{session('debt_one6')}}</td>
                    <td>{{session('debt_one7')}}</td>
                    <td>{{session('debt_one8')}}</td>
                    <td>{{session('debt_one9')}}</td>
                    <td>{{session('debt_one10')}}</td>
                    <td>{{session('debt_one11')}}</td>
                    <td>{{session('debt_one12')}}</td>
                    <td class="hidden">{{session('debt_one13')}}</td>
                    <td class="hidden">{{session('debt_one14')}}</td>
                    <td class="hidden">{{session('debt_one15')}}</td>
                    <td class="hidden">{{session('debt_one16')}}</td>
                    <td class="hidden">{{session('debt_one17')}}</td>
                    <td class="hidden">{{session('debt_one18')}}</td>
                    <td class="hidden">{{session('debt_one19')}}</td>
                    <td class="hidden">{{session('debt_one20')}}</td>
                    <td class="hidden">{{session('debt_one21')}}</td>
                    <td class="hidden">{{session('debt_one22')}}</td>
                    <td class="hidden">{{session('debt_one23')}}</td>
                    <td class="hidden">{{session('debt_one24')}}</td>
                    <td class="hidden">{{session('debt_one25')}}</td>
                    <td class="hidden">{{session('debt_one26')}}</td>
                    <td class="hidden">{{session('debt_one27')}}</td>
                    <td class="hidden">{{session('debt_one28')}}</td>
                    <td class="hidden">{{session('debt_one29')}}</td>
                    <td class="hidden">{{session('debt_one30')}}</td>
                    <td class="hidden">{{session('debt_one31')}}</td>
                    <td class="hidden">{{session('debt_one32')}}</td>
                    <td class="hidden">{{session('debt_one33')}}</td>
                    <td class="hidden">{{session('debt_one34')}}</td>
                    <td class="hidden">{{session('debt_one35')}}</td>
                    <td class="hidden">{{session('debt_one36')}}</td>
                </tr>

                <tr>
                    <td>v. Debt two</td>
                    <td>{{session('debt_two1')}}</td>
                    <td>{{session('debt_two2')}}</td>
                    <td>{{session('debt_two3')}}</td>
                    <td>{{session('debt_two4')}}</td>
                    <td>{{session('debt_two5')}}</td>
                    <td>{{session('debt_two6')}}</td>
                    <td>{{session('debt_two7')}}</td>
                    <td>{{session('debt_two8')}}</td>
                    <td>{{session('debt_two9')}}</td>
                    <td>{{session('debt_two10')}}</td>
                    <td>{{session('debt_two11')}}</td>
                    <td>{{session('debt_two12')}}</td>
                    <td class="hidden">{{session('debt_two13')}}</td>
                    <td class="hidden">{{session('debt_two14')}}</td>
                    <td class="hidden">{{session('debt_two15')}}</td>
                    <td class="hidden">{{session('debt_two16')}}</td>
                    <td class="hidden">{{session('debt_two17')}}</td>
                    <td class="hidden">{{session('debt_two18')}}</td>
                    <td class="hidden">{{session('debt_two19')}}</td>
                    <td class="hidden">{{session('debt_two20')}}</td>
                    <td class="hidden">{{session('debt_two21')}}</td>
                    <td class="hidden">{{session('debt_two22')}}</td>
                    <td class="hidden">{{session('debt_two23')}}</td>
                    <td class="hidden">{{session('debt_two24')}}</td>
                    <td class="hidden">{{session('debt_two25')}}</td>
                    <td class="hidden">{{session('debt_two26')}}</td>
                    <td class="hidden">{{session('debt_two27')}}</td>
                    <td class="hidden">{{session('debt_two28')}}</td>
                    <td class="hidden">{{session('debt_two29')}}</td>
                    <td class="hidden">{{session('debt_two30')}}</td>
                    <td class="hidden">{{session('debt_two31')}}</td>
                    <td class="hidden">{{session('debt_two32')}}</td>
                    <td class="hidden">{{session('debt_two33')}}</td>
                    <td class="hidden">{{session('debt_two34')}}</td>
                    <td class="hidden">{{session('debt_two35')}}</td>
                    <td class="hidden">{{session('debt_two36')}}</td>
                </tr>
                <tr>
                    <td>w. Debt three</td>
                    <td>{{session('debt_three1')}}</td>
                    <td>{{session('debt_three2')}}</td>
                    <td>{{session('debt_three3')}}</td>
                    <td>{{session('debt_three4')}}</td>
                    <td>{{session('debt_three5')}}</td>
                    <td>{{session('debt_three6')}}</td>
                    <td>{{session('debt_three7')}}</td>
                    <td>{{session('debt_three8')}}</td>
                    <td>{{session('debt_three9')}}</td>
                    <td>{{session('debt_three10')}}</td>
                    <td>{{session('debt_three11')}}</td>
                    <td>{{session('debt_three12')}}</td>
                    <td class="hidden">{{session('debt_three13')}}</td>
                    <td class="hidden">{{session('debt_three14')}}</td>
                    <td class="hidden">{{session('debt_three15')}}</td>
                    <td class="hidden">{{session('debt_three16')}}</td>
                    <td class="hidden">{{session('debt_three17')}}</td>
                    <td class="hidden">{{session('debt_three18')}}</td>
                    <td class="hidden">{{session('debt_three19')}}</td>
                    <td class="hidden">{{session('debt_three20')}}</td>
                    <td class="hidden">{{session('debt_three21')}}</td>
                    <td class="hidden">{{session('debt_three22')}}</td>
                    <td class="hidden">{{session('debt_three23')}}</td>
                    <td class="hidden">{{session('debt_three24')}}</td>
                    <td class="hidden">{{session('debt_three25')}}</td>
                    <td class="hidden">{{session('debt_three26')}}</td>
                    <td class="hidden">{{session('debt_three27')}}</td>
                    <td class="hidden">{{session('debt_three28')}}</td>
                    <td class="hidden">{{session('debt_three29')}}</td>
                    <td class="hidden">{{session('debt_three30')}}</td>
                    <td class="hidden">{{session('debt_three31')}}</td>
                    <td class="hidden">{{session('debt_three32')}}</td>
                    <td class="hidden">{{session('debt_three33')}}</td>
                    <td class="hidden">{{session('debt_three34')}}</td>
                    <td class="hidden">{{session('debt_three35')}}</td>
                    <td class="hidden">{{session('debt_three36')}}</td>
                </tr>

                <tr>
                    <td>x. Debt four</td>
                    <td>{{session('debt_four1')}}</td>
                    <td>{{session('debt_four2')}}</td>
                    <td>{{session('debt_four3')}}</td>
                    <td>{{session('debt_four4')}}</td>
                    <td>{{session('debt_four5')}}</td>
                    <td>{{session('debt_four6')}}</td>
                    <td>{{session('debt_four7')}}</td>
                    <td>{{session('debt_four8')}}</td>
                    <td>{{session('debt_four9')}}</td>
                    <td>{{session('debt_four10')}}</td>
                    <td>{{session('debt_four11')}}</td>
                    <td>{{session('debt_four12')}}</td>
                    <td class="hidden">{{session('debt_four13')}}</td>
                    <td class="hidden">{{session('debt_four14')}}</td>
                    <td class="hidden">{{session('debt_four15')}}</td>
                    <td class="hidden">{{session('debt_four16')}}</td>
                    <td class="hidden">{{session('debt_four17')}}</td>
                    <td class="hidden">{{session('debt_four18')}}</td>
                    <td class="hidden">{{session('debt_four19')}}</td>
                    <td class="hidden">{{session('debt_four20')}}</td>
                    <td class="hidden">{{session('debt_four21')}}</td>
                    <td class="hidden">{{session('debt_four22')}}</td>
                    <td class="hidden">{{session('debt_four23')}}</td>
                    <td class="hidden">{{session('debt_four24')}}</td>
                    <td class="hidden">{{session('debt_four25')}}</td>
                    <td class="hidden">{{session('debt_four26')}}</td>
                    <td class="hidden">{{session('debt_four27')}}</td>
                    <td class="hidden">{{session('debt_four28')}}</td>
                    <td class="hidden">{{session('debt_four29')}}</td>
                    <td class="hidden">{{session('debt_four30')}}</td>
                    <td class="hidden">{{session('debt_four31')}}</td>
                    <td class="hidden">{{session('debt_four32')}}</td>
                    <td class="hidden">{{session('debt_four33')}}</td>
                    <td class="hidden">{{session('debt_four34')}}</td>
                    <td class="hidden">{{session('debt_four35')}}</td>
                    <td class="hidden">{{session('debt_four36')}}</td>
                </tr>

                <tr>
                    <td>y. other</td>
                    <td>{{session('other1')}}</td>
                    <td>{{session('other2')}}</td>
                    <td>{{session('other3')}}</td>
                    <td>{{session('other4')}}</td>
                    <td>{{session('other5')}}</td>
                    <td>{{session('other6')}}</td>
                    <td>{{session('other7')}}</td>
                    <td>{{session('other8')}}</td>
                    <td>{{session('other9')}}</td>
                    <td>{{session('other10')}}</td>
                    <td>{{session('other11')}}</td>
                    <td>{{session('other12')}}</td>
                    <td class="hidden">{{session('other13')}}</td>
                    <td class="hidden">{{session('other14')}}</td>
                    <td class="hidden">{{session('other15')}}</td>
                    <td class="hidden">{{session('other16')}}</td>
                    <td class="hidden">{{session('other17')}}</td>
                    <td class="hidden">{{session('other18')}}</td>
                    <td class="hidden">{{session('other19')}}</td>
                    <td class="hidden">{{session('other20')}}</td>
                    <td class="hidden">{{session('other21')}}</td>
                    <td class="hidden">{{session('other22')}}</td>
                    <td class="hidden">{{session('other23')}}</td>
                    <td class="hidden">{{session('other24')}}</td>
                    <td class="hidden">{{session('other25')}}</td>
                    <td class="hidden">{{session('other26')}}</td>
                    <td class="hidden">{{session('other27')}}</td>
                    <td class="hidden">{{session('other28')}}</td>
                    <td class="hidden">{{session('other29')}}</td>
                    <td class="hidden">{{session('other30')}}</td>
                    <td class="hidden">{{session('other31')}}</td>
                    <td class="hidden">{{session('other32')}}</td>
                    <td class="hidden">{{session('other33')}}</td>
                    <td class="hidden">{{session('other34')}}</td>
                    <td class="hidden">{{session('other35')}}</td>
                    <td class="hidden">{{session('other36')}}</td>
                </tr>

                <tr>
                    <td>z. total_expenses</td>
                    <td>{{session('total_expenses1')}}</td>
                    <td>{{session('total_expenses2')}}</td>
                    <td>{{session('total_expenses3')}}</td>
                    <td>{{session('total_expenses4')}}</td>
                    <td>{{session('total_expenses5')}}</td>
                    <td>{{session('total_expenses6')}}</td>
                    <td>{{session('total_expenses7')}}</td>
                    <td>{{session('total_expenses8')}}</td>
                    <td>{{session('total_expenses9')}}</td>
                    <td>{{session('total_expenses10')}}</td>
                    <td>{{session('total_expenses11')}}</td>
                    <td>{{session('total_expenses12')}}</td>
                    <td class="hidden">{{session('total_expenses13')}}</td>
                    <td class="hidden">{{session('total_expenses14')}}</td>
                    <td class="hidden">{{session('total_expenses15')}}</td>
                    <td class="hidden">{{session('total_expenses16')}}</td>
                    <td class="hidden">{{session('total_expenses17')}}</td>
                    <td class="hidden">{{session('total_expenses18')}}</td>
                    <td class="hidden">{{session('total_expenses19')}}</td>
                    <td class="hidden">{{session('total_expenses20')}}</td>
                    <td class="hidden">{{session('total_expenses21')}}</td>
                    <td class="hidden">{{session('total_expenses22')}}</td>
                    <td class="hidden">{{session('total_expenses23')}}</td>
                    <td class="hidden">{{session('total_expenses24')}}</td>
                    <td class="hidden">{{session('total_expenses25')}}</td>
                    <td class="hidden">{{session('total_expenses26')}}</td>
                    <td class="hidden">{{session('total_expenses27')}}</td>
                    <td class="hidden">{{session('total_expenses28')}}</td>
                    <td class="hidden">{{session('total_expenses29')}}</td>
                    <td class="hidden">{{session('total_expenses30')}}</td>
                    <td class="hidden">{{session('total_expenses31')}}</td>
                    <td class="hidden">{{session('total_expenses32')}}</td>
                    <td class="hidden">{{session('total_expenses33')}}</td>
                    <td class="hidden">{{session('total_expenses34')}}</td>
                    <td class="hidden">{{session('total_expenses35')}}</td>
                    <td class="hidden">{{session('total_expenses36')}}</td>
                </tr>

                <tr>
                    <td>za. Profit/Loss</td>
                    <td>{{session('revenue1') - session('total_expenses1') }}</td>
                    <td>{{ session('revenue2') - session('total_expenses2')}}</td>
                    <td>{{ session('revenue3') - session('total_expenses3')}}</td>
                    <td>{{ session('revenue4') - session('total_expenses4')}}</td>
                    <td>{{ session('revenue5') - session('total_expenses5')}}</td>
                    <td>{{ session('revenue6') - session('total_expenses6')}}</td>
                    <td>{{ session('revenue7') - session('total_expenses7')}}</td>
                    <td>{{ session('revenue8') - session('total_expenses8')}}</td>
                    <td>{{ session('revenue9') - session('total_expenses9')}}</td>
                    <td>{{ session('revenue10') - session('total_expenses10')}}</td>
                    <td>{{session('revenue11') - session('total_expenses11')}}</td>
                    <td>{{ session('revenue12') - session('total_expenses12')}}</td>
                    <td class="hidden">{{ session('revenue13') - session('total_expenses13')}}</td>
                    <td class="hidden">{{ session('revenue14') - session('total_expenses14')}}</td>
                    <td class="hidden">{{ session('revenue15') - session('total_expenses15')}}</td>
                    <td class="hidden">{{ session('revenue16') -session('total_expenses16')}}</td>
                    <td class="hidden">{{ session('revenue17') - session('total_expenses17')}}</td>
                    <td class="hidden">{{ session('revenue18') - session('total_expenses18')}}</td>
                    <td class="hidden">{{ session('revenue19') -session('total_expenses19')}}</td>
                    <td class="hidden">{{ session('revenue20') -session('total_expenses20')}}</td>
                    <td class="hidden">{{ session('revenue21') -session('total_expenses21')}}</td>
                    <td class="hidden">{{ session('revenue22') -session('total_expenses22')}}</td>
                    <td class="hidden">{{ session('revenue23') -session('total_expenses23')}}</td>
                    <td class="hidden">{{ session('revenue24') -session('total_expenses24')}}</td>
                    <td class="hidden">{{ session('revenue25') -session('total_expenses25')}}</td>
                    <td class="hidden">{{ session('revenue26') -session('total_expenses26')}}</td>
                    <td class="hidden">{{ session('revenue27') -session('total_expenses27')}}</td>
                    <td class="hidden">{{ session('revenue28') -session('total_expenses28')}}</td>
                    <td class="hidden">{{ session('revenue29') -session('total_expenses29')}}</td>
                    <td class="hidden">{{ session('revenue30') -session('total_expenses30')}}</td>
                    <td class="hidden">{{ session('revenue31') -session('total_expenses31')}}</td>
                    <td class="hidden">{{ session('revenue32') -session('total_expenses32')}}</td>
                    <td class="hidden">{{ session('revenue33') -session('total_expenses33')}}</td>
                    <td class="hidden">{{ session('revenue34') -session('total_expenses34')}}</td>
                    <td class="hidden">{{ session('revenue35') -session('total_expenses35')}}</td>
                    <td class="hidden">{{ session('revenue36') -session('total_expenses36')}}</td>
                </tr>


                </tbody>
            </table>

            <!-- /.table-responsive -->

        </div>
        <!-- /.panel-body -->
    </div>
        </div>
    </div>

@endsection

