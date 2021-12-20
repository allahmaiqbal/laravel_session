<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
  public function getData(Request $request){
      if ($request->session()->has('key')){
          return $request->session()->get('key');

      }else{
          return 'session have no value';
      }

  }
  public function storeData(Request $request){
    $request->session()->put('key','allahma iqbal');
        return 'have a value';

   

 
  }

  public function destryData(Request $request){
    $request->session()->forget('key');
        return 'Session value delete';

 

  }
}
