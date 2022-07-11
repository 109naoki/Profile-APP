<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{


    public function show($id){

        $introduction = User::find($id);


        $url = url($introduction->url_id);

        return view('user/show',['url' => $url]);
    }

    public function design_store(Request $request){
        $design_number = $request->input('photosite');

        $user = User::find(Auth::id());

        $user->design_flg = $design_number;

        $user->save();

        return redirect()->back();
    }
}
