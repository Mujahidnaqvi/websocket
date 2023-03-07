<?php

namespace App\Http\Controllers;

use App\Events\Message;
use Illuminate\Http\Request;


class ChatController extends Controller
{
    public function Chat(Request $request)
    {
        event(new Message($request['message']));
        return ['success' => true];
    }
}