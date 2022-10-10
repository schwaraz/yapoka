<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facade\Http;
use App\Models\post;
use DB;

class angket extends Controller
{
    
    public function angket(Request $REQUEST)
    {
        $query = new post;
        $query->soal=$REQUEST->soal;
        $query->type=$REQUEST->type;
        $response = $query->save();
        if($response){
               $message="Registered successfully";
        }
        else{
            $message="Registered failed";
        }
        return view('notifangket',compact('message'));        
    }
    public function pilihangket()
    {
        
}
}