<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lead;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function save(Request $request){
        $lead = new Lead;
        $lead->email = $request->email;
        $lead->nome = $request->nome;
        $lead->telefone = $request->telefone;
        $lead->empresa = $request->empresa;
        
        Session::put('name',$request->nome);
        
        // dd(Session::get('name'));

        
        return $lead->save();
        

    }
    public function index(){
        return view('index');
    }
    public function update(Request $request){
        $lead = Lead::find($request->id);
        $lead->email = $request->email;
        $lead->nome = $request->nome;
        $lead->telefone = $request->telefone;
        $lead->empresa = $request->empresa;
        
        return $lead->update();
    }
    public function delete($id){
        return Lead::find($id)->delete();

    }

}
