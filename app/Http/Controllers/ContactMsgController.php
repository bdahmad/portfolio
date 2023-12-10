<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMsg;

class ContactMsgController extends Controller
{
    public function sendMessage(Request $request){
        $insert = ContactMsg::insert([
            'contactMsg_name' => $request->contactMsg_name,
            'contactMsg_email' => $request->contactMsg_email,
            'contactMsg_subject' => $request->contactMsg_subject,
            'contactMsg_message' => $request->contactMsg_message,
        ]);

        if($insert){
            return redirect()->back();
        }
    }
}
