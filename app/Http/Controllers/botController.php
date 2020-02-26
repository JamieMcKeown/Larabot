<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;


class botController extends Controller
{

public function login (){
    return view('custom/master');
}
public function logoff (){
    Auth::logout();
    return redirect()->route('botPage');
}

public function bot () {
    $convos = Message::latest()->get();
    return view('custom/bot', ['convos' => $convos]);
}

}
