<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use LRedis;
use Input;
use App\Chat;
use Auth;
class socketController extends Controller
{
    public function index()
    {
        return view('socket');
    }
    public function writemessage()
    {
        return view('writemessage');
    }
    public function sendMessage(Request $request){

        $redis = LRedis::connection();
        $input['chat'] = $request->input('message');
        Chat::create($input);
        $redis->publish('message', $request->input('message'));
        
        return redirect('writemessage');
    }
}
