<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vol;
use App\Models\ChMessage;
use App\Models\History;
use Illuminate\Support\Facades\Auth;


class ClientController extends Controller
{
    //


    public function GererVol(){
        $datas = Vol::where('etat' , 0)->get();
        $id = Auth::user()->id;
        $messages = ChMessage::where('from_id','<>',$id)
        ->where('to_id',$id)
        ->where('seen',0)
        ->get();
        return view('client.client',compact('datas','messages')) ;
    }


    public function FetchSavedVol(){
        $datas = Vol::where('etat' , 1)->get();
        $id = Auth::user()->id;

        $constante = "afficher les vol enregistes";
        $data = new History();
        $data->content = $constante;
        $data->users_id = $id;
        $data->save();

        $messages = ChMessage::where('from_id','<>',$id)
        ->where('to_id',$id)
        ->where('seen',0)
        ->get();


        return view('client.saved_vols',compact('datas','messages')) ;
    }


    function History(){
        $id = Auth::user()->id;
        $datas = History::where('users_id',$id)->get();

        $messages = ChMessage::where('from_id','<>',$id)
        ->where('to_id',$id)
        ->where('seen',0)
        ->get();

        return view('client.history',compact('datas','messages'));
    }

    public function DeleteHistory($id){
        $data =History::find($id);
        $data->delete();
        return back()->with('error','historique a été supprimée avec succès!!');
    }




    public function GetVol(){

        $datas = Saved_vol::latest()->get();
        return view('client.saved_vols',compact('datas'));

    }


    public function  SavedVol($id){
        $data = Vol::find($id);

        $etat = 1;
        $data->etat = $etat;
        $data->save();

        $id = Auth::user()->id;

        $constante = "enregistré une vol";
        $data = new History();
        $data->content = $constante;
        $data->users_id = $id;
        $data->save();
        return back()->with('status','flight saved');
    }

    function Aboutus(){
        $id = Auth::user()->id;
        $messages = ChMessage::where('from_id','<>',$id)
        ->where('to_id',$id)
        ->where('seen',0)
        ->get();
        $id = Auth::user()->id;
        $constante = "consultee la mape";
        $data = new History();
        $data->content = $constante;
        $data->users_id = $id;
        $data->save();
        return view('client.aboutus',compact('messages'));
    }





}
