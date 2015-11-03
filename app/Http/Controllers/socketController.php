<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use LRedis;
use Input;
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
        
        $redis->publish('message', $request->input('message'));
        return redirect('writemessage');
    }
}
