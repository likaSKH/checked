<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function language(Request $request){
        $url=$request->path();
        $seg=$request->segment(1);
        if ($request['ge']!=''){
            $url=str_replace('en','ge',$url);
        }
        else{
            if ($request['en']!='')
            {
            $url=str_replace('ge','en',$url);
        }}
        $url=str_replace('/lang','', $url);
        $url='/'.$url;
        return redirect($url);
    }
}
