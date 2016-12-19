<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweeter;

class ApiController extends Controller
{
    public function postUser(Request $request){
        $secret = env('API_SECRET');

        if($request->secret != null && $request->twitterName != null && $request->secret == $secret){
            $twitterName = $request->twitterName;
            $user = Tweeter::where('twitterName', $twitterName)->first();

            if(count($user) == 0){
                //dd("entry doesn't exist yet");
                Tweeter::create([
                    'twitterName' => $twitterName
                ]);
            }

        }

    }
}
