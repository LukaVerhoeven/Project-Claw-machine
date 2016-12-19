<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweeter;

class HomeController extends Controller
{
    public function index(){

        $lastUsers = Tweeter::orderBy('created_at', 'desc')->paginate(20);

        return view('welcome', [
            'lastUsers' => $lastUsers
        ]);

    }
}
