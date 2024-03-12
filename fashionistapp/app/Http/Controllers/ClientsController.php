<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ClientsModel;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function index(){

        $allclients = User::leftjoin('clients','clients.user_id','=','users.id')
                    ->get(['users.name as name','clients.phonenumber as phonenumber',
                           'clients.gender as gender','clients.address as address',
                           'clients.created_at as datecreated']);
        return view('client.allclients')->with('clients',$allclients);

    }



  public function saveclient(Request $request)
  {

    $chkphone = ClientsModel::where('phonenumber','=',$request->phonenumber)->exists();
    if($chkphone){
        return back() ->with('danger','Phone Number already registered');
    }else{
         $user = User::create([
            'name' => $request->fullname,
            'email' => 'test@email.com',
            'password' => bcrypt('password123'),
        ]);
        ClientsModel::create([
            'user_id'=> $user->id,
            'phonenumber'=>$request->phonenumber,
            'gender'=>$request->gender,
            'address'=>$request->address,
        ]);
        return back() ->with('success','You have succefully Registered Client');
    }






  }

}
