<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ClientsModel;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function index(){

        $allclients = User::leftjoin('clients','clients.user_id','=','users.id')
                    ->get();
        return view('client.allclients')->with('clients',$allclients);

    }



  public function saveclient(Request $request)
  {


        $user = User::create([
            'name' => $request->fullname,
            'email' => 'test@email.com',
            'password' => bcrypt('password123'),
        ]);
        ClientsModel::create([
            'user_id'=> $user->id,
        ]);




  }

}
