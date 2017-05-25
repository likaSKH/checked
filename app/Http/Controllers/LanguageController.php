<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\input;
Use App;
use lang;

class LanguageController extends Controller
{
    public function language(Request $request){
        if($request['ge']!=""){
            $url=$request['ge'];
            $url=str_replace('en','ge',$url);
            $url=str_replace('/ge','', $url);
        }
        else{
            if ($request['en']!='')
            {
                $url=$request['en'];
                $url=str_replace('ge','en',$url);
                $url=str_replace('/en','', $url);

            }
        }
        return redirect($url);
    }
}
