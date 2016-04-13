<?php

namespace App\Http\Controllers\front;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Common\Categorie;


class IndexController extends Controller
{
    public function index(){
        $categorie = new Categorie();
        $catLIst = $categorie->getCategorieByActiv()->toArray(); 
        return view('front.index',["catLIst"=> $catLIst]);
    }

   /* public function login(Request $request){
        $salt        = User::getSaltByEmail($request->email);
        $credentials = [
            'role'     => User::ROLE_USER,
            'email'    => $request->email,
            'password' => $request->password . $salt
        ];
        if (Auth::attempt($credentials, true)) {
            return redirect('back/admin');
        }
    }*/
}

