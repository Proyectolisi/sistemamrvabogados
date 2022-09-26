<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calendar;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function index(){

        return view('calendar.index');
    }

    
    /**
     * Store a newly created resourse in storage
     * php artisan route:clear
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response 
     */

    public function store (Request $request){

        request()->validate(calendar::$rules);
        $calendar=calendar::create($request->all());
        
    }

    /**
     * Store a newly created resourse in storage
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response 
     */

    public function show (calendar $calendar){

        $calendar= calendar::all();
        return response()->json($calendar);
        
    }
   
    public function edit ($id){

        $calendar= calendar::find($id);
        $calendar->start =Carbon::createFromFormat('Y-m-d H:i:s', $calendar->start)->format('Y-m-d H:i:s');
        $calendar->end =Carbon::createFromFormat('Y-m-d H:i:s', $calendar->end)->format('Y-m-d H:i:s');
        return response()->json($calendar);
        
    }


    public function update (Request $request, calendar $calendar){

        request()->validate(calendar::$rules);
        $calendar->update($request->all());      
        return response()->json($calendar);  
        
    }


    public function destroy ($id){

        $calendar= calendar::find($id)->delete();
        return response()->json($calendar);
        
    }
}
 