<?php

namespace App\Http\Controllers;

use App\Models\Chemistries;
use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\Cashier;
use App\Models\Metrologies;
use App\Models\Halal;
use App\Models\Shelflife;

class QController extends Controller
{

    public function check_PrioStat($model){
        $ambot=$model::select('priorityStatus')->whereIn('priorityStatus',['Pregnant','PWD','Elderly'])->get();
        return $ambot;
    }
    public function all_client(){
       // $sch_reserve = Scholarship::where('status','Reserve')->orwhere('priorityStatus','Pregnant')->first();
       //Code for getting the client with client type eg. pregnant etc
    $sch_reserve=[];
        $ps = Scholarship::select('priorityStatus')->whereIn('priorityStatus',['Pregnant','PWD','Elderly'])->first();
        if($ps != null){
        $sch_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')
        ->whereIn('priorityStatus',['Pregnant','PWD','Elderly']);
        })->first();
    }else{
        $sch_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')->first();
        })->first();
    }
        $sch_serve = Scholarship::where('status','Serving')->first();

    $chm_reserve=[];
        $ps = Scholarship::select('priorityStatus')->whereIn('priorityStatus',['Pregnant','PWD','Elderly'])->first();
        if($ps != null){
        $chm_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')
        ->whereIn('priorityStatus',['Pregnant','PWD','Elderly']);
        })->first();
    }else{
        $chm_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')->first();
        })->first();
    }
        $chm_serve = Chemistries::where('status','Serving')->first();

        $shl_reserve=[];
        $ps = Scholarship::select('priorityStatus')->whereIn('priorityStatus',['Pregnant','PWD','Elderly'])->first();
        if($ps != null){
        $shl_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')
        ->whereIn('priorityStatus',['Pregnant','PWD','Elderly']);
        })->first();
    }else{
        $shl_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')->first();
        })->first();
    }
        $shl_serve = Shelflife::where('status','Serving')->first();

        $mtr_reserve=[];
        $ps = Scholarship::select('priorityStatus')->whereIn('priorityStatus',['Pregnant','PWD','Elderly'])->first();
        if($ps != null){
        $mtr_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')
        ->whereIn('priorityStatus',['Pregnant','PWD','Elderly']);
        })->first();
    }else{
        $mtr_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')->first();
        })->first();
    }
        $mtr_serve = Metrologies::where('status','Serving')->first();
        
        $chr_reserve=[];
        $ps = Scholarship::select('priorityStatus')->whereIn('priorityStatus',['Pregnant','PWD','Elderly'])->first();
        if($ps != null){
        $chr_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')
        ->whereIn('priorityStatus',['Pregnant','PWD','Elderly']);
        })->first();
    }else{
        $chr_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')->first();
        })->first();
    }
        $chr_serve = Cashier::where('status','Serving')->first();
        
        $hal_reserve=[];
       $ps = Scholarship::select('priorityStatus')->whereIn('priorityStatus',['Pregnant','PWD','Elderly'])->first();
       if($ps != null){
        $hal_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')
        ->whereIn('priorityStatus',['Pregnant','PWD','Elderly']);
        })->first();
    }else{
        $hal_reserve = Scholarship::where(function($query){
        $query->where('status','Reserve')->first();
        })->first();
    }
        $hal_serve = Halal::where('status','Serving')->first();
        
        return view('Queue.monitor')
        ->with ('chm_reserve', $chm_reserve)
        ->with ('chm_serve', $chm_serve)
        ->with ('sch_reserve', $sch_reserve)
        ->with ('sch_serve', $sch_serve)
        ->with ('shl_reserve', $shl_reserve)
        ->with ('shl_serve', $shl_serve)
        ->with ('mtr_reserve', $mtr_reserve)
        ->with ('mtr_serve', $mtr_serve)
        ->with ('chr_reserve', $chr_reserve)
        ->with ('chr_serve', $chr_serve)
        ->with ('hal_reserve', $hal_reserve)
        ->with ('hal_serve', $hal_serve);
    //return view('Queue.monitor',['sch_reserve' => $sch_reserve]);
    }
    public function chm_serve(){
        $chm_reserve = Chemistries::where('status','Reserve')->first();
        return view('Queue.sch',['chm_reserve'=> $chm_reserve]);
    }
    public function getMaxID(string $id){
        $allclients = $id::max('id');
    }

    public function add_client(Request $request){
        $data = $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'priorityStatus'=> 'required',
            'laboratory'=> 'required',
            'status'=>'required',
        ]);
        if($request->input('laboratory') == 'SCH'){
            Scholarship::create($data);
            return redirect(route('Queue.addtoque'));
        }
        if($request->input('laboratory') == 'CHM'){
            Chemistries::create($data);
            return redirect(route('Queue.addtoque'));
        }
        if($request->input('laboratory') == 'CHR'){
        Cashier::create($data);
        return redirect(route('Queue.addtoque'));
       }
       if($request->input('laboratory') =='HAL'){
        Halal::create($data);
        return redirect(route('Queue.addtoque'));
    }  if($request->input('laboratory') == 'MTR'){
        Metrologies::create($data);
        return redirect(route('Queue.addtoque'));
    }  if($request->input('laboratory') == 'SHL'){
        Shelflife::create($data);
        return redirect(route('Queue.addtoque'));
    }
         
    }
}
