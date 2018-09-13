<?php

namespace App\Http\Controllers;

use App\Expenses;
use App\Inputs;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $result = Inputs::all()->where('month',1);foreach($result as $m) {session()->flash('month1',$m->zfc);};
        $result2 = Inputs::all()->where('month',2);foreach($result2 as $m) {session()->flash('month2',$m->zfc);};
        $result3 = Inputs::all()->where('month',3);foreach($result3 as $m) {session()->flash('month3', $m->zfc);};
        $result4 = Inputs::all()->where('month',4);foreach($result4 as $m) {session()->flash('month4',$m->zfc);};
        $result5 = Inputs::all()->where('month',5);foreach($result5 as $m) {session()->flash('month5',$m->zfc);};
        $result6 = Inputs::all()->where('month',6);foreach($result6 as $m) {session()->flash('month6',$m->zfc);};
        $result7 = Inputs::all()->where('month',7);foreach($result7 as $m) {session()->flash('month7',$m->zfc);};
        $result8 = Inputs::all()->where('month',8);foreach($result8 as $m) {session()->flash('month8',$m->zfc);};
        $result9 = Inputs::all()->where('month',9);foreach($result9 as $m) {session()->flash('month9',$m->zfc);};
        $result10 = Inputs::all()->where('month',10);foreach($result10 as $m) {session()->flash('month10',$m->zfc);};
        $result11 = Inputs::all()->where('month',11);foreach($result11 as $m) {session()->flash('month11',$m->zfc);};
        $result12 = Inputs::all()->where('month',12);foreach($result12 as $m) {session()->flash('month12',$m->zfc);};
        $result13 = Inputs::all()->where('month',13);foreach($result13 as $m) {session()->flash('month13',$m->zfc);};
        $result14= Inputs::all()->where('month',14);foreach($result14 as $m) {session()->flash('month14',$m->zfc);};
        $result15 = Inputs::all()->where('month',15);foreach($result15 as $m) {session()->flash('month15',$m->zfc);};
        $result16 = Inputs::all()->where('month',16);foreach($result16 as $m) {session()->flash('month16',$m->zfc);};
        $result17 = Inputs::all()->where('month',17);foreach($result17 as $m) {session()->flash('month17',$m->zfc);};
        $result18 = Inputs::all()->where('month',18);foreach($result18 as $m) {session()->flash('month18',$m->zfc);};
        $result19 = Inputs::all()->where('month',19);foreach($result19 as $m) {session()->flash('month19',$m->zfc);};
        $result20 = Inputs::all()->where('month',20);foreach($result20 as $m) {session()->flash('month20',$m->zfc);};
        $result21 = Inputs::all()->where('month',21);foreach($result21 as $m) {session()->flash('month21',$m->zfc);};
        $result22 = Inputs::all()->where('month',22);foreach($result22 as $m) {session()->flash('month22',$m->zfc);};
        $result23 = Inputs::all()->where('month',23);foreach($result23 as $m) {session()->flash('month23',$m->zfc);};
        $result24 = Inputs::all()->where('month',24);foreach($result24 as $m) {session()->flash('month24',$m->zfc);};
        $result25 = Inputs::all()->where('month',25);foreach($result25 as $m) {session()->flash('month25',$m->zfc);};
        $result26 = Inputs::all()->where('month',26);foreach($result26 as $m) {session()->flash('month26',$m->zfc);};
        $result27 = Inputs::all()->where('month',27);foreach($result27 as $m) {session()->flash('month27',$m->zfc);};
        $result28 = Inputs::all()->where('month',28);foreach($result28 as $m) {session()->flash('month28',$m->zfc);};
        $result29 = Inputs::all()->where('month',29);foreach($result29 as $m) {session()->flash('month29',$m->zfc);};
        $result30 = Inputs::all()->where('month',30);foreach($result30 as $m) {session()->flash('month30',$m->zfc);};
        $result31= Inputs::all()->where('month',31);foreach($result31 as $m) {session()->flash('month31',$m->zfc);};
        $result32 = Inputs::all()->where('month',32);foreach($result32 as $m) {session()->flash('month32',$m->zfc);};
        $result33 = Inputs::all()->where('month',33);foreach($result33 as $m) {session()->flash('month33',$m->zfc);};
        $result34 = Inputs::all()->where('month',34);foreach($result34 as $m) {session()->flash('month34',$m->zfc);};
        $result35 = Inputs::all()->where('month',35);foreach($result35 as $m) {session()->flash('month35',$m->zfc);};
        $result36 = Inputs::all()->where('month',36);foreach($result36 as $m) {session()->flash('month36',$m->zfc);};


        $ominia = Inputs::all()->where('month',1);foreach($ominia as $m) {session()->flash('ominia1',$m->ominia);};
        $ominia2 = Inputs::all()->where('month',2);foreach($ominia2 as $m) {session()->flash('ominia2',$m->ominia);};
        $ominia3 = Inputs::all()->where('month',3);foreach($ominia3 as $m) {session()->flash('ominia3', $m->ominia);};
        $ominia4 = Inputs::all()->where('month',4);foreach($ominia4 as $m) {session()->flash('ominia4',$m->ominia);};
        $ominia5 = Inputs::all()->where('month',5);foreach($ominia5 as $m) {session()->flash('ominia5',$m->ominia);};
        $ominia6 = Inputs::all()->where('month',6);foreach($ominia6 as $m) {session()->flash('ominia6',$m->ominia);};
        $ominia7 = Inputs::all()->where('month',7);foreach($ominia7 as $m) {session()->flash('ominia7',$m->ominia);};
        $ominia8 = Inputs::all()->where('month',8);foreach($ominia8 as $m) {session()->flash('ominia8',$m->ominia);};
        $ominia9 = Inputs::all()->where('month',9);foreach($ominia9 as $m) {session()->flash('ominia9',$m->ominia);};
        $ominia10 = Inputs::all()->where('month',10);foreach($ominia10 as $m) {session()->flash('ominia10',$m->ominia);};
        $ominia11 = Inputs::all()->where('month',11);foreach($ominia11 as $m) {session()->flash('ominia11',$m->ominia);};
        $ominia12 = Inputs::all()->where('month',12);foreach($ominia12 as $m) {session()->flash('ominia12',$m->ominia);};
        $ominia13 = Inputs::all()->where('month',13);foreach($ominia13 as $m) {session()->flash('ominia13',$m->ominia);};
        $ominia14= Inputs::all()->where('month',14);foreach($ominia14 as $m) {session()->flash('ominia14',$m->ominia);};
        $ominia15 = Inputs::all()->where('month',15);foreach($ominia15 as $m) {session()->flash('ominia15',$m->ominia);};
        $ominia16 = Inputs::all()->where('month',16);foreach($ominia16 as $m) {session()->flash('ominia16',$m->ominia);};
        $ominia17 = Inputs::all()->where('month',17);foreach($ominia17 as $m) {session()->flash('ominia17',$m->ominia);};
        $ominia18 = Inputs::all()->where('month',18);foreach($ominia18 as $m) {session()->flash('ominia18',$m->ominia);};
        $ominia19 = Inputs::all()->where('month',19);foreach($ominia19 as $m) {session()->flash('ominia19',$m->ominia);};
        $ominia20 = Inputs::all()->where('month',20);foreach($ominia20 as $m) {session()->flash('ominia20',$m->ominia);};
        $ominia21 = Inputs::all()->where('month',21);foreach($ominia21 as $m) {session()->flash('ominia21',$m->ominia);};
        $ominia22 = Inputs::all()->where('month',22);foreach($ominia22 as $m) {session()->flash('ominia22',$m->ominia);};
        $ominia23 = Inputs::all()->where('month',23);foreach($ominia23 as $m) {session()->flash('ominia23',$m->ominia);};
        $ominia24 = Inputs::all()->where('month',24);foreach($ominia24 as $m) {session()->flash('ominia24',$m->ominia);};
        $ominia25 = Inputs::all()->where('month',25);foreach($ominia25 as $m) {session()->flash('ominia25',$m->ominia);};
        $ominia26 = Inputs::all()->where('month',26);foreach($ominia26 as $m) {session()->flash('ominia26',$m->ominia);};
        $ominia27 = Inputs::all()->where('month',27);foreach($ominia27 as $m) {session()->flash('ominia27',$m->ominia);};
        $ominia28 = Inputs::all()->where('month',28);foreach($ominia28 as $m) {session()->flash('ominia28',$m->ominia);};
        $ominia29 = Inputs::all()->where('month',29);foreach($ominia29 as $m) {session()->flash('ominia29',$m->ominia);};
        $ominia30 = Inputs::all()->where('month',30);foreach($ominia30 as $m) {session()->flash('ominia30',$m->ominia);};
        $ominia31= Inputs::all()->where('month',31);foreach($ominia31 as $m) {session()->flash('ominia31',$m->ominia);};
        $ominia32 = Inputs::all()->where('month',32);foreach($ominia32 as $m) {session()->flash('ominia32',$m->ominia);};
        $ominia33 = Inputs::all()->where('month',33);foreach($ominia33 as $m) {session()->flash('ominia33',$m->ominia);};
        $ominia34 = Inputs::all()->where('month',34);foreach($ominia34 as $m) {session()->flash('ominia34',$m->ominia);};
        $ominia35 = Inputs::all()->where('month',35);foreach($ominia35 as $m) {session()->flash('ominia35',$m->ominia);};
        $ominia36 = Inputs::all()->where('month',36);foreach($ominia36 as $m) {session()->flash('ominia36',$m->ominia);};

        $command = Inputs::all()->where('month',1);foreach($command as $m) {session()->flash('command1',$m->command);};
        $command2 = Inputs::all()->where('month',2);foreach($command2 as $m) {session()->flash('command2',$m->command);};
        $command3 = Inputs::all()->where('month',3);foreach($command3 as $m) {session()->flash('command3', $m->command);};
        $command4 = Inputs::all()->where('month',4);foreach($command4 as $m) {session()->flash('command4',$m->command);};
        $command5 = Inputs::all()->where('month',5);foreach($command5 as $m) {session()->flash('command5',$m->command);};
        $command6 = Inputs::all()->where('month',6);foreach($command6 as $m) {session()->flash('command6',$m->command);};
        $command7 = Inputs::all()->where('month',7);foreach($command7 as $m) {session()->flash('command7',$m->command);};
        $command8 = Inputs::all()->where('month',8);foreach($command8 as $m) {session()->flash('command8',$m->command);};
        $command9 = Inputs::all()->where('month',9);foreach($command9 as $m) {session()->flash('command9',$m->command);};
        $command10 = Inputs::all()->where('month',10);foreach($command10 as $m) {session()->flash('command10',$m->command);};
        $command11 = Inputs::all()->where('month',11);foreach($command11 as $m) {session()->flash('command11',$m->command);};
        $command12 = Inputs::all()->where('month',12);foreach($command12 as $m) {session()->flash('command12',$m->command);};
        $command13 = Inputs::all()->where('month',13);foreach($command13 as $m) {session()->flash('command13',$m->command);};
        $command14= Inputs::all()->where('month',14);foreach($command14 as $m) {session()->flash('command14',$m->command);};
        $command15 = Inputs::all()->where('month',15);foreach($command15 as $m) {session()->flash('command15',$m->command);};
        $command16 = Inputs::all()->where('month',16);foreach($command16 as $m) {session()->flash('command16',$m->command);};
        $command17 = Inputs::all()->where('month',17);foreach($command17 as $m) {session()->flash('command17',$m->command);};
        $command18 = Inputs::all()->where('month',18);foreach($command18 as $m) {session()->flash('command18',$m->command);};
        $command19 = Inputs::all()->where('month',19);foreach($command19 as $m) {session()->flash('command19',$m->command);};
        $command20 = Inputs::all()->where('month',20);foreach($command20 as $m) {session()->flash('command20',$m->command);};
        $command21 = Inputs::all()->where('month',21);foreach($command21 as $m) {session()->flash('command21',$m->command);};
        $command22 = Inputs::all()->where('month',22);foreach($command22 as $m) {session()->flash('command22',$m->command);};
        $command23 = Inputs::all()->where('month',23);foreach($command23 as $m) {session()->flash('command23',$m->command);};
        $command24 = Inputs::all()->where('month',24);foreach($command24 as $m) {session()->flash('command24',$m->command);};
        $command25 = Inputs::all()->where('month',25);foreach($command25 as $m) {session()->flash('command25',$m->command);};
        $command26 = Inputs::all()->where('month',26);foreach($command26 as $m) {session()->flash('command26',$m->command);};
        $command27 = Inputs::all()->where('month',27);foreach($command27 as $m) {session()->flash('command27',$m->command);};
        $command28 = Inputs::all()->where('month',28);foreach($command28 as $m) {session()->flash('command28',$m->command);};
        $command29 = Inputs::all()->where('month',29);foreach($command29 as $m) {session()->flash('command29',$m->command);};
        $command30 = Inputs::all()->where('month',30);foreach($command30 as $m) {session()->flash('command30',$m->command);};
        $command31= Inputs::all()->where('month',31);foreach($command31 as $m) {session()->flash('command31',$m->command);};
        $command32 = Inputs::all()->where('month',32);foreach($command32 as $m) {session()->flash('command32',$m->command);};
        $command33 = Inputs::all()->where('month',33);foreach($command33 as $m) {session()->flash('command33',$m->command);};
        $command34 = Inputs::all()->where('month',34);foreach($command34 as $m) {session()->flash('command34',$m->command);};
        $command35 = Inputs::all()->where('month',35);foreach($command35 as $m) {session()->flash('command35',$m->command);};
        $command36 = Inputs::all()->where('month',36);foreach($command36 as $m) {session()->flash('command36',$m->command);};


        $pres_input_scheme = Inputs::all()->where('month',1);foreach($pres_input_scheme as $m) {session()->flash('pres_input_scheme1',$m->pres_input_scheme);};
        $pres_input_scheme2 = Inputs::all()->where('month',2);foreach($pres_input_scheme2 as $m) {session()->flash('pres_input_scheme2',$m->pres_input_scheme);};
        $pres_input_scheme3 = Inputs::all()->where('month',3);foreach($pres_input_scheme3 as $m) {session()->flash('pres_input_scheme3', $m->pres_input_scheme);};
        $pres_input_scheme4 = Inputs::all()->where('month',4);foreach($pres_input_scheme4 as $m) {session()->flash('pres_input_scheme4',$m->pres_input_scheme);};
        $pres_input_scheme5 = Inputs::all()->where('month',5);foreach($pres_input_scheme5 as $m) {session()->flash('pres_input_scheme5',$m->pres_input_scheme);};
        $pres_input_scheme6 = Inputs::all()->where('month',6);foreach($pres_input_scheme6 as $m) {session()->flash('pres_input_scheme6',$m->pres_input_scheme);};
        $pres_input_scheme7 = Inputs::all()->where('month',7);foreach($pres_input_scheme7 as $m) {session()->flash('pres_input_scheme7',$m->pres_input_scheme);};
        $pres_input_scheme8 = Inputs::all()->where('month',8);foreach($pres_input_scheme8 as $m) {session()->flash('pres_input_scheme8',$m->pres_input_scheme);};
        $pres_input_scheme9 = Inputs::all()->where('month',9);foreach($pres_input_scheme9 as $m) {session()->flash('pres_input_scheme9',$m->pres_input_scheme);};
        $pres_input_scheme10 = Inputs::all()->where('month',10);foreach($pres_input_scheme10 as $m) {session()->flash('pres_input_scheme10',$m->pres_input_scheme);};
        $pres_input_scheme11 = Inputs::all()->where('month',11);foreach($pres_input_scheme11 as $m) {session()->flash('pres_input_scheme11',$m->pres_input_scheme);};
        $pres_input_scheme12 = Inputs::all()->where('month',12);foreach($pres_input_scheme12 as $m) {session()->flash('pres_input_scheme12',$m->pres_input_scheme);};
        $pres_input_scheme13 = Inputs::all()->where('month',13);foreach($pres_input_scheme13 as $m) {session()->flash('pres_input_scheme13',$m->pres_input_scheme);};
        $pres_input_scheme14= Inputs::all()->where('month',14);foreach($pres_input_scheme14 as $m) {session()->flash('pres_input_scheme14',$m->pres_input_scheme);};
        $pres_input_scheme15 = Inputs::all()->where('month',15);foreach($pres_input_scheme15 as $m) {session()->flash('pres_input_scheme15',$m->pres_input_scheme);};
        $pres_input_scheme16 = Inputs::all()->where('month',16);foreach($pres_input_scheme16 as $m) {session()->flash('pres_input_scheme16',$m->pres_input_scheme);};
        $pres_input_scheme17 = Inputs::all()->where('month',17);foreach($pres_input_scheme17 as $m) {session()->flash('pres_input_scheme17',$m->pres_input_scheme);};
        $pres_input_scheme18 = Inputs::all()->where('month',18);foreach($pres_input_scheme18 as $m) {session()->flash('pres_input_scheme18',$m->pres_input_scheme);};
        $pres_input_scheme19 = Inputs::all()->where('month',19);foreach($pres_input_scheme19 as $m) {session()->flash('pres_input_scheme19',$m->pres_input_scheme);};
        $pres_input_scheme20 = Inputs::all()->where('month',20);foreach($pres_input_scheme20 as $m) {session()->flash('pres_input_scheme20',$m->pres_input_scheme);};
        $pres_input_scheme21 = Inputs::all()->where('month',21);foreach($pres_input_scheme21 as $m) {session()->flash('pres_input_scheme21',$m->pres_input_scheme);};
        $pres_input_scheme22 = Inputs::all()->where('month',22);foreach($pres_input_scheme22 as $m) {session()->flash('pres_input_scheme22',$m->pres_input_scheme);};
        $pres_input_scheme23 = Inputs::all()->where('month',23);foreach($pres_input_scheme23 as $m) {session()->flash('pres_input_scheme23',$m->pres_input_scheme);};
        $pres_input_scheme24 = Inputs::all()->where('month',24);foreach($pres_input_scheme24 as $m) {session()->flash('pres_input_scheme24',$m->pres_input_scheme);};
        $pres_input_scheme25 = Inputs::all()->where('month',25);foreach($pres_input_scheme25 as $m) {session()->flash('pres_input_scheme25',$m->pres_input_scheme);};
        $pres_input_scheme26 = Inputs::all()->where('month',26);foreach($pres_input_scheme26 as $m) {session()->flash('pres_input_scheme26',$m->pres_input_scheme);};
        $pres_input_scheme27 = Inputs::all()->where('month',27);foreach($pres_input_scheme27 as $m) {session()->flash('pres_input_scheme27',$m->pres_input_scheme);};
        $pres_input_scheme28 = Inputs::all()->where('month',28);foreach($pres_input_scheme28 as $m) {session()->flash('pres_input_scheme28',$m->pres_input_scheme);};
        $pres_input_scheme29 = Inputs::all()->where('month',29);foreach($pres_input_scheme29 as $m) {session()->flash('pres_input_scheme29',$m->pres_input_scheme);};
        $pres_input_scheme30 = Inputs::all()->where('month',30);foreach($pres_input_scheme30 as $m) {session()->flash('pres_input_scheme30',$m->pres_input_scheme);};
        $pres_input_scheme31= Inputs::all()->where('month',31);foreach($pres_input_scheme31 as $m) {session()->flash('pres_input_scheme31',$m->pres_input_scheme);};
        $pres_input_scheme32 = Inputs::all()->where('month',32);foreach($pres_input_scheme32 as $m) {session()->flash('pres_input_scheme32',$m->pres_input_scheme);};
        $pres_input_scheme33 = Inputs::all()->where('month',33);foreach($pres_input_scheme33 as $m) {session()->flash('pres_input_scheme33',$m->pres_input_scheme);};
        $pres_input_scheme34 = Inputs::all()->where('month',34);foreach($pres_input_scheme34 as $m) {session()->flash('pres_input_scheme34',$m->pres_input_scheme);};
        $pres_input_scheme35 = Inputs::all()->where('month',35);foreach($pres_input_scheme35 as $m) {session()->flash('pres_input_scheme35',$m->pres_input_scheme);};
        $pres_input_scheme36 = Inputs::all()->where('month',36);foreach($pres_input_scheme36 as $m) {session()->flash('pres_input_scheme36',$m->pres_input_scheme);};


        $total_inputs = Inputs::all()->where('month',1);foreach($total_inputs as $m) {session()->flash('total_inputs1',$m->total_inputs);};
        $total_inputs2 = Inputs::all()->where('month',2);foreach($total_inputs2 as $m) {session()->flash('total_inputs2',$m->total_inputs);};
        $total_inputs3 = Inputs::all()->where('month',3);foreach($total_inputs3 as $m) {session()->flash('total_inputs3', $m->total_inputs);};
        $total_inputs4 = Inputs::all()->where('month',4);foreach($total_inputs4 as $m) {session()->flash('total_inputs4',$m->total_inputs);};
        $total_inputs5 = Inputs::all()->where('month',5);foreach($total_inputs5 as $m) {session()->flash('total_inputs5',$m->total_inputs);};
        $total_inputs6 = Inputs::all()->where('month',6);foreach($total_inputs6 as $m) {session()->flash('total_inputs6',$m->total_inputs);};
        $total_inputs7 = Inputs::all()->where('month',7);foreach($total_inputs7 as $m) {session()->flash('total_inputs7',$m->total_inputs);};
        $total_inputs8 = Inputs::all()->where('month',8);foreach($total_inputs8 as $m) {session()->flash('total_inputs8',$m->total_inputs);};
        $total_inputs9 = Inputs::all()->where('month',9);foreach($total_inputs9 as $m) {session()->flash('total_inputs9',$m->total_inputs);};
        $total_inputs10 = Inputs::all()->where('month',10);foreach($total_inputs10 as $m) {session()->flash('total_inputs10',$m->total_inputs);};
        $total_inputs11 = Inputs::all()->where('month',11);foreach($total_inputs11 as $m) {session()->flash('total_inputs11',$m->total_inputs);};
        $total_inputs12 = Inputs::all()->where('month',12);foreach($total_inputs12 as $m) {session()->flash('total_inputs12',$m->total_inputs);};
        $total_inputs13 = Inputs::all()->where('month',13);foreach($total_inputs13 as $m) {session()->flash('total_inputs13',$m->total_inputs);};
        $total_inputs14= Inputs::all()->where('month',14);foreach($total_inputs14 as $m) {session()->flash('total_inputs14',$m->total_inputs);};
        $total_inputs15 = Inputs::all()->where('month',15);foreach($total_inputs15 as $m) {session()->flash('total_inputs15',$m->total_inputs);};
        $total_inputs16 = Inputs::all()->where('month',16);foreach($total_inputs16 as $m) {session()->flash('total_inputs16',$m->total_inputs);};
        $total_inputs17 = Inputs::all()->where('month',17);foreach($total_inputs17 as $m) {session()->flash('total_inputs17',$m->total_inputs);};
        $total_inputs18 = Inputs::all()->where('month',18);foreach($total_inputs18 as $m) {session()->flash('total_inputs18',$m->total_inputs);};
        $total_inputs19 = Inputs::all()->where('month',19);foreach($total_inputs19 as $m) {session()->flash('total_inputs19',$m->total_inputs);};
        $total_inputs20 = Inputs::all()->where('month',20);foreach($total_inputs20 as $m) {session()->flash('total_inputs20',$m->total_inputs);};
        $total_inputs21 = Inputs::all()->where('month',21);foreach($total_inputs21 as $m) {session()->flash('total_inputs21',$m->total_inputs);};
        $total_inputs22 = Inputs::all()->where('month',22);foreach($total_inputs22 as $m) {session()->flash('total_inputs22',$m->total_inputs);};
        $total_inputs23 = Inputs::all()->where('month',23);foreach($total_inputs23 as $m) {session()->flash('total_inputs23',$m->total_inputs);};
        $total_inputs24 = Inputs::all()->where('month',24);foreach($total_inputs24 as $m) {session()->flash('total_inputs24',$m->total_inputs);};
        $total_inputs25 = Inputs::all()->where('month',25);foreach($total_inputs25 as $m) {session()->flash('total_inputs25',$m->total_inputs);};
        $total_inputs26 = Inputs::all()->where('month',26);foreach($total_inputs26 as $m) {session()->flash('total_inputs26',$m->total_inputs);};
        $total_inputs27 = Inputs::all()->where('month',27);foreach($total_inputs27 as $m) {session()->flash('total_inputs27',$m->total_inputs);};
        $total_inputs28 = Inputs::all()->where('month',28);foreach($total_inputs28 as $m) {session()->flash('total_inputs28',$m->total_inputs);};
        $total_inputs29 = Inputs::all()->where('month',29);foreach($total_inputs29 as $m) {session()->flash('total_inputs29',$m->total_inputs);};
        $total_inputs30 = Inputs::all()->where('month',30);foreach($total_inputs30 as $m) {session()->flash('total_inputs30',$m->total_inputs);};
        $total_inputs31= Inputs::all()->where('month',31);foreach($total_inputs31 as $m) {session()->flash('total_inputs31',$m->total_inputs);};
        $total_inputs32 = Inputs::all()->where('month',32);foreach($total_inputs32 as $m) {session()->flash('total_inputs32',$m->total_inputs);};
        $total_inputs33 = Inputs::all()->where('month',33);foreach($total_inputs33 as $m) {session()->flash('total_inputs33',$m->total_inputs);};
        $total_inputs34 = Inputs::all()->where('month',34);foreach($total_inputs34 as $m) {session()->flash('total_inputs34',$m->total_inputs);};
        $total_inputs35 = Inputs::all()->where('month',35);foreach($total_inputs35 as $m) {session()->flash('total_inputs35',$m->total_inputs);};
        $total_inputs36 = Inputs::all()->where('month',36);foreach($total_inputs36 as $m) {session()->flash('total_inputs36',$m->total_inputs);};

        $selling_price = Inputs::all()->where('month',1);foreach($selling_price as $m) {session()->flash('selling_price1',$m->selling_price);};
        $selling_price2 = Inputs::all()->where('month',2);foreach($selling_price2 as $m) {session()->flash('selling_price2',$m->selling_price);};
        $selling_price3 = Inputs::all()->where('month',3);foreach($selling_price3 as $m) {session()->flash('selling_price3', $m->selling_price);};
        $selling_price4 = Inputs::all()->where('month',4);foreach($selling_price4 as $m) {session()->flash('selling_price4',$m->selling_price);};
        $selling_price5 = Inputs::all()->where('month',5);foreach($selling_price5 as $m) {session()->flash('selling_price5',$m->selling_price);};
        $selling_price6 = Inputs::all()->where('month',6);foreach($selling_price6 as $m) {session()->flash('selling_price6',$m->selling_price);};
        $selling_price7 = Inputs::all()->where('month',7);foreach($selling_price7 as $m) {session()->flash('selling_price7',$m->selling_price);};
        $selling_price8 = Inputs::all()->where('month',8);foreach($selling_price8 as $m) {session()->flash('selling_price8',$m->selling_price);};
        $selling_price9 = Inputs::all()->where('month',9);foreach($selling_price9 as $m) {session()->flash('selling_price9',$m->selling_price);};
        $selling_price10 = Inputs::all()->where('month',10);foreach($selling_price10 as $m) {session()->flash('selling_price10',$m->selling_price);};
        $selling_price11 = Inputs::all()->where('month',11);foreach($selling_price11 as $m) {session()->flash('selling_price11',$m->selling_price);};
        $selling_price12 = Inputs::all()->where('month',12);foreach($selling_price12 as $m) {session()->flash('selling_price12',$m->selling_price);};
        $selling_price13 = Inputs::all()->where('month',13);foreach($selling_price13 as $m) {session()->flash('selling_price13',$m->selling_price);};
        $selling_price14= Inputs::all()->where('month',14);foreach($selling_price14 as $m) {session()->flash('selling_price14',$m->selling_price);};
        $selling_price15 = Inputs::all()->where('month',15);foreach($selling_price15 as $m) {session()->flash('selling_price15',$m->selling_price);};
        $selling_price16 = Inputs::all()->where('month',16);foreach($selling_price16 as $m) {session()->flash('selling_price16',$m->selling_price);};
        $selling_price17 = Inputs::all()->where('month',17);foreach($selling_price17 as $m) {session()->flash('selling_price17',$m->selling_price);};
        $selling_price18 = Inputs::all()->where('month',18);foreach($selling_price18 as $m) {session()->flash('selling_price18',$m->selling_price);};
        $selling_price19 = Inputs::all()->where('month',19);foreach($selling_price19 as $m) {session()->flash('selling_price19',$m->selling_price);};
        $selling_price20 = Inputs::all()->where('month',20);foreach($selling_price20 as $m) {session()->flash('selling_price20',$m->selling_price);};
        $selling_price21 = Inputs::all()->where('month',21);foreach($selling_price21 as $m) {session()->flash('selling_price21',$m->selling_price);};
        $selling_price22 = Inputs::all()->where('month',22);foreach($selling_price22 as $m) {session()->flash('selling_price22',$m->selling_price);};
        $selling_price23 = Inputs::all()->where('month',23);foreach($selling_price23 as $m) {session()->flash('selling_price23',$m->selling_price);};
        $selling_price24 = Inputs::all()->where('month',24);foreach($selling_price24 as $m) {session()->flash('selling_price24',$m->selling_price);};
        $selling_price25 = Inputs::all()->where('month',25);foreach($selling_price25 as $m) {session()->flash('selling_price25',$m->selling_price);};
        $selling_price26 = Inputs::all()->where('month',26);foreach($selling_price26 as $m) {session()->flash('selling_price26',$m->selling_price);};
        $selling_price27 = Inputs::all()->where('month',27);foreach($selling_price27 as $m) {session()->flash('selling_price27',$m->selling_price);};
        $selling_price28 = Inputs::all()->where('month',28);foreach($selling_price28 as $m) {session()->flash('selling_price28',$m->selling_price);};
        $selling_price29 = Inputs::all()->where('month',29);foreach($selling_price29 as $m) {session()->flash('selling_price29',$m->selling_price);};
        $selling_price30 = Inputs::all()->where('month',30);foreach($selling_price30 as $m) {session()->flash('selling_price30',$m->selling_price);};
        $selling_price31= Inputs::all()->where('month',31);foreach($selling_price31 as $m) {session()->flash('selling_price31',$m->selling_price);};
        $selling_price32 = Inputs::all()->where('month',32);foreach($selling_price32 as $m) {session()->flash('selling_price32',$m->selling_price);};
        $selling_price33 = Inputs::all()->where('month',33);foreach($selling_price33 as $m) {session()->flash('selling_price33',$m->selling_price);};
        $selling_price34 = Inputs::all()->where('month',34);foreach($selling_price34 as $m) {session()->flash('selling_price34',$m->selling_price);};
        $selling_price35 = Inputs::all()->where('month',35);foreach($selling_price35 as $m) {session()->flash('selling_price35',$m->selling_price);};
        $selling_price36 = Inputs::all()->where('month',36);foreach($selling_price36 as $m) {session()->flash('selling_price36',$m->selling_price);};

        $revenue = Inputs::all()->where('month',1);foreach($revenue as $m) {session()->flash('revenue1',$m->revenue);};
        $revenue2 = Inputs::all()->where('month',2);foreach($revenue2 as $m) {session()->flash('revenue2',$m->revenue);};
        $revenue3 = Inputs::all()->where('month',3);foreach($revenue3 as $m) {session()->flash('revenue3', $m->revenue);};
        $revenue4 = Inputs::all()->where('month',4);foreach($revenue4 as $m) {session()->flash('revenue4',$m->revenue);};
        $revenue5 = Inputs::all()->where('month',5);foreach($revenue5 as $m) {session()->flash('revenue5',$m->revenue);};
        $revenue6 = Inputs::all()->where('month',6);foreach($revenue6 as $m) {session()->flash('revenue6',$m->revenue);};
        $revenue7 = Inputs::all()->where('month',7);foreach($revenue7 as $m) {session()->flash('revenue7',$m->revenue);};
        $revenue8 = Inputs::all()->where('month',8);foreach($revenue8 as $m) {session()->flash('revenue8',$m->revenue);};
        $revenue9 = Inputs::all()->where('month',9);foreach($revenue9 as $m) {session()->flash('revenue9',$m->revenue);};
        $revenue10 = Inputs::all()->where('month',10);foreach($revenue10 as $m) {session()->flash('revenue10',$m->revenue);};
        $revenue11 = Inputs::all()->where('month',11);foreach($revenue11 as $m) {session()->flash('revenue11',$m->revenue);};
        $revenue12 = Inputs::all()->where('month',12);foreach($revenue12 as $m) {session()->flash('revenue12',$m->revenue);};
        $revenue13 = Inputs::all()->where('month',13);foreach($revenue13 as $m) {session()->flash('revenue13',$m->revenue);};
        $revenue14= Inputs::all()->where('month',14);foreach($revenue14 as $m) {session()->flash('revenue14',$m->revenue);};
        $revenue15 = Inputs::all()->where('month',15);foreach($revenue15 as $m) {session()->flash('revenue15',$m->revenue);};
        $revenue16 = Inputs::all()->where('month',16);foreach($revenue16 as $m) {session()->flash('revenue16',$m->revenue);};
        $revenue17 = Inputs::all()->where('month',17);foreach($revenue17 as $m) {session()->flash('revenue17',$m->revenue);};
        $revenue18 = Inputs::all()->where('month',18);foreach($revenue18 as $m) {session()->flash('revenue18',$m->revenue);};
        $revenue19 = Inputs::all()->where('month',19);foreach($revenue19 as $m) {session()->flash('revenue19',$m->revenue);};
        $revenue20 = Inputs::all()->where('month',20);foreach($revenue20 as $m) {session()->flash('revenue20',$m->revenue);};
        $revenue21 = Inputs::all()->where('month',21);foreach($revenue21 as $m) {session()->flash('revenue21',$m->revenue);};
        $revenue22 = Inputs::all()->where('month',22);foreach($revenue22 as $m) {session()->flash('revenue22',$m->revenue);};
        $revenue23 = Inputs::all()->where('month',23);foreach($revenue23 as $m) {session()->flash('revenue23',$m->revenue);};
        $revenue24 = Inputs::all()->where('month',24);foreach($revenue24 as $m) {session()->flash('revenue24',$m->revenue);};
        $revenue25 = Inputs::all()->where('month',25);foreach($revenue25 as $m) {session()->flash('revenue25',$m->revenue);};
        $revenue26 = Inputs::all()->where('month',26);foreach($revenue26 as $m) {session()->flash('revenue26',$m->revenue);};
        $revenue27 = Inputs::all()->where('month',27);foreach($revenue27 as $m) {session()->flash('revenue27',$m->revenue);};
        $revenue28 = Inputs::all()->where('month',28);foreach($revenue28 as $m) {session()->flash('revenue28',$m->revenue);};
        $revenue29 = Inputs::all()->where('month',29);foreach($revenue29 as $m) {session()->flash('revenue29',$m->revenue);};
        $revenue30 = Inputs::all()->where('month',30);foreach($revenue30 as $m) {session()->flash('revenue30',$m->revenue);};
        $revenue31= Inputs::all()->where('month',31);foreach($revenue31 as $m) {session()->flash('revenue31',$m->revenue);};
        $revenue32 = Inputs::all()->where('month',32);foreach($revenue32 as $m) {session()->flash('revenue32',$m->revenue);};
        $revenue33 = Inputs::all()->where('month',33);foreach($revenue33 as $m) {session()->flash('revenue33',$m->revenue);};
        $revenue34 = Inputs::all()->where('month',34);foreach($revenue34 as $m) {session()->flash('revenue34',$m->revenue);};
        $revenue35 = Inputs::all()->where('month',35);foreach($revenue35 as $m) {session()->flash('revenue35',$m->revenue);};
        $revenue36 = Inputs::all()->where('month',36);foreach($revenue36 as $m) {session()->flash('revenue36',$m->revenue);};


        $raw_materials = Expenses::all()->where('month',1);foreach($raw_materials as $m) {session()->flash('raw_materials1',$m->raw_materials);};
        $raw_materials2 = Expenses::all()->where('month',2);foreach($raw_materials2 as $m) {session()->flash('raw_materials2',$m->raw_materials);};
        $raw_materials3 = Expenses::all()->where('month',3);foreach($raw_materials3 as $m) {session()->flash('raw_materials3', $m->raw_materials);};
        $raw_materials4 = Expenses::all()->where('month',4);foreach($raw_materials4 as $m) {session()->flash('raw_materials4',$m->raw_materials);};
        $raw_materials5 = Expenses::all()->where('month',5);foreach($raw_materials5 as $m) {session()->flash('raw_materials5',$m->raw_materials);};
        $raw_materials6 = Expenses::all()->where('month',6);foreach($raw_materials6 as $m) {session()->flash('raw_materials6',$m->raw_materials);};
        $raw_materials7 = Expenses::all()->where('month',7);foreach($raw_materials7 as $m) {session()->flash('raw_materials7',$m->raw_materials);};
        $raw_materials8 = Expenses::all()->where('month',8);foreach($raw_materials8 as $m) {session()->flash('raw_materials8',$m->raw_materials);};
        $raw_materials9 = Expenses::all()->where('month',9);foreach($raw_materials9 as $m) {session()->flash('raw_materials9',$m->raw_materials);};
        $raw_materials10 = Expenses::all()->where('month',10);foreach($raw_materials10 as $m) {session()->flash('raw_materials10',$m->raw_materials);};
        $raw_materials11 = Expenses::all()->where('month',11);foreach($raw_materials11 as $m) {session()->flash('raw_materials11',$m->raw_materials);};
        $raw_materials12 = Expenses::all()->where('month',12);foreach($raw_materials12 as $m) {session()->flash('raw_materials12',$m->raw_materials);};
        $raw_materials13 = Expenses::all()->where('month',13);foreach($raw_materials13 as $m) {session()->flash('raw_materials13',$m->raw_materials);};
        $raw_materials14= Expenses::all()->where('month',14);foreach($raw_materials14 as $m) {session()->flash('raw_materials14',$m->raw_materials);};
        $raw_materials15 = Expenses::all()->where('month',15);foreach($raw_materials15 as $m) {session()->flash('raw_materials15',$m->raw_materials);};
        $raw_materials16 = Expenses::all()->where('month',16);foreach($raw_materials16 as $m) {session()->flash('raw_materials16',$m->raw_materials);};
        $raw_materials17 = Expenses::all()->where('month',17);foreach($raw_materials17 as $m) {session()->flash('raw_materials17',$m->raw_materials);};
        $raw_materials18 = Expenses::all()->where('month',18);foreach($raw_materials18 as $m) {session()->flash('raw_materials18',$m->raw_materials);};
        $raw_materials19 = Expenses::all()->where('month',19);foreach($raw_materials19 as $m) {session()->flash('raw_materials19',$m->raw_materials);};
        $raw_materials20 = Expenses::all()->where('month',20);foreach($raw_materials20 as $m) {session()->flash('raw_materials20',$m->raw_materials);};
        $raw_materials21 = Expenses::all()->where('month',21);foreach($raw_materials21 as $m) {session()->flash('raw_materials21',$m->raw_materials);};
        $raw_materials22 = Expenses::all()->where('month',22);foreach($raw_materials22 as $m) {session()->flash('raw_materials22',$m->raw_materials);};
        $raw_materials23 = Expenses::all()->where('month',23);foreach($raw_materials23 as $m) {session()->flash('raw_materials23',$m->raw_materials);};
        $raw_materials24 = Expenses::all()->where('month',24);foreach($raw_materials24 as $m) {session()->flash('raw_materials24',$m->raw_materials);};
        $raw_materials25 = Expenses::all()->where('month',25);foreach($raw_materials25 as $m) {session()->flash('raw_materials25',$m->raw_materials);};
        $raw_materials26 = Expenses::all()->where('month',26);foreach($raw_materials26 as $m) {session()->flash('raw_materials26',$m->raw_materials);};
        $raw_materials27 = Expenses::all()->where('month',27);foreach($raw_materials27 as $m) {session()->flash('raw_materials27',$m->raw_materials);};
        $raw_materials28 = Expenses::all()->where('month',28);foreach($raw_materials28 as $m) {session()->flash('raw_materials28',$m->raw_materials);};
        $raw_materials29 = Expenses::all()->where('month',29);foreach($raw_materials29 as $m) {session()->flash('raw_materials29',$m->raw_materials);};
        $raw_materials30 = Expenses::all()->where('month',30);foreach($raw_materials30 as $m) {session()->flash('raw_materials30',$m->raw_materials);};
        $raw_materials31= Expenses::all()->where('month',31);foreach($raw_materials31 as $m) {session()->flash('raw_materials31',$m->raw_materials);};
        $raw_materials32 = Expenses::all()->where('month',32);foreach($raw_materials32 as $m) {session()->flash('raw_materials32',$m->raw_materials);};
        $raw_materials33 = Expenses::all()->where('month',33);foreach($raw_materials33 as $m) {session()->flash('raw_materials33',$m->raw_materials);};
        $raw_materials34 = Expenses::all()->where('month',34);foreach($raw_materials34 as $m) {session()->flash('raw_materials34',$m->raw_materials);};
        $raw_materials35 = Expenses::all()->where('month',35);foreach($raw_materials35 as $m) {session()->flash('raw_materials35',$m->raw_materials);};
        $raw_materials36 = Expenses::all()->where('month',36);foreach($raw_materials36 as $m) {session()->flash('raw_materials36',$m->raw_materials);};


        $payroll_fixed = Expenses::all()->where('month',1);foreach($payroll_fixed as $m) {session()->flash('payroll_fixed1',$m->payroll_fixed);};
        $payroll_fixed2 = Expenses::all()->where('month',2);foreach($payroll_fixed2 as $m) {session()->flash('payroll_fixed2',$m->payroll_fixed);};
        $payroll_fixed3 = Expenses::all()->where('month',3);foreach($payroll_fixed3 as $m) {session()->flash('payroll_fixed3', $m->payroll_fixed);};
        $payroll_fixed4 = Expenses::all()->where('month',4);foreach($payroll_fixed4 as $m) {session()->flash('payroll_fixed4',$m->payroll_fixed);};
        $payroll_fixed5 = Expenses::all()->where('month',5);foreach($payroll_fixed5 as $m) {session()->flash('payroll_fixed5',$m->payroll_fixed);};
        $payroll_fixed6 = Expenses::all()->where('month',6);foreach($payroll_fixed6 as $m) {session()->flash('payroll_fixed6',$m->payroll_fixed);};
        $payroll_fixed7 = Expenses::all()->where('month',7);foreach($payroll_fixed7 as $m) {session()->flash('payroll_fixed7',$m->payroll_fixed);};
        $payroll_fixed8 = Expenses::all()->where('month',8);foreach($payroll_fixed8 as $m) {session()->flash('payroll_fixed8',$m->payroll_fixed);};
        $payroll_fixed9 = Expenses::all()->where('month',9);foreach($payroll_fixed9 as $m) {session()->flash('payroll_fixed9',$m->payroll_fixed);};
        $payroll_fixed10 = Expenses::all()->where('month',10);foreach($payroll_fixed10 as $m) {session()->flash('payroll_fixed10',$m->payroll_fixed);};
        $payroll_fixed11 = Expenses::all()->where('month',11);foreach($payroll_fixed11 as $m) {session()->flash('payroll_fixed11',$m->payroll_fixed);};
        $payroll_fixed12 = Expenses::all()->where('month',12);foreach($payroll_fixed12 as $m) {session()->flash('payroll_fixed12',$m->payroll_fixed);};
        $payroll_fixed13 = Expenses::all()->where('month',13);foreach($payroll_fixed13 as $m) {session()->flash('payroll_fixed13',$m->payroll_fixed);};
        $payroll_fixed14= Expenses::all()->where('month',14);foreach($payroll_fixed14 as $m) {session()->flash('payroll_fixed14',$m->payroll_fixed);};
        $payroll_fixed15 = Expenses::all()->where('month',15);foreach($payroll_fixed15 as $m) {session()->flash('payroll_fixed15',$m->payroll_fixed);};
        $payroll_fixed16 = Expenses::all()->where('month',16);foreach($payroll_fixed16 as $m) {session()->flash('payroll_fixed16',$m->payroll_fixed);};
        $payroll_fixed17 = Expenses::all()->where('month',17);foreach($payroll_fixed17 as $m) {session()->flash('payroll_fixed17',$m->payroll_fixed);};
        $payroll_fixed18 = Expenses::all()->where('month',18);foreach($payroll_fixed18 as $m) {session()->flash('payroll_fixed18',$m->payroll_fixed);};
        $payroll_fixed19 = Expenses::all()->where('month',19);foreach($payroll_fixed19 as $m) {session()->flash('payroll_fixed19',$m->payroll_fixed);};
        $payroll_fixed20 = Expenses::all()->where('month',20);foreach($payroll_fixed20 as $m) {session()->flash('payroll_fixed20',$m->payroll_fixed);};
        $payroll_fixed21 = Expenses::all()->where('month',21);foreach($payroll_fixed21 as $m) {session()->flash('payroll_fixed21',$m->payroll_fixed);};
        $payroll_fixed22 = Expenses::all()->where('month',22);foreach($payroll_fixed22 as $m) {session()->flash('payroll_fixed22',$m->payroll_fixed);};
        $payroll_fixed23 = Expenses::all()->where('month',23);foreach($payroll_fixed23 as $m) {session()->flash('payroll_fixed23',$m->payroll_fixed);};
        $payroll_fixed24 = Expenses::all()->where('month',24);foreach($payroll_fixed24 as $m) {session()->flash('payroll_fixed24',$m->payroll_fixed);};
        $payroll_fixed25 = Expenses::all()->where('month',25);foreach($payroll_fixed25 as $m) {session()->flash('payroll_fixed25',$m->payroll_fixed);};
        $payroll_fixed26 = Expenses::all()->where('month',26);foreach($payroll_fixed26 as $m) {session()->flash('payroll_fixed26',$m->payroll_fixed);};
        $payroll_fixed27 = Expenses::all()->where('month',27);foreach($payroll_fixed27 as $m) {session()->flash('payroll_fixed27',$m->payroll_fixed);};
        $payroll_fixed28 = Expenses::all()->where('month',28);foreach($payroll_fixed28 as $m) {session()->flash('payroll_fixed28',$m->payroll_fixed);};
        $payroll_fixed29 = Expenses::all()->where('month',29);foreach($payroll_fixed29 as $m) {session()->flash('payroll_fixed29',$m->payroll_fixed);};
        $payroll_fixed30 = Expenses::all()->where('month',30);foreach($payroll_fixed30 as $m) {session()->flash('payroll_fixed30',$m->payroll_fixed);};
        $payroll_fixed31= Expenses::all()->where('month',31);foreach($payroll_fixed31 as $m) {session()->flash('payroll_fixed31',$m->payroll_fixed);};
        $payroll_fixed32 = Expenses::all()->where('month',32);foreach($payroll_fixed32 as $m) {session()->flash('payroll_fixed32',$m->payroll_fixed);};
        $payroll_fixed33 = Expenses::all()->where('month',33);foreach($payroll_fixed33 as $m) {session()->flash('payroll_fixed33',$m->payroll_fixed);};
        $payroll_fixed34 = Expenses::all()->where('month',34);foreach($payroll_fixed34 as $m) {session()->flash('payroll_fixed34',$m->payroll_fixed);};
        $payroll_fixed35 = Expenses::all()->where('month',35);foreach($payroll_fixed35 as $m) {session()->flash('payroll_fixed35',$m->payroll_fixed);};
        $payroll_fixed36 = Expenses::all()->where('month',36);foreach($payroll_fixed36 as $m) {session()->flash('payroll_fixed36',$m->payroll_fixed);};

        $payroll_variable = Expenses::all()->where('month',1);foreach($payroll_variable as $m) {session()->flash('payroll_variable1',$m->payroll_variable);};
        $payroll_variable2 = Expenses::all()->where('month',2);foreach($payroll_variable2 as $m) {session()->flash('payroll_variable2',$m->payroll_variable);};
        $payroll_variable3 = Expenses::all()->where('month',3);foreach($payroll_variable3 as $m) {session()->flash('payroll_variable3', $m->payroll_variable);};
        $payroll_variable4 = Expenses::all()->where('month',4);foreach($payroll_variable4 as $m) {session()->flash('payroll_variable4',$m->payroll_variable);};
        $payroll_variable5 = Expenses::all()->where('month',5);foreach($payroll_variable5 as $m) {session()->flash('payroll_variable5',$m->payroll_variable);};
        $payroll_variable6 = Expenses::all()->where('month',6);foreach($payroll_variable6 as $m) {session()->flash('payroll_variable6',$m->payroll_variable);};
        $payroll_variable7 = Expenses::all()->where('month',7);foreach($payroll_variable7 as $m) {session()->flash('payroll_variable7',$m->payroll_variable);};
        $payroll_variable8 = Expenses::all()->where('month',8);foreach($payroll_variable8 as $m) {session()->flash('payroll_variable8',$m->payroll_variable);};
        $payroll_variable9 = Expenses::all()->where('month',9);foreach($payroll_variable9 as $m) {session()->flash('payroll_variable9',$m->payroll_variable);};
        $payroll_variable10 = Expenses::all()->where('month',10);foreach($payroll_variable10 as $m) {session()->flash('payroll_variable10',$m->payroll_variable);};
        $payroll_variable11 = Expenses::all()->where('month',11);foreach($payroll_variable11 as $m) {session()->flash('payroll_variable11',$m->payroll_variable);};
        $payroll_variable12 = Expenses::all()->where('month',12);foreach($payroll_variable12 as $m) {session()->flash('payroll_variable12',$m->payroll_variable);};
        $payroll_variable13 = Expenses::all()->where('month',13);foreach($payroll_variable13 as $m) {session()->flash('payroll_variable13',$m->payroll_variable);};
        $payroll_variable14= Expenses::all()->where('month',14);foreach($payroll_variable14 as $m) {session()->flash('payroll_variable14',$m->payroll_variable);};
        $payroll_variable15 = Expenses::all()->where('month',15);foreach($payroll_variable15 as $m) {session()->flash('payroll_variable15',$m->payroll_variable);};
        $payroll_variable16 = Expenses::all()->where('month',16);foreach($payroll_variable16 as $m) {session()->flash('payroll_variable16',$m->payroll_variable);};
        $payroll_variable17 = Expenses::all()->where('month',17);foreach($payroll_variable17 as $m) {session()->flash('payroll_variable17',$m->payroll_variable);};
        $payroll_variable18 = Expenses::all()->where('month',18);foreach($payroll_variable18 as $m) {session()->flash('payroll_variable18',$m->payroll_variable);};
        $payroll_variable19 = Expenses::all()->where('month',19);foreach($payroll_variable19 as $m) {session()->flash('payroll_variable19',$m->payroll_variable);};
        $payroll_variable20 = Expenses::all()->where('month',20);foreach($payroll_variable20 as $m) {session()->flash('payroll_variable20',$m->payroll_variable);};
        $payroll_variable21 = Expenses::all()->where('month',21);foreach($payroll_variable21 as $m) {session()->flash('payroll_variable21',$m->payroll_variable);};
        $payroll_variable22 = Expenses::all()->where('month',22);foreach($payroll_variable22 as $m) {session()->flash('payroll_variable22',$m->payroll_variable);};
        $payroll_variable23 = Expenses::all()->where('month',23);foreach($payroll_variable23 as $m) {session()->flash('payroll_variable23',$m->payroll_variable);};
        $payroll_variable24 = Expenses::all()->where('month',24);foreach($payroll_variable24 as $m) {session()->flash('payroll_variable24',$m->payroll_variable);};
        $payroll_variable25 = Expenses::all()->where('month',25);foreach($payroll_variable25 as $m) {session()->flash('payroll_variable25',$m->payroll_variable);};
        $payroll_variable26 = Expenses::all()->where('month',26);foreach($payroll_variable26 as $m) {session()->flash('payroll_variable26',$m->payroll_variable);};
        $payroll_variable27 = Expenses::all()->where('month',27);foreach($payroll_variable27 as $m) {session()->flash('payroll_variable27',$m->payroll_variable);};
        $payroll_variable28 = Expenses::all()->where('month',28);foreach($payroll_variable28 as $m) {session()->flash('payroll_variable28',$m->payroll_variable);};
        $payroll_variable29 = Expenses::all()->where('month',29);foreach($payroll_variable29 as $m) {session()->flash('payroll_variable29',$m->payroll_variable);};
        $payroll_variable30 = Expenses::all()->where('month',30);foreach($payroll_variable30 as $m) {session()->flash('payroll_variable30',$m->payroll_variable);};
        $payroll_variable31= Expenses::all()->where('month',31);foreach($payroll_variable31 as $m) {session()->flash('payroll_variable31',$m->payroll_variable);};
        $payroll_variable32 = Expenses::all()->where('month',32);foreach($payroll_variable32 as $m) {session()->flash('payroll_variable32',$m->payroll_variable);};
        $payroll_variable33 = Expenses::all()->where('month',33);foreach($payroll_variable33 as $m) {session()->flash('payroll_variable33',$m->payroll_variable);};
        $payroll_variable34 = Expenses::all()->where('month',34);foreach($payroll_variable34 as $m) {session()->flash('payroll_variable34',$m->payroll_variable);};
        $payroll_variable35 = Expenses::all()->where('month',35);foreach($payroll_variable35 as $m) {session()->flash('payroll_variable35',$m->payroll_variable);};
        $payroll_variable36 = Expenses::all()->where('month',36);foreach($payroll_variable36 as $m) {session()->flash('payroll_variable36',$m->payroll_variable);};

        $repairs = Expenses::all()->where('month',1);foreach($repairs as $m) {session()->flash('repairs1',$m->repairs);};
        $repairs2 = Expenses::all()->where('month',2);foreach($repairs2 as $m) {session()->flash('repairs2',$m->repairs);};
        $repairs3 = Expenses::all()->where('month',3);foreach($repairs3 as $m) {session()->flash('repairs3', $m->repairs);};
        $repairs4 = Expenses::all()->where('month',4);foreach($repairs4 as $m) {session()->flash('repairs4',$m->repairs);};
        $repairs5 = Expenses::all()->where('month',5);foreach($repairs5 as $m) {session()->flash('repairs5',$m->repairs);};
        $repairs6 = Expenses::all()->where('month',6);foreach($repairs6 as $m) {session()->flash('repairs6',$m->repairs);};
        $repairs7 = Expenses::all()->where('month',7);foreach($repairs7 as $m) {session()->flash('repairs7',$m->repairs);};
        $repairs8 = Expenses::all()->where('month',8);foreach($repairs8 as $m) {session()->flash('repairs8',$m->repairs);};
        $repairs9 = Expenses::all()->where('month',9);foreach($repairs9 as $m) {session()->flash('repairs9',$m->repairs);};
        $repairs10 = Expenses::all()->where('month',10);foreach($repairs10 as $m) {session()->flash('repairs10',$m->repairs);};
        $repairs11 = Expenses::all()->where('month',11);foreach($repairs11 as $m) {session()->flash('repairs11',$m->repairs);};
        $repairs12 = Expenses::all()->where('month',12);foreach($repairs12 as $m) {session()->flash('repairs12',$m->repairs);};
        $repairs13 = Expenses::all()->where('month',13);foreach($repairs13 as $m) {session()->flash('repairs13',$m->repairs);};
        $repairs14= Expenses::all()->where('month',14);foreach($repairs14 as $m) {session()->flash('repairs14',$m->repairs);};
        $repairs15 = Expenses::all()->where('month',15);foreach($repairs15 as $m) {session()->flash('repairs15',$m->repairs);};
        $repairs16 = Expenses::all()->where('month',16);foreach($repairs16 as $m) {session()->flash('repairs16',$m->repairs);};
        $repairs17 = Expenses::all()->where('month',17);foreach($repairs17 as $m) {session()->flash('repairs17',$m->repairs);};
        $repairs18 = Expenses::all()->where('month',18);foreach($repairs18 as $m) {session()->flash('repairs18',$m->repairs);};
        $repairs19 = Expenses::all()->where('month',19);foreach($repairs19 as $m) {session()->flash('repairs19',$m->repairs);};
        $repairs20 = Expenses::all()->where('month',20);foreach($repairs20 as $m) {session()->flash('repairs20',$m->repairs);};
        $repairs21 = Expenses::all()->where('month',21);foreach($repairs21 as $m) {session()->flash('repairs21',$m->repairs);};
        $repairs22 = Expenses::all()->where('month',22);foreach($repairs22 as $m) {session()->flash('repairs22',$m->repairs);};
        $repairs23 = Expenses::all()->where('month',23);foreach($repairs23 as $m) {session()->flash('repairs23',$m->repairs);};
        $repairs24 = Expenses::all()->where('month',24);foreach($repairs24 as $m) {session()->flash('repairs24',$m->repairs);};
        $repairs25 = Expenses::all()->where('month',25);foreach($repairs25 as $m) {session()->flash('repairs25',$m->repairs);};
        $repairs26 = Expenses::all()->where('month',26);foreach($repairs26 as $m) {session()->flash('repairs26',$m->repairs);};
        $repairs27 = Expenses::all()->where('month',27);foreach($repairs27 as $m) {session()->flash('repairs27',$m->repairs);};
        $repairs28 = Expenses::all()->where('month',28);foreach($repairs28 as $m) {session()->flash('repairs28',$m->repairs);};
        $repairs29 = Expenses::all()->where('month',29);foreach($repairs29 as $m) {session()->flash('repairs29',$m->repairs);};
        $repairs30 = Expenses::all()->where('month',30);foreach($repairs30 as $m) {session()->flash('repairs30',$m->repairs);};
        $repairs31= Expenses::all()->where('month',31);foreach($repairs31 as $m) {session()->flash('repairs31',$m->repairs);};
        $repairs32 = Expenses::all()->where('month',32);foreach($repairs32 as $m) {session()->flash('repairs32',$m->repairs);};
        $repairs33 = Expenses::all()->where('month',33);foreach($repairs33 as $m) {session()->flash('repairs33',$m->repairs);};
        $repairs34 = Expenses::all()->where('month',34);foreach($repairs34 as $m) {session()->flash('repairs34',$m->repairs);};
        $repairs35 = Expenses::all()->where('month',35);foreach($repairs35 as $m) {session()->flash('repairs35',$m->repairs);};
        $repairs36 = Expenses::all()->where('month',36);foreach($repairs36 as $m) {session()->flash('repairs36',$m->repairs);};

        $electricity = Expenses::all()->where('month',1);foreach($electricity as $m) {session()->flash('electricity1',$m->electricity);};
        $electricity2 = Expenses::all()->where('month',2);foreach($electricity2 as $m) {session()->flash('electricity2',$m->electricity);};
        $electricity3 = Expenses::all()->where('month',3);foreach($electricity3 as $m) {session()->flash('electricity3', $m->electricity);};
        $electricity4 = Expenses::all()->where('month',4);foreach($electricity4 as $m) {session()->flash('electricity4',$m->electricity);};
        $electricity5 = Expenses::all()->where('month',5);foreach($electricity5 as $m) {session()->flash('electricity5',$m->electricity);};
        $electricity6 = Expenses::all()->where('month',6);foreach($electricity6 as $m) {session()->flash('electricity6',$m->electricity);};
        $electricity7 = Expenses::all()->where('month',7);foreach($electricity7 as $m) {session()->flash('electricity7',$m->electricity);};
        $electricity8 = Expenses::all()->where('month',8);foreach($electricity8 as $m) {session()->flash('electricity8',$m->electricity);};
        $electricity9 = Expenses::all()->where('month',9);foreach($electricity9 as $m) {session()->flash('electricity9',$m->electricity);};
        $electricity10 = Expenses::all()->where('month',10);foreach($electricity10 as $m) {session()->flash('electricity10',$m->electricity);};
        $electricity11 = Expenses::all()->where('month',11);foreach($electricity11 as $m) {session()->flash('electricity11',$m->electricity);};
        $electricity12 = Expenses::all()->where('month',12);foreach($electricity12 as $m) {session()->flash('electricity12',$m->electricity);};
        $electricity13 = Expenses::all()->where('month',13);foreach($electricity13 as $m) {session()->flash('electricity13',$m->electricity);};
        $electricity14= Expenses::all()->where('month',14);foreach($electricity14 as $m) {session()->flash('electricity14',$m->electricity);};
        $electricity15 = Expenses::all()->where('month',15);foreach($electricity15 as $m) {session()->flash('electricity15',$m->electricity);};
        $electricity16 = Expenses::all()->where('month',16);foreach($electricity16 as $m) {session()->flash('electricity16',$m->electricity);};
        $electricity17 = Expenses::all()->where('month',17);foreach($electricity17 as $m) {session()->flash('electricity17',$m->electricity);};
        $electricity18 = Expenses::all()->where('month',18);foreach($electricity18 as $m) {session()->flash('electricity18',$m->electricity);};
        $electricity19 = Expenses::all()->where('month',19);foreach($electricity19 as $m) {session()->flash('electricity19',$m->electricity);};
        $electricity20 = Expenses::all()->where('month',20);foreach($electricity20 as $m) {session()->flash('electricity20',$m->electricity);};
        $electricity21 = Expenses::all()->where('month',21);foreach($electricity21 as $m) {session()->flash('electricity21',$m->electricity);};
        $electricity22 = Expenses::all()->where('month',22);foreach($electricity22 as $m) {session()->flash('electricity22',$m->electricity);};
        $electricity23 = Expenses::all()->where('month',23);foreach($electricity23 as $m) {session()->flash('electricity23',$m->electricity);};
        $electricity24 = Expenses::all()->where('month',24);foreach($electricity24 as $m) {session()->flash('electricity24',$m->electricity);};
        $electricity25 = Expenses::all()->where('month',25);foreach($electricity25 as $m) {session()->flash('electricity25',$m->electricity);};
        $electricity26 = Expenses::all()->where('month',26);foreach($electricity26 as $m) {session()->flash('electricity26',$m->electricity);};
        $electricity27 = Expenses::all()->where('month',27);foreach($electricity27 as $m) {session()->flash('electricity27',$m->electricity);};
        $electricity28 = Expenses::all()->where('month',28);foreach($electricity28 as $m) {session()->flash('electricity28',$m->electricity);};
        $electricity29 = Expenses::all()->where('month',29);foreach($electricity29 as $m) {session()->flash('electricity29',$m->electricity);};
        $electricity30 = Expenses::all()->where('month',30);foreach($electricity30 as $m) {session()->flash('electricity30',$m->electricity);};
        $electricity31= Expenses::all()->where('month',31);foreach($electricity31 as $m) {session()->flash('electricity31',$m->electricity);};
        $electricity32 = Expenses::all()->where('month',32);foreach($electricity32 as $m) {session()->flash('electricity32',$m->electricity);};
        $electricity33 = Expenses::all()->where('month',33);foreach($electricity33 as $m) {session()->flash('electricity33',$m->electricity);};
        $electricity34 = Expenses::all()->where('month',34);foreach($electricity34 as $m) {session()->flash('electricity34',$m->electricity);};
        $electricity35 = Expenses::all()->where('month',35);foreach($electricity35 as $m) {session()->flash('electricity35',$m->electricity);};
        $electricity36 = Expenses::all()->where('month',36);foreach($electricity36 as $m) {session()->flash('electricity36',$m->electricity);};

        $insurance = Expenses::all()->where('month',1);foreach($insurance as $m) {session()->flash('insurance1',$m->insurance);};
        $insurance2 = Expenses::all()->where('month',2);foreach($insurance2 as $m) {session()->flash('insurance2',$m->insurance);};
        $insurance3 = Expenses::all()->where('month',3);foreach($insurance3 as $m) {session()->flash('insurance3', $m->insurance);};
        $insurance4 = Expenses::all()->where('month',4);foreach($insurance4 as $m) {session()->flash('insurance4',$m->insurance);};
        $insurance5 = Expenses::all()->where('month',5);foreach($insurance5 as $m) {session()->flash('insurance5',$m->insurance);};
        $insurance6 = Expenses::all()->where('month',6);foreach($insurance6 as $m) {session()->flash('insurance6',$m->insurance);};
        $insurance7 = Expenses::all()->where('month',7);foreach($insurance7 as $m) {session()->flash('insurance7',$m->insurance);};
        $insurance8 = Expenses::all()->where('month',8);foreach($insurance8 as $m) {session()->flash('insurance8',$m->insurance);};
        $insurance9 = Expenses::all()->where('month',9);foreach($insurance9 as $m) {session()->flash('insurance9',$m->insurance);};
        $insurance10 = Expenses::all()->where('month',10);foreach($insurance10 as $m) {session()->flash('insurance10',$m->insurance);};
        $insurance11 = Expenses::all()->where('month',11);foreach($insurance11 as $m) {session()->flash('insurance11',$m->insurance);};
        $insurance12 = Expenses::all()->where('month',12);foreach($insurance12 as $m) {session()->flash('insurance12',$m->insurance);};
        $insurance13 = Expenses::all()->where('month',13);foreach($insurance13 as $m) {session()->flash('insurance13',$m->insurance);};
        $insurance14= Expenses::all()->where('month',14);foreach($insurance14 as $m) {session()->flash('insurance14',$m->insurance);};
        $insurance15 = Expenses::all()->where('month',15);foreach($insurance15 as $m) {session()->flash('insurance15',$m->insurance);};
        $insurance16 = Expenses::all()->where('month',16);foreach($insurance16 as $m) {session()->flash('insurance16',$m->insurance);};
        $insurance17 = Expenses::all()->where('month',17);foreach($insurance17 as $m) {session()->flash('insurance17',$m->insurance);};
        $insurance18 = Expenses::all()->where('month',18);foreach($insurance18 as $m) {session()->flash('insurance18',$m->insurance);};
        $insurance19 = Expenses::all()->where('month',19);foreach($insurance19 as $m) {session()->flash('insurance19',$m->insurance);};
        $insurance20 = Expenses::all()->where('month',20);foreach($insurance20 as $m) {session()->flash('insurance20',$m->insurance);};
        $insurance21 = Expenses::all()->where('month',21);foreach($insurance21 as $m) {session()->flash('insurance21',$m->insurance);};
        $insurance22 = Expenses::all()->where('month',22);foreach($insurance22 as $m) {session()->flash('insurance22',$m->insurance);};
        $insurance23 = Expenses::all()->where('month',23);foreach($insurance23 as $m) {session()->flash('insurance23',$m->insurance);};
        $insurance24 = Expenses::all()->where('month',24);foreach($insurance24 as $m) {session()->flash('insurance24',$m->insurance);};
        $insurance25 = Expenses::all()->where('month',25);foreach($insurance25 as $m) {session()->flash('insurance25',$m->insurance);};
        $insurance26 = Expenses::all()->where('month',26);foreach($insurance26 as $m) {session()->flash('insurance26',$m->insurance);};
        $insurance27 = Expenses::all()->where('month',27);foreach($insurance27 as $m) {session()->flash('insurance27',$m->insurance);};
        $insurance28 = Expenses::all()->where('month',28);foreach($insurance28 as $m) {session()->flash('insurance28',$m->insurance);};
        $insurance29 = Expenses::all()->where('month',29);foreach($insurance29 as $m) {session()->flash('insurance29',$m->insurance);};
        $insurance30 = Expenses::all()->where('month',30);foreach($insurance30 as $m) {session()->flash('insurance30',$m->insurance);};
        $insurance31= Expenses::all()->where('month',31);foreach($insurance31 as $m) {session()->flash('insurance31',$m->insurance);};
        $insurance32 = Expenses::all()->where('month',32);foreach($insurance32 as $m) {session()->flash('insurance32',$m->insurance);};
        $insurance33 = Expenses::all()->where('month',33);foreach($insurance33 as $m) {session()->flash('insurance33',$m->insurance);};
        $insurance34 = Expenses::all()->where('month',34);foreach($insurance34 as $m) {session()->flash('insurance34',$m->insurance);};
        $insurance35 = Expenses::all()->where('month',35);foreach($insurance35 as $m) {session()->flash('insurance35',$m->insurance);};
        $insurance36 = Expenses::all()->where('month',36);foreach($insurance36 as $m) {session()->flash('insurance36',$m->insurance);};


        $water = Expenses::all()->where('month',1);foreach($water as $m) {session()->flash('water1',$m->water);};
        $water2 = Expenses::all()->where('month',2);foreach($water2 as $m) {session()->flash('water2',$m->water);};
        $water3 = Expenses::all()->where('month',3);foreach($water3 as $m) {session()->flash('water3', $m->water);};
        $water4 = Expenses::all()->where('month',4);foreach($water4 as $m) {session()->flash('water4',$m->water);};
        $water5 = Expenses::all()->where('month',5);foreach($water5 as $m) {session()->flash('water5',$m->water);};
        $water6 = Expenses::all()->where('month',6);foreach($water6 as $m) {session()->flash('water6',$m->water);};
        $water7 = Expenses::all()->where('month',7);foreach($water7 as $m) {session()->flash('water7',$m->water);};
        $water8 = Expenses::all()->where('month',8);foreach($water8 as $m) {session()->flash('water8',$m->water);};
        $water9 = Expenses::all()->where('month',9);foreach($water9 as $m) {session()->flash('water9',$m->water);};
        $water10 = Expenses::all()->where('month',10);foreach($water10 as $m) {session()->flash('water10',$m->water);};
        $water11 = Expenses::all()->where('month',11);foreach($water11 as $m) {session()->flash('water11',$m->water);};
        $water12 = Expenses::all()->where('month',12);foreach($water12 as $m) {session()->flash('water12',$m->water);};
        $water13 = Expenses::all()->where('month',13);foreach($water13 as $m) {session()->flash('water13',$m->water);};
        $water14= Expenses::all()->where('month',14);foreach($water14 as $m) {session()->flash('water14',$m->water);};
        $water15 = Expenses::all()->where('month',15);foreach($water15 as $m) {session()->flash('water15',$m->water);};
        $water16 = Expenses::all()->where('month',16);foreach($water16 as $m) {session()->flash('water16',$m->water);};
        $water17 = Expenses::all()->where('month',17);foreach($water17 as $m) {session()->flash('water17',$m->water);};
        $water18 = Expenses::all()->where('month',18);foreach($water18 as $m) {session()->flash('water18',$m->water);};
        $water19 = Expenses::all()->where('month',19);foreach($water19 as $m) {session()->flash('water19',$m->water);};
        $water20 = Expenses::all()->where('month',20);foreach($water20 as $m) {session()->flash('water20',$m->water);};
        $water21 = Expenses::all()->where('month',21);foreach($water21 as $m) {session()->flash('water21',$m->water);};
        $water22 = Expenses::all()->where('month',22);foreach($water22 as $m) {session()->flash('water22',$m->water);};
        $water23 = Expenses::all()->where('month',23);foreach($water23 as $m) {session()->flash('water23',$m->water);};
        $water24 = Expenses::all()->where('month',24);foreach($water24 as $m) {session()->flash('water24',$m->water);};
        $water25 = Expenses::all()->where('month',25);foreach($water25 as $m) {session()->flash('water25',$m->water);};
        $water26 = Expenses::all()->where('month',26);foreach($water26 as $m) {session()->flash('water26',$m->water);};
        $water27 = Expenses::all()->where('month',27);foreach($water27 as $m) {session()->flash('water27',$m->water);};
        $water28 = Expenses::all()->where('month',28);foreach($water28 as $m) {session()->flash('water28',$m->water);};
        $water29 = Expenses::all()->where('month',29);foreach($water29 as $m) {session()->flash('water29',$m->water);};
        $water30 = Expenses::all()->where('month',30);foreach($water30 as $m) {session()->flash('water30',$m->water);};
        $water31= Expenses::all()->where('month',31);foreach($water31 as $m) {session()->flash('water31',$m->water);};
        $water32 = Expenses::all()->where('month',32);foreach($water32 as $m) {session()->flash('water32',$m->water);};
        $water33 = Expenses::all()->where('month',33);foreach($water33 as $m) {session()->flash('water33',$m->water);};
        $water34 = Expenses::all()->where('month',34);foreach($water34 as $m) {session()->flash('water34',$m->water);};
        $water35 = Expenses::all()->where('month',35);foreach($water35 as $m) {session()->flash('water35',$m->water);};
        $water36 = Expenses::all()->where('month',36);foreach($water36 as $m) {session()->flash('water36',$m->water);};

        $rates = Expenses::all()->where('month',1);foreach($rates as $m) {session()->flash('rates1',$m->rates);};
        $rates2 = Expenses::all()->where('month',2);foreach($rates2 as $m) {session()->flash('rates2',$m->rates);};
        $rates3 = Expenses::all()->where('month',3);foreach($rates3 as $m) {session()->flash('rates3', $m->rates);};
        $rates4 = Expenses::all()->where('month',4);foreach($rates4 as $m) {session()->flash('rates4',$m->rates);};
        $rates5 = Expenses::all()->where('month',5);foreach($rates5 as $m) {session()->flash('rates5',$m->rates);};
        $rates6 = Expenses::all()->where('month',6);foreach($rates6 as $m) {session()->flash('rates6',$m->rates);};
        $rates7 = Expenses::all()->where('month',7);foreach($rates7 as $m) {session()->flash('rates7',$m->rates);};
        $rates8 = Expenses::all()->where('month',8);foreach($rates8 as $m) {session()->flash('rates8',$m->rates);};
        $rates9 = Expenses::all()->where('month',9);foreach($rates9 as $m) {session()->flash('rates9',$m->rates);};
        $rates10 = Expenses::all()->where('month',10);foreach($rates10 as $m) {session()->flash('rates10',$m->rates);};
        $rates11 = Expenses::all()->where('month',11);foreach($rates11 as $m) {session()->flash('rates11',$m->rates);};
        $rates12 = Expenses::all()->where('month',12);foreach($rates12 as $m) {session()->flash('rates12',$m->rates);};
        $rates13 = Expenses::all()->where('month',13);foreach($rates13 as $m) {session()->flash('rates13',$m->rates);};
        $rates14= Expenses::all()->where('month',14);foreach($rates14 as $m) {session()->flash('rates14',$m->rates);};
        $rates15 = Expenses::all()->where('month',15);foreach($rates15 as $m) {session()->flash('rates15',$m->rates);};
        $rates16 = Expenses::all()->where('month',16);foreach($rates16 as $m) {session()->flash('rates16',$m->rates);};
        $rates17 = Expenses::all()->where('month',17);foreach($rates17 as $m) {session()->flash('rates17',$m->rates);};
        $rates18 = Expenses::all()->where('month',18);foreach($rates18 as $m) {session()->flash('rates18',$m->rates);};
        $rates19 = Expenses::all()->where('month',19);foreach($rates19 as $m) {session()->flash('rates19',$m->rates);};
        $rates20 = Expenses::all()->where('month',20);foreach($rates20 as $m) {session()->flash('rates20',$m->rates);};
        $rates21 = Expenses::all()->where('month',21);foreach($rates21 as $m) {session()->flash('rates21',$m->rates);};
        $rates22 = Expenses::all()->where('month',22);foreach($rates22 as $m) {session()->flash('rates22',$m->rates);};
        $rates23 = Expenses::all()->where('month',23);foreach($rates23 as $m) {session()->flash('rates23',$m->rates);};
        $rates24 = Expenses::all()->where('month',24);foreach($rates24 as $m) {session()->flash('rates24',$m->rates);};
        $rates25 = Expenses::all()->where('month',25);foreach($rates25 as $m) {session()->flash('rates25',$m->rates);};
        $rates26 = Expenses::all()->where('month',26);foreach($rates26 as $m) {session()->flash('rates26',$m->rates);};
        $rates27 = Expenses::all()->where('month',27);foreach($rates27 as $m) {session()->flash('rates27',$m->rates);};
        $rates28 = Expenses::all()->where('month',28);foreach($rates28 as $m) {session()->flash('rates28',$m->rates);};
        $rates29 = Expenses::all()->where('month',29);foreach($rates29 as $m) {session()->flash('rates29',$m->rates);};
        $rates30 = Expenses::all()->where('month',30);foreach($rates30 as $m) {session()->flash('rates30',$m->rates);};
        $rates31= Expenses::all()->where('month',31);foreach($rates31 as $m) {session()->flash('rates31',$m->rates);};
        $rates32 = Expenses::all()->where('month',32);foreach($rates32 as $m) {session()->flash('rates32',$m->rates);};
        $rates33 = Expenses::all()->where('month',33);foreach($rates33 as $m) {session()->flash('rates33',$m->rates);};
        $rates34 = Expenses::all()->where('month',34);foreach($rates34 as $m) {session()->flash('rates34',$m->rates);};
        $rates35 = Expenses::all()->where('month',35);foreach($rates35 as $m) {session()->flash('rates35',$m->rates);};
        $rates36 = Expenses::all()->where('month',36);foreach($rates36 as $m) {session()->flash('rates36',$m->rates);};

        $security = Expenses::all()->where('month',1);foreach($security as $m) {session()->flash('security1',$m->security);};
        $security2 = Expenses::all()->where('month',2);foreach($security2 as $m) {session()->flash('security2',$m->security);};
        $security3 = Expenses::all()->where('month',3);foreach($security3 as $m) {session()->flash('security3', $m->security);};
        $security4 = Expenses::all()->where('month',4);foreach($security4 as $m) {session()->flash('security4',$m->security);};
        $security5 = Expenses::all()->where('month',5);foreach($security5 as $m) {session()->flash('security5',$m->security);};
        $security6 = Expenses::all()->where('month',6);foreach($security6 as $m) {session()->flash('security6',$m->security);};
        $security7 = Expenses::all()->where('month',7);foreach($security7 as $m) {session()->flash('security7',$m->security);};
        $security8 = Expenses::all()->where('month',8);foreach($security8 as $m) {session()->flash('security8',$m->security);};
        $security9 = Expenses::all()->where('month',9);foreach($security9 as $m) {session()->flash('security9',$m->security);};
        $security10 = Expenses::all()->where('month',10);foreach($security10 as $m) {session()->flash('security10',$m->security);};
        $security11 = Expenses::all()->where('month',11);foreach($security11 as $m) {session()->flash('security11',$m->security);};
        $security12 = Expenses::all()->where('month',12);foreach($security12 as $m) {session()->flash('security12',$m->security);};
        $security13 = Expenses::all()->where('month',13);foreach($security13 as $m) {session()->flash('security13',$m->security);};
        $security14= Expenses::all()->where('month',14);foreach($security14 as $m) {session()->flash('security14',$m->security);};
        $security15 = Expenses::all()->where('month',15);foreach($security15 as $m) {session()->flash('security15',$m->security);};
        $security16 = Expenses::all()->where('month',16);foreach($security16 as $m) {session()->flash('security16',$m->security);};
        $security17 = Expenses::all()->where('month',17);foreach($security17 as $m) {session()->flash('security17',$m->security);};
        $security18 = Expenses::all()->where('month',18);foreach($security18 as $m) {session()->flash('security18',$m->security);};
        $security19 = Expenses::all()->where('month',19);foreach($security19 as $m) {session()->flash('security19',$m->security);};
        $security20 = Expenses::all()->where('month',20);foreach($security20 as $m) {session()->flash('security20',$m->security);};
        $security21 = Expenses::all()->where('month',21);foreach($security21 as $m) {session()->flash('security21',$m->security);};
        $security22 = Expenses::all()->where('month',22);foreach($security22 as $m) {session()->flash('security22',$m->security);};
        $security23 = Expenses::all()->where('month',23);foreach($security23 as $m) {session()->flash('security23',$m->security);};
        $security24 = Expenses::all()->where('month',24);foreach($security24 as $m) {session()->flash('security24',$m->security);};
        $security25 = Expenses::all()->where('month',25);foreach($security25 as $m) {session()->flash('security25',$m->security);};
        $security26 = Expenses::all()->where('month',26);foreach($security26 as $m) {session()->flash('security26',$m->security);};
        $security27 = Expenses::all()->where('month',27);foreach($security27 as $m) {session()->flash('security27',$m->security);};
        $security28 = Expenses::all()->where('month',28);foreach($security28 as $m) {session()->flash('security28',$m->security);};
        $security29 = Expenses::all()->where('month',29);foreach($security29 as $m) {session()->flash('security29',$m->security);};
        $security30 = Expenses::all()->where('month',30);foreach($security30 as $m) {session()->flash('security30',$m->security);};
        $security31= Expenses::all()->where('month',31);foreach($security31 as $m) {session()->flash('security31',$m->security);};
        $security32 = Expenses::all()->where('month',32);foreach($security32 as $m) {session()->flash('security32',$m->security);};
        $security33 = Expenses::all()->where('month',33);foreach($security33 as $m) {session()->flash('security33',$m->security);};
        $security34 = Expenses::all()->where('month',34);foreach($security34 as $m) {session()->flash('security34',$m->security);};
        $security35 = Expenses::all()->where('month',35);foreach($security35 as $m) {session()->flash('security35',$m->security);};
        $security36 = Expenses::all()->where('month',36);foreach($security36 as $m) {session()->flash('security36',$m->security);};

        $canteen = Expenses::all()->where('month',1);foreach($canteen as $m) {session()->flash('canteen1',$m->canteen);};
        $canteen2 = Expenses::all()->where('month',2);foreach($canteen2 as $m) {session()->flash('canteen2',$m->canteen);};
        $canteen3 = Expenses::all()->where('month',3);foreach($canteen3 as $m) {session()->flash('canteen3', $m->canteen);};
        $canteen4 = Expenses::all()->where('month',4);foreach($canteen4 as $m) {session()->flash('canteen4',$m->canteen);};
        $canteen5 = Expenses::all()->where('month',5);foreach($canteen5 as $m) {session()->flash('canteen5',$m->canteen);};
        $canteen6 = Expenses::all()->where('month',6);foreach($canteen6 as $m) {session()->flash('canteen6',$m->canteen);};
        $canteen7 = Expenses::all()->where('month',7);foreach($canteen7 as $m) {session()->flash('canteen7',$m->canteen);};
        $canteen8 = Expenses::all()->where('month',8);foreach($canteen8 as $m) {session()->flash('canteen8',$m->canteen);};
        $canteen9 = Expenses::all()->where('month',9);foreach($canteen9 as $m) {session()->flash('canteen9',$m->canteen);};
        $canteen10 = Expenses::all()->where('month',10);foreach($canteen10 as $m) {session()->flash('canteen10',$m->canteen);};
        $canteen11 = Expenses::all()->where('month',11);foreach($canteen11 as $m) {session()->flash('canteen11',$m->canteen);};
        $canteen12 = Expenses::all()->where('month',12);foreach($canteen12 as $m) {session()->flash('canteen12',$m->canteen);};
        $canteen13 = Expenses::all()->where('month',13);foreach($canteen13 as $m) {session()->flash('canteen13',$m->canteen);};
        $canteen14= Expenses::all()->where('month',14);foreach($canteen14 as $m) {session()->flash('canteen14',$m->canteen);};
        $canteen15 = Expenses::all()->where('month',15);foreach($canteen15 as $m) {session()->flash('canteen15',$m->canteen);};
        $canteen16 = Expenses::all()->where('month',16);foreach($canteen16 as $m) {session()->flash('canteen16',$m->canteen);};
        $canteen17 = Expenses::all()->where('month',17);foreach($canteen17 as $m) {session()->flash('canteen17',$m->canteen);};
        $canteen18 = Expenses::all()->where('month',18);foreach($canteen18 as $m) {session()->flash('canteen18',$m->canteen);};
        $canteen19 = Expenses::all()->where('month',19);foreach($canteen19 as $m) {session()->flash('canteen19',$m->canteen);};
        $canteen20 = Expenses::all()->where('month',20);foreach($canteen20 as $m) {session()->flash('canteen20',$m->canteen);};
        $canteen21 = Expenses::all()->where('month',21);foreach($canteen21 as $m) {session()->flash('canteen21',$m->canteen);};
        $canteen22 = Expenses::all()->where('month',22);foreach($canteen22 as $m) {session()->flash('canteen22',$m->canteen);};
        $canteen23 = Expenses::all()->where('month',23);foreach($canteen23 as $m) {session()->flash('canteen23',$m->canteen);};
        $canteen24 = Expenses::all()->where('month',24);foreach($canteen24 as $m) {session()->flash('canteen24',$m->canteen);};
        $canteen25 = Expenses::all()->where('month',25);foreach($canteen25 as $m) {session()->flash('canteen25',$m->canteen);};
        $canteen26 = Expenses::all()->where('month',26);foreach($canteen26 as $m) {session()->flash('canteen26',$m->canteen);};
        $canteen27 = Expenses::all()->where('month',27);foreach($canteen27 as $m) {session()->flash('canteen27',$m->canteen);};
        $canteen28 = Expenses::all()->where('month',28);foreach($canteen28 as $m) {session()->flash('canteen28',$m->canteen);};
        $canteen29 = Expenses::all()->where('month',29);foreach($canteen29 as $m) {session()->flash('canteen29',$m->canteen);};
        $canteen30 = Expenses::all()->where('month',30);foreach($canteen30 as $m) {session()->flash('canteen30',$m->canteen);};
        $canteen31= Expenses::all()->where('month',31);foreach($canteen31 as $m) {session()->flash('canteen31',$m->canteen);};
        $canteen32 = Expenses::all()->where('month',32);foreach($canteen32 as $m) {session()->flash('canteen32',$m->canteen);};
        $canteen33 = Expenses::all()->where('month',33);foreach($canteen33 as $m) {session()->flash('canteen33',$m->canteen);};
        $canteen34 = Expenses::all()->where('month',34);foreach($canteen34 as $m) {session()->flash('canteen34',$m->canteen);};
        $canteen35 = Expenses::all()->where('month',35);foreach($canteen35 as $m) {session()->flash('canteen35',$m->canteen);};
        $canteen36 = Expenses::all()->where('month',36);foreach($canteen36 as $m) {session()->flash('canteen36',$m->canteen);};

        $supplies = Expenses::all()->where('month',1);foreach($supplies as $m) {session()->flash('supplies1',$m->supplies);};
        $supplies2 = Expenses::all()->where('month',2);foreach($supplies2 as $m) {session()->flash('supplies2',$m->supplies);};
        $supplies3 = Expenses::all()->where('month',3);foreach($supplies3 as $m) {session()->flash('supplies3', $m->supplies);};
        $supplies4 = Expenses::all()->where('month',4);foreach($supplies4 as $m) {session()->flash('supplies4',$m->supplies);};
        $supplies5 = Expenses::all()->where('month',5);foreach($supplies5 as $m) {session()->flash('supplies5',$m->supplies);};
        $supplies6 = Expenses::all()->where('month',6);foreach($supplies6 as $m) {session()->flash('supplies6',$m->supplies);};
        $supplies7 = Expenses::all()->where('month',7);foreach($supplies7 as $m) {session()->flash('supplies7',$m->supplies);};
        $supplies8 = Expenses::all()->where('month',8);foreach($supplies8 as $m) {session()->flash('supplies8',$m->supplies);};
        $supplies9 = Expenses::all()->where('month',9);foreach($supplies9 as $m) {session()->flash('supplies9',$m->supplies);};
        $supplies10 = Expenses::all()->where('month',10);foreach($supplies10 as $m) {session()->flash('supplies10',$m->supplies);};
        $supplies11 = Expenses::all()->where('month',11);foreach($supplies11 as $m) {session()->flash('supplies11',$m->supplies);};
        $supplies12 = Expenses::all()->where('month',12);foreach($supplies12 as $m) {session()->flash('supplies12',$m->supplies);};
        $supplies13 = Expenses::all()->where('month',13);foreach($supplies13 as $m) {session()->flash('supplies13',$m->supplies);};
        $supplies14= Expenses::all()->where('month',14);foreach($supplies14 as $m) {session()->flash('supplies14',$m->supplies);};
        $supplies15 = Expenses::all()->where('month',15);foreach($supplies15 as $m) {session()->flash('supplies15',$m->supplies);};
        $supplies16 = Expenses::all()->where('month',16);foreach($supplies16 as $m) {session()->flash('supplies16',$m->supplies);};
        $supplies17 = Expenses::all()->where('month',17);foreach($supplies17 as $m) {session()->flash('supplies17',$m->supplies);};
        $supplies18 = Expenses::all()->where('month',18);foreach($supplies18 as $m) {session()->flash('supplies18',$m->supplies);};
        $supplies19 = Expenses::all()->where('month',19);foreach($supplies19 as $m) {session()->flash('supplies19',$m->supplies);};
        $supplies20 = Expenses::all()->where('month',20);foreach($supplies20 as $m) {session()->flash('supplies20',$m->supplies);};
        $supplies21 = Expenses::all()->where('month',21);foreach($supplies21 as $m) {session()->flash('supplies21',$m->supplies);};
        $supplies22 = Expenses::all()->where('month',22);foreach($supplies22 as $m) {session()->flash('supplies22',$m->supplies);};
        $supplies23 = Expenses::all()->where('month',23);foreach($supplies23 as $m) {session()->flash('supplies23',$m->supplies);};
        $supplies24 = Expenses::all()->where('month',24);foreach($supplies24 as $m) {session()->flash('supplies24',$m->supplies);};
        $supplies25 = Expenses::all()->where('month',25);foreach($supplies25 as $m) {session()->flash('supplies25',$m->supplies);};
        $supplies26 = Expenses::all()->where('month',26);foreach($supplies26 as $m) {session()->flash('supplies26',$m->supplies);};
        $supplies27 = Expenses::all()->where('month',27);foreach($supplies27 as $m) {session()->flash('supplies27',$m->supplies);};
        $supplies28 = Expenses::all()->where('month',28);foreach($supplies28 as $m) {session()->flash('supplies28',$m->supplies);};
        $supplies29 = Expenses::all()->where('month',29);foreach($supplies29 as $m) {session()->flash('supplies29',$m->supplies);};
        $supplies30 = Expenses::all()->where('month',30);foreach($supplies30 as $m) {session()->flash('supplies30',$m->supplies);};
        $supplies31= Expenses::all()->where('month',31);foreach($supplies31 as $m) {session()->flash('supplies31',$m->supplies);};
        $supplies32 = Expenses::all()->where('month',32);foreach($supplies32 as $m) {session()->flash('supplies32',$m->supplies);};
        $supplies33 = Expenses::all()->where('month',33);foreach($supplies33 as $m) {session()->flash('supplies33',$m->supplies);};
        $supplies34 = Expenses::all()->where('month',34);foreach($supplies34 as $m) {session()->flash('supplies34',$m->supplies);};
        $supplies35 = Expenses::all()->where('month',35);foreach($supplies35 as $m) {session()->flash('supplies35',$m->supplies);};
        $supplies36 = Expenses::all()->where('month',36);foreach($supplies36 as $m) {session()->flash('supplies36',$m->supplies);};

        $services = Expenses::all()->where('month',1);foreach($services as $m) {session()->flash('services1',$m->services);};
        $services2 = Expenses::all()->where('month',2);foreach($services2 as $m) {session()->flash('services2',$m->services);};
        $services3 = Expenses::all()->where('month',3);foreach($services3 as $m) {session()->flash('services3', $m->services);};
        $services4 = Expenses::all()->where('month',4);foreach($services4 as $m) {session()->flash('services4',$m->services);};
        $services5 = Expenses::all()->where('month',5);foreach($services5 as $m) {session()->flash('services5',$m->services);};
        $services6 = Expenses::all()->where('month',6);foreach($services6 as $m) {session()->flash('services6',$m->services);};
        $services7 = Expenses::all()->where('month',7);foreach($services7 as $m) {session()->flash('services7',$m->services);};
        $services8 = Expenses::all()->where('month',8);foreach($services8 as $m) {session()->flash('services8',$m->services);};
        $services9 = Expenses::all()->where('month',9);foreach($services9 as $m) {session()->flash('services9',$m->services);};
        $services10 = Expenses::all()->where('month',10);foreach($services10 as $m) {session()->flash('services10',$m->services);};
        $services11 = Expenses::all()->where('month',11);foreach($services11 as $m) {session()->flash('services11',$m->services);};
        $services12 = Expenses::all()->where('month',12);foreach($services12 as $m) {session()->flash('services12',$m->services);};
        $services13 = Expenses::all()->where('month',13);foreach($services13 as $m) {session()->flash('services13',$m->services);};
        $services14= Expenses::all()->where('month',14);foreach($services14 as $m) {session()->flash('services14',$m->services);};
        $services15 = Expenses::all()->where('month',15);foreach($services15 as $m) {session()->flash('services15',$m->services);};
        $services16 = Expenses::all()->where('month',16);foreach($services16 as $m) {session()->flash('services16',$m->services);};
        $services17 = Expenses::all()->where('month',17);foreach($services17 as $m) {session()->flash('services17',$m->services);};
        $services18 = Expenses::all()->where('month',18);foreach($services18 as $m) {session()->flash('services18',$m->services);};
        $services19 = Expenses::all()->where('month',19);foreach($services19 as $m) {session()->flash('services19',$m->services);};
        $services20 = Expenses::all()->where('month',20);foreach($services20 as $m) {session()->flash('services20',$m->services);};
        $services21 = Expenses::all()->where('month',21);foreach($services21 as $m) {session()->flash('services21',$m->services);};
        $services22 = Expenses::all()->where('month',22);foreach($services22 as $m) {session()->flash('services22',$m->services);};
        $services23 = Expenses::all()->where('month',23);foreach($services23 as $m) {session()->flash('services23',$m->services);};
        $services24 = Expenses::all()->where('month',24);foreach($services24 as $m) {session()->flash('services24',$m->services);};
        $services25 = Expenses::all()->where('month',25);foreach($services25 as $m) {session()->flash('services25',$m->services);};
        $services26 = Expenses::all()->where('month',26);foreach($services26 as $m) {session()->flash('services26',$m->services);};
        $services27 = Expenses::all()->where('month',27);foreach($services27 as $m) {session()->flash('services27',$m->services);};
        $services28 = Expenses::all()->where('month',28);foreach($services28 as $m) {session()->flash('services28',$m->services);};
        $services29 = Expenses::all()->where('month',29);foreach($services29 as $m) {session()->flash('services29',$m->services);};
        $services30 = Expenses::all()->where('month',30);foreach($services30 as $m) {session()->flash('services30',$m->services);};
        $services31= Expenses::all()->where('month',31);foreach($services31 as $m) {session()->flash('services31',$m->services);};
        $services32 = Expenses::all()->where('month',32);foreach($services32 as $m) {session()->flash('services32',$m->services);};
        $services33 = Expenses::all()->where('month',33);foreach($services33 as $m) {session()->flash('services33',$m->services);};
        $services34 = Expenses::all()->where('month',34);foreach($services34 as $m) {session()->flash('services34',$m->services);};
        $services35 = Expenses::all()->where('month',35);foreach($services35 as $m) {session()->flash('services35',$m->services);};
        $services36 = Expenses::all()->where('month',36);foreach($services36 as $m) {session()->flash('services36',$m->services);};

        $vehicle = Expenses::all()->where('month',1);foreach($vehicle as $m) {session()->flash('vehicle1',$m->vehicle);};
        $vehicle2 = Expenses::all()->where('month',2);foreach($vehicle2 as $m) {session()->flash('vehicle2',$m->vehicle);};
        $vehicle3 = Expenses::all()->where('month',3);foreach($vehicle3 as $m) {session()->flash('vehicle3', $m->vehicle);};
        $vehicle4 = Expenses::all()->where('month',4);foreach($vehicle4 as $m) {session()->flash('vehicle4',$m->vehicle);};
        $vehicle5 = Expenses::all()->where('month',5);foreach($vehicle5 as $m) {session()->flash('vehicle5',$m->vehicle);};
        $vehicle6 = Expenses::all()->where('month',6);foreach($vehicle6 as $m) {session()->flash('vehicle6',$m->vehicle);};
        $vehicle7 = Expenses::all()->where('month',7);foreach($vehicle7 as $m) {session()->flash('vehicle7',$m->vehicle);};
        $vehicle8 = Expenses::all()->where('month',8);foreach($vehicle8 as $m) {session()->flash('vehicle8',$m->vehicle);};
        $vehicle9 = Expenses::all()->where('month',9);foreach($vehicle9 as $m) {session()->flash('vehicle9',$m->vehicle);};
        $vehicle10 = Expenses::all()->where('month',10);foreach($vehicle10 as $m) {session()->flash('vehicle10',$m->vehicle);};
        $vehicle11 = Expenses::all()->where('month',11);foreach($vehicle11 as $m) {session()->flash('vehicle11',$m->vehicle);};
        $vehicle12 = Expenses::all()->where('month',12);foreach($vehicle12 as $m) {session()->flash('vehicle12',$m->vehicle);};
        $vehicle13 = Expenses::all()->where('month',13);foreach($vehicle13 as $m) {session()->flash('vehicle13',$m->vehicle);};
        $vehicle14= Expenses::all()->where('month',14);foreach($vehicle14 as $m) {session()->flash('vehicle14',$m->vehicle);};
        $vehicle15 = Expenses::all()->where('month',15);foreach($vehicle15 as $m) {session()->flash('vehicle15',$m->vehicle);};
        $vehicle16 = Expenses::all()->where('month',16);foreach($vehicle16 as $m) {session()->flash('vehicle16',$m->vehicle);};
        $vehicle17 = Expenses::all()->where('month',17);foreach($vehicle17 as $m) {session()->flash('vehicle17',$m->vehicle);};
        $vehicle18 = Expenses::all()->where('month',18);foreach($vehicle18 as $m) {session()->flash('vehicle18',$m->vehicle);};
        $vehicle19 = Expenses::all()->where('month',19);foreach($vehicle19 as $m) {session()->flash('vehicle19',$m->vehicle);};
        $vehicle20 = Expenses::all()->where('month',20);foreach($vehicle20 as $m) {session()->flash('vehicle20',$m->vehicle);};
        $vehicle21 = Expenses::all()->where('month',21);foreach($vehicle21 as $m) {session()->flash('vehicle21',$m->vehicle);};
        $vehicle22 = Expenses::all()->where('month',22);foreach($vehicle22 as $m) {session()->flash('vehicle22',$m->vehicle);};
        $vehicle23 = Expenses::all()->where('month',23);foreach($vehicle23 as $m) {session()->flash('vehicle23',$m->vehicle);};
        $vehicle24 = Expenses::all()->where('month',24);foreach($vehicle24 as $m) {session()->flash('vehicle24',$m->vehicle);};
        $vehicle25 = Expenses::all()->where('month',25);foreach($vehicle25 as $m) {session()->flash('vehicle25',$m->vehicle);};
        $vehicle26 = Expenses::all()->where('month',26);foreach($vehicle26 as $m) {session()->flash('vehicle26',$m->vehicle);};
        $vehicle27 = Expenses::all()->where('month',27);foreach($vehicle27 as $m) {session()->flash('vehicle27',$m->vehicle);};
        $vehicle28 = Expenses::all()->where('month',28);foreach($vehicle28 as $m) {session()->flash('vehicle28',$m->vehicle);};
        $vehicle29 = Expenses::all()->where('month',29);foreach($vehicle29 as $m) {session()->flash('vehicle29',$m->vehicle);};
        $vehicle30 = Expenses::all()->where('month',30);foreach($vehicle30 as $m) {session()->flash('vehicle30',$m->vehicle);};
        $vehicle31= Expenses::all()->where('month',31);foreach($vehicle31 as $m) {session()->flash('vehicle31',$m->vehicle);};
        $vehicle32 = Expenses::all()->where('month',32);foreach($vehicle32 as $m) {session()->flash('vehicle32',$m->vehicle);};
        $vehicle33 = Expenses::all()->where('month',33);foreach($vehicle33 as $m) {session()->flash('vehicle33',$m->vehicle);};
        $vehicle34 = Expenses::all()->where('month',34);foreach($vehicle34 as $m) {session()->flash('vehicle34',$m->vehicle);};
        $vehicle35 = Expenses::all()->where('month',35);foreach($vehicle35 as $m) {session()->flash('vehicle35',$m->vehicle);};
        $vehicle36 = Expenses::all()->where('month',36);foreach($vehicle36 as $m) {session()->flash('vehicle36',$m->vehicle);};

        $debt_one = Expenses::all()->where('month',1);foreach($debt_one as $m) {session()->flash('debt_one1',$m->debt_one);};
        $debt_one2 = Expenses::all()->where('month',2);foreach($debt_one2 as $m) {session()->flash('debt_one2',$m->debt_one);};
        $debt_one3 = Expenses::all()->where('month',3);foreach($debt_one3 as $m) {session()->flash('debt_one3', $m->debt_one);};
        $debt_one4 = Expenses::all()->where('month',4);foreach($debt_one4 as $m) {session()->flash('debt_one4',$m->debt_one);};
        $debt_one5 = Expenses::all()->where('month',5);foreach($debt_one5 as $m) {session()->flash('debt_one5',$m->debt_one);};
        $debt_one6 = Expenses::all()->where('month',6);foreach($debt_one6 as $m) {session()->flash('debt_one6',$m->debt_one);};
        $debt_one7 = Expenses::all()->where('month',7);foreach($debt_one7 as $m) {session()->flash('debt_one7',$m->debt_one);};
        $debt_one8 = Expenses::all()->where('month',8);foreach($debt_one8 as $m) {session()->flash('debt_one8',$m->debt_one);};
        $debt_one9 = Expenses::all()->where('month',9);foreach($debt_one9 as $m) {session()->flash('debt_one9',$m->debt_one);};
        $debt_one10 = Expenses::all()->where('month',10);foreach($debt_one10 as $m) {session()->flash('debt_one10',$m->debt_one);};
        $debt_one11 = Expenses::all()->where('month',11);foreach($debt_one11 as $m) {session()->flash('debt_one11',$m->debt_one);};
        $debt_one12 = Expenses::all()->where('month',12);foreach($debt_one12 as $m) {session()->flash('debt_one12',$m->debt_one);};
        $debt_one13 = Expenses::all()->where('month',13);foreach($debt_one13 as $m) {session()->flash('debt_one13',$m->debt_one);};
        $debt_one14= Expenses::all()->where('month',14);foreach($debt_one14 as $m) {session()->flash('debt_one14',$m->debt_one);};
        $debt_one15 = Expenses::all()->where('month',15);foreach($debt_one15 as $m) {session()->flash('debt_one15',$m->debt_one);};
        $debt_one16 = Expenses::all()->where('month',16);foreach($debt_one16 as $m) {session()->flash('debt_one16',$m->debt_one);};
        $debt_one17 = Expenses::all()->where('month',17);foreach($debt_one17 as $m) {session()->flash('debt_one17',$m->debt_one);};
        $debt_one18 = Expenses::all()->where('month',18);foreach($debt_one18 as $m) {session()->flash('debt_one18',$m->debt_one);};
        $debt_one19 = Expenses::all()->where('month',19);foreach($debt_one19 as $m) {session()->flash('debt_one19',$m->debt_one);};
        $debt_one20 = Expenses::all()->where('month',20);foreach($debt_one20 as $m) {session()->flash('debt_one20',$m->debt_one);};
        $debt_one21 = Expenses::all()->where('month',21);foreach($debt_one21 as $m) {session()->flash('debt_one21',$m->debt_one);};
        $debt_one22 = Expenses::all()->where('month',22);foreach($debt_one22 as $m) {session()->flash('debt_one22',$m->debt_one);};
        $debt_one23 = Expenses::all()->where('month',23);foreach($debt_one23 as $m) {session()->flash('debt_one23',$m->debt_one);};
        $debt_one24 = Expenses::all()->where('month',24);foreach($debt_one24 as $m) {session()->flash('debt_one24',$m->debt_one);};
        $debt_one25 = Expenses::all()->where('month',25);foreach($debt_one25 as $m) {session()->flash('debt_one25',$m->debt_one);};
        $debt_one26 = Expenses::all()->where('month',26);foreach($debt_one26 as $m) {session()->flash('debt_one26',$m->debt_one);};
        $debt_one27 = Expenses::all()->where('month',27);foreach($debt_one27 as $m) {session()->flash('debt_one27',$m->debt_one);};
        $debt_one28 = Expenses::all()->where('month',28);foreach($debt_one28 as $m) {session()->flash('debt_one28',$m->debt_one);};
        $debt_one29 = Expenses::all()->where('month',29);foreach($debt_one29 as $m) {session()->flash('debt_one29',$m->debt_one);};
        $debt_one30 = Expenses::all()->where('month',30);foreach($debt_one30 as $m) {session()->flash('debt_one30',$m->debt_one);};
        $debt_one31= Expenses::all()->where('month',31);foreach($debt_one31 as $m) {session()->flash('debt_one31',$m->debt_one);};
        $debt_one32 = Expenses::all()->where('month',32);foreach($debt_one32 as $m) {session()->flash('debt_one32',$m->debt_one);};
        $debt_one33 = Expenses::all()->where('month',33);foreach($debt_one33 as $m) {session()->flash('debt_one33',$m->debt_one);};
        $debt_one34 = Expenses::all()->where('month',34);foreach($debt_one34 as $m) {session()->flash('debt_one34',$m->debt_one);};
        $debt_one35 = Expenses::all()->where('month',35);foreach($debt_one35 as $m) {session()->flash('debt_one35',$m->debt_one);};
        $debt_one36 = Expenses::all()->where('month',36);foreach($debt_one36 as $m) {session()->flash('debt_one36',$m->debt_one);};


        $debt_two = Expenses::all()->where('month',1);foreach($debt_two as $m) {session()->flash('debt_two1',$m->debt_two);};
        $debt_two2 = Expenses::all()->where('month',2);foreach($debt_two2 as $m) {session()->flash('debt_two2',$m->debt_two);};
        $debt_two3 = Expenses::all()->where('month',3);foreach($debt_two3 as $m) {session()->flash('debt_two3', $m->debt_two);};
        $debt_two4 = Expenses::all()->where('month',4);foreach($debt_two4 as $m) {session()->flash('debt_two4',$m->debt_two);};
        $debt_two5 = Expenses::all()->where('month',5);foreach($debt_two5 as $m) {session()->flash('debt_two5',$m->debt_two);};
        $debt_two6 = Expenses::all()->where('month',6);foreach($debt_two6 as $m) {session()->flash('debt_two6',$m->debt_two);};
        $debt_two7 = Expenses::all()->where('month',7);foreach($debt_two7 as $m) {session()->flash('debt_two7',$m->debt_two);};
        $debt_two8 = Expenses::all()->where('month',8);foreach($debt_two8 as $m) {session()->flash('debt_two8',$m->debt_two);};
        $debt_two9 = Expenses::all()->where('month',9);foreach($debt_two9 as $m) {session()->flash('debt_two9',$m->debt_two);};
        $debt_two10 = Expenses::all()->where('month',10);foreach($debt_two10 as $m) {session()->flash('debt_two10',$m->debt_two);};
        $debt_two11 = Expenses::all()->where('month',11);foreach($debt_two11 as $m) {session()->flash('debt_two11',$m->debt_two);};
        $debt_two12 = Expenses::all()->where('month',12);foreach($debt_two12 as $m) {session()->flash('debt_two12',$m->debt_two);};
        $debt_two13 = Expenses::all()->where('month',13);foreach($debt_two13 as $m) {session()->flash('debt_two13',$m->debt_two);};
        $debt_two14= Expenses::all()->where('month',14);foreach($debt_two14 as $m) {session()->flash('debt_two14',$m->debt_two);};
        $debt_two15 = Expenses::all()->where('month',15);foreach($debt_two15 as $m) {session()->flash('debt_two15',$m->debt_two);};
        $debt_two16 = Expenses::all()->where('month',16);foreach($debt_two16 as $m) {session()->flash('debt_two16',$m->debt_two);};
        $debt_two17 = Expenses::all()->where('month',17);foreach($debt_two17 as $m) {session()->flash('debt_two17',$m->debt_two);};
        $debt_two18 = Expenses::all()->where('month',18);foreach($debt_two18 as $m) {session()->flash('debt_two18',$m->debt_two);};
        $debt_two19 = Expenses::all()->where('month',19);foreach($debt_two19 as $m) {session()->flash('debt_two19',$m->debt_two);};
        $debt_two20 = Expenses::all()->where('month',20);foreach($debt_two20 as $m) {session()->flash('debt_two20',$m->debt_two);};
        $debt_two21 = Expenses::all()->where('month',21);foreach($debt_two21 as $m) {session()->flash('debt_two21',$m->debt_two);};
        $debt_two22 = Expenses::all()->where('month',22);foreach($debt_two22 as $m) {session()->flash('debt_two22',$m->debt_two);};
        $debt_two23 = Expenses::all()->where('month',23);foreach($debt_two23 as $m) {session()->flash('debt_two23',$m->debt_two);};
        $debt_two24 = Expenses::all()->where('month',24);foreach($debt_two24 as $m) {session()->flash('debt_two24',$m->debt_two);};
        $debt_two25 = Expenses::all()->where('month',25);foreach($debt_two25 as $m) {session()->flash('debt_two25',$m->debt_two);};
        $debt_two26 = Expenses::all()->where('month',26);foreach($debt_two26 as $m) {session()->flash('debt_two26',$m->debt_two);};
        $debt_two27 = Expenses::all()->where('month',27);foreach($debt_two27 as $m) {session()->flash('debt_two27',$m->debt_two);};
        $debt_two28 = Expenses::all()->where('month',28);foreach($debt_two28 as $m) {session()->flash('debt_two28',$m->debt_two);};
        $debt_two29 = Expenses::all()->where('month',29);foreach($debt_two29 as $m) {session()->flash('debt_two29',$m->debt_two);};
        $debt_two30 = Expenses::all()->where('month',30);foreach($debt_two30 as $m) {session()->flash('debt_two30',$m->debt_two);};
        $debt_two31= Expenses::all()->where('month',31);foreach($debt_two31 as $m) {session()->flash('debt_two31',$m->debt_two);};
        $debt_two32 = Expenses::all()->where('month',32);foreach($debt_two32 as $m) {session()->flash('debt_two32',$m->debt_two);};
        $debt_two33 = Expenses::all()->where('month',33);foreach($debt_two33 as $m) {session()->flash('debt_two33',$m->debt_two);};
        $debt_two34 = Expenses::all()->where('month',34);foreach($debt_two34 as $m) {session()->flash('debt_two34',$m->debt_two);};
        $debt_two35 = Expenses::all()->where('month',35);foreach($debt_two35 as $m) {session()->flash('debt_two35',$m->debt_two);};
        $debt_two36 = Expenses::all()->where('month',36);foreach($debt_two36 as $m) {session()->flash('debt_two36',$m->debt_two);};

        $debt_three = Expenses::all()->where('month',1);foreach($debt_three as $m) {session()->flash('debt_three1',$m->debt_three);};
        $debt_three2 = Expenses::all()->where('month',2);foreach($debt_three2 as $m) {session()->flash('debt_three2',$m->debt_three);};
        $debt_three3 = Expenses::all()->where('month',3);foreach($debt_three3 as $m) {session()->flash('debt_three3', $m->debt_three);};
        $debt_three4 = Expenses::all()->where('month',4);foreach($debt_three4 as $m) {session()->flash('debt_three4',$m->debt_three);};
        $debt_three5 = Expenses::all()->where('month',5);foreach($debt_three5 as $m) {session()->flash('debt_three5',$m->debt_three);};
        $debt_three6 = Expenses::all()->where('month',6);foreach($debt_three6 as $m) {session()->flash('debt_three6',$m->debt_three);};
        $debt_three7 = Expenses::all()->where('month',7);foreach($debt_three7 as $m) {session()->flash('debt_three7',$m->debt_three);};
        $debt_three8 = Expenses::all()->where('month',8);foreach($debt_three8 as $m) {session()->flash('debt_three8',$m->debt_three);};
        $debt_three9 = Expenses::all()->where('month',9);foreach($debt_three9 as $m) {session()->flash('debt_three9',$m->debt_three);};
        $debt_three10 = Expenses::all()->where('month',10);foreach($debt_three10 as $m) {session()->flash('debt_three10',$m->debt_three);};
        $debt_three11 = Expenses::all()->where('month',11);foreach($debt_three11 as $m) {session()->flash('debt_three11',$m->debt_three);};
        $debt_three12 = Expenses::all()->where('month',12);foreach($debt_three12 as $m) {session()->flash('debt_three12',$m->debt_three);};
        $debt_three13 = Expenses::all()->where('month',13);foreach($debt_three13 as $m) {session()->flash('debt_three13',$m->debt_three);};
        $debt_three14= Expenses::all()->where('month',14);foreach($debt_three14 as $m) {session()->flash('debt_three14',$m->debt_three);};
        $debt_three15 = Expenses::all()->where('month',15);foreach($debt_three15 as $m) {session()->flash('debt_three15',$m->debt_three);};
        $debt_three16 = Expenses::all()->where('month',16);foreach($debt_three16 as $m) {session()->flash('debt_three16',$m->debt_three);};
        $debt_three17 = Expenses::all()->where('month',17);foreach($debt_three17 as $m) {session()->flash('debt_three17',$m->debt_three);};
        $debt_three18 = Expenses::all()->where('month',18);foreach($debt_three18 as $m) {session()->flash('debt_three18',$m->debt_three);};
        $debt_three19 = Expenses::all()->where('month',19);foreach($debt_three19 as $m) {session()->flash('debt_three19',$m->debt_three);};
        $debt_three20 = Expenses::all()->where('month',20);foreach($debt_three20 as $m) {session()->flash('debt_three20',$m->debt_three);};
        $debt_three21 = Expenses::all()->where('month',21);foreach($debt_three21 as $m) {session()->flash('debt_three21',$m->debt_three);};
        $debt_three22 = Expenses::all()->where('month',22);foreach($debt_three22 as $m) {session()->flash('debt_three22',$m->debt_three);};
        $debt_three23 = Expenses::all()->where('month',23);foreach($debt_three23 as $m) {session()->flash('debt_three23',$m->debt_three);};
        $debt_three24 = Expenses::all()->where('month',24);foreach($debt_three24 as $m) {session()->flash('debt_three24',$m->debt_three);};
        $debt_three25 = Expenses::all()->where('month',25);foreach($debt_three25 as $m) {session()->flash('debt_three25',$m->debt_three);};
        $debt_three26 = Expenses::all()->where('month',26);foreach($debt_three26 as $m) {session()->flash('debt_three26',$m->debt_three);};
        $debt_three27 = Expenses::all()->where('month',27);foreach($debt_three27 as $m) {session()->flash('debt_three27',$m->debt_three);};
        $debt_three28 = Expenses::all()->where('month',28);foreach($debt_three28 as $m) {session()->flash('debt_three28',$m->debt_three);};
        $debt_three29 = Expenses::all()->where('month',29);foreach($debt_three29 as $m) {session()->flash('debt_three29',$m->debt_three);};
        $debt_three30 = Expenses::all()->where('month',30);foreach($debt_three30 as $m) {session()->flash('debt_three30',$m->debt_three);};
        $debt_three31= Expenses::all()->where('month',31);foreach($debt_three31 as $m) {session()->flash('debt_three31',$m->debt_three);};
        $debt_three32 = Expenses::all()->where('month',32);foreach($debt_three32 as $m) {session()->flash('debt_three32',$m->debt_three);};
        $debt_three33 = Expenses::all()->where('month',33);foreach($debt_three33 as $m) {session()->flash('debt_three33',$m->debt_three);};
        $debt_three34 = Expenses::all()->where('month',34);foreach($debt_three34 as $m) {session()->flash('debt_three34',$m->debt_three);};
        $debt_three35 = Expenses::all()->where('month',35);foreach($debt_three35 as $m) {session()->flash('debt_three35',$m->debt_three);};
        $debt_three36 = Expenses::all()->where('month',36);foreach($debt_three36 as $m) {session()->flash('debt_three36',$m->debt_three);};

        $debt_four = Expenses::all()->where('month',1);foreach($debt_four as $m) {session()->flash('debt_four1',$m->debt_four);};
        $debt_four2 = Expenses::all()->where('month',2);foreach($debt_four2 as $m) {session()->flash('debt_four2',$m->debt_four);};
        $debt_four3 = Expenses::all()->where('month',3);foreach($debt_four3 as $m) {session()->flash('debt_four3', $m->debt_four);};
        $debt_four4 = Expenses::all()->where('month',4);foreach($debt_four4 as $m) {session()->flash('debt_four4',$m->debt_four);};
        $debt_four5 = Expenses::all()->where('month',5);foreach($debt_four5 as $m) {session()->flash('debt_four5',$m->debt_four);};
        $debt_four6 = Expenses::all()->where('month',6);foreach($debt_four6 as $m) {session()->flash('debt_four6',$m->debt_four);};
        $debt_four7 = Expenses::all()->where('month',7);foreach($debt_four7 as $m) {session()->flash('debt_four7',$m->debt_four);};
        $debt_four8 = Expenses::all()->where('month',8);foreach($debt_four8 as $m) {session()->flash('debt_four8',$m->debt_four);};
        $debt_four9 = Expenses::all()->where('month',9);foreach($debt_four9 as $m) {session()->flash('debt_four9',$m->debt_four);};
        $debt_four10 = Expenses::all()->where('month',10);foreach($debt_four10 as $m) {session()->flash('debt_four10',$m->debt_four);};
        $debt_four11 = Expenses::all()->where('month',11);foreach($debt_four11 as $m) {session()->flash('debt_four11',$m->debt_four);};
        $debt_four12 = Expenses::all()->where('month',12);foreach($debt_four12 as $m) {session()->flash('debt_four12',$m->debt_four);};
        $debt_four13 = Expenses::all()->where('month',13);foreach($debt_four13 as $m) {session()->flash('debt_four13',$m->debt_four);};
        $debt_four14= Expenses::all()->where('month',14);foreach($debt_four14 as $m) {session()->flash('debt_four14',$m->debt_four);};
        $debt_four15 = Expenses::all()->where('month',15);foreach($debt_four15 as $m) {session()->flash('debt_four15',$m->debt_four);};
        $debt_four16 = Expenses::all()->where('month',16);foreach($debt_four16 as $m) {session()->flash('debt_four16',$m->debt_four);};
        $debt_four17 = Expenses::all()->where('month',17);foreach($debt_four17 as $m) {session()->flash('debt_four17',$m->debt_four);};
        $debt_four18 = Expenses::all()->where('month',18);foreach($debt_four18 as $m) {session()->flash('debt_four18',$m->debt_four);};
        $debt_four19 = Expenses::all()->where('month',19);foreach($debt_four19 as $m) {session()->flash('debt_four19',$m->debt_four);};
        $debt_four20 = Expenses::all()->where('month',20);foreach($debt_four20 as $m) {session()->flash('debt_four20',$m->debt_four);};
        $debt_four21 = Expenses::all()->where('month',21);foreach($debt_four21 as $m) {session()->flash('debt_four21',$m->debt_four);};
        $debt_four22 = Expenses::all()->where('month',22);foreach($debt_four22 as $m) {session()->flash('debt_four22',$m->debt_four);};
        $debt_four23 = Expenses::all()->where('month',23);foreach($debt_four23 as $m) {session()->flash('debt_four23',$m->debt_four);};
        $debt_four24 = Expenses::all()->where('month',24);foreach($debt_four24 as $m) {session()->flash('debt_four24',$m->debt_four);};
        $debt_four25 = Expenses::all()->where('month',25);foreach($debt_four25 as $m) {session()->flash('debt_four25',$m->debt_four);};
        $debt_four26 = Expenses::all()->where('month',26);foreach($debt_four26 as $m) {session()->flash('debt_four26',$m->debt_four);};
        $debt_four27 = Expenses::all()->where('month',27);foreach($debt_four27 as $m) {session()->flash('debt_four27',$m->debt_four);};
        $debt_four28 = Expenses::all()->where('month',28);foreach($debt_four28 as $m) {session()->flash('debt_four28',$m->debt_four);};
        $debt_four29 = Expenses::all()->where('month',29);foreach($debt_four29 as $m) {session()->flash('debt_four29',$m->debt_four);};
        $debt_four30 = Expenses::all()->where('month',30);foreach($debt_four30 as $m) {session()->flash('debt_four30',$m->debt_four);};
        $debt_four31= Expenses::all()->where('month',31);foreach($debt_four31 as $m) {session()->flash('debt_four31',$m->debt_four);};
        $debt_four32 = Expenses::all()->where('month',32);foreach($debt_four32 as $m) {session()->flash('debt_four32',$m->debt_four);};
        $debt_four33 = Expenses::all()->where('month',33);foreach($debt_four33 as $m) {session()->flash('debt_four33',$m->debt_four);};
        $debt_four34 = Expenses::all()->where('month',34);foreach($debt_four34 as $m) {session()->flash('debt_four34',$m->debt_four);};
        $debt_four35 = Expenses::all()->where('month',35);foreach($debt_four35 as $m) {session()->flash('debt_four35',$m->debt_four);};
        $debt_four36 = Expenses::all()->where('month',36);foreach($debt_four36 as $m) {session()->flash('debt_four36',$m->debt_four);};
        $other = Expenses::all()->where('month',1);foreach($other as $m) {session()->flash('other1',$m->other);};
        $other2 = Expenses::all()->where('month',2);foreach($other2 as $m) {session()->flash('other2',$m->other);};
        $other3 = Expenses::all()->where('month',3);foreach($other3 as $m) {session()->flash('other3', $m->other);};
        $other4 = Expenses::all()->where('month',4);foreach($other4 as $m) {session()->flash('other4',$m->other);};
        $other5 = Expenses::all()->where('month',5);foreach($other5 as $m) {session()->flash('other5',$m->other);};
        $other6 = Expenses::all()->where('month',6);foreach($other6 as $m) {session()->flash('other6',$m->other);};
        $other7 = Expenses::all()->where('month',7);foreach($other7 as $m) {session()->flash('other7',$m->other);};
        $other8 = Expenses::all()->where('month',8);foreach($other8 as $m) {session()->flash('other8',$m->other);};
        $other9 = Expenses::all()->where('month',9);foreach($other9 as $m) {session()->flash('other9',$m->other);};
        $other10 = Expenses::all()->where('month',10);foreach($other10 as $m) {session()->flash('other10',$m->other);};
        $other11 = Expenses::all()->where('month',11);foreach($other11 as $m) {session()->flash('other11',$m->other);};
        $other12 = Expenses::all()->where('month',12);foreach($other12 as $m) {session()->flash('other12',$m->other);};
        $other13 = Expenses::all()->where('month',13);foreach($other13 as $m) {session()->flash('other13',$m->other);};
        $other14= Expenses::all()->where('month',14);foreach($other14 as $m) {session()->flash('other14',$m->other);};
        $other15 = Expenses::all()->where('month',15);foreach($other15 as $m) {session()->flash('other15',$m->other);};
        $other16 = Expenses::all()->where('month',16);foreach($other16 as $m) {session()->flash('other16',$m->other);};
        $other17 = Expenses::all()->where('month',17);foreach($other17 as $m) {session()->flash('other17',$m->other);};
        $other18 = Expenses::all()->where('month',18);foreach($other18 as $m) {session()->flash('other18',$m->other);};
        $other19 = Expenses::all()->where('month',19);foreach($other19 as $m) {session()->flash('other19',$m->other);};
        $other20 = Expenses::all()->where('month',20);foreach($other20 as $m) {session()->flash('other20',$m->other);};
        $other21 = Expenses::all()->where('month',21);foreach($other21 as $m) {session()->flash('other21',$m->other);};
        $other22 = Expenses::all()->where('month',22);foreach($other22 as $m) {session()->flash('other22',$m->other);};
        $other23 = Expenses::all()->where('month',23);foreach($other23 as $m) {session()->flash('other23',$m->other);};
        $other24 = Expenses::all()->where('month',24);foreach($other24 as $m) {session()->flash('other24',$m->other);};
        $other25 = Expenses::all()->where('month',25);foreach($other25 as $m) {session()->flash('other25',$m->other);};
        $other26 = Expenses::all()->where('month',26);foreach($other26 as $m) {session()->flash('other26',$m->other);};
        $other27 = Expenses::all()->where('month',27);foreach($other27 as $m) {session()->flash('other27',$m->other);};
        $other28 = Expenses::all()->where('month',28);foreach($other28 as $m) {session()->flash('other28',$m->other);};
        $other29 = Expenses::all()->where('month',29);foreach($other29 as $m) {session()->flash('other29',$m->other);};
        $other30 = Expenses::all()->where('month',30);foreach($other30 as $m) {session()->flash('other30',$m->other);};
        $other31= Expenses::all()->where('month',31);foreach($other31 as $m) {session()->flash('other31',$m->other);};
        $other32 = Expenses::all()->where('month',32);foreach($other32 as $m) {session()->flash('other32',$m->other);};
        $other33 = Expenses::all()->where('month',33);foreach($other33 as $m) {session()->flash('other33',$m->other);};
        $other34 = Expenses::all()->where('month',34);foreach($other34 as $m) {session()->flash('other34',$m->other);};
        $other35 = Expenses::all()->where('month',35);foreach($other35 as $m) {session()->flash('other35',$m->other);};
        $other36 = Expenses::all()->where('month',36);foreach($other36 as $m) {session()->flash('other36',$m->other);};

        $total_expenses = Expenses::all()->where('month',1);foreach($total_expenses as $m) {session()->flash('total_expenses1',$m->total_expenses);};
        $total_expenses2 = Expenses::all()->where('month',2);foreach($total_expenses2 as $m) {session()->flash('total_expenses2',$m->total_expenses);};
        $total_expenses3 = Expenses::all()->where('month',3);foreach($total_expenses3 as $m) {session()->flash('total_expenses3', $m->total_expenses);};
        $total_expenses4 = Expenses::all()->where('month',4);foreach($total_expenses4 as $m) {session()->flash('total_expenses4',$m->total_expenses);};
        $total_expenses5 = Expenses::all()->where('month',5);foreach($total_expenses5 as $m) {session()->flash('total_expenses5',$m->total_expenses);};
        $total_expenses6 = Expenses::all()->where('month',6);foreach($total_expenses6 as $m) {session()->flash('total_expenses6',$m->total_expenses);};
        $total_expenses7 = Expenses::all()->where('month',7);foreach($total_expenses7 as $m) {session()->flash('total_expenses7',$m->total_expenses);};
        $total_expenses8 = Expenses::all()->where('month',8);foreach($total_expenses8 as $m) {session()->flash('total_expenses8',$m->total_expenses);};
        $total_expenses9 = Expenses::all()->where('month',9);foreach($total_expenses9 as $m) {session()->flash('total_expenses9',$m->total_expenses);};
        $total_expenses10 = Expenses::all()->where('month',10);foreach($total_expenses10 as $m) {session()->flash('total_expenses10',$m->total_expenses);};
        $total_expenses11 = Expenses::all()->where('month',11);foreach($total_expenses11 as $m) {session()->flash('total_expenses11',$m->total_expenses);};
        $total_expenses12 = Expenses::all()->where('month',12);foreach($total_expenses12 as $m) {session()->flash('total_expenses12',$m->total_expenses);};
        $total_expenses13 = Expenses::all()->where('month',13);foreach($total_expenses13 as $m) {session()->flash('total_expenses13',$m->total_expenses);};
        $total_expenses14= Expenses::all()->where('month',14);foreach($total_expenses14 as $m) {session()->flash('total_expenses14',$m->total_expenses);};
        $total_expenses15 = Expenses::all()->where('month',15);foreach($total_expenses15 as $m) {session()->flash('total_expenses15',$m->total_expenses);};
        $total_expenses16 = Expenses::all()->where('month',16);foreach($total_expenses16 as $m) {session()->flash('total_expenses16',$m->total_expenses);};
        $total_expenses17 = Expenses::all()->where('month',17);foreach($total_expenses17 as $m) {session()->flash('total_expenses17',$m->total_expenses);};
        $total_expenses18 = Expenses::all()->where('month',18);foreach($total_expenses18 as $m) {session()->flash('total_expenses18',$m->total_expenses);};
        $total_expenses19 = Expenses::all()->where('month',19);foreach($total_expenses19 as $m) {session()->flash('total_expenses19',$m->total_expenses);};
        $total_expenses20 = Expenses::all()->where('month',20);foreach($total_expenses20 as $m) {session()->flash('total_expenses20',$m->total_expenses);};
        $total_expenses21 = Expenses::all()->where('month',21);foreach($total_expenses21 as $m) {session()->flash('total_expenses21',$m->total_expenses);};
        $total_expenses22 = Expenses::all()->where('month',22);foreach($total_expenses22 as $m) {session()->flash('total_expenses22',$m->total_expenses);};
        $total_expenses23 = Expenses::all()->where('month',23);foreach($total_expenses23 as $m) {session()->flash('total_expenses23',$m->total_expenses);};
        $total_expenses24 = Expenses::all()->where('month',24);foreach($total_expenses24 as $m) {session()->flash('total_expenses24',$m->total_expenses);};
        $total_expenses25 = Expenses::all()->where('month',25);foreach($total_expenses25 as $m) {session()->flash('total_expenses25',$m->total_expenses);};
        $total_expenses26 = Expenses::all()->where('month',26);foreach($total_expenses26 as $m) {session()->flash('total_expenses26',$m->total_expenses);};
        $total_expenses27 = Expenses::all()->where('month',27);foreach($total_expenses27 as $m) {session()->flash('total_expenses27',$m->total_expenses);};
        $total_expenses28 = Expenses::all()->where('month',28);foreach($total_expenses28 as $m) {session()->flash('total_expenses28',$m->total_expenses);};
        $total_expenses29 = Expenses::all()->where('month',29);foreach($total_expenses29 as $m) {session()->flash('total_expenses29',$m->total_expenses);};
        $total_expenses30 = Expenses::all()->where('month',30);foreach($total_expenses30 as $m) {session()->flash('total_expenses30',$m->total_expenses);};
        $total_expenses31= Expenses::all()->where('month',31);foreach($total_expenses31 as $m) {session()->flash('total_expenses31',$m->total_expenses);};
        $total_expenses32 = Expenses::all()->where('month',32);foreach($total_expenses32 as $m) {session()->flash('total_expenses32',$m->total_expenses);};
        $total_expenses33 = Expenses::all()->where('month',33);foreach($total_expenses33 as $m) {session()->flash('total_expenses33',$m->total_expenses);};
        $total_expenses34 = Expenses::all()->where('month',34);foreach($total_expenses34 as $m) {session()->flash('total_expenses34',$m->total_expenses);};
        $total_expenses35 = Expenses::all()->where('month',35);foreach($total_expenses35 as $m) {session()->flash('total_expenses35',$m->total_expenses);};
        $total_expenses36 = Expenses::all()->where('month',36);foreach($total_expenses36 as $m) {session()->flash('total_expenses36',$m->total_expenses);};



        return view('business');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
