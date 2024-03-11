<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ClientsModel;

class ClientsController extends Controller
{

    public function index(){

        return view('client.allclients');

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
