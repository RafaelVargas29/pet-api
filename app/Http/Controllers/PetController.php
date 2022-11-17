<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException; 
use Illuminate\Support\Facades\Http;

class PetController extends Controller
{
    public function search(){

        $response = Http::get('https://api.thedogapi.com/v1/images/search');
        $data = json_decode($response->body());
        
        //dd($data);

        return view('/pets/show', ['data'=> $data[0]]);
    } 
    
}
