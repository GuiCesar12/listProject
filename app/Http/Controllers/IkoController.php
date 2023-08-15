<?php

namespace App\Http\Controllers;
use App\Models\Bearing;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use App\Models\BearingDimension;
use Illuminate\Http\Request;

class IkoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::get('name')){

            return view('iko.iko');
        }else{
            return redirect()->route('index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function select(Request $request)
    {   
        $name = $request->search;

        // Selecionar nos campos que ele está pedindo, 

        $table = DB::table('bearing_dimensions')
        ->join('bearings','bearings.id','=','bearing_dimensions.bearing_id')
        ->select(DB::raw('bearing_dimensions.*,bearings.*'))
        ->where('bearings.fag' ,'=',$name)
        ->orWhere('bearings.skf','=',$name)
        ->orWhere('bearings.torrington','=',$name)
        ->orWhere('bearings.ina','=',$name);
        
        return $table->get();
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
