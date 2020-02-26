<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Message;

class FormController extends Controller
{
    public function msg(Request $request){
        $request->validate([
            'message' => 'required'
            ]);
            
            // get "message" from bot.blade
            $message = $request->input('message');
            
            // get current user info
            $activeUser = Auth::user();
            $activeUserID = Auth::id();
            
            //get bot's response
            $string = Storage::get('phrases.json');
            $json_file = json_decode($string);//truth means array
            $phrases = ($json_file);
            
            
            $response = null;
            foreach($phrases as $keyword => $phrase){
                if(stripos($message, $keyword) !== false){
                    $response = $phrase;
                break;
            }
        }
        if ($response === null) {
            $response = "Question doesn't make sense, smarten up and try again...";
        }
        
        // change responses to dynamically replace empty []'s used as placeholders
        $current = array('[nom]', '[heure]');
        $date = date_default_timezone_set("America/New_York");
        $replaced = array($activeUser['name'], date('h:i:A'));
        $modifiedResponse = str_replace($current, $replaced, $response);
       
        
        
        
        // save all info to db
        $msgTable = new Message();
        $msgTable->message = $message;
        $msgTable->senderName = $activeUser['name'];
        $msgTable->senderID = $activeUserID;
        $msgTable->botAnswer = $modifiedResponse;
        $msgTable->save();
        
        
        
        
        // //get the 2 most recent additions to table first
        // $convos = Message::latest()->get();
        
        
        
        
        //return view('custom.bot', ['convos' => $convos]);
        return redirect()->route('botPage');
    }
    
}
