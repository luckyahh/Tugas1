<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class standingController extends Controller
{
    public function standings()
    {
        $request=Http::get('https://apiv3.apifootball.com/?action=get_standings&league_id=152&APIkey=833c70dcbe8ebb8fcbf2b15ab0888d22511ee29f24f7f2ee68d443d1d4d16334');
        $listdata=$request->json();
        return view ('standing' , ['listdata'=>$listdata]);
    }
}