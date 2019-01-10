<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boss;

class BossController extends Controller
{
    public function show($id){
        return view('Boss/show')->withBoss(Boss::with('hasManyComments')->find($id));
    }
}
