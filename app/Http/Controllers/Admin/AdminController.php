<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ChMessage;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use App\Models\vol;

use DB;
use Mail;
use App\Mail\rappelmail;

class AdminController extends Controller
{


    function GetAccount(){

        $id = Auth::user()->id;
        $messages = ChMessage::where('from_id','<>',$id)
        ->where('to_id',$id)
        ->where('seen',0)
        ->get();


        $datas = User::where('role',null)->get();
        return view('admin.gerer_compte',compact('datas','messages'));
    }

    public function supprimer($id)
    {
        $data =User::find($id);
        $data->delete();

        $id = Auth::user()->id;
        $constante = "suprimee un compte";
        $data = new History();
        $data->content = $constante;
        $data->users_id = $id;
        $data->save();

        return back()->with('error','delete Compte with successfuly!!');

    }




    function update_account(Request $request, $id){


        $users  = User::find($id);
        $users->name      = $request->name;
        $users->lastname  = $request->lastname;
        $users->email     = $request->email;
        $users->telephone = $request->telephone;
        $id = Auth::user()->id;
        $constante = "modifiee un compte";
        $data = new History();
        $data->content = $constante;
        $data->users_id = $id;
        $data->save();

        $users->save();
        return back()->with('status','account updated with success');

    }



    function Accueil(){

        $users = User::all();
        $vols  = Vol::all();
        $vols_saved  = Vol::where('etat',1);
        $id = Auth::user()->id;
        $messages = ChMessage::where('from_id','<>',$id)
        ->where('to_id',$id)
        ->where('seen',0)
        ->get();
        return view('/admin.accueil',compact('messages','users','vols','vols_saved'));
    }



    function Calendar(){
        $id = Auth::user()->id;
        $messages = ChMessage::where('from_id','<>',$id)
        ->where('to_id',$id)
        ->where('seen',0)
        ->get();
        $id = Auth::user()->id;
        $constante = "consultee la calendrie";
        $data = new History();
        $data->content = $constante;
        $data->users_id = $id;
        $data->save();
        return view('admin.calendar',compact('messages'));
    }


    function Maps(){
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
        return view('admin.maps',compact('messages'));
    }



    function History(){
        $id = Auth::user()->id;
        $datas = History::where('users_id',$id)->get();
        $messages = ChMessage::where('from_id','<>',$id)
        ->where('to_id',$id)
        ->where('seen',0)
        ->get();
        return view('admin.historique',compact('messages','datas'));
    }

    public function DeleteHistory($id){
        $data = History::find($id);
        $data->delete();
        return back()->with('error','historique a été supprimée avec succès!!');
    }






    public function GererVol(){
        $id = Auth::user()->id;
        $messages = ChMessage::where('from_id','<>',$id)
        ->where('to_id',$id)
        ->where('seen',0)
        ->get();
        $datas = Vol::latest()->get();

        return view('admin.gerer_vol',compact('datas','messages')) ;
    }


    public function AddVol(Request $request){

        $vols =  new Vol();
        $id = Auth::user()->id;

        $vols->d_hour       = $request->d_hour;
        $vols->a_hour       = $request->a_hour;
        $vols->nbrtravelers = $request->nbrtravelers;
        $vols->d_airport    = $request->d_airport;
        $vols->a_airport    = $request->a_airport;
        $constante = "ajoutee une vol";
        $data = new History();
        $data->content = $constante;
        $data->users_id = $id;
        $data->save();

        $vols->save();
        return back()->with('status','La Vol Ajoutée avec succée!!');
    }


    public function DeleteVol($id)
    {
        $id = Auth::user()->id;

        $data =Vol::find($id);
        $data->delete();

        $constante = "suprimee une vol";
        $data = new History();
        $data->content = $constante;
        $data->users_id = $id;
        $data->save();

        return back()->with('error','delete book with successfuly!!');
    }


    function UpdateVol(Request $request, $id){

        $vols  = Vol::find($id);


       $identifient = $vols->id;
       $nouveau_temp = $request->a_hour;

        $vols->d_hour      = $request->d_hour;
        $vols->a_hour     = $request->a_hour;
        $vols->nbrtravelers     = $request->nbrtravelers;
        $vols->d_airport     = $request->d_airport;
        $vols->a_airport     = $request->a_airport;
        $id = Auth::user()->id;

        $emails[] =  DB::table('users')->pluck('email');
        foreach ($emails as $email) {
            Mail::to($email)->send(new rappelmail($identifient, $nouveau_temp));
        }

        $constante = "modifiee une vol";
        $data = new History();
        $data->content = $constante;
        $data->users_id = $id;
        $data->save();

        $vols->save();
        return back()->with('status','account updated with success');

    }



}

